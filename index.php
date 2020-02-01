<?php
session_start();
if(isset($_SESSION["login"]))
{
  header("location:all.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>PT. Sinergi Informatika Semen Indonesia</title>
    <link rel="icon" href="images/sisi.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
  
  <!-- SEARCH -->
  <div class="site-wrap">
    <div class="site-navbar bg-white py-2">
      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Masukkan Keyword Search . . .">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="" class="js-logo-clone">PT. Sinergi Informatika Semen Indonesia</a>
            </div>
          </div>
        
          <div class="main-nav d-none d-lg-block icons">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="has-children ">
                  <!-- <a href="">By Category</a>
                  <ul class="dropdown">
                    <li><a href="jaket.php">Jacket & Hoodie</a></li>
                    <li><a href="ts.php">Male</a></li>
                    <li><a href="tottebag.php">Female</a></li>
                    <li><a href="hats.php">Hats</a></li>
                  </ul> -->
                  <li class="has-children ">
                <li><a href="Login.php"> LOGIN <span class="icon-users"></span></a></li>
                  <!-- <ul class="dropdown">
                    <li><a href="auth/login.php">Login as Karyawan <span class="icon-users"></span></a></li>
                    <li><a href="auth/loginadmin.php">Login as Admin <span class="icon-wrench"></span></a></li> -->
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start title-section mb-5 col-12 title-section text-center mb-5 col-12">
            <div class="site-block-cover-content">
            <h1 class="site-navbar site-menu">Data karyawan frelance </h1>
            <h2> PT. Sinergi Informatika Semen Indonesia</h2>
            </div>
          </div>
     
          <img src="images/sisi.jpg" height="100px" width="500px" alt="Image" class="img-fluid">
        
        </div>
      </div>
    </div>
  <!-- <section class="contact-section">
            <div class="container">
    
                <div class="row">
                    <div class="col-12">
                        <h3 class="contact-title">Login</h3>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="process/userLogin.php" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control valid" name="uname" id="uname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ente Username'" placeholder="Enter Username">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control valid" name="pass" id="pass" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="submit" class="button button-contactForm boxed-btn">Sign In</button>
                            </div>
                            <p>Don't Have An Account?  <a href="register.php" target="_blank">Register Now </a><p>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
          <h2 class="text-uppercase"><span class="d-block">Discover</span> Aintrightco Collections</h2>
        </div>
        
        
        <div class="row align-items-stretch">
          <div class="col-lg-4">
          <div class="product-item sm-height  bg-gray">
              <img src="images/M11.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <img src="images/j1.png" alt="Image" class="img-fluid">
            </div>
            </div>
            <div class="col-lg-4">
            <div class="product-item sm-height bg-gray">
              <img src="images/J8.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <img src="images/F1.jpg" alt="Image" class="img-fluid">
            </div>
            </div>
            <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <img src="images/M1.jpg" alt="Image" class="img-fluid">
            </div>
            </div>
            <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <img src="images/TP1.png" alt="Image" class="img-fluid">
            </div>
            </div>
            <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <img src="images/F4.jpg" alt="Image" class="img-fluid">
            </div>
            </div>
            <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <img src="images/M4.jpg" alt="Image" class="img-fluid">
            </div>
            </div>
            <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <img src="images/M7.jpg" alt="Image" class="img-fluid">
            </div>
            </div>
        </div>
    </div>

    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#Sale Collection</h2>
            <h1>New Collections Product </h1>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/m2.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div> -->

    <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
          <h2 class="text-uppercase"><span class="d-block">Boost Your</span>Business Performance Now</h2>
        </div>
        
        
        <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>About Us</h4>
                        <ul class="list-unstyled">
                            <li><a href="male.php">Profile</a></li>
                            <li><a href="female.html">Data Karyawan</a></li>
                            <!-- <li><a href="hat.html">Hat</a></li>
                            <li><a href="hoodie.html">Hoodie</a></li>
                            <li><a href="jaket.html">Jacket</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Hubungi Kami</h4>
                        <ul class="list-unstyled">
                            <li><a>+62-21-5213711 Ext.200</a></li>
                            <li><a>ptsisi@sisi.id</a></li>
                        </ul>
                    </div>
                    <a href= "https://facebook.com/Official.SISI" >
                            <img src="images/fb.png" height="50px" width="50px"  class="img-fluid">
                            </a>
                            <a href="https://www.instagram.com/lifeatsisi/">
                            <img src="images/ig.jpg" height="50px" width="50px"  class="img-fluid">
                            </a>
                            <a href = "https://www.linkedin.com/company/pt-sinergi-informatika-semen-indonesia">
                            <img src="images/in.png" height="50px" width="50px"  class="img-fluid">
                            </a>
                            <a href = "https://www.youtube.com/channel/UChoRoF5e-XoxgdvGwo-b24A">
                            <img src="images/yt.png" height="50px" width="50px"  class="img-fluid">
                            </a>
                </div>
                    
           
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>PT. Sinergi Informatika Semen Indonesia</h4>
                        <ul class="list-unstyled">
                            <li><a>Jl. Tauchid - Tubanan TlogoBendung Gresik Jawa Timur</a></li>
                            <li><a>61122</a></li>
                        
                            
                        </ul>
                    </div>
                </div>
           
                </div>
          <br>
          <br>
          <div class="col-md-12">
            <p>
           &copy;<script>document.write(new Date().getFullYear());</script> PT.SINERGI INFORMATIKA SEMEN INDONESIA
            </p>
          </div>
          
        </div>
    </footer>
  </div>
  </div>
  <div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
