<?php

require "connect.php"; // Make sure to include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userType = isset($_POST['user_type']) ? 'Farmer' : 'Customer'; // Assuming the first radio button is for farmers

    // Check if the user is registered
    $sqlCheckUser = "SELECT * FROM users WHERE email='$email' AND password='$password' AND user_type='$userType'";
    $resultCheckUser = mysqli_query($con, $sqlCheckUser);

    if ($resultCheckUser && mysqli_num_rows($resultCheckUser) > 0) {
        // User is registered, proceed with authentication
        $sqlAuthenticate = "SELECT * FROM users WHERE email='$email' AND password='$password' AND user_type='$userType'";
        $resultAuthenticate = mysqli_query($con, $sqlAuthenticate);

        if ($resultAuthenticate && mysqli_num_rows($resultAuthenticate) > 0) {
            // Authentication successful
            echo "<script>alert('Login successful. Redirecting to Home page.'); window.location='Home.html';</script>";
            exit();
        } else {
            // Authentication failed
            echo "<script>alert('Invalid email or password. Please try again.');</script>";
        }
    } else {
        // User is not registered
        echo "<script>alert('User not registered. Please sign up.');</script>";
    }

    mysqli_close($con);
}


?>
 <script>
    document.addEventListener("DOMContentLoaded", function () {
        const loginContainer = document.getElementById("loginContainer");
        const profileContainer = document.getElementById("profileContainer");
        const loginLink = document.getElementById("loginLink");
        const editProfileLink = document.getElementById("editProfileLink");

        // Check if the user is already logged in (you may need a more secure approach in production)
        if (localStorage.getItem("loggedIn")) {
            const storedUsername = localStorage.getItem("username");
            profileContainer.style.display = "flex";
            usernameElement.textContent = storedUsername;
            logoutButton.style.display = "block";
            loginLink.style.display = "none";
            editProfileLink.style.display = "block"; // Display the edit profile link when logged in
        } else {
            loginLink.style.display = "block";
            editProfileLink.style.display = "none"; // Hide the edit profile link when not logged in
        }

        loginLink.addEventListener("click", function () {
            loginContainer.style.display = "block";
        });

        const loginForm = document.getElementById("loginForm");
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault();

            const username = document.getElementById("inputEmail3").value;
            const password = document.getElementById("inputPassword3").value;
            const userType = document.querySelector('input[name="user_type"]:checked').value;
            const rememberMe = document.getElementById("gridCheck1").checked;

            // Simulating a successful login
            // In a real scenario, you would perform server-side validation
            // and update the user profile details accordingly
            profileContainer.style.display = "flex";
            usernameElement.textContent = username;
            logoutButton.style.display = "block";
            loginLink.style.display = "none";
            editProfileLink.style.display = "block"; // Display the edit profile link when logged in

            // Store login status in local storage
            localStorage.setItem("loggedIn", true);
            localStorage.setItem("username", username);

            // Hide the login container
            loginContainer.style.display = "none";
        });

        window.logout = function () {
            // Clear the local storage
            localStorage.removeItem("loggedIn");
            localStorage.removeItem("username");

            // Refresh the current page
            window.location.reload();
        };
    });
</script>



    <?php
    // PHP (login.php)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate credentials (you should have your own validation logic)
        if ($username == "example_user" && $password == "example_password") {
            // Start a session and store the username
            session_start();
            $_SESSION['username'] = $username;

            // Simulating a successful login
            echo "success";
        } else {
            // Display an error message if login fails
            echo "error";
        }
    }
    ?>
    <?php

require "connect.php"; // Make sure to include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userType = isset($_POST['user_type']) ? 'Farmer' : 'Customer'; // Assuming the first radio button is for farmers

    // Check if the user is registered
    $sqlCheckUser = "SELECT * FROM users WHERE email='$email' AND password='$password' AND user_type='$userType'";
    $resultCheckUser = mysqli_query($con, $sqlCheckUser);

    if ($resultCheckUser && mysqli_num_rows($resultCheckUser) > 0) {
        // User is registered, proceed with authentication
        $sqlAuthenticate = "SELECT * FROM users WHERE email='$email' AND password='$password' AND user_type='$userType'";
        $resultAuthenticate = mysqli_query($con, $sqlAuthenticate);

        if ($resultAuthenticate && mysqli_num_rows($resultAuthenticate) > 0) {
            // Authentication successful
            echo "<script>alert('Login successful. Redirecting to Home page.'); window.location='Home.html';</script>";
            exit();
        } else {
            // Authentication failed
            echo "<script>alert('Invalid email or password. Please try again.');</script>";
        }
    } else {
        // User is not registered
        echo "<script>alert('User not registered. Please sign up.');</script>";
    }

    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="signin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-image: url('wallpaper.jpg');">
    <nav class="navbar navbar-expand-lg" style="background-color: transparent;" id="navbar">
        <div class="container-fluid" id="nav">
          <a class="navbar-brand" href="#"><h1 style="font-size: 50px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;"><b><span style="color:rgb(12, 44, 12);">Agri</span><span style="color:rgb(139, 83, 13)">Tech</span></b></h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: rgb(218, 120, 9); opacity: 0.9;" href="trial.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="About.php" style="color: rgb(215, 118, 7);">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Services.php" style="color: rgb(222, 125, 14);">Services</a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                      Join Us
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <li><button class="dropdown-item" id="dropdown-item" type="button">Sign in</button></li>
                      <a href="signup.php" style="text-decoration:none"><li><button class="dropdown-item" id="dropdown-item" type="button">Sign up</button></li></a>
                    </ul>
                  </div>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <form id="loginForm" class="row g-3 needs-validation" novalidate style="opacity: 0.9; width:500px; height: 550px; margin-left: 500px; border: 10px solid rgb(95, 54, 4); padding: 30px; margin-top: 50px;" action="" method="POST">
        <h2 style="color: rgb(10, 84, 20); font-weight: bolder; font-size: 40px; text-align: center; opacity: 0.9; margin-bottom: 60px;"><b>Sign In</b></h2>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label" style="opacity:0.9; color: rgb(173, 102, 14);">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email" required>
                <div class="invalid-feedback" id="emailError">Please enter a valid email address.</div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label" style="opacity:0.9; color: rgb(173, 102, 14);">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password" required>
                <div class="invalid-feedback" id="passwordError">Please enter your password.</div>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0" style="opacity:0.9; color: rgb(173, 102, 14);"> User Type</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="user_type" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1" style="opacity:0.9; color: rgb(173, 102, 14);">
                        Farmer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="user_type" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2" style="opacity:0.9; color: rgb(173, 102, 14);">
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
        <button type="submit" class="btn btn-warning" style="margin-left: 150px; width: 200px;">Sign In</button>
        <p style="opacity:0.9; color: rgb(134, 76, 6); margin-top: 20px;">Don't have an account? <a href="signup.php" style="opacity:0.9; color: rgb(234, 136, 16); text-decoration: double;">Sign up</a></p>
    </form>
    <style>
        label{
    color: rgb(230, 144, 24);
    background-color: transparent;
}
body{
    height: 500px
}
form{
    margin-top: 100px;
    margin-bottom: 50px;
    bottom: 0px;
    margin-left: 500px;
}
body{
    background-image: url("../Images/Wallpaper.jpg");
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
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 720px;
    background-color: rgba(0, 0, 0, 0.8); /* RGB color with alpha (0.5 for 50% opacity) */
  }
  #welcome{
    margin-top: 100px;
    margin-bottom: 50px;
  }

  #nav{
    background-color: transparent;
  }
  #getstarted{
    width:180px;
    height: 40px;
    margin-bottom: 60px;
    background-color: rgb(107, 74, 33);
    border-radius: 5px;
  }
  #getstarted:hover{
    background-color: rgb(57, 33, 5);
    color: rgb(233, 133, 12);
    transition:  0.3s ease-in;
   transform: scale(1.2 );
   transform-style: preserve-3d;
   text-shadow: 2px 2px 2px rgb(55, 27, 6);
   font-weight: bolder;
    
  }
  #title{
    color: rgb(153, 89, 12);
  }
  .navbar-nav{
    margin-left: 500px;
    padding-left: 30px;
  }
  .nav-item{
    margin-left: 50px;
    font-size: 20px;
    color: rgb(120, 72, 14);
  }
  #dropdownMenu2{
    color: rgb(157, 92, 13);
    background-color: rgb(43, 27, 7);
    width: 150px;
    height: 40px;
    text-align: center;
  }
  #dropdown-item{
    color:rgb(112, 66, 10);
    background-color: rgb(36, 21, 4);
  }
  #dropdown-item:hover{
    background-color: rgb(211, 128, 33);
    color: rgb(24, 24, 23);
  }
  #navbar{
    border-bottom: 4px solid rgb(107, 74, 33);
  }
  .container2{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 1fr;
    gap: 10px 10px;
    justify-items: center;
    align-items: center;
    margin-top:50px;
    color: rgb(146, 93, 23);
    opacity: 0.9;
  
    
    
}
.Introduction, .Pic{
    width:600px;
    height: 620px;
    box-shadow: 0px 0px 5px 10px rgb(34, 22, 7);
}
.Pic img{
    width: 300px; 
      height: 500px;
      margin-left: 100px;
}
.Introduction h1, .Pic h1{
    text-align: center;
    margin-top: -5px;
    
}
.Introduction p, .Pic p{
    margin: 20px;
    margin-bottom: 0;
}
.d-grid .btn{
    background-color: rgb(157, 98, 26);
    color: black;
    border-color: rgb(85, 51, 9);
}
#button:hover{
    background-color: rgb(26, 16, 4);
    color: rgb(186, 112, 21);
    border-color: rgb(27, 20, 12);
}

.nav-link:hover{
  color: black;
  opacity: 0.9;
  transition: all 0.3s ease-in;
  transform: scale(1.2 );
  transform-style: preserve-3d;
  text-shadow: 2px 2px 2px rgb(55, 27, 6);
  font-weight: bolder;

}
    </style>
    <script src="../Js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>
