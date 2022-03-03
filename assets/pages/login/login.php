<?php
session_start();
require_once('../../db/connect.php'); 
require_once('../../pages/login/loginback.php'); 
require_once('../../pages/login/registrationback.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/main.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="wrapper">
        <div class="login__bg _ibg">
            <img src="../../../assets/img/login-bg.jpg" alt="">
        </div>
        <main class="page _container">
            <section class="page__login login__page"> 
                <div class="login-page__container">
                    <form method="post" name="form" class="form">
                        <input name="login" type="text" placeholder="Ваш логин" class="form__item"/>
                        <input name="password" type="password" placeholder="Пароль" class="form__item"/>
                        <input name="login__button" type="submit" value="Войти" class="form__item-button"/>
                        <a href="../../pages/login/registration.php" class="registration__button">Зарегистрироваться</a>
                    </form>
                </div>                      
            </section>
        </main>      
    </div>
</body>
</html>