function greeting() {
    var userName = prompt("Введите Ваше имя:");
    if (userName) {
        console.log("Привет, " + userName + "!");
    } else {
        console.error("Пожалуйста, введите ваше имя!");
    }
}

greeting();
