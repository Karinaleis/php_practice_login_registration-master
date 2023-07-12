<?php
    session_start();

    if(isset($_SESSION['success'])) {
        $success = $_SESSION['success'];
        unset($_SESSION['success']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($success)): ?>
        <p style="color: green;"><?= $success ?></p>
    <?php endif; ?>
    <ul>
        <?php if (!isset($_SESSION['user_id'])): ?>
            <li><a href="login.php">Войти</a></li>
            <li><a href="registration.php">Регистрация</a></li>
        <?php else: ?>
            <li><a href="admin.php">Админ панель</a></li>
            <li><a href="cabinet.php">Личный кабинет</a></li>
            <li><a href="logout.php">Выйти</a></li>
        <?php endif; ?>
    </ul>
</body>
</html>
