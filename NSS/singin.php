<?php
    session_start();
    require_once 'connect.php';
    $login = $_POST['name'];
    $password = $_POST['password'];
    $password = md5($password);
    $key = mysqli_query($connect,"SELECT `id`, `name`, `password` FROM `user` WHERE `name` = '$login' AND `password` = '$password'");
    if ($key1 =mysqli_fetch_assoc($key)>0){
        while ($key1 = mysqli_fetch_array($key)) {
            $_SESSION['id'] = $key1['id'];
        }
        header('Location: main/page.php');
    }else{
        header('Location: index.php'); 
    }
?> 

