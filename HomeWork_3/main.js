const userName = prompt("Введите Ваше имя:");

function greeting() {
    if (userName) {
        console.log("Привет, " + userName + "!");
    } else {
        console.error("Пожалуйста, введите ваше имя!");
    }
}

greeting();
