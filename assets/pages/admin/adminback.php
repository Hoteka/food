<?php
session_start();
require_once('../../db/connect.php'); 


if (isset($_POST['dateButton'])) {


    $date = $_POST['date'];

    // $sql = $db->prepare('SELECT dateEat FROM `usersform`');
    // $sql->execute(array($date));
    // $row = $sql->fetchAll(PDO::FETCH_ASSOC);
    // $dateDb = $row[0]['dateEat'];  
    // echo "<pre>";
    // var_dump(array($date, $dateDb));
    // echo "</pre>"; 

   
    $sql = $db->prepare('SELECT * FROM `usersform` WHERE `dateEat`= ?');
    $sql->execute(array($date));
    $typeFoods = $sql->fetchAll(PDO::FETCH_ASSOC);

    $countBreakfast=0;
    $countLastBreakfast=0;
    $countLunch=0;
    $countDinner=0;
    $countLastDinner=0;
    $countAll=0;

    foreach($typeFoods as $result){ 
        if ($result['idCheckEat']==1) {
            foreach(json_decode($result['typeFood']) as $lastResult){ 
                if (mb_strtolower($lastResult)=='завтрак') {                 
                    $countBreakfast+=1;
                }
                else if (mb_strtolower($lastResult)=='поздний завтрак'){
                    $countLastBreakfast+=1;
                }
                else if (mb_strtolower($lastResult)=='обед'){
                    $countLunch+=1;
                }
                else if (mb_strtolower($lastResult)=='ужин'){
                    $countDinner+=1;
                }
                else if (mb_strtolower($lastResult)=='поздний ужин'){
                    $countLastDinner+=1;
                }
                $countAll+=1;
            }
        }                           
    }
        echo'<p>Завтрак - '. $countBreakfast .'</p>';
        echo'<p>Поздний завтрак - '. $countLastBreakfast .'</p>';
        echo'<p>Обед - '. $countLunch .'</p>';
        echo'<p>Ужин - '. $countDinner .'</p>';  
        echo'<p>Поздний ужин - '. $countLastDinner .'</p>';
        echo'<p>Всего - '. $countAll .'</p>';
    }

// echo'<p>Всего - '. $lastResult .'</p>';


?>