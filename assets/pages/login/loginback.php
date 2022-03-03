<?php
session_start();
require_once('../../db/connect.php'); 

if (isset($_POST['login__button'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = $db->prepare('SELECT * FROM `users` WHERE `login`= ? and `password`= ?');
    $sql->execute(array($login, $password));
    $infoUser = $sql->fetchAll();

    $sql = $db->prepare('SELECT `password` FROM users WHERE `login`= ?');
    $sql->execute(array($login));
    $row = $sql->fetchAll(PDO::FETCH_ASSOC);
    $hashedPassword = $row[0]['password'];  
    // echo "<pre>";
    // var_dump($hashedPassword);
    // echo "</pre>";

    if (password_verify($password, $hashedPassword)) {
        $sql = $db->prepare('SELECT * FROM `users` WHERE `login`= ? and `password`= ?');
        $sql->execute(array($login, $hashedPassword));
        $arrResult = $sql->fetchAll();

        if(count($arrResult)==1){
            $_SESSION['user'] = $login;
            $_SESSION['role'] = $arrResult[0]['idRole'];
            // echo "Вход выполнен успешно";    

            header("Location: ../../pages/user/user.php");
            // echo "<meta http-equiv='refresh' content='0; ../../pages/user/index.php'>";
        }
        else{
            //echo 'Password ошибочен';
        }  
    }
    else {
        //echo 'Password ошибочен';
    }    
    $arrResult = $sql->fetchAll();
}
?>