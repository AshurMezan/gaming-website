<!DOCTYPE html>
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
    <header style="padding-top: 50px" class="container">
        <span class="logo poppins-extrabold">logo</span>
        <nav>
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about.php">About us</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">News</a></li>
                <li class="btn"><a href="/contacts.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="hero container">
        <div class="hero--info">
            <h2 class="poppins-bold">3D game Dev</h2>
            <h1 class="poppins-bold ">Work that we<br/>produce for our<br/>clients</h1>
            <p class="poppins-medium">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard.
            </p>
            <button class="btn poppins-medium">Get more details</button>
        </div>
        <img src="IMG/jouistickV2.svg" alt="jouistick"/>
    </div>

    <!--      Секция с играми Currently Trending Games-->
    <div class="container trending">
        <div class="wrapper_for_title_in_trending">
            <h3 class="poppins-bold">Currently Trending Games</h3>
            <a href="#" class="see-all">SEE ALL</a>
        </div>

        <div class="games">
            <div class="block">
                <img src="IMG/trending/Rectangle_one.png" alt="Популярная игра">
                <span><img src="IMG/trending/fire.svg" alt="">40 Followers</span>
            </div>
            <div class="block">
                <img src="IMG/trending/Rectangle_two.png" alt="Популярная игра">
                <span><img src="IMG/trending/fire.svg" alt="">40 Followers</span>
            </div>
            <div class="block">
                <img src="IMG/trending/Rectangle_three.png" alt="Популярная игра">
                <span><img src="IMG/trending/fire.svg" alt="">40 Followers</span>
            </div>
            <div class="block">
                <img src="IMG/trending/Rectangle_four.png" alt="Популярная игра">
                <span><img src="IMG/trending/fire.svg" alt="">40 Followers</span>
            </div>
        </div>
    </div>
    <!--      Секция с заголовком -->
    <div class="container big-text">
        <h3 class="poppins-semibold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
    </div>
    <!--   Секция с банером   -->
    <div class="container banner banner_img">
        <h3 class="poppins-semibold">Lorem Ipsum</h3>
        <p class="poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
            Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        <img class="banner_img" src="IMG/spider/Rectangle.svg" alt="Иллюстрация с изображением Человека-паука"/>
    </div>
</div>
<div class="features">
    <div class="container">
        <h3 class="poppins-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
        <p class="poppins-regular features_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        <div class="info">
            <div class="block">
                <img src="IMG/info/phon.svg" alt="Телефон">
                <p class="poppins-regular">Mobile Game Development</p>
                <!-- Статическая стрелка (всегда видна по умолчанию) -->
                <img class="arrow static" src="IMG/info/arrow.svg" alt="Указатель">
                <!-- Анимированная стрелка (скрыта, появляется при hover) -->
                <img class="arrow animated" src="IMG/info/arrow.svg" alt="Указатель анимированный">
            </div>
            <div class="block">
                <img src="IMG/info/pc.svg" alt="ПК">
                <p class="poppins-regular">PC Game Development</p>
                <!-- Статическая стрелка (всегда видна по умолчанию) -->
                <img class="arrow static" src="IMG/info/arrow.svg" alt="Указатель">
                <!-- Анимированная стрелка (скрыта, появляется при hover) -->
                <img class="arrow animated" src="IMG/info/arrow.svg" alt="Указатель анимированный">
            </div>
            <div class="block">
                <img src="IMG/info/ps.svg" alt="PS">
                <p class="poppins-regular">PS4 Game Development</p>
                <!-- Статическая стрелка (всегда видна по умолчанию) -->
                <img class="arrow static" src="IMG/info/arrow.svg" alt="Указатель">
                <!-- Анимированная стрелка (скрыта, появляется при hover) -->
                <img class="arrow animated" src="IMG/info/arrow.svg" alt="Указатель анимированный">
            </div>
            <div class="block">
                <img src="IMG/info/vr.svg" alt="VR">
                <p class="poppins-regular">AR/VR Solutions</p>
                <!-- Статическая стрелка (всегда видна по умолчанию) -->
                <img class="arrow static" src="IMG/info/arrow.svg" alt="Указатель">
                <!-- Анимированная стрелка (скрыта, появляется при hover) -->
                <img class="arrow animated" src="IMG/info/arrow.svg" alt="Указатель анимированный">
            </div>
            <div class="block">
                <img src="IMG/info/AR.svg" alt="VR">
                <p class="poppins-regular">AR/ VR design</p>
                <!-- Статическая стрелка (всегда видна по умолчанию) -->
                <img class="arrow static" src="IMG/info/arrow.svg" alt="Указатель">
                <!-- Анимированная стрелка (скрыта, появляется при hover) -->
                <img class="arrow animated" src="IMG/info/arrow.svg" alt="Указатель анимированный">
            </div>
            <div class="block">
                <img src="IMG/info/models.svg" alt="3d-models">
                <p class="poppins-regular">AR/ VR design</p>
                <!-- Статическая стрелка (всегда видна по умолчанию) -->
                <img class="arrow static" src="IMG/info/arrow.svg" alt="Указатель">
                <!-- Анимированная стрелка (скрыта, появляется при hover) -->
                <img class="arrow animated" src="IMG/info/arrow.svg" alt="Указатель анимированный">
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="container projects">
        <h3 class="poppins-bold">Our Recent Projects</h3>
        <p class="poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <div class="projects_flexbox">
            <div class="flexbox_item">
                <img src="IMG/projects/imag_one.svg" alt="Изображение">
            </div>
            <div class="flexbox_item">
                <img src="IMG/projects/imag_two.svg" alt="Изображение">
            </div>
            <div class="flexbox_item">
                <img src="IMG/projects/image_three.svg" alt="Изображение">
            </div>
            <div class="flexbox_item">
                <img src="IMG/projects/image_four.svg" alt="Изображение">
            </div>
            <div class="flexbox_item">
                <img src="IMG/projects/image_five.svg" alt="Изображение">
            </div>
            <div class="flexbox_item">
                <img src="IMG/projects/image_six.svg" alt="Изображение">
            </div>
        </div>
        <a class="projects_button" href="#">SEE ALL</a>
    </div>
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
<footer class="block">
    <div class="container">
        <div class="footer_logo">
            <p class=" poppins-extrabold">logo</p>
            <p class="poppins-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <p class="poppins-regular">@Logo</p>
        </div>
        <div class="footer_about poppins-regular">
            <p><a href="#">About us</a></p>
            <p><a href="#">Zeux</a></p>
            <p><a href="#">Portfolio</a></p>
            <p><a href="#">Careers</a></p>
            <p><a href="#">Contact us</a></p>
        </div>
        <div class="footer_contacts poppins-regular">
            <p>Contact us</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <p>+908 89097 890</p>
        </div>
        <div class="footer_social">
            <a href="#"><img src="IMG/footer/fasebook.svg" alt=""></a>
            <a href="#"><img src="IMG/footer/instagram.svg" alt=""></a>
            <a href="#"><img src="IMG/footer/twitter.svg" alt=""></a>
            <a href="#"><img src="IMG/footer/in.svg" alt=""></a>
        </div>
    </div>
    <div class="footer_end poppins-regular">
        <p>Copyright ® 2021 Lorem All rights Rcerved</p>
    </div>
</footer>
<script src="JS/main.js"></script>
</body>
</html>
