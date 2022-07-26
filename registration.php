<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form action="./vendor/signup.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Email</label>
        <input type="email" name="email" placeholder="Введите email">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="password" name="confirm_password" placeholder="Подтвердите пароль">
        <button type="submit" class="login_submit_btn">Войти</button>
        <p>
            Есть аккаунт - <a href="./index.php">войти</a>
        </p>
        
            <?php
                if($_SESSION['message']){
                    echo '<p class="msg">' .  $_SESSION['message'] . '</p>';
                }
                
                unset($_SESSION['message']);
             ?>
        </p>
    </form>
</body>
</html>