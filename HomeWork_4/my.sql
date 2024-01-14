
-- Создание таблицы
CREATE TABLE students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    address VARCHAR(255) NOT NULL
);

-- Добавление данных
INSERT INTO students (id, name, age, address) VALUES
(1, 'Иван', 22, 'Москва'),
(2, 'Мария', 25, 'Санкт-Петербург'),
(3, 'Александр', 28, 'Москва'),
(4, 'Елена', 20, 'Казань'),
(5, 'Дмитрий', 30, 'Москва'),
(6, 'Ольга', 19, 'Санкт-Петербург'),
(7, 'Павел', 26, 'Москва'),
(8, 'Анна', 21, 'Казань'),
(9, 'Сергей', 29, 'Санкт-Петербург'),
(10, 'Екатерина', 18, 'Москва');


-- Запрос на получение имен одногруппников
SELECT name
FROM students
WHERE address = 'Москва' AND age >= 18 AND age < 30;

