<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Your Website</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .profile-container {
            display: flex;
            align-items: center;
        }

        .profile-links {
            display: flex;
            align-items: center;
        }

        #profile-picture {
            background-image: url("/Images/about.jpg");
            max-width: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .login-container,
        .logout-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        #logout {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
            display: none;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>

<nav>
        <div class="profile-container" id="profileContainer">
            <div class="profile-links">
                <span id="username"></span>
                <a href="#" id="loginLink">Login</a>
                <a href="#" id="logout" onclick="logout()">Logout</a>
                <a href="#" id="editProfileLink">Edit Profile</a>
            </div>
            <img id="profile-picture" src="/Images/about.jpg" alt="Profile Picture">
            <span id="navbarUsername" style="color: rgb(218, 120, 9); opacity: 0.9;"></span>
        </div>
    </div>
</nav>


<div class="login-container" id="loginContainer">
    <h2>Login</h2>
    <form id="loginForm" action="" method="post">
        <label for="username">Username or Email:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const loginContainer = document.getElementById("loginContainer");
            const profileContainer = document.getElementById("profileContainer");
            const profilePicture = document.getElementById("profile-picture");
            const usernameElement = document.getElementById("username");
            const logoutButton = document.getElementById("logout");
            const loginLink = document.getElementById("loginLink");
            const editProfileLink = document.getElementById("editProfileLink");

            // Check if the user is already logged in (you may need a more secure approach in production)
            if (localStorage.getItem("loggedIn")) {
                const storedUsername = localStorage.getItem("username");
                profileContainer.style.display = "flex";
                usernameElement.textContent = storedUsername;
                logoutButton.style.display = "block";
                loginLink.style.display = "none";
                editProfileLink.style.display = "block";
                profileContainer.style.display = "flex";
                usernameElement.textContent = username; // Display the edit profile link when logged in
            } else {
                loginLink.style.display = "block";
                editProfileLink.style.display = "none"; // Hide the edit profile link when not logged in
            }

            loginLink.addEventListener("click", function () {
                loginContainer.style.display = "block";
            });
            
    
    // Set the content of the navbarUsername element
    const navbarUsernameElement = document.getElementById("navbarUsername");
    navbarUsernameElement.textContent = username;

            const loginForm = document.getElementById("loginForm");
            loginForm.addEventListener("submit", function (event) {
                event.preventDefault();

                const username = document.getElementById("username").value;
                const password = document.getElementById("password").value;

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
<!-- Bootstrap JS and Popper.js scripts -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-rYcg0vY1bzZBVExZcJFF/QFiaQZgVxH+9k25WNPomlAAEnlPfsq8w1dSz0R6EMy7" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bswWzwu65fZ6F7td1ubS8q2P0DOJ4nbDzlZq0qGuvDHqIcHk9LhSHW2I/t9O5YO7" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js" integrity="sha384-vFJwASpB5CGibqvytZK8WO5XGAw==
len+E+5STt4n0eAuH9i/XUKssC+rtcCT2C9z0zOFeF0L7c2A1G+QQ==
Gihg6e5j2tM2L9/h4p/TEfCJ3e3tjhkibBTPI9PqLmcqAB0NcbLqUxmDqy/So5Ab"
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-u7j5f7TYqp4Mx6cb/lrSJapdRyRQPoNlU7XktvAvJFq6bRS6FJcEYY2RnXFB2Q5v" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bswWzwu65fZ6F7td1ubS8q2P0DOJ4nbDzlZq0qGuvDHqIcHk9LhSHW2I/t9O5YO7" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js" integrity="sha384-vFJwASpB5CGibqvytZK8WO5XGAw==
len+E+5STt4n0eAuH9i/XUKssC+rtcCT2C9z0zOFeF0L7c2A1G+QQ==
Gihg6e5j2tM2L9/h4p/TEfCJ3e3tjhkibBTPI9PqLmcqAB0NcbLqUxmDqy/So5Ab"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bswWzwu65fZ6F7td1ubS8q2P0DOJ4nbDzlZq0qGuvDHqIcHk9LhSHW2I/t9O5YO7" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AgriTech</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("wallpaper.jpg");
        }
        body::before {
    color:rgb(125, 74, 11) ;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height:  3400px;
    background-color: rgba(0, 0, 0, 0.8); /* RGB color with alpha (0.5 for 50% opacity) */
  }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }
        .nav-item{
            color:bisque;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .profile-container {
            display: flex;
            align-items: center;
        }

        .profile-links {
            display: flex;
            align-items: center;
        }

        #profile-picture {
            background-image: url("about.jpg");
            max-width: 50px;
            border-radius: 50%;
            margin-right: 10px;
            width: 50px;
            height: 60px;
        }

        .login-container,
        .logout-container {
            background-color:white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
            opacity: 0.9;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        #logout {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
            display: none;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg " style="background-color: transparent">
    <div class="container-fluid">
        <!-- Navbar brand and toggle button -->
        <a class="navbar-brand" href="#"><h1 style="font-size: 50px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;"><b><span style="color:rgb(12, 44, 12);">Agri</span><span style="color:rgb(139, 83, 13)">Tech</span></b></h1></a></h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="margin-left:200px; color:bisque;">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html" style="color: rgb(218, 120, 9); opacity: 0.9;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.html" style="color: rgb(218, 120, 9); opacity: 0.9;">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Signin.css" style="color: rgb(218, 120, 9); opacity: 0.9;">Services</a>
                </li>
                <li class="nav-item">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Join Us
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><a class="dropdown-item" href="signin.php" style="text-decoration: none;" id="loginLink">Login</a></li>
            <li><a class="dropdown-item" href="signup.html" style="text-decoration: none;">Register</a></li>
            <li><a class="dropdown-item" href="signup.html" style="text-decoration: none;">Log out</a></li>
        </ul>
    </div>
</li>

            </ul>
        </div>
    </div>



        <div class="profile-container" id="profileContainer" style="opacity: 0.9;">
            <div class="profile-links">
                <span id="username">...</span>
                <a href="" id="loginLink" style="color: rgb(218, 120, 9); opacity: 0.9;">Login</a>
                <a href="#" id="logout" onclick="logout()" style="color: rgb(218, 120, 9); opacity: 0.9;">Logout</a>
                <a href="#" id="editProfileLink" style="color: rgb(218, 120, 9); opacity: 0.9;">Edit Profile</a>
            </div>
            <img id="profile-picture" src="/Images/about.jpg" alt="">
        </div>
        <input type="file" id="profilePictureInput" accept="image/*" style="display: none;">
    </nav>

    <div class="login-container" id="loginContainer">
        <h2>Login</h2>
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
    </div>


    
    <section id="hero" class="d-flex align-items-center" style="background-color: transparent;">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center" style="background-color: transparent; color: rgb(77, 46, 8); margin-top: 150px;" id="welcome">
              <h1 style="background-color: transparent; color: rgb(132, 77, 10); font-weight: bolder; font-size: 70px;">Welcome in <b><span style="color:rgb(195, 171, 15)">Agri</span><span style="color:rgb(139, 83, 13)">Tech</span></b> World!</h1>
              <h2><b>This is where Agriculture embraces Technology...</b></h2>
            </div>
          </div>
          <div class="text-center">
          <a href="signin.html" class="btn-get-started scrollto" style="background-color: rgb(53, 32, 5); margin-bottom: 100px;">
    <button id="getstarted" style="width: 200px; height: 50px; font-size: 20px;">Get Started</button>
</a>

          </div>
          <br>
          
    
          <br>
          <div class="row icon-boxes" style="margin-top: 40px;" >
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box" style="background-color:transparent; color:rgb(159, 115, 61); text-align: center; border: 6px solid rgb(54, 32, 6);">
                <!-- <div class="icon"><i class="ri-stack-line"></i></div> -->
                <h4 class="title" id="title"><a style="color: rgb(71, 73, 12); text-decoration: none; text-align: center; margin-left: 20px; font-weight: bolder; margin-bottom: 10px; font-size: 30px; padding-bottom: 20px;" href="" >Mission</a></h4>
                <p class="description" style="text-align: center; margin: 20px;">AgriTech Rwanda is dedicated to eliminating hunger and ensuring sustainable food security for all Rwandans. We connect buyers, sellers, and government policies through innovative solutions, empowering communities with the knowledge, tools, and resources they need to build a hunger-free future.</p>
              </div>
            </div>

            
    
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box" style="background-color:transparent; color:rgb(159, 115, 61); text-align: center; border: 6px solid rgb(54, 32, 6);">
                <!-- <div class="icon"><i class="ri-palette-line"></i></div> -->
                <h4 class="title"><a style="color: rgb(71, 73, 12); text-decoration: none; text-align: center; margin-left: 20px; font-weight: bolder; margin-bottom: 10px; font-size: 30px; padding-bottom: 20px;" href="">Vision</a></h4>
                <p class="description" style="text-align: center; margin: 30px;">A community where every citizen enjoys food security, with thriving local agricultural communities, sustainable practices, and access to nutritious, affordable food for a healthier and more prosperous future.</p>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon-box" style="background-color:transparent; color:rgb(159, 115, 61); text-align: center; border: 6px solid rgb(54, 32, 6);">
                <!-- <div class="icon"><i class="ri-command-line"></i></div> -->
                <h4 class="title"><a href="" style="color:  rgb(71, 73, 12); text-decoration: none; text-align: center; font-size: 30px; font-weight: bolder;">Goals</a></h4>
                <p class="description" style="text-align: center; margin: 20px;">We are focused on boosting agricultural productivity, optimizing food distribution, empowering farmers through education, promoting sustainable practices, fostering community engagement, advocating for supportive policies, and increasing access to nutritious food.</p>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon-box" style="background-color:transparent; color:rgb(159, 115, 61); text-align: center; border: 6px solid rgb(54, 32, 6); ">
                <!-- <div class="icon"><i class="ri-fingerprint-line"></i></div> -->
                <h4 class="title"><a href="" style="color:  rgb(71, 73, 12); text-decoration: none; text-align: center; font-size: 30px; font-weight: bolder; ">Principles</a></h4>
                <p class="description" style="text-align: center; margin: 15px;">Our project is built upon principles of integrity, collaboration, innovation, transparency, and continuous improvement. Upholding ethical standards, fostering teamwork, embracing creativity, maintaining open communication, and committing to ongoing enhancement guide our every decision. </p>
              </div>
            </div>
            <br>
            <br>
            
    
          </div>
        </div>
      </section>
      <br>
      <br>
      
        
        <div class="container2">
            <div class="Introduction">
                <h1>Our Aproach</h1>
                <p>Welcome to AgriTech! we aim to put an end to hunger in Rwanda. We believe that no one should go to bed hungry, and our mission is to connect the dots—buyers, sellers, and government policies—by providing knowledge, tools, and resources to empower local communities. Through education, innovative technology, and effective training, we're committed to creating a Rwanda where food security is not just a dream, but a tangible reality.</p>
                <br>
                <p>Join us in this transformative journey as we work tirelessly to make sure that every Rwandan has access to nutritious and affordable food. Together, we're building a brighter future where food security is a cornerstone of prosperity and well-being.</p>
                
                <p>With your support and involvement, we're building a brighter future, where every Rwandan has access to nutritious and affordable food. Together, we aim to transform the landscape of food security, making it a cornerstone of prosperity and well-being for all. We believe that by uniting our efforts, we can bring about meaningful change in Rwanda's food security and positively impact the lives of countless individuals and communities.</p>
            </div>
            <div class="Pic">
                <h1>Founder</h1>
                <img src="../Images/Founder.jpg"  alt="AgriTech Founder">
                <p>I'm Aloysie Murekatete, the founder of 'AgriTech'. I'm a dedicated advocate for food security and sustainability.</p>
            </div>
        </div> 
        
        

       
          <br>
         
          <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: -500px; opacity: 0.8;">
            <button id="button" class="btn btn-warning" type="button" ><a href="Services.html" style="text-decoration: none; color:black;  ">Market Access Assistance</a></button>
            <button id="button" class="btn btn-warning" type="button"><a href="Services.html" style="text-decoration: none; color:black;  ">Explore Our Educational Programs</a></button>
            <button id="button" class="btn btn-warning" type="button"><a href="Services.html" style="text-decoration: none; color:black;  ">Explore our Resources</a></button>
            <button id="button" class="btn btn-warning" type="button"><a href="Services.html" style="text-decoration: none; color:black;  ">Collaboration with the Government</a></button>
          </div>
          <br>
          
          <br>
          <br>
          <h2 style="color: rgb(219, 147, 15); font-weight: bolder;font-size: 50px; text-align: center; opacity: 0.9; margin-right: 100px;"><b>Contact Us</b></h2>
          <br>
          <form  id="form" class="row g-3" bgcolor="transparent" style="width: 800px; align-items: center; margin-left: 100px; color: azure; background-color:transparent; margin-top: 50px; background-image: url(/Images/contact.png);">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"  >Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            
            <div class="col-md-3">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-3">
              <label for="inputState" class="form-label">Province</label>
              <select id="inputState" class="form-select">
                <option selected>Kigali City</option>
                <option selected>Eastern Province</option>
                <option selected>Northern Province</option>
                <option selected>Southern Province</option>
                <option selected>Western Province</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputZip" class="form-label">Phone number</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Message</label>
                <input type="text" class="form-control" style="height: 60px;" id="inputAddress2" placeholder="Give us a comment  or a suggestion">
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
              <button type="submit" class="btn btn-warning" style="margin-left: 300px; width: 180px; opacity: 0.8; display: flex;">Submit Comment</button>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-warning" style="margin-left: 300px; width: 180px; opacity: 0.8;display: flex;">Submit Suggestion</button>
            </div>
          </form>
          <div class="container3">
            <!-- <h2>Reach out to Us via;</h2> -->
            <div class="box1">
              <a href="#" target="_blank" class="i" >
                <i class='bx bxl-facebook-circle'></i>
              </a>
            </div>
            <div class="box1" >
              <a href="#" target="_blank" class="i">
              <i class='bx bxl-instagram-alt' id="insta" ></i>
            </a>
          </div>
          <div class="box1">
            <a href="#" target="_blank" class="i" id="twitter">
            <i class='bx bxl-twitter' ></i>
          </a>
        </div>
        <div class="box1">
          <a href="#" target="_blank" class="i" id="email">
          <i class='bx bx-envelope' ></i>
        </a>
      </div>
        </div>
      <br>
      <br>
      <footer>
        <div class="footer">
          <div class="footer1">
          <div class="footer-content">
            <h3>About Us</h3>
            <p>We are a team of dedicated farmers and farmers with years of experience. We are here to support you in your journey of food security. </p>
            <ul class="socials">
              <li><a href="#"><i class='bx bxl-facebook-circle' ></i></a></li>
              <li><a href="#"><i class='bx bxl-instagram-alt' ></i></a></li>
              <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
            </ul>
          </div>
          <div class="footer-content">
            <h3>Contact Us</h3>
            <ul class="address">
              <li><i class='bx bxs-map'></i>AgriTech</li>
              <li><i class='bx bxs-phone'></i>(+250) 788 123 456</li>
              <li><i class='bx bxs-envelope'></i>agritech@gmail.com</li>
            </ul>
          </div>
          <div class="footer-content">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="Home.html">Home</a></li>
              <li><a href="About.html">About Us</a></li>
              <li><a href="Services.html">Sevices</a></li>
              <li><a href="Signup.html">Join Us</a></li>
            </ul>
          </div>
          </div>
        </div>

        <div class="footer1" id="copyright">
            <p>copyright &copy;2022 AgriTech. designed by <span>AgriTech</span></p>
        </div>
      </div>



      </footer>
       <!-- Your sign-in form and other HTML content -->

<!-- Place this script in the head or before the closing body tag -->

<script>
  // Function to handle user login
  function loginUser(email, password, userType) {
    // Assume you have an API endpoint for user authentication
    // Send a request to your backend to check user credentials
    // If successful, set user information and update UI
    // Replace this with actual API call
    // ...

    // Example: Set user information
    const user = {
      username: 'JohnDoe',
      profilePicture: '/Images/profile.jpg',
    };

    // Update UI
    updateUIOnLogin(user);
  }

  // Function to handle user logout
  function logoutUser() {
    // Clear user information and update UI
    clearUser();
  }

  // Function to handle editing user profile
  function editProfile() {
    // Assume you have a separate edit profile page
    // Redirect the user to the edit profile page
    window.location.href = 'edit-profile.html';
  }

  // Function to update UI when user logs in
  function updateUIOnLogin(user) {
    // Update profile container
    document.getElementById('username').innerText = user.username;
    document.getElementById('profile-picture').src = user.profilePicture;

    // Show/hide login and logout links
    document.getElementById('loginLink').style.display = 'none';
    document.getElementById('logout').style.display = 'block';
    document.getElementById('editProfileLink').style.display = 'block';
  }

  // Function to clear user information and update UI on logout
  function clearUser() {
    // Clear user information
    // ...

    // Update UI
    document.getElementById('username').innerText = '...';
    document.getElementById('profile-picture').src = '/Images/about.jpg';

    // Show/hide login and logout links
    document.getElementById('loginLink').style.display = 'block';
    document.getElementById('logout').style.display = 'none';
    document.getElementById('editProfileLink').style.display = 'none';
  }

  // Function to handle form submission (login)
  function submitLoginForm(event) {
    event.preventDefault();

    const email = document.getElementById('inputEmail3').value;
    const password = document.getElementById('inputPassword3').value;
    const userType = document.querySelector('input[name="user_type"]:checked').value;

    // Call the login function
    loginUser(email, password, userType);
  }

  // Add an event listener to the login form
  document.getElementById('loginForm').addEventListener('submit', submitLoginForm);
</script>


<!-- Your other HTML content -->

   

<script src="/Js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>
<!-- Bootstrap JS and Popper.js scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js" integrity="sha384-vFJwASpB5CGibqvytZK8WO5XGAw==
len+E+5STt4n0eAuH9i/XUKssC+rtcCT2C9z0zOFeF0L7c2A1G+QQ==
Gihg6e5j2tM2L9/h4p/TEfCJ3e3tjhkibBTPI9PqLmcqAB0NcbLqUxmDqy/So5Ab"
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-u7j5f7TYqp4Mx6cb/lrSJapdRyRQPoNlU7XktvAvJFq6bRS6FJcEYY2RnXFB2Q5v" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bswWzwu65fZ6F7td1ubS8q2P0DOJ4nbDzlZq0qGuvDHqIcHk9LhSHW2I/t9O5YO7" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js" integrity="sha384-vFJwASpB5CGibqvytZK8WO5XGAw==
len+E+5STt4n0eAuH9i/XUKssC+rtcCT2C9z0zOFeF0L7c2A1G+QQ==
Gihg6e5j2tM2L9/h4p/TEfCJ3e3tjhkibBTPI9PqLmcqAB0NcbLqUxmDqy/So5Ab"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bswWzwu65fZ6F7td1ubS8q2P0DOJ4nbDzlZq0qGuvDHqIcHk9LhSHW2I/t9O5YO7" crossorigin="anonymous"></script>
</body>
</html>
