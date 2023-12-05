
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CSS/css/">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/CSS/services.css">
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
    height: 5430px;
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
                <a class="nav-link active" aria-current="page"  href="trial.php"style="color: rgb(218, 120, 9); opacity: 0.9;" href="index.html">Home</a>
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
                      <a href="cussignin.html" style="text-decoration: none;"><li><button class="dropdown-item" id="dropdown-item" type="button">Sign in</button></li></a>
                      <a href="cussignup.html" style="text-decoration: none;"><li><button class="dropdown-item" id="dropdown-item" type="button">Sign up</button></li></a>
                      
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
              <h1 style="background-color: transparent; color: rgb(132, 77, 10); font-weight: bolder; font-size: 70px;">Welcome to<b><span style="color:rgb(195, 171, 15)">Agri</span><span style="color:rgb(139, 83, 13)">Tech</span></b> Services page!</h1>
              <h2><b>Explore more about our services...</b></h2>
            </div>
          </div>
          <div class="text-center">
          <a href="signin.php" class="btn-get-started scrollto" style="background-color: rgb(53, 32, 5); margin-bottom: 100px;"></a>
          <br>
          <br>

          <p style="text-align: center; color: rgb(151, 88, 11) ;font-size: 20px; opacity: 0.9; margin: 100px; margin-top: 40px; margin-bottom: -10px;">We offer a comprehensive suite of services designed to address food insecurity in Africa. Our services are tailored to the specific needs of small-scale farmers, enabling them to increase their productivity, improve their livelihoods, and contribute to a food-secure Africa.</p>
          <br>
          
            
          
          <div class="row row-cols-1 row-cols-md-2 g-4" style="margin: 100px; margin-top: 0px; margin-bottom: 550px;">
            <div class="col">
              <div class="card" id="card">
                <img src="service1.webp" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: rgb(55, 34, 8); color: rgb(148, 89, 17);">
                  <h5 class="card-title" >Resource Access</h5>
                  <p class="card-text">Our Resource Access service connects small-scale farmers with agricultural suppliers, providing them with essential resources like modern farming equipment, quality seeds, and fertilizers. This direct access to resources empowers farmers to adopt sustainable and efficient farming practices, enhancing their crop yields and overall productivity.

                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" id="card">
                <img src="service2.jpg" style="height: 340px;" class="card-img-top" alt="..." id="service">
                <div class="card-body" style="background-color: rgb(55, 34, 8); color: rgb(148, 89, 17);">
                  <h5 class="card-title">Market Access</h5>
                  <p class="card-text">The Market Access service establishes an online marketplace that connects farmers directly with buyers, including food distributors, who then deliver the food to customers across the continent. This innovative approach reduces post-harvest losses, optimizes food allocation, and ensures equitable food distribution across the country.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" id="card">
                <img src="service3.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: rgb(55, 34, 8); color: rgb(148, 89, 17);">
                  <h5 class="card-title">Education and Capacity Building</h5>
                  <p class="card-text">Our Education and Capacity Building service provides comprehensive training and education to small-scale farmers, covering sustainable agricultural practices, financial literacy, business skills development, and market access strategies. This empowerment enables farmers to make informed decisions about their livelihoods and contribute to the overall food security of their communities.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" id="card">
                <img src="Service4.jpeg" style="height: 260px;" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: rgb(55, 34, 8); color: rgb(148, 89, 17);">
                  <h5 class="card-title" style="margin-left: 30px;">Farmers Support</h5>
                  <p class="card-text" style="color: rgb(179, 103, 10); margin-right: 20px; margin-left: 30px;">Transform dreams into reality! We're on a mission to help farmers thrive by unlocking funds and sponsorship opportunities. Let's cultivate success together – because your farm's potential deserves to blossom!We are a passionate team dedicated to empowering farmers, transforming their aspirations into tangible realities by providing access to vital funding and sponsorship opportunities in our societies and make  a remarkable change. </p>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: -500px; opacity: 0.8;">
            <button id="button" class="btn btn-primary" type="button">Market Access Assistance</button>
            <button id="button" class="btn btn-primary" type="button">Explore Our Educational Programs</button>
            <button id="button" class="btn btn-primary" type="button">Explore our Resources</button>
            <button id="button" class="btn btn-primary" type="button">Collaboration with the Government</button>
          </div>
          <br>
          <!-- ... (Previous HTML Code) ... -->

<!-- Services Sections with Left Float for Picture and Right Float for Information -->
<!-- Market Access Assistance Section -->
<div class="service-section" id="marketAccessSection" style="background-color:transparent; padding:10px 0;border: 3px solid rgb(211, 123, 15); margin: 50px;">
  <img src="Market.jpg" alt="Market Access Image" style="float: left; margin-right: 20px; width: 400px; height: 500px;">
  <div style="float: right; width: 60%;">
      <h2 style="color:rgb(211, 123, 15); font-weight: bold; margin: 40px; font-size: 30px;">Market Access Assistance</h2>
      <p style="color:rgb(101, 60, 10); font-weight: bold; margin: 30px; font-size: 19px;">
          Our Market Access Assistance service aims to connect farmers directly with buyers. 
          We facilitate secure and efficient transactions, ensuring fair prices for farmers 
          and a streamlined process for buyers. Explore this section to learn more about 
          our market access initiatives and how we are transforming the agricultural marketplace.
      </p>
      <p style="color:rgb(101, 60, 10); font-weight: bold; margin: 30px; font-size: 19px;">
          <strong>How It Works:</strong> Through our platform, farmers can showcase their 
          produce, and buyers can browse listings. The platform handles secure transactions, 
          ensuring a fair deal for both parties. We believe in creating a marketplace that 
          benefits everyone in the agricultural ecosystem.
      </p>
      <!-- Add more content as needed -->
  </div>
  <div style="clear: both;"></div> <!-- Clearing float for proper layout -->
</div>

<!-- Explore Our Educational Programs Section -->
<div class="service-section" id="educationalProgramsSection" style="background-color:transparent; padding:10px 0;border: 3px solid rgb(211, 123, 15); margin: 50px;">
  <img src="education.jpg"  alt="Educational Programs Image" style="float: left; margin-right: 20px; width: 400px; height: 500px;">
  <div style="float: right; width: 60%;">
      <h2 style="color:rgb(211, 123, 15); font-weight: bold; margin: 40px; font-size: 30px;">Explore Our Educational Programs</h2>
      <p style="color:rgb(101, 60, 10); font-weight: bold; margin: 20px; font-size: 20px;">
          Our educational programs are designed to empower farmers with the knowledge 
          and skills needed for sustainable and efficient farming practices. 
          Dive into this section to discover the various training modules, workshops, 
          and resources we offer to support farmers on their journey towards success.
      </p>
      <p style="color:rgb(101, 60, 10); font-weight: bold; margin: 20px; font-size: 20px;">
          <strong>Key Features:</strong> From online courses to on-site workshops, 
          our educational programs cover a wide range of topics. Farmers can access 
          resources on modern farming techniques, crop management, and sustainable practices.
      </p>
      <!-- Add more content as needed -->
  </div>
  <div style="clear: both;"></div> <!-- Clearing float for proper layout -->
</div>

<!-- Explore Our Resources Section -->
<div class="service-section" id="exploreResourcesSection" style="background-color:transparent; padding:10px 0;border: 3px solid rgb(211, 123, 15); margin: 50px;  ">
  <img src="ressources.jpg" alt="Explore Resources Image" style="float: left; margin-right: 20px; width: 400px; height: 500px;">
  <div style="float: right; width: 60%;">
      <h2 style="color:rgb(211, 123, 15); font-weight: bold; margin: 40px; font-size: 30px;"> Explore our Resources</h2>
      <p  style="color:rgb(101, 60, 10); font-weight: bold; margin: 30px; font-size: 19px;">
          Delve into our rich repository of resources aimed at enhancing agricultural 
          productivity. From modern farming equipment to informational guides, 
          this section provides valuable resources to farmers. Explore the diverse set 
          of tools and materials that can contribute to the success of your farming endeavors.
      </p>
      <p style="color:rgb(101, 60, 10); font-weight: bold; margin: 30px; font-size: 19px;">
          <strong>Available Resources:</strong> Our platform offers access to a variety 
          of resources, including farming equipment, quality seeds, fertilizers, and more. 
          We believe that providing farmers with the right tools is essential for their success.
      </p>
      <!-- Add more content as needed -->
  </div>
  <div style="clear: both;"></div> <!-- Clearing float for proper layout -->
</div>

<!-- Government Engagement Section -->
<div class="service-section" id="governmentEngagementSection" style="background-color:transparent; padding:10px 0;border: 3px solid rgb(211, 123, 15); margin: 50px;">
  <img src="Goverment.jpg" alt="Government Engagement Image" style="float: left; margin-right: 20px; width: 400px; height: 500px;">
  <div style="float: right; width: 60%;">
      <h2 style="color:rgb(211, 123, 15); font-weight: bold; margin: 40px; font-size: 30px;">Government Engagement</h2>
      <p style="color:rgb(101, 60, 10); font-weight: bold; margin: 30px; font-size: 19px;">
          At AgriTech, we recognize the crucial role of government policies in shaping 
          the agricultural landscape. We actively engage with government authorities 
          to align our initiatives with national agricultural goals and policies.
      </p>
      <p style="color:rgb(101, 60, 10); font-weight: bold; margin: 30px; font-size: 19px;">
          <strong>Collaborative Efforts:</strong> We collaborate with government agencies 
          to implement programs that address food security, sustainable agriculture, 
          and the overall well-being of farming communities. Together, we strive to create 
          a resilient and thriving agricultural sector.
      </p>
      <!-- Add more content as needed -->
  </div>
  <div style="clear: both;"></div> <!-- Clearing float for proper layout -->
</div>
<h2 style="text-align: center; margin-top: 50px; font-size: 30px; color: rgb(109, 65, 10);" >Fill this form to request a service</h2>
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
      <label for="inputAddress2" class="form-label">Request</label>
      <input type="text" class="form-control" style="height: 60px;" id="inputAddress2" placeholder="Request a desired service">
    </div>
  <div class="col-12">
    <button type="submit" class="btn btn-warning" style="margin-left: 300px; width: 180px; opacity: 0.8; display: flex;">Submit Request</button>
  </div>
</form>
<!-- ... (Remaining HTML Code) ... -->

          
      <br>
      <footer>
        <div class="footer" style="margin-left: -100px;">
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