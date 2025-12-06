document.addEventListener('DOMContentLoaded', function () {
    // Проверяем, заканчивается ли текущий URL на portfolio.php
    if (window.location.pathname.endsWith('portfolio.php') ||
        window.location.pathname.endsWith('/portfolio') ||     // на случай ЧПУ
        window.location.href.includes('/portfolio.php')) {

        // Находим элемент (можно несколько)
        const emailBlocks = document.querySelectorAll('.email_block');

        emailBlocks.forEach(block => {
            block.style.backgroundColor = '#3c3a3a';
        });
    }
});