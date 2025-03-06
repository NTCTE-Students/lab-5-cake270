<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
</head>
<body>
    <h2>Форма входа</h2>
    <form action="" method="post">
        <label for="username">Имя пользователя:</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Войти">
    </form>
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($username) || empty($password)) {
        die("Все поля должны быть заполнены.");
    }

    if (strlen($username) < 4) {
        die("Имя пользователя должно содержать минимум 4 символа.");
    }

    echo "Успешно!";
}
?>

</body>
</html>
