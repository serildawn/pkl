<?php
error_reporting(0);
session_start();
require 'fungsi.php';
$idcus = $_SESSION["idcus"];
$barang = query("SELECT * FROM barang");
$cart = query("SELECT * FROM addcart where idcus = '$idcus'");
$cart1 = query("SELECT sum(harga) as tot_harga FROM addcart where idcus = '$idcus'");
$count = query("SELECT COUNT(*) as jml FROM addcart WHERE idcus = '$idcus'");
$cus = query("SELECT * FROM customer WHERE idcus = '$idcus'");

$arr = array();
$arr_id = array();
if (isset($_POST["cari"])) {
  //cari adalah function cari dari keyword adalah name dari inputan text
  $barang = cari($_POST["keyword"]);
}

///popup
foreach ($count as $c) {
  $popup = ($c["jml"]);
}

///Total
foreach ($cart1 as $s) {
  $subtot = $s["tot_harga"];
  $total = $subtot;
}

if (isset($_POST["editcekout"])) {

  global $conn;
  $idcus = $_SESSION["idcus"];
  $nama  = ($_POST["nama"]);
  $daerah  = ($_POST["daerah"]);
  $alamatlengkap = ($_POST["alamatlengkap"]);
  $kodepos = ($_POST["kodepos"]);
  $email  = ($_POST["email"]);
  $phone = ($_POST["phone"]);

  $pem = "INSERT INTO pemesanan VALUES
          ('','$idcus','$nama','$daerah','$alamatlengkap','$kodepos','$email','$phone')";
  mysqli_query($conn, $pem);
  // return mysqli_affected_rows($conn);
  // $al = $_POST["editalamat"];
  // $ko = $_POST["editkodepos"];
  // $nt = $_POST["editnotelp"];
  // $da = $_POST["editdaerah"];
  // $na = $_POST["editnama"];
  // $em = $_POST["editemail"]; 


  // $query = "UPDATE customer SET alamat = '$al',
  //                               kodepos = '$ko', 
  //                               notelp = '$nt'
  //                               WHERE idcus = '$idcus'";
  // mysqli_query($conn,$query);
  header("location:checkout.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Aintrightco &ndash; Distro & CLothing</title>
  <link rel="icon" href="images/logo.png">
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

  <div class="site-wrap">


    <div class="site-navbar bg-white py-2">
      <h3>
        <font color="#000000"><span class="icon-user-circle-o"></span> Selamat Datang : <?php echo $_SESSION["nama"]; ?></font>
      </h3>
      <div class="search-wrap">
        <div class="container">
          <form action="#" method="post">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <input type="text" name="keyword" class="form-control" placeholder="Search . . ." autocomplete="off" required="required">
            <button class="btn btn-link" type="submit" name="cari"></button>
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="" class="js-logo-clone"> AINTRIGHTCO </a>
            </div>
          </div>

          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="all.php">Catalog Product</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="tracking.php">Pesanan Saya</a></li>
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">

            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number"><?php echo $popup ?></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <form action="" method="post">
      <?php foreach ($cus as $m) : ?>
        <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black"></h2>
                <div class="p-3 p-lg-5 border">
                  <h2>Data Diri </h2>
                  <br>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_fname" class="text-black">Nama </label>
                      <input type="text" name="nama" id="input" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_country" class="text-black">Daerah : <span class="text-danger">*</span></label>
                      <select name="daerah" class="form-control">
                        <h2>Pilih Daerah : </h2>
                        <option value="Bojonegoro">Bojonegoro</option>
                        <option value="Malang">Malang</option>
                        <option value="Lamongan">Lamongan</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Mojokerto">Mojokerto</option>
                        <option value="Gresik">Gresik</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_address" class="text-black">Alamat Lengkap</label>
                      <input type="text" name="alamatlengkap" id="input" class="form-control">

                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_postal_zip" class="text-black">Kode Pos </label>
                      <input type="text" name="kodepos" id="input" class="form-control">


                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <div class="col-md-6">
                      <label for="c_email_address" class="text-black">Email </label>
                      <input type="text" name="email" id="input" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label for="c_phone" class="text-black">Phone </label>
                      <input type="text" name="phone" id="input" class="form-control">

                    </div>
                  </div>

                  <button type="submit" name="editcekout" class="btn btn-success">Simpan Data Diri</button>
                </div>
              <?php endforeach; ?>
    </form>

  </div>
  </div>
  <br><br>
  <form action="" method="post">
    <div class="row mb-5">
      <div class="col-md-12">
        <h2 class="h3 mb-3 text-black">Your Order</h2>
        <div class="p-3 p-lg-5 border">
          <table class="table site-block-order-table mb-5">
            <thead>
              <th>Picture</th>
              <th>Product</th>
              <th>Harga Satuan</th>
              <th>Total</th>
            </thead>
            <tbody>
              <?php foreach ($cart as $o) : ?>
                <tr>
                  <td><img src="images/<?= $o["gambar"]; ?>" height="200px" width="200px"></td>
                  <td> <?php echo $o["jenis"]; ?> <?php echo $o["warna"]; ?> <strong class="mx-2">x</strong><?php echo $o["jumlah"]; ?></td>
                  <td>Rp. <?php echo $o["hargasatuan"]; ?></td>
                  <td>Rp. <?php echo $o["harga"]; ?></td>
                </tr>
                <?php $id = $o["idadd"];
                $q = query("SELECT * FROM barang WHERE idbarang LIKE '$id'");
                foreach ($q as $k) {
                  $n_id = $k["idbarang"];
                  $tot = $k["stok"];
                  $st_br = $tot - $o["jumlah"];
                  array_push($arr, $st_br);
                  array_push($arr_id, $n_id);
                }
                ?>
              <?php endforeach; ?>
              <tr>
                <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                <td></td>
                <td></td>
                <td class="text-black font-weight-bold"><strong>Rp. <?php echo $total ?></strong></td>
              </tr>
            </tbody>
          </table>

          <h2 class="h3 mb-3 text-black">Cek Nomor Rekening Tujuan :</h2>
          <div class="border p-3 mb-3">
            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Bank Transfer BNI</a></h3>

            <div class="collapse" id="collapsebank">
              <div class="py-2">
                <p><img src="images/bni.png" height="200px" width="200px" alt="Image" class="img-fluid" srcset="">
                  <b>
                    <p class="mb-0">Rekening Bank BNI </p>
                    <p class="mb-0">Nomor Rekening : 108178191</p>
                    <p class="mb-0">Atas Nama : Damar Engga</p>
                  </b>
              </div>
            </div>
          </div>

          <div class="border p-3 mb-3">
            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Bank Transfer BCA</a></h3>

            <div class="collapse" id="collapsebank">
              <div class="py-2">
                <p><img src="images/bca.png" height="200px" width="200px" alt="Image" class="img-fluid" srcset="">
                  <b>
                    <p class="mb-0">Rekening Bank BCA </p>
                    <p class="mb-0">Nomor Rekening : 762973533</p>
                    <p class="mb-0">Atas Nama : Damar Engga </p>
                  </b>
              </div>
            </div>
          </div>

          <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="order">Order</button>
          </div>

        </div>
      </div>
    </div>

    </div>
    </div>
    </div>
    </div>
  </form>


  <footer class="site-footer custom-border-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 icons">
          <h3 class="footer-heading mb-4">Hint</h3>
          <a class="block-6">
            <h3 class="font-weight-light  mb-0">Kunjungi Instagram Resmi Aintrightco</h3>
            <br>
            <span class="icon-instagram"></span>
            <a href="https://www.instagram.com/aintrightco/">instagram.com/aintrightco</a>
            <br><br><br>
            <p>Build on &mdash; Agustus, 2019</p>
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
              <li class="address"><a href="api1.php">Jln.Kapten Rameli Lorong 1 No.47 BOJONEGORO</a></li>
              <li class="phone"><a href="tel://">085336171248</a></li>
              <li class="email">aintright2018@gmail.com </li>
            </ul>
          </div>
        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> by Yessy & Meutia| All rights reserved
            </p>
          </div>
        </div>
      </div>

    </div>

  </footer>

  </div>

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
<?php

if (isset($_POST['order'])) {
  date_default_timezone_set('Asia/Jakarta');

  for ($i = 0; $i < count($arr); $i++) {
    $updt = "UPDATE barang SET stok = '$arr[$i]' WHERE idbarang LIKE '$arr_id[$i]'";
    mysqli_query($conn, $updt);
  }

  foreach ($cus as $c) {
    $nama = $c["nama"];
    $alamat = $c["alamat"];
    $kodepos = $c["kodepos"];
  }
  foreach ($cart as $f) : {
      $idadd = $f["idadd"];
      $jenis = $f["jenis"];
      $warna = $f["warna"];
      $size = $f["size"];
      $hargasatuan = $f["hargasatuan"];
      $harga = $f["harga"];
      $gambar = $f["gambar"];
      $tgl = date("Y-m-d H:i:s");
      $jumlah = $f["jumlah"];
      $status = "Menunggu Konfirmasi Pembayaran";

      $query = "INSERT INTO cekout
            VALUES
            ('','$idcus','$idadd','$nama','$alamat','$kodepos','$jenis','$warna','$size','$hargasatuan','$harga','$gambar','$tgl','$jumlah','$status')";
      mysqli_query($conn, $query);
    }
  endforeach;

  $query = "DELETE FROM addcart WHERE idcus = '$idcus'";
  mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    echo "
              <script>
                document.location.href='thankyou.php';
              </script>
          ";
  } else {
    echo "
              <script>
                history.back(self);
              </script>
          ";
    echo "<br>";
    echo mysqli_error($conn);
  }
}
?>