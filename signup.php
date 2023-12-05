<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="Signin.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('.needs-validation');

            form.addEventListener('submit', function (event) {
                let isValid = true;

                // Check if all required fields are filled in
                form.querySelectorAll('[required]').forEach(function (element) {
                    if (element.value.trim() === '') {
                        isValid = false;
                        element.classList.add('is-invalid');
                    } else {
                        element.classList.remove('is-invalid');
                    }
                });

                // Check if passwords match
                const password = form.querySelector('[name="password"]').value;
                const confirmPassword = form.querySelector('[name="confirm_password"]').value;
                if (password !== confirmPassword) {
                    isValid = false;
                    document.getElementById('passwordMismatchMessage').style.display = 'block';
                } else {
                    document.getElementById('passwordMismatchMessage').style.display = 'none';
                }

                // Check if the form is valid before redirecting
                if (!isValid || !form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
            });

            form.addEventListener('change', function (event) {
                const target = event.target;

                if (target.hasAttribute('required')) {
                    if (!target.checkValidity()) {
                        target.classList.add('is-invalid');
                    } else {
                        target.classList.remove('is-invalid');
                    }
                }
            });
        });
    </script>
</head>
<body style="background-image: url('wallpaper.jpg');">
<nav class="navbar navbar-expand-lg  " style="background-color: transparent;"  id="navbar">
        <div class="container-fluid" id ="nav">
          <a class="navbar-brand" href="#"><h1 style="font-size: 50px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;"><b><span style="color:rgb(12, 44, 12);">Agri</span><span style="color:rgb(139, 83, 13)">Tech</span></b></h1></a></h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown"  >
            <ul class="navbar-nav" >
              <li class="nav-item" >
                <a class="nav-link active" aria-current="page" style="color: rgb(218, 120, 9); opacity: 0.9;" href="#">Home</a>
              </li>
              <li class="nav-item" >
                <a class="nav-link active" href="#" style="color: rgb(215, 118, 7);">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#" style="color: rgb(222, 125, 14);">Services</a>
              </li>
              <li class="nav-item">
                
              <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                      Join Us
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <a href="signin.php" style="text-decoration:none"><li><button class="dropdown-item" id="dropdown-item" type="button">Sign in</button></li></a>
                      <a href="signup.php" style="text-decoration:none"><li><button class="dropdown-item" id="dropdown-item" type="button">Sign up</button></li></a>
                    </ul>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
<form class="row g-3 needs-validation" novalidate style="width: 600px; height: 750px; opacity: 0.9; margin-left: 500px; border: 10px solid rgb(147, 84, 8); margin-top: 30px; padding: 30px;" action="" method="POST">
    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationCustom01" name="first_name" placeholder="Enter your first name" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" name="last_name" placeholder="Enter your last name" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">User email</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" class="form-control" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required placeholder="Enter your email">
            <div class="invalid-feedback">
                Please enter your user email
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Address</label>
        <input type="text" class="form-control" id="validationCustom03" name="address" required>
        <div class="invalid-feedback">
            Please provide a valid Address.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom04" class="form-label">User Type</label>
        <select class="form-select" id="validationCustom04" name="user_type" required>
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
        <input type="text" class="form-control" id="validationCustom05" name="phone_number" required style="margin-top: -15px;">
        <div class="invalid-feedback">
            Please provide a valid Phone Number.
        </div>
    </div>
    <div class="col-6">
        <label for="inputAddress" class="form-label">Create Password</label>
        <input type="password" class="form-control" id="inputAddress" name="password" placeholder="Create a strong Password" required>
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="inputAddress2" name="confirm_password" placeholder="Confirm your Password" required>
    </div>
    <div id="passwordMismatchMessage" class="invalid-feedback">
        Passwords do not match
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
            <label class="form-check-label" for="invalidCheck">
                Remember me
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
    <div class="col-12">
    <a href="signin.php" style="text-decoration: none;"><button type="submit" class="btn btn-warning" style="margin-left: 150px; width: 200px;" name="submit">Create Account</button></a>
    </div>
</form>

<?php
require "connect.php"; 

if (isset($_POST['submit'])) {
    $user_id = $user_id['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $user_type = $_POST['user_type'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `address`, `user_type`, `phone_number`, `password`) 
            VALUES ('$first_name', '$last_name', '$email', '$address', '$user_type', '$phone_number', '$password')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: signin.php");
       
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

?>


<script src="../Js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>
