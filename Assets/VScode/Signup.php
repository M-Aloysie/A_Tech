<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the sign-in page
    header("Location: cussignin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriTech Website</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CSS/Signin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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
                <a class="nav-link active" href="#" style="color: rgb(222, 125, 14);">Sevices</a>
              </li>
              <li class="nav-item">
                
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                      Join Us
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <li><button class="dropdown-item" id="dropdown-item" type="button">Sign in</button></li>
                      <li><button class="dropdown-item" id="dropdown-item" type="button">Sign up</button></li>
                    </ul>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <!-- <form class="row g-3" style="width: 600px; height: 600px; opacity: 0.9; margin-left: 500px; border: 10px solid rgb(147, 84, 8); margin-top: 30px; padding: 30px;">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Full Names</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your full names" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Email</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder=" Enter your email" required>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Create Password</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Create a stong Password" required>
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">confirm Password</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Confirm your Password" required>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Country</label>
          <input type="text" class="form-control" id="inputCity" placeholder="Enter your country" required>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">User Type</label>
          <select id="inputState" class="form-select" required>
            <option >...</option>
            <option>Farmer</option>
            <option value="">Customer</option>
          </select>
        </div>
        <div class="col-md-5">
          <label for="inputZip" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="inputZip" placeholder="your phone number" required>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Remember me
            </label>
          </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-warning" style="margin-left: 150px; width: 200px;"><a href="Signin.html" style="color: black; text-decoration: none; transform: 0.3s ease in; font-weight: bolder;">Create Account</a></button>
        </div>
      </form>  -->

      <form class="row g-3 needs-validation" novalidate  style="width: 600px; height: 750px; opacity: 0.9; margin-left: 500px; border: 10px solid rgb(147, 84, 8); margin-top: 30px; padding: 30px;">
        <div class="col-md-6">
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your first name" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">Last name</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Enter your last name" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustomUsername" class="form-label">User email</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="Enter your email">
            <div class="invalid-feedback">
              Please enter your user email
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Country</label>
          <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
            Please provide a valid Country.
          </div>
        </div>
        <div class="col-md-6" >
          <label for="validationCustom04" class="form-label" >User Type</label>
          <select class="form-select" id="validationCustom04" required>
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
          <input type="text" class="form-control" id="validationCustom05" required  style="margin-top: -15px;">
          <div class="invalid-feedback">
            Please provide a valid Phone Number.
          </div>
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">Create Password</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Create a stong Password" required>
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">confirm Password</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Confirm your Password" required>
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
          <button type="submit" class="btn btn-warning" style="margin-left: 150px; width: 200px;"><a href="Signin.html" style="color: black; text-decoration: none; transform: 0.3s ease in; font-weight: bolder;">Create Account</a></button>
        </div>
      </form>
          
      

    

<script src="/Js/script.js"></script>
<script src="/Js/B.js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>