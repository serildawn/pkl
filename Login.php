<?php
session_start();
if (isset($_SESSION['uname']) and isset($_SESSION['level'])) {
    if ($_SESSION['level'] == '1') {
        header("Location: dashboard.php");
    } else {
        header("Location: landingUser.php");
    }
}
if (isset($_POST['remember'])) {
    setcookie('login', 'true', time() + 60);

    header("Location: dashboard.php");
    exit;
}

if (isset($_GET['pesan'])) {
    $mess = "<p> {$_GET['pesan']} </p>";
} else {
    $mess = "";
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

    <title>LOGIN FREELANCE</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <img src="images/sisi.jpg" height="150px" width="460px" alt="Image" class="img-fluid">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <div class="col-lg-8">
                                        <form class="form-contact contact_form" action="process/userLogin.php" method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <h4>Username</h4>
                                                        <input class="form-control" name="uname" id="uname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ente Username'" placeholder="Enter Username">
                                                    </div>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <a>Password</a>
                                                        <input class="form-control" name="pass" id="pass" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                                            </div>
                                            <br>
                                            <br>
                                            <p>Don't Have An Account? <a href="register.php" target="_blank">Register Now </a>
                                                <p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </section>
                            <!-- ================ contact section end ================= -->



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