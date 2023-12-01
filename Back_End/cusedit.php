<?php
include "connect.php";
$new = $_GET ['demo'];
$sql = mysqli_query($con,"SELECT * FROM employee WHERE emp_id = '$new'");
while ($fetch= $sql->fetch_assoc()) {
    $firstname = $fetch['cus_fist_name'];
    $lastname = $fetch['cus_last_name'];
    $email = $fetch['cus_email'];
    $country = $fetch['cus_country'];
    $phoneNumber = $fetch['cus_phone_number'];
    $password = $fetch['cus_password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
<form action="" method="POST">
  <label for="">Firstname</label> <br><br>
  <input type="text" name="cus_fist_name" id="" value ="<?php echo $username;?>" ><br><br>
  <label for="">Lastname</label> <br><br>
  <input type="text" name="cus_last_name" id="" value ="<?php echo $lastname;?>"><br><br>
  <label for="">email</label> <br><br>
  <input type="email" name="cus_email" id="" value ="<?php echo $email;?>"><br><br>
  <label for="">country</label> <br><br>
  <input type="text" name="cus_country" id="" value ="<?php echo $country;?>"><br><br>
  <label for="">phoneNumber</label> <br><br>
  <input type="number" name="cus_phone_number" id="" value ="<?php echo $phoneNumber;?>"><br><br>
  <label for="">password</label> <br><br>
  <input type="password" name="cus_password" id="" value ="<?php echo $password;?>"><br><br>
  <button type="submit" name="submit">Edit</button>
</form>
<?php
    include "connect.php";
    if(isset($_POST['submit']))
    {
        $firstname = $_POST['cus_fist_name'];
        $lastname = $_POST['cus_last_name'];
        $email = $_POST['cus_email'];
        $country = $_POST['cus_country'];
        $phoneNumber = $_POST['cus_phone_number'];
        $usertype= $_POST['cus_user_type'];
        $password = $_POST['cus_password'];

        $sql ="UPDATE `customers` SET UPDATE `customers` SET `cus_id`='[value-1]',`cus_first_name`='[value-2]',`cus_last_name`='[value-3]',`cus_email`='[value-4]',`cus_country`='[value-5]',`cus_user_type`='[value-6]',`cus_phone_number`='[value-7]',`cus_password`='[value-8]' WHERE emp_id = '$new'";
        $answer = mysqli_query($con,$sql);
    
    if($answer){
      header("location:cusdisplay.php");
    }
}
?>
</table>
</body>
</html>


