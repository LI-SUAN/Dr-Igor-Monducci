<!DOCTYPE html>
<html lang="zh-CN">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link rel="stylesheet" href="全局元素\style.css" />
        <style>
            /* 登录容器样式 */
            #login-container {
                width: 300px; /* 设置宽度 */
                background-color: #fff; /* 设置背景颜色 */
                padding: 20px; /* 设置内边距 */
                border-radius: 8px; /* 设置边框圆角 */
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* 设置阴影效果 */
            }

            /* 登录容器内标题样式 */
            #login-container h2 {
                margin-top: 0; /* 清除标题默认上边距 */
            }

            /* 表单样式 */
            .form {
                display: none; /* 隐藏表单 */
            }

            /* 激活状态样式 */
            .active {
                display: block; /* 显示激活状态元素 */
            }

            /* 选项样式 */
            .options {
                display: flex; /* 使用 Flex 布局 */
                justify-content: space-between; /* 两端对齐 */
                margin-bottom: 15px; /* 设置底部边距 */
            }
        </style>
    </head>

    <body>
        <!-- 导航栏 -->
        <?php include '全局元素\导航栏.php'; ?>

















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

        <script>
            function toggleForm(formName) {
                var forms = document.getElementsByClassName("form");
                for (var i = 0; i < forms.length; i++) {
                    forms[i].classList.remove("active");
                }
                document.getElementById(formName + "-form").classList.add("active");
                
                // 阻止表单默认提交行为
                event.preventDefault();
            }
        </script>



















        <!-- 页脚 -->
        <?php include '全局元素\页脚.php'; ?>

    </body>

</html>


