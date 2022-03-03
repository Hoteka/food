<?php
session_start();
require_once('../../db/connect.php'); 

if (isset($_POST['reg__button'])) {
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);            
    $idRole=2;

    $sql = $db->prepare('SELECT * FROM `users` WHERE `login`= ?');
    $sql->execute(array($login));
    $arrResult = $sql->fetchAll();
    
    // echo json_encode($arrResult);
    if($arrResult==null){
        if(empty($lastName) || empty($firstName) || empty($login) || empty($password) || empty($repeatPassword)) 
        {   
            // echo "поля пустые";
        }   
        else{
            if($password === $repeatPassword)  
            {   
                $sql = $db->prepare("INSERT INTO `users` (lastName, firstName, login, password, idRole) VALUES (?, ?, ?, ?, ?)");
                $sql->execute(array($lastName, $firstName, $login, $hashedPassword, $idRole));       
                header("Location: ../../pages/login/login.php");
            }    
            else{
                // echo "пароль не совпадает";
            } 
        }   
    }
    else{
       
        // echo " Пользователь с таким логином уже существует";
    }
}
?>