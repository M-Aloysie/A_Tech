<?php
include "connect.php";

$new = isset($_GET['demo']) ? $_GET['demo'] : null;

if ($new !== null) {
    // Select the user information from the database
    $sql = mysqli_query($con, "SELECT * FROM users WHERE id = '$new'");
    while ($fetch = $sql->fetch_assoc()) {
        $firstname = $fetch['first_name'];
        $lastname = $fetch['last_name'];
        $email = $fetch['email'];
        $country = $fetch['address'];
        $phoneNumber = $fetch['phone_number'];
        $usertype = $fetch['user_type'];
        $password = $fetch['password'];
    }

    if (isset($_POST['submit'])) {
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];
        $country = $_POST['address'];
        $phoneNumber = $_POST['phone_number'];
        $usertype = $_POST['user_type'];
        $password = $_POST['password'];

        // Update user information in the database
        $sql = "UPDATE `users` SET `first_name`='$firstname', `last_name`='$lastname', `email`='$email', `address`='$country', `phone_number`='$phoneNumber', `user_type`='$usertype', `password`='$password' WHERE id = '$new'";
        $answer = mysqli_query($con, $sql);

        if ($answer) {
            header("location:display.php");
        }
    }
} else {
    // Handle the case when "demo" key is not set, e.g., redirect or display an error message.
    echo "Invalid request";
}
?>
<style>
  input{
  width:400px;
  height:30px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
body{
    background-image: url("Wallpaper.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    background-attachment: fixed;
    background-position-y: -310px;
    background-position: fixed;
    margin: 0;
    padding: 0;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
body::before {
    color:rgb(125, 74, 11) ;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height:  800px;
    background-color: rgba(0, 0, 0, 0.8); 
  }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    
</head>
<body>
<form action="" method="POST" style="width: 600px; height: 600px; opacity: 0.9; margin-left: 500px; border: 10px solid rgb(147, 84, 8); margin-top: 30px; padding: 20px; color: white; padding: 50px;">
        <label for="first_name">First Name</label><br><br>
        <input type="text" name="first_name" id="" value="<?= isset($firstname) ? $firstname : ''; ?>"><br><br>

        <label for="last_name">Last Name</label><br><br>
        <input type="text" name="last_name" id="" value="<?= isset($lastname) ? $lastname : ''; ?>"><br><br>

        <label for="email">Email</label><br><br>
        <input type="email" name="email" id="" value="<?= isset($email) ? $email : ''; ?>"><br><br>

        <label for="address">Address</label><br><br>
        <input type="text" name="address" id="" value="<?= isset($country) ? $country : ''; ?>"><br><br>

        <label for="phone_number">Phone Number</label><br><br>
        <input type="text" name="phone_number" id="" value="<?= isset($phoneNumber) ? $phoneNumber : ''; ?>"><br><br>

        <label for="user_type">User Type</label><br><br>
        <select name="user_type" id="">
            <option value="customer" <?= (isset($usertype) && $usertype == 'customer') ? 'selected' : ''; ?>>Customer</option>
            <option value="farmer" <?= (isset($usertype) && $usertype == 'farmer') ? 'selected' : ''; ?>>Farmer</option>
        </select><br><br>

        <label for="password">Password</label><br><br>
        <input type="password" name="password" id="" value="<?= isset($password) ? $password : ''; ?>"><br><br>

        <a href="display.php"><button type="submit" name="submit">Edit</button></a>
    </form>
</body>
</html>