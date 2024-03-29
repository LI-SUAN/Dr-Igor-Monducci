<!-- 调用CSS -->
<?php
echo '<link rel="stylesheet" href="全局元素\导航栏.css" />';
?>





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