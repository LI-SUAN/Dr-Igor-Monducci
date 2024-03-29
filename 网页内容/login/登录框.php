<!-- 调用CSS -->
<?php
echo '<link rel="stylesheet" href="网页内容\login\登录框.css" />';
?>





<div id="login-container">
    <div class="options">
        <button id="login-btn" onclick="toggleForm('login')">登录</button>
        <button id="register-btn" onclick="toggleForm('register')">注册</button>
    </div>
    
    <div id="login-form" class="form active">
        <h2>用户登录</h2>
        <form method="post">
            <input type="text" name="username" placeholder="用户名" required><br>
            <input type="password" name="password" placeholder="密码" required><br>
            <input type="submit" name="login" value="登录">
        </form>
    </div>
    
    <div id="register-form" class="form">
        <h2>用户注册</h2>
        <form method="post">
            <input type="text" name="username" placeholder="用户名" required><br>
            <input type="email" name="email" placeholder="邮箱" required><br>
            <input type="password" name="password" placeholder="密码" required><br>
            <input type="submit" name="register" value="注册">
        </form>
    </div>
</div>

<script src="网页内容\login\登录框.js"></script>

