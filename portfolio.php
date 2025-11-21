<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="CSS/portfolio.css"/>

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
<div class="wrapper">
    <?php
    require_once "templates/header.php";
    ?>

    <section class="portfolio__section-one">
        <nav class="breadcrumbs poppins-regular" aria-label="Хлебные крошки"><span><a
                        href="/index.php">Home</a> &gt; </span><span><a
                        href="/portfolio.php">Portfolio</a></span></nav>
        <h1 class="portfolio__section-one--title poppins-semibold">Lorem Ipsum is simply dummy text of the printing
            and.</h1>
        <p class="portfolio__section-one--text poppins-medium">Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. </p>
        <div class="portfolio__section-one--wrapper">
            <div class="portfolio__section-one--wrapper-item">
                <img src="IMG/portfolio/user.svg" alt="user" width="55" height="55">
                <div>
                    <p class="poppins-bold">90+</p>
                    <p class="poppins-regular">Clients</p>
                </div>
            </div>
            <div class="portfolio__section-one--wrapper-item">
                <img src="IMG/portfolio/location.svg" alt="location" width="55" height="55">
                <div>
                    <p class="poppins-bold">30+</p>
                    <p class="poppins-regular">Countries</p>
                </div>
            </div>
            <div class="portfolio__section-one--wrapper-item">
                <img src="IMG/portfolio/server.svg" alt="server" width="55" height="55">
                <div>
                    <p class="poppins-bold">50+</p>
                    <p class="poppins-regular">Projects</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-two">
        <div class="section-two_wrapper">
        <video src="video/SpiderMan.mp4" controls muted poster="IMG/portfolio/heroVideo.svg" width="770" height="355"></video>
            <div class="section-two_wrapper-content">
                <h2 class="section-two-title poppins-bold">Lorem Ipsum is simply dummy text.</h2>
                <p class="section-two--text poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy.</p>
                <ul class="section-two__list">
                    <li><span class="poppins-regular section-two__list-item">Lorem Ipsum is simply</span></li>
                    <li><span class="poppins-regular section-two__list-item">Lorem Ipsum is simply</span></li>
                    <li><span class="poppins-regular section-two__list-item">Lorem Ipsum is simply</span></li>
                    <li><span class="poppins-regular section-two__list-item">Lorem Ipsum is simply</span></li>
                    <li><span class="poppins-regular section-two__list-item">Lorem Ipsum is simply</span></li>
                </ul>
            </div>
        </div>
    </section>


    <?php
    require_once "templates/footer.php";
    ?>
</div>

</body>
</html>