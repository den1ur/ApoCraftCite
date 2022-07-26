<?php
    session_start();
    require_once './connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    if ($password === $confirm_password){

        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NUll, '$login', '$email', '$password'");
        $_SESSION['message'] = 'регистрация прошла успешно';
        header('Location: ../register.php');

    } else{
        $_SESSION['message'] = 'Пароли не совпадают!!!';
        header('Location: ../register.php');
    }