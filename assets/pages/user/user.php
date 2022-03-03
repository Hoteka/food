<?php
session_start();
require_once('../../db/connect.php'); 
require_once('userback.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="http://wisdomweb.ru/editor/localization.js"></script>

    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/jquery.plugin.js"></script>  -->

    <!-- <link rel="stylesheet" href="../../style/main.css"> -->
    <link rel="stylesheet" href="../../style/user.css">
    <title>Питание</title>
</head>
<body>
    <div class="wrapper">
        <main class="page _container">              
            <section class="page__login login__page"> 
                <form method="post" name="userForm" class="form">
                    <div class="product__list">
                        <div class="dropdown">                               
                            <div class="select">                                   
                                <span class="dropdown-title">Вид питания</span>
                                <i class="fa-chevron-left"></i>
                            </div>      
                            <!-- <div class="ski-size__container"> 
                                <label class="ski-size__item"> -->
                                    <input  type="checkbox" name="typeFood[]" value="Завтрак"><span>Завтрак</span>
                                    <input  type="checkbox" name="typeFood[]" value="Поздний завтрак"><span>Поздний завтрак</span>
                                    <input  type="checkbox" name="typeFood[]" value="Обед"><span>Обед</span>
                                    <input  type="checkbox" name="typeFood[]" value="Ужин"><span>Ужин</span>
                                    <input  type="checkbox" name="typeFood[]" value="Поздний ужин"><span>Поздний ужин</span>
                                <!-- </label>
                            </div> -->
                            <div class="select">
                                <span class="dropdown-title">Кушаю / Не кушаю</span>
                                <i class="fa-chevron-left"></i>
                            </div>
                            <!-- <div class="ski-size__container"> 
                                <label class="ski-size__item"> -->
                                    <input  type="radio" name="checkEat" value="1"><span>Кушаю</span>
                                    <input  type="radio" name="checkEat" value="2"><span>Не кушаю</span>
                                    <!-- class="ski-size__button -->
                                <!-- </label>
                            </div> -->
                            <div class="select">
                                <p>Выберите дату: <input type="text" name="date" id="firstdatepicker" autocomplete="off" data-multiple-dates="3", data-multiple-dates-separator=","></p>
                            </div>
                            <div class="select">
                                <input type="submit" name="saveCheckButton" value="Сохранить" class="form__item-button">
                            </div>
                            <?php
                            if($_SESSION['role']==1){
                            ?>
                                <a href="../../pages/admin/admin.php" class="menu__link">Администратор</a>
                            <?php
                            }
                            ?>  
                        </div>
                        <span class="msg"></span>
                    </div>                       
                </form>
            </section>
        </main>    
    </div>
</body>
<script src="../../js/user/datepicker.js"></script>
<!-- <script src="../../js/user/jquery.js"></script> -->
</html>