
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriTech Website</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CSS/css/">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="About.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <style>
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
    height: 4430px;
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
  background-image: url("pp.png" );
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
  background-image: url("Balanced.jpg");
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
  background-image: url("Tomatoes.jpg");
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
  background-image: url("Vision.jpg");
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

    <nav class="navbar navbar-expand-lg  " style="background-color: transparent;"  id="navbar">
        <div class="container-fluid" id ="nav">
          <a class="navbar-brand" href="#"><h1 style="font-size: 50px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;"><b><span style="color:rgb(12, 44, 12);">Agri</span><span style="color:rgb(139, 83, 13)">Tech</span></b></h1></a></h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style=" color: rgb(127, 78, 18); opacity: 0.9;" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown" style="color: aliceblue;" >
            <ul class="navbar-nav" >
              <li class="nav-item" >
                <a class="nav-link active"href="trial.php"  aria-current="page" style="color: rgb(218, 120, 9); opacity: 0.9;" href="index.html">Home</a>
              </li>
              <li class="nav-item" >
                <a class="nav-link active" href="About.php" style="color: rgb(215, 118, 7);">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Services.php" style="color: rgb(222, 125, 14);">Sevices</a>
              </li>
              <li class="nav-item">
                
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                      Join Us
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <a href="cussignin.php" style="text-decoration: none;"><li><button class="dropdown-item" id="dropdown-item" type="button">Sign in</button></li></a>
                      <a href="cussignup.php" style="text-decoration: none;"><li><button class="dropdown-item" id="dropdown-item" type="button">Sign up</button></li></a>
                      
                    </ul>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section id="hero" class="d-flex align-items-center" style="background-color: transparent;">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center" style="background-color: transparent; color: rgb(77, 46, 8); margin-top: 150px;" id="welcome">
              <h1 style="background-color: transparent; color: rgb(132, 77, 10); font-weight: bolder; font-size: 70px;">Welcome to <b><span style="color:rgb(195, 171, 15)">Agri</span><span style="color:rgb(139, 83, 13)">Tech</span></b> About Us Page!</h1>
              <h2><b>Get to know more about us...</b></h2>
            </div>
          </div>
          <div class="text-center">
          <a href="signin.php" class="btn-get-started scrollto" style="background-color: rgb(53, 32, 5); margin-bottom: 100px;"></a>
          <br>
          <br>
         
          <br>
        <p style="text-align: center; color: rgb(151, 88, 11) ;font-size: 20px; opacity: 0.9; margin: 100px; margin-top: -20px; margin-bottom: -10px;">We are a passionate team dedicated to tackling food insecurity in Africa. We believe that everyone has the right to access nutritious and affordable food. Our platform is designed to connect small-scale farmers with the resources they need to thrive, boost agricultural productivity, and ensure equitable food distribution across the continent.</p>

    
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
                <img src="Founder.jpg"  alt="AgriTech Founder">
                <p>I'm Aloysie Murekatete, the founder of 'AgriTech'. I'm a dedicated advocate for food security and sustainability.</p>
            </div>
        </div> 
        
        

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top: -550px;" margin-bottom: 400px>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div id="Mission">
                <h1>Cultivating Success</h1>
                <p>Farmers are the cornerstone of our food systems, yet they often face obstacles that hinder their potential. At Farmers Support, we empower farmers by providing them with essential resources, connecting them directly to buyers, and equipping them with the knowledge and skills to succeed.</p>
            </div>
            </div>
            <div class="carousel-item">
              <div id="Vision">
                <h1> Ensuring Equitable Access</h1>
                <p>Our innovative Market Access platform revolutionizes food distribution by connecting farmers directly to buyers, including food distributors. This approach minimizes post-harvest losses, optimizes food allocation, and ensures that surplus food reaches areas facing shortages. Farmers gain market access, secure fair prices, and contribute to a more equitable food system.</p>
            </div>
            </div>
            <div class="carousel-item">
              <div class="Bala">
                <h1>Building a Sustainable Future</h1>
                <p>Through strategic partnerships with food distributors, we facilitate direct market access for farmers, reducing post-harvest losses and ensuring efficient surplus food distribution. </p>
          
            </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
          <br>
          <br>

          <!-- Sustainability Initiatives -->
<section id="sustainability" style="background-color:transparent; padding:10px 0; border: 3px solid rgb(211, 123, 15); margin: 50px;">
  <div class="container">
    <div class="row">
      <!-- Left Float - Image -->
      <div class="col-lg-6 ">
        <img src="sustainability.jpg" style="width: 400px; height: 500px;" alt="Sustainability Initiatives Image" class="img-fluid">
      </div>
      <!-- Right Float - Content -->
      <div class="col-lg-6" style="opacity:   0.9; ">
        <h2 class="text-center" style="color:rgb(211, 123, 15); font-weight: bold; margin: 40px; font-size: 30px;">Sustainability Initiatives</h2>
        <!-- Showcase any sustainability or environmental initiatives -->
        <p style="color:rgb(101, 60, 10); font-weight: bold; margin: 20px; font-size: 20px;">At AgriTech, we are deeply committed to sustainability and environmental responsibility. Our initiatives include:</p>
        <ul style="color:rgb(101, 60, 10); font-weight: bold; margin : 10px; font-size: 18px;">
          <li>Implementing eco-friendly farming practices to minimize environmental impact.</li>
          <li>Partnering with green energy providers to transition towards renewable energy sources.</li>
          <li>Reducing our carbon footprint by optimizing transportation and logistics.</li>
          <li>Investing in research and development for innovative, sustainable farming technologies.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Future Plans -->
<section id="future-plans"style="background-color:transparent; padding:10px 0;border: 3px solid rgb(211, 123, 15); margin: 50px;">
  <div class="container">
    <div class="row">
      <!-- Left Float - Image -->
      <div class="col-lg-6 mb-4">
        <img src="Future.jpg" style="width: 400px; height: 500px;" alt="Future Plans Image" class="img-fluid">
      </div>
      <!-- Right Float - Content -->
      <div class="col-lg-6" style="opacity:   0.9; ">
        <h2 class="text-center" style="color:rgb(211, 123, 15); font-weight: bold; margin: 40px; font-size: 30px;">Future Plans</h2>
        <!-- Provide a glimpse into the future by outlining upcoming projects, goals, or expansion plans -->
        <p style="color:rgb(101, 60, 10); font-weight: bold; margin: 20px; font-size: 20px;">Exciting things are in store for the future at AgriTech. Our upcoming plans include:</p>
        <ul style="color:rgb(101, 60, 10); font-weight: bold; margin : 10px; font-size: 18px;">
          <li>Expanding our platform to reach more remote areas and empower additional farmers.</li>
          <li>Introducing advanced training modules and resources for continuous learning.</li>
          <li>Forging new partnerships with government agencies and international organizations.</li>
          <li>Enhancing our technology infrastructure for improved user experiences and accessibility.</li>
        </ul>
        <p p style="color:rgb(101, 60, 10); font-weight: bold; margin: 20px; font-size: 17px;">We envision a future where AgriTech plays a pivotal role in transforming agriculture, ensuring food security, and fostering sustainable practices across Africa.</p>
      </div>
    </div>
  </div>
</section>
<h2 style="text-align: center; margin-top: 50px; font-size: 30px; color: rgb(109, 65, 10); opacity: 0.9;" >Fill this form to get in touch with us...</h2>
<form  id="form" class="row g-3" bgcolor="transparent" style="width: 800px; align-items: center; margin-left: 300px; color: azure; background-color:transparent; margin-top: 50px; background-image: url(/Images/contact.png);">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label"  >Full names</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputPassword4">
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
      <label for="inputAddress2" class="form-label">message</label>
      <input type="text" class="form-control" style="height: 60px;" id="inputAddress2" placeholder="Tell us anything that can help us get in touch ">
    </div>
  <div class="col-12">
    <button align="center" type="submit" class="btn btn-warning" style="margin-left: 300px; width: 200px; opacity: 0.8; display: flex; text-align: center;"><h6 style="text-align: center;">Submit</h3></button>
  </div>
</form>

          
          
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
      

    

<script src="/Js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>