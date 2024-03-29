<?php
// 连接到 MySQL 数据库（用于注册）
$conn_register = mysqli_connect("localhost", "user_register", "0000", "Dr_Igor_Monducci_login");

// 用户注册
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 验证邮箱是否有效
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // 将用户账户信息插入到 users_accounts_insert 表中
        $query = "INSERT INTO users_accounts_insert (username, email) VALUES ('$username', '$email')";
        mysqli_query($conn_register, $query);

        // 获取新插入的用户ID
        $user_id = mysqli_insert_id($conn_register);

        // 对密码进行哈希处理
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // 将哈希密码存储到 users_passwords_insert 表中
        $query = "INSERT INTO users_passwords_insert (user_id, password_hash) VALUES ('$user_id', '$hashed_password')";
        mysqli_query($conn_register, $query);

        echo "用户注册成功！";
    } else {
        echo "无效的邮箱地址！";
    }
}

// 连接到 MySQL 数据库（用于登录）
$conn_login = mysqli_connect("localhost", "user_login", "0000", "Dr_Igor_Monducci_login");

// 用户登录
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 对密码进行哈希处理
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 查询用户密码哈希
    $query = "SELECT ua.id, up.password_hash FROM users_accounts_login ua JOIN users_passwords_login up ON ua.id = up.user_id WHERE ua.username = '$username'";
    $result = mysqli_query($conn_login, $query);
    $row = mysqli_fetch_assoc($result);

    if($row) {
        // 验证密码是否匹配
        if(password_verify($password, $row['password_hash'])) {
            // 标记登录尝试为成功
            $query = "INSERT INTO login_attempts (username, password_attempt_hash, is_successful) VALUES ('$username', '$hashed_password', 1)";
            mysqli_query($conn, $query);

            echo "用户登录成功！";
        } else {
            // 标记登录尝试为失败
            $query = "INSERT INTO login_attempts (username, password_attempt_hash, is_successful) VALUES ('$username', '$hashed_password', 0)";
            mysqli_query($conn, $query);

            echo "密码错误！";
        }
    } else {
        echo "用户不存在！";
    }
}
?>