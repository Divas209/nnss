<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel = "stylesheet" href = "../style.css">
</head>
<body>
  
<?php
    $id_item = $_POST['but'];
    session_start();
    require_once '../connect.php';
    //$id_user = $_SESSION['id'];
    $sql = "SELECT * FROM user WHERE `id` = '$id_item'";
    $result = mysqli_query($connect, $sql);
    if($result == false){
        echo "request error";
    }

    while ($row = mysqli_fetch_array($result)) {
        echo'<form action="itog.php"><table><td>имя <input value = '.$row['name'].' type="text" name="name"></td><td>email <input value = '.$row['email'].' type="text" name="email"></td><td><input type="submit" value="редактировать" class = "bt"></td></table><input type="hidden" value='.$row['id'].' name="id_item"></form>';
    }
?>


    
</body>