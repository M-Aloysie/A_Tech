<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="Signin.css">
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
<form id="signinForm" class="row g-3 needs-validation" novalidate style="opacity: 0.9; width:500px; height: 550px; margin-left: 500px; border: 10px solid rgb(95, 54, 4); padding: 30px; margin-top: 50px;">
        <h2 style="color: rgb(10, 84, 20); font-weight: bolder; font-size: 40px; text-align: center; opacity: 0.9; margin-bottom: 60px;"><b>Sign In</b></h2>
        <div class="row mb-3">
            <label for="inputEmail3" name="email" class="col-sm-2 col-form-label" style="opacity:0.9; color: rgb(173, 102, 14);">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" required>
                <div class="invalid-feedback" id="emailError">Please enter a valid email address.</div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" name="password" class="col-sm-2 col-form-label" style="opacity:0.9; color: rgb(173, 102, 14);">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" required>
                <div class="invalid-feedback" id="passwordError">Please enter your password.</div>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0" style="opacity:0.9; color: rgb(173, 102, 14);"> User Type</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked style=".form-check-input:hover::after{background-color: rgb(173, 102, 14);}" required>
                    <label class="form-check-label"  name = "user_type" for="gridRadios1" style="opacity:0.9; color: rgb(173, 102, 14);">
                        Farmer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" name="user_type" for="gridRadios2" style="opacity:0.9; color: rgb(173, 102, 14);">
                        Customer
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1" style="opacity:0.9; color: rgb(173, 102, 14);">
                        Remember me
                    </label>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-warning" style="margin-left: 150px; width: 200px;" onclick="validateSignInForm()"><a href="Home.html" style="color: black; text-decoration: none; transform: 0.3s ease in; font-weight: bolder;">Sign In</a></button>
        <p style="opacity:0.9; color: rgb(134, 76, 6); margin-top: 20px;">Don't have an account? <a href="/Signup.html" style="opacity:0.9; color: rgb(234, 136, 16); text-decoration: double;">Sign up</a></p>
    </form>

    <?php
require "connect.php"; // Make sure to include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['cus_email'];
    $password = $_POST['cus_password'];
    $userType = isset($_POST['cus_user_type']) ? 'Farmer' : 'Customer'; // Assuming the first radio button is for farmers

    // Check user credentials in the database
    $sql = "SELECT * FROM customers WHERE cus_email='$email' AND cus_password='$password' AND cus_user_type='$userType'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Authentication successful
        header("location: Home.html"); // Redirect to the home page or any other page
        exit();
    } else {
        // Authentication failed
        echo "Invalid email or password. Please try again.";
    }

    mysqli_close($con);
}
?>
<script src="../Js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>