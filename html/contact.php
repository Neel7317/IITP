<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Contact us | COEs</title>

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">
  <link rel="icon" type="image/x-icon" href="images/iitp.png">


  <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header> <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 text-sm">
          <p onclick="location.href='index.php'"><img src="images/iitp.png" style="width:300px; height:100px;"></p>
         
        </div>
        <div class="col-sm-4 text-right text-sm">
          <div class="social-mini-button">
            <a href="#"><img src="images/min.png" width="130px"></a>
            <a href="#"><img src="images/iitp.svg" width="130px"></a>
          
          </div>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .topbar -->

  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
      

       

      <button class="navbar-toggler" style="" type="button" data-toggle="collapse"
       data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-ite">
            <a class="nav-lnk" href="index.php">Home</a>
          </li> -->
          <li class="nav-itm">
            <a class="nav-lnk" href="about.php">About Us</a>
          </li>
          <li class="nav-iem">
            <a class="nav-ink" href="https://www.iitp.ac.in/index.php/en-us/">IITP</a>
          </li>
       
          <li class="nav-tem">
            <a class="navlink" href="contact.php">Contact us</a>
          </li>
          <!-- <li class="nav-item">
            <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
          </li> -->
        </ul>
      </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
  </nav>
</header>


<style>
  .logod{
      margin-left: 30%;
  }
   .logo {
margin: 1;
margin-left: 3%;   
width: 100px;     
    

}

ul {
  list-style-type: none;
  margin: 0;
  padding: 15px;
  overflow: hidden;
  
}

li {
  float: left;
}

li a {

    margin-top: 20px;

    font-family: 'nunito', sans-serif;
    font-size: 25px;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: none;
   color: rgb(187, 69, 14);
   
  text-decoration: none;
}
li a:hover.active {
  background-color: none;
  color: black;
  text-decoration: none;
}

.active {
  background-color: none;
  text-decoration: none;

}


@media only screen and (max-width: 600px) {
    .logod{
        width: 45%;
      
  }
   .logo {
 

     
    

}

    ul.topnav li.right, 
ul.topnav li {float: none;}

.logo {
    width:70px; 
    padding: 5px;
    float:right;

}
li a:hover {
  background-color: none;
   color: orange;
   
  text-decoration: none;
}

}
</style>

  <div class="page-banner bg-image" style="background-image: url(images/1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <!-- <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav> -->
        <h1 class="font-weight-normal" style="color: black;">Centre of Excellence in Govt.Polytechnics of Bihar with IIT Patna</h1>
      
        <div class="site-info">
          <a href="#" style="color: rgb(0, 0, 0);"><span  class="mai-call text-primary">

          </span> 612-3028156 </a>
          <span class="divider">|</span>
          <a href="#" style="color: rgb(3, 3, 3);style="color: azure;style="color: azure;style="color: azure;style="color: azure;style="color: azure;v><span class="mai-mail text-primary"></span>
            pic_tbi@iitp.ac.in</a>
        </div>
      </div>
       <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Contact Us</h1>

      <form class="contact-form mt-5">
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" class="form-control" placeholder="Full name..">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Enter subject..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
          </div>
        </div>
        <button type="submit" class="but">Send Message</button>
      </form>
    </div>
  </div>

  <style>
    .but {
      padding: 10px 15px;
      font-size: 24px;
      text-align: center;
      cursor: pointer;
      outline: none;
      color: #fff;
      background-color: #00487e;
      border: none;
      border-radius: 15px;
      box-shadow: 0 5px #999;
    }
    
    .but:hover {background-color: #1c6faf}
    
    .but:active {
      background-color: #ec6f3d;
      box-shadow: 0 1px #666;
      transform: translateY(4px);
    }
    </style>

  <!-- <div class="maps-container wow fadeInUp">
    <div id="google-maps"></div>
  </div> -->

     <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          
        </div>
        
      </div>
    </div>
  </div> 
  
  
  <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <!-- <h5>Company</h5> -->
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">	Mission</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
         
          <ul class="footer-menu">
             
           
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
         
          <ul class="footer-menu">
             
             
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Registered office</h5>
          <p class="footer-link mt-2">5th FLOOR (LEFT), BLOCK-9, INDIAN

            INSTITUTE OF TECHNOLOGY
            
            PATNA,BIHTA, PATNA 801106</p>
          <a href="#" class="footer-link">612-3028156,</a>
          <a href="#" class="footer-link">info_tbi@iitp.ac.in</a>

          <!-- <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div> -->
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> COEs Bihar <a href="" target="_blank">IIT Patna</a>. All right reserved</p>
    </div>
  </footer>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>