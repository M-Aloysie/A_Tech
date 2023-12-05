<?php
include "connect.php";
$Rem = $_GET['demo'];
$sql = mysqli_query($con, "DELETE FROM users WHERE id= '$Rem'");

if ($sql){
    header("location: display.php");
}
?>