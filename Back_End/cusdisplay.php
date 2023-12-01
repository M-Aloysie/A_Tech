<?php
include "connect.php";
$answer=mysqli_query($con,"SELECT * FROM `customers`");
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
        <th>cus_id</th>
        <th>cus_first_name</th>
        <th>cus_last_name</th>
        <th>cus_email</th>
        <th>cus_country</th>
        <th>cus_user_type</th>
        <th>cus_phone_number</th>
        <th>cus_password</th>

        <th colspan="2">Action</th>
    </thead>
<?php
while ($fetch= mysqli_fetch_array($answer)) {
?>
 
    <tr>
        <td><?php echo $fetch['cus_id'] ?></td>
        <td><?php echo $fetch['cus_first_name'] ?></td>
        <td><?php echo $fetch['cus_last_name'] ?></td>
        <td><?php echo $fetch['cus_email'] ?></td>
        <td><?php echo $fetch['cus_country'] ?></td>
        <td><?php echo $fetch['cus_user_type'] ?></td>
        <td><?php echo $fetch['cus_phone_number'] ?></td>
        <td><?php echo $fetch['cus_password'] ?></td>
        <td>
        <button><a href="edit.php?demo=<?php echo $fetch['cus_id'] ?>">Edit</a></button>
        <button><a href="remove.php?demo=<?php echo $fetch['cus_id'] ?>">Remove</a></button>
        </td>
        
    </tr>
      <?php

}
?>
</table>
</body>
</html>