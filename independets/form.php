<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <h2>Форма регистрации</h2>
    <form action="" method="post">
        <label for="username">Имя пользователя:</label><br>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br>
        
        <label for="confirm_password">Подтверждение пароля:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        
        <input type="submit" value="Зарегистрироваться">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));

    if (empty($username) || empty($password) || empty($confirm_password)) {
        die("Все поля должны быть заполнены.");
    }

    if ($password !== $confirm_password) {
        die("Пароли не совпадают.");
    }

    echo "Всё хорошо!!!";
}
?>

</body>
</html>
