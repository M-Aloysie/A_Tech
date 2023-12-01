<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <?php
    include "connect.php"; 

    if (isset($_POST['submit'])) {
        $cus_first_name = $_POST['cus_first_name'];
        $cus_last_name = $_POST['cus_last_name'];
        $cus_email = $_POST['cus_email'];
        $cus_country = $_POST['cus_country'];
        $cus_user_type = $_POST['cus_user_type'];
        $cus_phone_number = $_POST['cus_phone_number'];
        $cus_password = $_POST['cus_password'];

   
        $sql = "INSERT INTO `customers` (`cus_first_name`, `cus_last_name`, `cus_email`, `cus_country`, `cus_user_type`, `cus_phone_number`, `cus_password`) 
                VALUES ('$cus_first_name', '$cus_last_name', '$cus_email', '$cus_country', '$cus_user_type', '$cus_phone_number', '$cus_password')";
        
        $result = mysqli_query($con, $sql);

        if ($result) {
            header("location: signin.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    mysqli_close($con);
    ?>

<form class="row g-3 needs-validation" novalidate style="width: 600px; height: 750px; opacity: 0.9; margin-left: 500px; border: 10px solid rgb(147, 84, 8); margin-top: 30px; padding: 30px;" action="process_signup.php" method="POST">
    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationCustom01" name="cus_first_name" placeholder="Enter your first name" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" name="cus_last_name" placeholder="Enter your last name" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">User email</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" class="form-control" id="validationCustomUsername" name="cus_user_email" aria-describedby="inputGroupPrepend" required placeholder="Enter your email">
            <div class="invalid-feedback">
                Please enter your user email
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Country</label>
        <input type="text" class="form-control" id="validationCustom03" name="cus_country" required>
        <div class="invalid-feedback">
            Please provide a valid Country.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom04" class="form-label">User Type</label>
        <select class="form-select" id="validationCustom04" name="cus_user_type" required>
            <option selected disabled value="">...</option>
            <option>Farmer</option>
            <option>Customer</option>
        </select>
        <div class="invalid-feedback">
            Please select a valid User Type.
        </div>
    </div>
    <div class="col-md-6" style="margin-bottom: -10px;">
        <label for="validationCustom05" class="form-label"> <p>Phone number</p></label>
        <input type="text" class="form-control" id="validationCustom05" name="cus_phone_number" required style="margin-top: -15px;">
        <div class="invalid-feedback">
            Please provide a valid Phone Number.
        </div>
    </div>
    <div class="col-6">
        <label for="inputAddress" class="form-label">Create Password</label>
        <input type="password" class="form-control" id="inputAddress" name="cus_password" placeholder="Create a strong Password" required>
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="inputAddress2" name="cus_confirm_password" placeholder="Confirm your Password" required>
    </div>
    <div id="passwordMismatchMessage" class="invalid-feedback">
        Passwords do not match
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Remember me
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-warning" style="margin-left: 150px; width: 200px;">Create Account</button>
    </div>
</form>

</body>
</html>
