<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подписка на рассылку</title>
</head>
<body>
    <h2>Форма подписки на рассылку</h2>
    <form action="" method="post">
        <label for="email">Электронная почта:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Подписаться">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));

    if (empty($email)) {
        die("Поле электронной почты должно быть заполнено.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Некорректный формат электронной почты.");
    }

    echo "Вы успешно подписаны на рассылку!";
}
?>

</body>
</html>
