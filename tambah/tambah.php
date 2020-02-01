<?php
 session_start();
 require '../fungsi.php';
 $user = query("SELECT * FROM user");
 if(isset($_POST['submit']))
    {
        //ambil data dari tiap elemen dalam form yang disimpan di variable baru
        
        $nama                           	=($data["nama"]);
        $notlp                           	=($data["notlp"]);
        $alamat                           	=($data["alamat"]);
        $email                              =($data["email"]); 
        $username                           =($data["uname"]);       
        $pass                           =($data["pass"]); 
        $level                              =($data["level"]); 

        //query inserrt data
        $query="INSERT INTO user
                VALUES
                ('','$nama','$notlp', '$alamat','$email','$uname','$pass','$level')";
        mysqli_query($conn,$query);

        if(mysqli_affected_rows($conn)>0)
        {
            echo "
                <script>
				
				history.back(self);
                </script>
            ";
        }
        else
        {
            // echo "
            //     <script>
			// 	alert('data gagal disimpan')
			// 	history.back(self);
            //     </script>
            // ";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }

    //tombol cari ditekan
    // cari pada line 7 adalah name dari button
if (isset($_POST["cari"]))
{
    //cari adalah function cari dari keyword adalah name dari inputan text
    $barang = cari($_POST["keyword"]);
}
if(isset($_POST["back"]))
{
    header("location:../all.php");
}
?>

<!DOCTYPE html>


<html lang="en">
<head>

<title>Data Freelance &ndash; PT. Sinergi Informatika Semen Indonesia</title>
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

			<div class="alert alert-info" role="alert">
				 <a href="tambah.php" class="alert-link">Show All</a>
			</div>
			
			</div>
            <body>
<div class="container-contact100" style="background-image: url('images/y.jpg');">
        <br><br>
        <div class="table-responsive">
	    <div class="col-md-12 col-sm-12 col-xs-12">
		<table class="table table-hover table-bordered table-striped" >
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
                    <th>No Tlp</th>
                    <th>Alamat</th>
                    <th>Email</th>
					<th>Username</th>
                    <th>Password</th>
					<th>Jenis</th>
					<th>Opsi Aksi</th>
				</tr>
                
			</thead>
			<?php $i=1 ?>
			<?php foreach($user as $row):?>
			<tbody>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $row["nama"]; ?></td>
                    <td><?= $row["notlp"]; ?></td>
                    <td><?= $row["alamat"]; ?></td>
					<td><?= $row["email"]; ?></td>
					<td><?= $row["uname"]; ?></td>
                    <td><?= $row["pass"]; ?></td>
					<td><?= $row["level"]; ?></td>
                    <td>
						<div class="p-t-10 icons">
							<a button class="btn btn--pill btn--green btn-primary" 
							name="back" type="submit" href="edit.php ?id=<?php echo $row["id"];?>">
							<span class="icon-edit"></span>
							</button></a>
							<br><br>
							<a button class="btn btn--pill btn--green btn-danger"
							name="back" type="submit" href="../hapus.php ?id=<?php echo $row["id"];?>"onclick="return confirm('Apakah data ini akan dihapus')">
							<span class="icon-trash"></span>
							</button></a>
							
						</div>
					</td>
				</tr>
				<?php $i++ ?>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
	</div>
	</div>

		<span class="contact100-more">
				PT. Sinergi Informatika Semen Indonesia
		</span>
	</div>
	<div id="dropDownSelect1"></div>
</body>
</body>
</html>