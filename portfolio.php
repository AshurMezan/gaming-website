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
<!--<div class="wrapper">-->
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
    <div class="container">
        <div class="section-two_wrapper">
            <video src="video/SpiderMan.mp4" controls muted poster="IMG/portfolio/heroVideo.svg" width="770"
                   height="355"></video>
            <div class="section-two_wrapper-content">
                <h2 class="section-two-title poppins-bold">Lorem Ipsum is simply dummy text.</h2>
                <p class="section-two--text poppins-regular">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.Lorem Ipsum is simply dummy.</p>
                <ul class="section-two__list">
                    <li><span class="poppins-regular section-two__list-item">Lorem Ipsum is simply</span></li>
                    <li><span class="poppins-regular section-two__list-item">Lorem Ipsum is simply</span></li>
                    <li><span class="poppins-regular section-two__list-item">Lorem Ipsum is simply</span></li>
                    <li><span class="poppins-regular section-two__list-item">Lorem Ipsum is simply</span></li>
                    <li><span class="poppins-regular section-two__list-item">Lorem Ipsum is simply</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section-three">
    <div class="container">
        <div class="section-three_wrapper-content">
            <div class="section-three_content">
                <h3 class="poppins-medium">Lorem Ipsum is simply dummy text dummy text </h3>
                <p class="poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries,</p>
                <p class="poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. </p>
                <button class="portfolio-btn poppins-regular">Read more</button>
            </div>
            <div class="section-three_IMG">
                <img src="IMG/about_us/image_one.svg" alt="картинка" width="600" height="540">
            </div>
        </div>
    </div>
</section>
<section class="section-four">
    <div class="container">
        <div class="section-four_wrapper-content">
            <div class="section-four_IMG">
                <img src="IMG/portfolio/fairy.svg" alt="картинка" width="600" height="540">
            </div>
            <div class="section-four_content">
                <h4 class="poppins-medium">Lorem Ipsum is simply dummy text dummy text</h4>
                <p class="poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries,</p>
                <p class="poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. </p>
                <button class="portfolio-btn">Read more</button>
            </div>
        </div>
    </div>
</section>
<section class="section-five">
    <div class="container">
        <div class="section-five_wrapper-content">
            <div class="section-five_content">
                <h5 class="poppins-medium">Lorem Ipsum is simply dummy text dummy text</h5>
                <p class="poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries,</p>
                <p class="poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. </p>
                <button class="portfolio-btn">Read more</button>
            </div>
            <div class="section-five_IMG">
                <img src="IMG/portfolio/crisys.png" alt="картинка" width="600" height="540">
            </div>
        </div>
    </div>
</section>
<!--</div>-->
<section class="portfolio-reviews">
    <h6 class="portfolio-reviews_title poppins-medium">Trusted by Thousands of<br>Happy Customer</h6>
    <p class="portfolio-reviews_text poppins-regular">Lorem Ipsum is simply dummy text of the printing and
        typesetting<br>industry. Lorem Ipsum is simply dummy.</p>
    <div class="slider-container">
        <div class="slider-wrapper poppins-regular" id="slider">
            <div class="slider-item">
                <div class="slider-item_wrapper">
                    <div>
                        <img src="IMG/portfolio/slayder/icon_3.svg" alt="иконка">
                        <p class="poppins-medium">Viezh Robert<br><span class="poppins-regular">Warsaw, Poland</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="slider-item">
                 <div class="slider-item_wrapper">
                    <div>
                        <img src="IMG/portfolio/slayder/icon_1.svg" alt="иконка">
                        <p class="poppins-medium">Yessica Christy<br><span class="poppins-regular">Shanxi, China</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="slider-item">
                 <div class="slider-item_wrapper">
                    <div>
                        <img src="IMG/portfolio/slayder/icon_2.svg" alt="иконка">
                        <p class="poppins-medium">Kim Young Jou<br><span class="poppins-regular">Seoul, South Korea</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="slider-item">
                 <div class="slider-item_wrapper">
                    <div>
                        <img width="50" height="50" src="IMG/portfolio/slayder/icon_6.png" alt="иконка">
                        <p class="poppins-medium">Rosetta Christopher<br><span class="poppins-regular">London, UK</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="slider-item">
                 <div class="slider-item_wrapper">
                    <div>
                        <img  width="50" height="50" src="IMG/portfolio/slayder/icon_5.png" alt="иконка">
                        <p class="poppins-medium">Tom Sawyer<br><span class="poppins-regular">St. Petersburg, USA</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="slider-item">
                 <div class="slider-item_wrapper">
                    <div>
                        <img width="50" height="50" src="IMG/portfolio/slayder/icon_7.png" alt="иконка">
                        <p class="poppins-medium">Bruce Wayne<br><span class="poppins-regular">Gotham, USA</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="slider-item">
                 <div class="slider-item_wrapper">
                    <div>
                        <img width="50" height="50" src="IMG/portfolio/slayder/icon_8.png" alt="иконка">
                        <p class="poppins-medium">Jessica Alba<br><span class="poppins-regular">Los Angeles, USA</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="slider-item">
                <div class="slider-item_wrapper">
                    <div>
                        <img  width="50" height="50" src="IMG/portfolio/slayder/icon_9.png" alt="иконка">
                        <p class="poppins-medium">David Beckham<br><span class="poppins-regular">Madrid, Spai</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="slider-item">
                 <div class="slider-item_wrapper">
                    <div>
                        <img width="50" height="50" src="IMG/portfolio/slayder/icon_10.png" alt="иконка">
                        <p class="poppins-medium">Emilia Clarke<br><span class="poppins-regular">Belfast, Ireland</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="slider-item">
                 <div class="slider-item_wrapper">
                    <div>
                        <img width="50" height="50" src="IMG/portfolio/slayder/icon_11.png" alt="иконка">
                        <p class="poppins-medium">Leo Messi<br><span class="poppins-regular">Paris, France</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="slider-item">
                 <div class="slider-item_wrapper">
                    <div>
                        <img width="50" height="50" src="IMG/portfolio/slayder/icon_13.png" alt="иконка">
                        <p>Serena Williams<br><span class="poppins-regular">New York, USA</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="slider-item">
                 <div class="slider-item_wrapper">
                    <div>
                        <img width="50" height="50" src="IMG/portfolio/slayder/icon_3.svg" alt="иконка">
                        <p>Rory Gilmore<br><span class="poppins-regular">Stars Hollow, USA</span></p>
                    </div>
                    <div>
                        <p>4.5</p>
                        <img src="IMG/portfolio/slayder/star.svg" alt="иконка">
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
        </div>
        <div class="slider-container_for_button-and-points">
            <div class="slider-container_points">
                <div class="point-item"></div>
                <div class="point-item"></div>
                <div class="point-item"></div>
                <div class="point-item"></div>
            </div>
            <div class="slider-container_button">
                <button></button>
                <button></button>
            </div>
        </div>


    </div>

</section>
<div class="wrapper">
    <?php
    require_once "templates/email.php";
    ?>
</div>
<?php
require_once "templates/footer.php";
?>
</body>
</html>