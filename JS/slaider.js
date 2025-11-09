const clicker_left = document.querySelector('.clicker_left');
const clicker_right = document.querySelector('.clicker_right');
const clicker_text = document.querySelector('.clicker_text');

clicker_text.addEventListener('click', (e) => {
    console.log('text обнаружен');
});

clicker_left.addEventListener('click', (e) => {
    console.log('Стрелка влево работает');
});

clicker_right.addEventListener('click', (e) => {
    console.log('Стрелка вправо работает');
})