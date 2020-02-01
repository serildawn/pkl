<?php
    if(isset($_POST["register"]))
    {
        if(registrasi($_POST)>0)
        {
            echo "<style>alert('user berhasil ditambahkan');</style>";
            header("Location: login.php");
            exit;
		}
		else
        {
            echo mysqli_error($con);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SRegister Freelance</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        <img src="images/sisi.jpg" height="150px" width="460px" alt="Image" class="img-fluid">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="process/userRegister.php" method="post"  novalidate="novalidate">
                            <div class="row">
                            <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nama" id="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Full Name'" placeholder="Enter Full Name">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control valid" name="notlp" id="notlp" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Number Phone'" placeholder="Enter Number Phone">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control valid" name="alamat" id="alamat" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" placeholder="Enter Address">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email'" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control valid" name="uname" id="uname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Username'" placeholder="Enter Username">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control valid" name="pass" id="pass" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input class="form-control valid" name="confirm_password" id="confirm_password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Confirm Password'" placeholder="Enter Confirm Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <button type="submit" name="register" class="btn btn-primary btn-block">Sign Up</button>
                            </div>
                            </div>
                    
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
    
   
    <!-- footer_end -->
        
   <!-- form itself end-->
   <!-- <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
                <div class="popup_inner">
                    <h3>Sign In</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="Email" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Email'" placeholder="Enter your Email">
                                    </div>
                            </div>
                            <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="Password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Password'" placeholder="Enter your Password">
                                    </div>
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed-btn3">Login</button>
                            </div>
                            <p class="popup_box">Don’t have an account? <a class="popup-with-form" href="#test-form2">Sign Up</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
    </form> -->
<!-- form itself end -->
<!-- <form id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box">
                <div class="popup_inner">
                    <h3>Registration</h3>
                    <form action="#">
                        <div class="row">
                        <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Full Name'" placeholder="Enter your Full Name">
                                    </div>
                            </div>
                            <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="Email" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Email'" placeholder="Enter your Email">
                                    </div>
                            </div>
                            <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="Password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Password'" placeholder="Enter your Password">
                                    </div>
                            </div>
                            <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="confirm_password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Confirm Password'" placeholder="Enter your Confirm Password">
                                    </div>
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed-btn3">Sign Up</button>
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
    </form> -->
<!-- form itself end -->

    
        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>
    
        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>
    
        <script src="js/main.js"></script>
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
        </script>



    </body>
    
    </html>