<?php
require '../fungsi.php';
// cek apakah button submit sudah di tekan atau belum
// menggunakan mehtod get untuk mengambil id yg telah
// terseleksi oleh user dan dimasukkan ke dalam variabel 
// baru yaitu $id
$id=$_GET["id"];
$query = ("SELECT * FROM user WHERE id=$id");
    
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 1)
{
    $queryid = mysqli_fetch_assoc($result);
}

// cek apakah button submit sudah ditekan atau belum
if(isset($_POST["submit"]))
{
    // cek sukses data dirubah menggunakan function edit pada fungsi.php
    if($_POST>0)
    {
        edit($_POST);
        echo "
        <script>
        
        document.location.href='tambah.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
        
        history.back(self);
        </script>";
        echo "<br>";
        echo mysqli_error($conn);
    }
}

if(isset($_POST["back"]))
{
    header("location:tambah.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Data Freelance &ndash; PT. Sinergi Informatika Semen Indonesia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <!-- JQuery Date -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
	<link rel="stylesheet" href="fonts/icomoon/style.css">

</head>
<body>

<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-contact100">
			<form class="" method="POST" enctype="multipart/form-data">
            
            <input type="hidden" name="id" value="<?php echo $id?>">
				<span class="contact100-form-title"> <div title>EDIT DATA ANGGOTA</div>
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Nama harus diisi">
					<span class="label-input100">Nama</span>
					<input class="input100" type="text" name="nama" id="nama" required value="<?php echo $queryid["Nama"]; ?>">
				</div>
				

				<div class="wrap-input100 validate-input" data-validate = "Alamat harus diisi">
					<span class="label-input100">Alamat</span>
					<input class="input100" type="text" name="alamat" id="alamat" required value="<?php echo $queryid["Alamat"]; ?>">
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Nomor Telepon harus diisi">
					<span class="label-input100">No.Tlp</span>
					<input class="input100" type="text" name="notlp" id="notlp" required value="<?php echo $queryid["No.tlp"]; ?>">
				</div>

                <div class="wrap-input100 validate-input" data-validate = "Username harus diisi">
					<span class="label-input100">Project</span>
					<input class="input100" type="text" name="project" id="project" required value="<?php echo $queryid["Username"]; ?>">
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Password harus diisi">
					<span class="label-input100">Salary</span>
					<input class="input100" type="text" name="salary" id="salary" required value="<?php echo $queryid["Password"]; ?>">
                </div>

                
				<div class="wrap-input100 validate-input" data-validate = "Password harus diisi">
					<span class="label-input100">Start Date</span>
					<input class="input100" type="text" name="start_date" id="start_date" required value="<?php echo $queryid["Confirm Password"]; ?>">
                </div>

				<div class="wrap-input100 validate-input" data-validate = "Password harus diisi">
					<span class="label-input100">End Date</span>
					<input class="input100" type="text" name="end_date" id="end_date" required value="<?php echo $queryid["Email"]; ?>">
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password harus diisi">
					<span class="label-input100">SPK</span>
					<input class="input100" type="text" name="spk" id="spk" required value="<?php echo $queryid["Email"]; ?>">
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password harus diisi">
					<span class="label-input100">Tipe Freelance</span>
					<input class="input100" type="text" name="tipe_freelance" id="tipe_freelance" required value="<?php echo $queryid["Email"]; ?>">
                </div>
             
				<div class="container-contact100-form-btn icons">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" name="submit">Update <br>
						<span class="icon-plus-square"></span>
                        </button>
					</div>
                </div>
            </form>
            <form action="" method="post">
        <div class="container-contact100-form-btn icons">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="back">
							<span class="icon-settings_backup_restore"></span>
                        </button>
					</div>
                </div>
                </form>

    	  <!-- Footer section end -->
	<!--====== Javascripts & Jquery ======-->
	<!-- <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script> -->
</body>
</html>