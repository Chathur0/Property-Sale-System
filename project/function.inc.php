<?php 
    function uidExists($conn, $email) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_array($result)) {
            return $row;
        } else {
            return false;
        }
    }
    function loginUser($conn,$email, $password) {

        $row = uidExists($conn, $email) ;
        if($row === false) {
            header('Location: login.php?error=wrongLogin1');
            exit();
        }
        $pwHashed = $row['password'];
        $check = password_verify($password, $pwHashed);

        if($check === false) {
            header('Location: login.php?error=wrongLogin2');
            exit();
        } elseif($check === true) {
            session_start();
            $_SESSION["id"] = $row["id"];
            header('Location: ../home.php?LoginSuccess..!');
            exit();
        }  
    }
    function refresh($conn,$id){
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        return  mysqli_fetch_array($result);
    }
?>