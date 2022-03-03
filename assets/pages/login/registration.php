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
    <title>Регистрация</title>
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
                        <input name="lastName" type="text" placeholder="Фамилия" class="form__item"/>
                        <input name="firstName" type="text" placeholder="Имя" class="form__item"/>                        
                        <input name="login" type="text" placeholder="Логин" class="form__item"/>
                        <input name="password" type="password" placeholder="Пароль" class="form__item"/>
                        <input name="repeatPassword" type="password" placeholder="Повторите пароль" class="form__item"/>
                        <input name="reg__button" type="submit" value="Регистрация" class="form__item-button"/>
                    </form>
                </div>                      
            </section>
        </main>      
    </div>
</body>
</html>