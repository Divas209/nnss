<?php
    require_once 'connect.php';
    $name = $_POST['name'];
    print $name;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `user`(`id`, `name`, `email`, `password`) VALUES (NULL,'$name','$email','$password')");

    header('Location: index.php');
?>