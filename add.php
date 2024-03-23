<?php

if (isset($_POST["btn"])) {

    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = "user";

    include_once 'config.php';
    include_once 'project/function.inc.php';

    $uidExists = uidExists($conn, $email);

    $sql = "INSERT INTO users (name,number,email,password,role) VALUES (?,?,?,?,?)";

    $stmt = mysqli_stmt_init($conn);
    echo "hi";
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: home.php?error");
        exit();
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssss", $name, $number, $email, $password, $role);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: home.php?Success...!");
    exit();
}
