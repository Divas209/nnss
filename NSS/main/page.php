<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>

    <!-- <form action=""><table><td>имя <input type="text" name="name"></td><td>email <input type="text" name="email"></td><td>пароль <input type="text" name="password"></td></table></form> -->
<?php
    session_start();
    require_once '../connect.php';
    $id_user = $_SESSION['id'];
    $sql = "SELECT * FROM user ";
    $result = mysqli_query($connect, $sql);
    if($result == false){
        echo "no";
    }

    while ($row = mysqli_fetch_array($result)) {
        echo'<form action="redactor.php" method="post">  <table><td>имя <input value = '.$row['name'].' type="text" name="name"></td><td>email <input value = '.$row['email'].' type="text" name="email"></td><td><button type="submit" name = "but" value='.$row['id'].' class = "bt">редактировать</button></td></table></form>';
        //echo'<div class = center><h2>'.$row['name'].'</h2></div>';
    }
?>


    
</body>
</html>