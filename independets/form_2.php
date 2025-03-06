<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обработка формы</title>
</head>
<body>
    <h1>Обработка формы</h1>
    <form action="" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="email">Почта:</label><br>
        <input type="email" id="email" email="email" required>
        <br>
        
        <label for="message">Сообщение:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <input type="submit" value="Отправить">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($message)) {
        die("Все поля должны быть заполнены.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Некорректный формат электронной почты.");
    }

    if (strlen($message) < 10) {
        die("Сообщение должно содержать не менее 10 символов.");
    }

    echo "Отправлено!";
}
?>
</body>
</html>