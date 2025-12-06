document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('slider');
    const sliderItems = document.querySelectorAll('.slider-item');
    const prevBtn = document.querySelector('.slider_btm-left');
    const nextBtn = document.querySelector('.slider_btm-right');
    const points = document.querySelectorAll('.point-item');
    const pointsContainer = document.querySelector('.slider-container_points');

    // Настройки слайдера
    const visibleItems = 3; // Одновременно видно 3 карточки
    let currentPosition = 0;
    const totalItems = sliderItems.length;

    // Рассчитываем количество точек
    const totalPoints = Math.ceil(totalItems / visibleItems);

    // Очищаем существующие точки и создаем новые
    pointsContainer.innerHTML = '';
    for (let i = 0; i < totalPoints; i++) {
        const point = document.createElement('div');
        point.className = 'point-item';
        if (i === 0) point.classList.add('slider-active');
        pointsContainer.appendChild(point);
    }

    // Обновляем ссылку на точки
    const newPoints = document.querySelectorAll('.point-item');

    // Устанавливаем начальную позицию
    updateSlider();

    // Функция обновления слайдера
    function updateSlider() {
        // Скрываем все элементы
        sliderItems.forEach(item => {
            item.style.display = 'none';
        });

        // Показываем только 3 элемента, начиная с currentPosition
        for (let i = 0; i < visibleItems; i++) {
            const index = currentPosition + i;
            if (index < totalItems) {
                sliderItems[index].style.display = 'flex';
            }
        }

        // Обновляем активную точку
        const pointIndex = Math.floor(currentPosition / visibleItems);
        newPoints.forEach((point, index) => {
            if (index === pointIndex) {
                point.classList.add('slider-active');
            } else {
                point.classList.remove('slider-active');
            }
        });

        // Блокировка кнопок на границах
        prevBtn.disabled = currentPosition === 0;
        nextBtn.disabled = currentPosition >= totalItems - visibleItems;

        // Визуальное изменение для заблокированных кнопок
        if (prevBtn.disabled) {
            prevBtn.style.opacity = '0.5';
            prevBtn.style.cursor = 'not-allowed';
        } else {
            prevBtn.style.opacity = '1';
            prevBtn.style.cursor = 'pointer';
        }

        if (nextBtn.disabled) {
            nextBtn.style.opacity = '0.5';
            nextBtn.style.cursor = 'not-allowed';
        } else {
            nextBtn.style.opacity = '1';
            nextBtn.style.cursor = 'pointer';
        }
    }

    // Обработчик для кнопки "назад"
    prevBtn.addEventListener('click', function() {
        if (currentPosition > 0) {
            currentPosition -= visibleItems;
            if (currentPosition < 0) currentPosition = 0;
            updateSlider();
        }
    });

    // Обработчик для кнопки "вперед"
    nextBtn.addEventListener('click', function() {
        if (currentPosition < totalItems - visibleItems) {
            currentPosition += visibleItems;
            updateSlider();
        }
    });

    // Обработчики для точек
    newPoints.forEach((point, index) => {
        point.addEventListener('click', function() {
            currentPosition = index * visibleItems;
            updateSlider();
        });
    });

    // Добавляем CSS для плавной анимации переключения
    const style = document.createElement('style');
    style.textContent = `
        .slider-item {
            transition: transform 0.5s ease, opacity 0.5s ease;
        }
    `;
    document.head.appendChild(style);
});