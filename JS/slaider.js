// Здесь логика слайдера. Оставлю много комментариев, чтобы всегда можно было разобраться в коде.
// 1. Получаем все элементы
const clicker_left = document.querySelector('.clicker_left');
const clicker_right = document.querySelector('.clicker_right');
const currentImage = document.getElementById('current-slide');
// НОВЫЙ ЭЛЕМЕНТ
const clicker_text = document.querySelector('.clicker_text');

// 2. Массив с путями к вашим изображениям (всего 2)
const images = [
    "IMG/about_us/image_one.svg",
    "IMG/about_us/image_two.jpg",
];

// 3. Инициализируем текущий индекс и общее количество
let currentImageIndex = 0;
const totalImages = images.length; // Это будет равно 2

// 4. Функция для обновления src И ТЕКСТА СЧЁТЧИКА
function updateImage() {
    // 4.1. Обновляем атрибут src
    currentImage.src = images[currentImageIndex];

    // 4.2. Обновляем текст счётчика
    // Индекс массива (currentImageIndex) начинается с 0, поэтому мы добавляем 1.
    // Например: (0 + 1) of 2 = 1 of 2
    // Например: (1 + 1) of 2 = 2 of 2
    const currentNumber = currentImageIndex + 1;
    clicker_text.textContent = `${currentNumber} of ${totalImages}`;
}

// 5. Обработчик клика вправо (Следующий слайд)
clicker_right.addEventListener('click', () => {
    // Зацикливание: 0 -> 1 -> 0
    currentImageIndex = (currentImageIndex + 1) % totalImages;
    updateImage();
});

// 6. Обработчик клика влево (Предыдущий слайд)
clicker_left.addEventListener('click', () => {
    // Зацикливание: 1 -> 0 -> 1
    currentImageIndex = (currentImageIndex - 1 + totalImages) % totalImages;
    updateImage();
});

// 7. Инициализация (показываем первый слайд и устанавливаем 1 of 2)
updateImage();
