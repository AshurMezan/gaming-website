const btn = document.querySelector(".email__button");
btn.addEventListener("click", () => {
    const email = document.getElementById("email").value.trim();

    if (!email || !email.includes('@')) {
        alert("В вашем адресе нет символа @");
    } else if (!email || !email.includes('.')) {
        alert("В вашем адресе нет символа .");
    } else {
        alert("Всё работает: " + email);
    }
});