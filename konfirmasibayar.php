<?php
session_start();
require 'fungsi.php';
$barang = query("SELECT * FROM barang");
$cekout = query("SELECT * FROM cekout ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> Aintrightco &ndash; Distro & CLothing</title>
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
              <a class="js-logo-clone">AINTRIGHTCO</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a>../</a> <span class="mx-2 mb-0"></span> <a>../</a> <span class="mx-2 mb-0"></span> <strong class="text-black">Konfirmasi Pembayaran</strong></div>
        </div>
      </div>
    </div>

    <form action="" method="post">
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
              <form action="" method="post">
                <h2 class="h3 mb-3 text-black">KONFIRMASI PEMBAYARAN </h2>

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>ID_CekOut</th>
                      <th>ID_Customer</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Kode_Pos</th>
                      <th>Picture</th>
                      <th>Jenis</th>
                      <th>Warna</th>
                      <th>Size</th>
                      <th>Tanggal</th>
                      <th>Harga_Satuan</th>
                      <th>Jumlah</th>
                      <th>Harga_Total</th>

                    </tr>
                  </thead>
                  <?php $i = 1 ?>
                  <?php foreach ($cekout as $row) : ?>
                    <tbody>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["idcek"]; ?></td>
                        <td><?= $row["idcus"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td><?= $row["kodepos"]; ?></td>
                        <td><img src="images/<?= $row["gambar"]; ?>" height="200px" width="200px"></td>
                        <td><?= $row["jenis"]; ?></td>
                        <td><?= $row["warna"]; ?></td>
                        <td><?= $row["size"]; ?></td>
                        <td><?= $row["tanggal"]; ?></td>
                        <td>Rp. <?= $row["hargasatuan"]; ?></td>
                        <td><?= $row["jumlah"]; ?></td>
                        <td>Rp. <?= $row["harga"]; ?></td>
                        <td><?= $row["status"]; ?></td>
                        <td>
                          <a button type="submit" name="konfirm" class="btn btn-lg btn-success" href="confirm.php ?id=<?php echo $row["idbarang"]; ?>">Konfirmasi Pemesanan</button></a>
                          <br><br>
                          <a button type="submit" name="delcek" class="btn btn-lg btn-danger" href="hapuscek.php ?id=<?php echo $row["idbarang"]; ?>">Hapus</button></a>
                        </td>
                      </tr>
                    </tbody>
                    <?php $i++ ?>
                  <?php endforeach; ?>
                </table>
              </form>
            </div>
          </div>
          <button onclick="window.location.href='tambah/tambah.php'" type="button" class="btn btn-info">Back to Previous</button>
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
            <h3 class="font-weight-light  mb-0">Kunjungi Instagram Resmi AINTRIGHTCO</h3>
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