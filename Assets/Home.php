<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriTech Website</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CSS/css/">
    <link rel="stylesheet" href="/CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* body{
    background-image: url("/Images/Wallpaper.jpg");
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
    height: 3330px;
    background-color: rgba(0, 0, 0, 0.8); /* RGB color with alpha (0.5 for 50% opacity) */
/* }
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
} */
/* #button :hover{
    background-color: rgb(66, 38, 5);
    color: rgb(186, 112, 21);
    border-color: rgb(27, 20, 12);
}
#button ::after{
    background-color: rgb(80, 47, 6);
    color: rgb(95, 57, 10);
    border-color: rgb(27, 20, 12);
} */
#card{
    border: 10px solid rgb(66, 41, 10);
}
.form-label{
    color: rgb(230, 144, 24);
    background-color: black;
    opacity: 0.8;
}
#form{
    color: rgb(230, 144, 24);
    background-color: black;
    opacity: 0.8;
    cursor: pointer;
    border: 3px solid rgb(66, 41, 10);
    padding: 20px;
    box-shadow: 5px 5px 5px 5px rgb(50, 29, 3);
}
.container3{
  display:inline-block;
  bottom:0;
  position: relative;
  float: right;
  margin-top: -550px;
  margin-right: 250px;
  
}
.box1{
  color:aqua;
  width: 30px;
  font-size: 70px;
  margin: 30px;
  
}
.box1 #insta {
  color: rgb(177, 11, 66);
}
.box1 #email{
  color: rgb(237, 140, 84);
}
.box1 #twitter{
  color: rgb(117, 193, 237);
}
.container3 h2{
  color: rgb(77, 44, 5);

}
footer{
  margin-bottom: -100px;
  position: relative;
  bottom: 0;
}
.footer{
  background-color: black;
  opacity: 0.9;
  color: rgb(146, 93, 23);
  display: flex;
  height: 310px;
  margin-top: 200px;
  width:1500px;
  bottom: 0;
  position: relative;

}
.footer-content{
  width: 400px;
  margin: 50px;
}
.footer-bottom{
  background-color: black;
  color:gray;
  text-align: center;
  margin-left: 500px;
  margin-top: -10px;
  opacity: 0.8;
  width: 400px;
}
.footer1{
  display: flex;
}
#copyright{
  margin-top: -30px;
  opacity: 0.9;
margin-left: 500px;
color: rgb(146, 85, 10);
bottom: 0%;
}
.socials{
  display: block;
}
.card-img-top::before {
  color:rgb(125, 74, 11) ;
  content: "";
  width: 100%;
  background-color: rgba(0, 0, 0, 0.9); /* RGB color with alpha (0.5 for 50% opacity) */
}
.col-12 .btn{
  display: block;
}

#carouselExampleControls{
  background-image: url("/Images/pp.png" );
  width: 1480px;
  height: 500px;
  background-size: cover;
  z-index: 5000rem;
  margin-top: 50px;
  left: 0;
  right: 0;
  animation: moveBackground 10s linear infinite;
  opacity: 0.7;
  
}

#carouselExampleControls::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8); /* RGB color with alpha (0.5 for 50% opacity) */
  margin-bottom: 400px;
}

@keyframes moveBackground {
  0% { background-position: 0 0; }
  100% { background-position: 100% 100%; }
}

.Bala{
  background-image: url("/Images/Balanced.jpg");
  width:500px;
  height: 620px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-size: 20px;
  color: rgb(140, 86, 21);
  background-size:cover;
  background-position-y:130px ;
  background-repeat: no-repeat;
  box-shadow: 10px 0px 15px rgba(0, 0, 0, 100);
  /* animation: moveBackground 40s linear infinite; */

}

.Bala P {
  text-align: center;
  color: rgb(223, 163, 84);
  margin-top: 360px;
  margin-left:50px;
  margin-right: 50px;
 

}
.Bala h1{
  color:rgb(209, 122, 15);
  background-color: black;
}
#slide{
  
  height: 150rem;
  align-items: center;
  margin-right: 100px;
}
#container{
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  gap: 0px 0px;
  justify-items: center;
  align-items: center;
  margin-top:0px;
  
}
#Mission, #Vision,.Bala{
  width:500px;
  height: 500px;
  box-shadow: 5px 5px 10px rgba(0.8, 0, 0, 100);
}
#Mission{
  background-image: url("../Images/Tomatoes.jpg");
  background-size:cover;
  background-position-y:0px ;
  background-repeat: no-repeat;
}
#Mission h1, #Vision h1{
  text-align: center;
  color: rgb(232, 149, 26);
}
#Mission p, #Vision p, .Bala p{
  color:rgb(187, 151, 96);
  font-size: 18px;
  text-align: center;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  margin-top: 40px;
}
#Vision{
  background-image: url("../Images/Vision.jpg");
  background-size:cover;
  background-position-y:0px;
  background-repeat: no-repeat;
  
 
}
#Vision, .Bala, #Mission{
  margin-left: 450px;
}

.card-title{
  text-align: center;
  color: rgb(177, 76, 14);
  font-weight: bolder;
}
.nav-link {
    color: black; /* Change the color to your preferred visible color */
    opacity: 0.9;
    transition: all 0.3s ease-in;
    transform: scale(1.0);
    transform-style: preserve-3d;
    text-shadow: 2px 2px 2px rgb(55, 27, 6);
    font-weight: bolder;
}

.nav-link:hover {
    color: black;
    opacity: 0.9;
    transition: all 0.3s ease-in;
    transform: scale(1.2);
    transform-style: preserve-3d;
    text-shadow: 2px 2px 2px rgb(55, 27, 6);
    font-weight: bolder;
}
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            color: red;
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        nav a {
            color: red;
            text-decoration: none;
            margin: 0 10px;
        }

        .profile-container {
            display: flex;
            align-items: center;
        }

        #profile-picture {
            max-width: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-links {
            display: flex;
            align-items: center;
        }

        .profile-links a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            cursor: pointer;
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
        nav li{
            color: white;
        } */
    </style>
</head>

<body style="background-image: url('/Images/wallpaper.jpg');">
    <nav style="background-color:bisque;">
        <div class="container-fluid" id ="nav">
          <a class="navbar-brand" href="#"><h1 style="font-size: 50px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;"><b><span style="color:rgb(12, 44, 12);">Agri</span><span style="color:rgb(139, 83, 13)">Tech</span></b></h1></a></h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown"  >
            <ul class="navbar-nav" >
              <li class="nav-item" >
                <a  class="nav-link active" aria-current="page" style="color: rgb(218, 120, 9); opacity: 0.9;" href="index.html">Home</a>
              </li>
              <li class="nav-item" >
                <a class="nav-link active" href="About.html" style="color: rgb(215, 118, 7);">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Signin.css" style="color: rgb(222, 125, 14);">Sevices</a>
              </li>
              <li class="nav-item">
                
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                      Join Us
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <a href="signin.html" style="text-decoration: none;"><li><button class="dropdown-item" id="dropdown-item" type="button">Sign in</button></li></a>
                      <a href="signup.html" style="text-decoration: none;"><li><button class="dropdown-item" id="dropdown-item" type="button">Sign up</button></li></a>
                      
                    </ul>
                  </div>
              </li>
              <li>
              <div class="profile-container" id="profileContainer">
            <img id="profile-picture" src="path/to/default_profile_picture.jpg" alt="Profile Picture">
            <div class="profile-links">
                <span id="username"></span>
                <a href="#" id="loginLink">Login</a>
                <a href="#" id="logout" onclick="logout()">Logout</a>
                <a href="#" id="editProfileLink">Edit Profile</a>
            </div>
              </li>
            </ul>
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

    <section id="hero" class="d-flex align-items-center" style="background-color: transparent;">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center" style="background-color: transparent; color: rgb(77, 46, 8); margin-top: 150px;"
                    id="welcome">
                    <h1 style="background-color: transparent; color: rgb(132, 77, 10); font-weight: bolder; font-size: 70px;">Welcome in
                        <b><span
                                style="color:rgb(195, 171, 15)">Agri</span><span
                                style="color:rgb(139, 83, 13)">Tech</span></b> World!</h1>
                    <h2><b>This is where Agriculture embraces Technology...</b></h2>
                </div>
            </div>
            <div class="text-center">
          <a href="signin.html" class="btn-get-started scrollto" style="background-color: rgb(53, 32, 5); margin-bottom: 100px;">
    <button id="getstarted" style="width: 200px; height: 50px; font-size: 20px;">Get Started</button>
</a>

          </div>
        </div>
    </section>

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

<script>
  // Assume you have a function that handles the sign-in logic and sets a variable
  // indicating whether the sign-in was successful or not. For example:
  function signIn() {
    // Perform sign-in logic here
    // If sign-in is successful, set a variable, e.g., isLoggedIn, to true
    var isLoggedIn = true;

    // Check if the sign-in was successful
    if (isLoggedIn) {
      // Redirect to the designed page (replace 'designed_page.html' with your actual page)
      window.location.href = 'Services.html';
    }
  }

  // Add an event listener to the sign-in button or form submission
  document.getElementById('signInButton').addEventListener('click', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Call the signIn function when the user clicks the sign-in button
    signIn();
  });
</script>

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

                // Store
                                // Store login status and username in local storage
                                localStorage.setItem("loggedIn", "true");
                localStorage.setItem("username", username);

                // Hide the login container
                loginContainer.style.display = "none";
            });

            // Logout function
            window.logout = function () {
                // Remove login status and username from local storage
                localStorage.removeItem("loggedIn");
                localStorage.removeItem("username");

                // Hide profile container and show login link
                profileContainer.style.display = "none";
                loginLink.style.display = "block";
                editProfileLink.style.display = "none"; // Hide the edit profile link after logout
            };

            // Example: You can add an event listener for the "Edit Profile" link
            editProfileLink.addEventListener("click", function () {
                // Redirect or show the edit profile page
                alert("Redirecting to Edit Profile page");
            });
        });
    </script>

    <!-- Bootstrap JS and other script references -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pzjw8+ua/c0Gxj1jQ5vj7v+weOpSqjwVq2+8p98eFx6H5Pa6IBDTK1cvm3KZK3bP"
        crossorigin="anonymous"></script>
    <!-- Other scripts -->

</body>

</html>

