<?php
session_start();
require_once('../../db/connect.php'); 
require_once('adminback.php'); 

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <!-- <link rel="stylesheet" href="../../style/admin.css"> -->
  <title>Администратор</title>
</head>
<body>
<div class="wrapper">
        <main class="page _container">              
            <section class="page__login login__page"> 
              <form method="post" action=""  class="formAdmin">
                  <p>Выберите дату <input type="date" name="date" id="firstdatepicker"></p>
                  <input type="submit" value="Просмотреть" name="dateButton"/>    
                  
              </form>
            </section>
        </main>    
    </div>    
</body>
</html>