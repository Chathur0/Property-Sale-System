<?php
session_start();
include '../config.php';
include '../project/function.inc.php';
$row = refresh($conn, $_SESSION["id"]);
if (isset($_POST["btn"])) {
    $Ptype = $_POST["btn"];
    include_once '../config.php';
    $id = $row["id"];
    echo $Ptype, $id;
    if ($Ptype == "Sale" || $Ptype == "Rent") {
        $bed = $_POST["bed"];
        $bath = $_POST["bath"];
        $f_area = $_POST["f_area"];
    }
    $type = $_POST["type"];
    $town = $_POST["town"];
    $l_area = $_POST["l_area"];
    $price = $_POST["price"];
    $floors = $_POST["floors"];
    $park = $_POST["park"];
    $f_for_r = $_POST["f_for_r"];
    $status = $_POST["status"];
    $head = $_POST["head"];
    $dis = $_POST["dis"];
    $name = $_POST["name"];
    $phone = $_POST["number"];
    $iName = $_FILES['image']['name'];
    $iTmName = $_FILES['image']['tmp_name'];

    if ($Ptype == "Land") {
        $sql = "INSERT INTO land (ow_id,town,type,sz_of_land,price,ft_for_rd,f_status,headling,description,name,number) 
         VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        echo "hi";
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../home.php?error");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "issiiisssss",  $id, $town, $type, $l_area, $price, $f_for_r, $status, $head, $dis, $name, $phone);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../home.php?Success...!");
        exit();
    } elseif($Ptype=="Sale") {
        $sql = "INSERT INTO buy (ow_id,town,type,sz_of_land,price,ft_for_rd,f_status,headling,description,name,number,nm_of_bed,nm_of_bath,sz_of_flow) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        echo "hi";
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../home.php?error");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "issiiisssssiii",  $id, $town, $type, $l_area, $price, $f_for_r, $status, $head, $dis, $name, $phone,$bed,$bath,$f_area);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../home.php?Success...!");
        exit();
    }else{
        $sql = "INSERT INTO rent (ow_id,town,type,sz_of_land,price,ft_for_rd,f_status,headling,description,name,number,nm_of_bed,nm_of_bath,sz_of_flow) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        echo "hi";
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../home.php?error");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "issiiisssssiii",  $id, $town, $type, $l_area, $price, $f_for_r, $status, $head, $dis, $name, $phone,$bed,$bath,$f_area);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../home.php?Success...!");
        exit();
    }
}
