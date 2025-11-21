<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <!-- 🎨 Стили -->
    <link rel="stylesheet" href="CSS/normalize.css"/>
    <link rel="stylesheet" href="CSS/main.css"/>
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

    <!-- 📱 Цвет адресной строки (на мобильных) -->
    <meta name="theme-color" content="#0d0d0d"/>

    <!-- 📣 Open Graph (для превью в соцсетях и мессенджерах) -->
    <meta property="og:title" content="Game Website"/>
    <meta property="og:description" content="Учебный проект — Game Website"/>
    <meta property="og:type" content="website"/>
    <meta
            property="og:url"
            content="https://github.com/AshurMezan/gaming-website"
    />
    <meta
            property="og:image"
            content="https://github.com/AshurMezan/game-website/raw/main/images/preview.jpg"
    />

    <!-- 🐦 Twitter Card -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Game Website"/>
    <meta name="twitter:description" content="Учебный проект — Game Website"/>
    <meta
            name="twitter:image"
            content="https://github.com/AshurMezan/game-website/raw/main/images/preview.jpg"
    />
</head>
<body>
<div class="wrapper">
    <?php
    require_once "templates/header.php";
    ?>
    <div class="hero_about container">
        <div class="hero_about-info">
            <nav class="breadcrumbs poppins-regular" aria-label="Хлебные крошки"><span><a href="/index.php">Home</a> &gt; </span><span><a
                    href="/about.php">About us</a></span></nav>
            <h1 class="hero_about-title poppins-bold">Lorem Ipsum is simply dummy text of the printing and.</h1>
            <p class="hero_about-text poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <button class="info_btn">Get in touch</button>
        </div>
        <div class="hero_about-wrapper">
            <img id="current-slide" src="IMG/about_us/image_one.svg" alt="Бар">
            <div class="wrapper_clicker">
                <div class="clicker_left">
                    <img src="IMG/about_us/arrow_in_left.svg" alt="стрелка вправо" width="18"
                                               height="18">
                </div>
                <div class="clicker_text">1 of 2</div>
                <div class="clicker_right">
                    <img src="IMG/about_us/arrow_in_right.svg" alt="стрелка влево" width="18"
                                                height="18">
                </div>
            </div>
        </div>

    </div>
    <div class="container work">
        <h2 class="work_title poppins-semibold">Why work with us</h2>
        <div class="work_flexbox poppins-regular">
            <div class="work_flexbox-item">
                <span class="badge purple poppins-regular">Lorem ipsum</span>
                <h3 class="poppins-semibold">Lorem Ipsum</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="work_flexbox-item">
                <span class="badge brawn poppins-regular">Lorem ipsum</span>
                <h3 class="poppins-semibold">Lorem Ipsum</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="work_flexbox-item">
                <span class="badge green poppins-regular">Lorem ipsum</span>
                <h3 class="poppins-semibold">Lorem Ipsum</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,</p>
            </div>
        </div>
    </div>

    <section class="enchantress">
        <div class="container">
            <div class="enchantress_flexbox">
                <img src="IMG/about_us/enchantress.svg" alt="Волшебница">
                <div class="enchantress_wrapper">
                    <span class="poppins-medium">Lorem ipsum</span>
                    <h4 class="poppins-semibold">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. </h4>
                    <p class="poppins-regular">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="container">
            <h5 class="team_title poppins-semibold">Our Team</h5>
            <div class="team_flexbox">
                <div class="team_flexbox-item">
                    <img src="IMG/about_us/team_one.svg" alt="">
                    <h6>John peter</h6>
                    <span>COO</span>
                </div>
                <div class="team_flexbox-item">
                    <img src="IMG/about_us/team_two.svg" alt="">
                    <h6>John peter</h6>
                    <span>COO</span>
                </div>
                <div class="team_flexbox-item">
                    <img src="IMG/about_us/team_three.svg" alt="">
                    <h6>John peter</h6>
                    <span>COO</span>
                </div>
                <div class="team_flexbox-item">
                    <img src="IMG/about_us/team_fo.svg" alt="">
                    <h6 class="poppins-semibold">John peter</h6>
                    <span class="poppins-regular">COO</span>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_form">
        <div class="wrapper">
            <div class="container email">
                <h3 class="email__title poppins-semibold">Lorem Ipsum</h3>
                <p class="email__text poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.</p>
                <div class="email_block">
                    <div>
                        <h4 class="email__block-title poppins-medium">Stay in the loop</h4>
                        <p class="email__block-text poppins-regular">Subscribe to receive the latest news and updates about TDA.
                            We promise not to spam you!</p>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input maxlength="30" id="email" class="email__input" type="email" placeholder="Enter email address">
                        <button class="email__button">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once "templates/footer.php";
?>
<script src="JS/slaider.js"></script>
</body>
</html>
