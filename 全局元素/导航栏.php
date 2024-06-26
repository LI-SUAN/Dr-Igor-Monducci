<style>
    /* 设置导航栏样式 */
    .navbar {
        position: relative; /* 设置相对定位，以便对按钮进行绝对定位 */
        background: linear-gradient(to right, #ffffff, #cccccc); /* 使用渐变背景色 */
        overflow: hidden; /* 隐藏溢出内容 */
        display: flex; /* 使用 Flexbox 布局 */
        justify-content: center; /* 水平居中排列子元素 */
    }

    /* 设置导航链接样式 */
    .navbar a {
        position: relative; /* 设置相对定位，以便对登录按钮进行绝对定位 */
        display: block; /* 将链接元素转换为块级元素 */
        color: #ffffff; /* 设置文字颜色 */
        text-align: center; /* 文字居中对齐 */
        padding: 14px 10px; /* 设置内边距 */
        text-decoration: none; /* 取消下划线 */
        background: linear-gradient(to right, #4A90E2, #4169E1); /* 使用渐变背景色 */
        margin: 0 10px; /* 设置左右间距 */
    }

    /* 鼠标悬停时导航链接样式 */
    .navbar a:hover {
        background: linear-gradient(to right, #4169E1, #4A90E2); /* 改变背景色 */
    }

    /* 在小屏幕上的响应式布局 */
    @media screen and (max-width: 600px) {
        .navbar {
            flex-direction: column; /* 在小屏幕上垂直排列子元素 */
            align-items: center; /* 垂直居中排列子元素 */
        }
        .navbar a {
            margin: 5px 0; /* 设置上下间距 */
        }
    }

    /* 登录按钮容器样式 */
    .login-button-container {
        position: absolute; /* 绝对定位 */
        top: 10px; /* 距离顶部的距离 */
        right: 10px; /* 距离右侧的距离 */
    }

    /* 登录按钮样式 */
    .login-button {
        position: absolute; /* 绝对定位 */
        top: 50%; /* 垂直居中 */
        transform: translateY(-50%); /* 垂直居中 */
        right: 10px; /* 距离右侧的距离 */
        background-color: #FFA500; /* 按钮背景色 */
        color: #ffffff; /* 按钮文字颜色 */
        padding: 10px 20px; /* 按钮内边距 */
        border: none; /* 移除边框 */
        border-radius: 5px; /* 设置边框圆角 */
        cursor: pointer; /* 鼠标悬停时显示手型光标 */
    }

    /* 鼠标悬停时登录按钮样式 */
    .login-button:hover {
        background-color: #FF8C00; /* 改变背景色 */
    }
</style>


















<?php
function generateNavbar() {
    $links = [
        ['text' => 'Home Page', 'url' => 'index.php'],
        ['text' => 'Curriculum vitae', 'url' => 'CurriculumVitae.php'],
        ['text' => '-', 'url' => '#'],
        ['text' => '-', 'url' => '#']
    ];

    echo '<div class="navbar">';
    foreach ($links as $link) {
        echo '<a href="' . $link['url'] . '">' . $link['text'] . '</a>';
    }
    echo '</div>';

    // 添加登录按钮，单独定位在右上角
    echo '<div class="login-button-container">';
    echo '<a href="login.php" class="login-button">login</a>';
    echo '</div>';
}

// 调用生成导航栏的函数
generateNavbar();
?>