<?php
$conn = mysqli_connect("localhost", "root", "", "project");
if (!$conn) {
    die("Connection Error..! " . mysqli_connect_error());
}
?>
