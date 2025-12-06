<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Game Website</title>
    <!-- 🧠 SEO и описание -->
    <meta
        name="description"
        content="Game Website — учебный проект с современным дизайном и интерактивными элементами."
    />
    <meta
        name="keywords"
        content="игры, сайт, HTML, CSS, учебный проект, web"
    />
    <meta name="author" content="Лев Гуляев"/>
    <!-- 🖼️ Иконка сайта -->
    <link rel="icon" type="image/x-icon" href="IMG/icon.png"/>
    <!-- 🎨 Стили -->
    <link rel="stylesheet" href="CSS/normalize.css"/>
    <link rel="stylesheet" href="CSS/main.css"/>
    <link rel="stylesheet" href="CSS/news.css"/>
    <!-- 📱 Цвет адресной строки (на мобильных) -->
    <meta name="theme-color" content="#0d0d0d"/>
    <!-- 📣 Open Graph (для превью в соцсетях и мессенджерах) -->
    <meta property="og:title" content="Game Website"/>
    <meta property="og:description" content="Учебный проект — Game Website"/>
    <meta property="og:type" content="website"/>
    <meta
        property="og:url"
        content="https://github.com/твой_ник/game-website"
    />
    <meta
        property="og:image"
        content="https://github.com/твой_ник/game-website/raw/main/images/preview.jpg"
    />
    <!-- 🐦 Twitter Card -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Game Website"/>
    <meta name="twitter:description" content="Учебный проект — Game Website"/>
    <meta
        name="twitter:image"
        content="https://github.com/твой_ник/game-website/raw/main/images/preview.jpg"
    />
</head>
<body>
<?php
require_once "templates/header.php";
?>
<div class="news_container">

    <div class="wrapper">
        <?php
        require_once "templates/email.php";
        ?>
    </div>
</div>
<?php
require_once "templates/footer.php";
?>
</body>
</html>