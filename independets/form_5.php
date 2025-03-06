<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма бронирования</title>
</head>
<body>
    <h2>Форма бронирования</h2>
    <form action="" method="post">
        <label for="name">Имя:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="date">Дата бронирования:</label><br>
        <input type="date" id="date" name="date" required><br>

        <label for="time">Время бронирования:</label><br>
        <input type="time" id="time" name="time" required><br><br>

        <input type="submit" value="Забронировать">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $date = htmlspecialchars(trim($_POST['date']));
    $time = htmlspecialchars(trim($_POST['time']));

    if (empty($name) || empty($date) || empty($time)) {
        die("Все поля должны быть заполнены.");
    }

    if (!DateTime::createFromFormat('Y-m-d', $date)) {
        die("Некорректный формат даты.");
    }

    if (!DateTime::createFromFormat('H:i', $time)) {
        die("Некорректный формат времени.");
    }

    echo "Успешно!";
}
?>

</body>
</html>
