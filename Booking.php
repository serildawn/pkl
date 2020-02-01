<?php
  $con = mysqli_connect("localhost", "root", "", "morfeen");
if(isset($_POST ['Input']))
{
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notlp = $_POST['notlp'];
    $project = $_POST['project'];
    $salary = $_POST['salary'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $spk = $_POST['spk'];
    $tipe_freelance = $_POST['tipe_freelance'];


    
    $queryCheckName = "SELECT nama FROM freelance WHERE nama = '$nama' ";
    $checkResultName = mysqli_query($con, $queryCheckName);

    if (mysqli_num_rows($checkResultName) == 0)
    {
            $query = "INSERT INTO freelance(nama,  alamat, notlp, project, salary, start_date,  end_date, spk, tipe_freelance) VALUES ('$nama', '$alamat','$notlp',  '$project', '$salary', '$start_date' , '$end_date',  '$spk', '$tipe_freelance')";
            mysqli_query($con, $query);
            header("Location: booking.php");
    }
    else
    {
        echo "<script>alert('Nama Cust Sudah Terpakai!'); window.location = 'booking.php';</script>";
    }
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PT Sinergi Informatika Semen Indonesia</title>
    <link rel="icon" href="images/sisi.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/Logobaru.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->

 <!-- slider_area_start -->
  <!-- bradcam_area_start -->
  <!-- <div class="bradcam_area breadcam_bg_1">
        <h3>PT Sinergi Informatika Semen Indonesia</h3>
    </div> -->
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="contact-title">Form Data Freelance</h3>
                    </div>
                    <div class="col-lg-8">
                    <form action="" method="post" name="form1" enctype="multipart/form-data">
								<div class="row">
									<div class="col-lg-6">
											<div class="form-group">
												<label>Nama Freelance</label>
												<input type="text" name="nama" class="form-control" placeholder="Nama ">
                                            </div>
                                            <div class="form-group">
												<label>Alamat</label>
												<input type="text" name="alamat" class="form-control" placeholder="Alamat ">
                                            </div>
											
                                            <div class="form-group">
												<label>Nomer Telpon </label>
												<input type="text" name="notlp" class="form-control" placeholder="Nomer Telpon ">
                                            </div>
                                            
                                            <div class="form-group">
												<label>Project</label>
												<input type="text" name="project" class="form-control" placeholder="Project">
                                            </div>
                                            <div class="form-group">
												<label>Salary</label>
												<input type="text" name="salary" class="form-control" placeholder="Salary">
											</div>
                                            <div class="form-group">
												<label>Start Date</label>
												<input type="date" name="start_date" class="form-control" placeholder="Start Date">
                                            </div>
                                            <div class="form-group">
												<label>End Date </label>
												<input type="date" name="end_date" class="form-control" placeholder="End Date">
                                            </div>
                                            <div class="row form-group">
                <div class="col-md-12"><h3>SPK</h3></div>
                <td><input type="radio" name="spk" value="Ada"/>Ada</td>  
                <tr>  
                <td><input type="radio" name="spk" value="Tidak"/>Tidak</td></tr>  
                </tr>  

                
                </div>
                <label>Tipe Freelance</label>
               
									
                <select name="tipe_freelance" id="tipe_freelance">
                   <option>Select One</option>
                    <option>TW</option>
                    <option>Programmer</option>
                    <option>Admin</option>
                </select>
					
                                    </div>

                                   <div class="form-group mt-3">
                                    <input type="submit" name="Input" class="btn btn-primary" value="Submit"/>
								
                                    </div>
								</div>
							</form>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
    
    <!-- footer -->
    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <!-- <h3 class="footer-heading mb-4">Hint</h3>
            <a href="auth/login.php" class="block-6">
              <h3 class="font-weight-light  mb-0">Silahkan Login Untuk Melihat Koleksi Terbaru</h3>
              <br>
              <p>Build on &mdash; November, 2019</p> -->
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Tentang Kami :</h3>
              <ul class="list-unstyled">
                <li class="">PT SINERGI INFORMATIKA SEMEN INDONESIA</li>
                <li class="address"> Gedung Graha Irama (Indorama), Lt.6 (Suite A-B)
Jl. HR Rasuna Said Kav. 1-2,
Jakarta Selatan 12950, Indonesia
</li>
                <li class="phone">+ 62-21-5213711 (Ext. 200)</li>
                <!-- <li class="fax">+ 62-21-526-1217</li> -->
                <li class="email">E. ptsisi@sisi.id </li>
                <li class="">E. pr@sisi.id (Media & External Invitation)</li>
              </ul>
          </div>
        </div>

        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Yessy & Meutia & Serilda| All rights reserved
            </p>
          </div>
          
        </div>
    </footer>
  </div>

    <!-- footer_end -->
 

    
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