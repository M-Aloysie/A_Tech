<?php
include "connect.php";
$answer=mysqli_query($con,"SELECT * FROM `user`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <h3><a href="signup.php">+ Add a new customer</a></h3>
    <table border="2">
    <thead>
        <th></th>
        <th>user_id</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>email</th>
        <th>adress</th>
        <th>user_type</th>
        <th>phone_number</th>
        <th>password</th>

        <th colspan="2">Action</th>
    </thead>
<?php
while ($fetch= mysqli_fetch_array($answer)) {
?>
 
    <tr>
        <td><?php echo $fetch['user_id'] ?></td>
        <td><?php echo $fetch['first_name'] ?></td>
        <td><?php echo $fetch['last_name'] ?></td>
        <td><?php echo $fetch['email'] ?></td>
        <td><?php echo $fetch['adress'] ?></td>
        <td><?php echo $fetch['user_type'] ?></td>
        <td><?php echo $fetch['phone_number'] ?></td>
        <td><?php echo $fetch['password'] ?></td>
        <td>
        <button><a href="edit.php?demo=<?php echo $fetch['user_id'] ?>">Edit</a></button>
        <button><a href="remove.php?demo=<?php echo $fetch['user_id'] ?>">Remove</a></button>
        </td>
        
    </tr>
      <?php

}
?>
</table>
</body>
</html>