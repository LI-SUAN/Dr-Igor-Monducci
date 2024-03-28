<!-- 调用CSS -->
<?php
echo '<link rel="stylesheet" href="导航栏\导航栏.css" />';
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
}

// 调用生成导航栏的函数
generateNavbar();
?>