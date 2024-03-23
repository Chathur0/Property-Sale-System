<?php
session_start();
if (isset($_POST["btn"])) {
    include_once '../config.php';
    $id =$_SESSION["id"];
    $name =$_POST["name"];
    $email =$_POST["email"];
    $iName = $_FILES['image']['name'];
    $iTmName = $_FILES['image']['tmp_name'];

    $uploadTo = 'image/';

    $fileUploaded = move_uploaded_file($iTmName, $uploadTo . $iName);
    if(!empty($iName)){
        $sql = "UPDATE users SET image=?, name=?, email=? WHERE id = $id ";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: profile.php?Error...!");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"sss",$iName,$name,$email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: profile.php?Change Successful...!");
        exit();
    }else{
        $sql = "UPDATE users SET name=?, email=? WHERE id = $id ";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: profile.php?Error...!");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"ss",$name,$email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: profile.php?Change Successful...!");
        exit();
    }
        
}
?>