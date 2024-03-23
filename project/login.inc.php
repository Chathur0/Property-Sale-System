<?php 
    if(isset($_POST["btn1"])){
        $email=$_POST["email"];
        $password = $_POST["password"];

        include_once '../config.php';
        include_once 'function.inc.php';

        loginUser($conn,$email,$password);
    }
?>