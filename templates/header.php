<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header style="padding-top: 50px" class="container">
    <span class="logo poppins-extrabold">logo</span>
    <nav>
        <ul>
            <li class="<?= $current_page == 'index.php' ? 'active' : '' ?>">
                <a href="/">Home</a>
            </li>

            <li class="<?= $current_page == 'about.php' ? 'active' : '' ?>">
                <a href="/about.php">About us</a>
            </li>

            <li class="<?= $current_page == 'portfolio.php' ? 'active' : '' ?>">
                <a href="/portfolio.php">Portfolio</a>
            </li>

            <li>
                <a href="#">News</a>
            </li>

            <li class="btn">
                <a href="/contacts.php">Contact</a>
            </li>
        </ul>
    </nav>
</header>
