<?php
session_start();
require_once('../../db/connect.php'); 

// $sql = $db->prepare('SELECT * FROM `users` WHERE `login`= ? and `password`= ?');
// $sql->execute(array($login, $hashedPassword));
// $arrResult= $sql->fetchAll(PDO::FETCH_ASSOC);
// $idAdmin = $arrResult[0]['idRole'];

// $sql = $db->query('SELECT * FROM `typefoods`');
// $typeFoods = $sql->fetchAll();


if(isset($_POST["typeFood"]) || isset($_POST["checkEat"]) || isset($_POST["date"]))
{
    $typeFoodArr = $_POST["typeFood"];
    $lastTypeFoodArr = json_encode($typeFoodArr);
    $date = $_POST["date"];
    $checkEat = (int) $_POST["checkEat"]; 
    
    
    if (isset($_POST['saveCheckButton'])) {
        $sql = $db->prepare('SELECT * FROM `usersform`');
        $arrResult = $sql->fetchAll();
        
        $sql = $db->prepare("INSERT INTO `usersform` (typeFood, dateEat, idCheckEat) VALUES (?, ?, ?)");

        // $sql->execute(array($typeFoodResult, $checkEat, $date)); 

        $sql->execute(array($lastTypeFoodArr, $date, $checkEat)); 
        

        // $sql->execute(array($typeFoodResult, $checkEat, $date)); 
        // $sql->execute(array(" . implode("), (", $result) . ", $date)); 

        // header("Location: ../../pages/user/user.php"); 

        echo "<pre>";
        var_dump(array($lastTypeFoodArr, $checkEat, $date));
        echo "</pre>";
    }
}
?>