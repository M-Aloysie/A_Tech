<?php
include "connect.php";
$Rem = $_GET['demo'];
$sql = mysqli_query($con, "DELETE FROM customers WHERE emp_id= '$Rem'");

if ($sql){
    header("location: cusdisplay.php");
}
?>