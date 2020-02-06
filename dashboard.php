<?php

include 'connect.php';
include 'fungsi.php';

$query2 = mysqli_query($con, "SELECT year FROM freelance GROUP BY tipe_freelance ASC");
$freelance = mysqli_query($con, "SELECT * FROM freelance ORDER BY id_freelance ASC");
$freelances =  mysqli_query($con, "SELECT * FROM freelance where now() < end_date - INTERVAL 2 WEEK");
$nonaktif = mysqli_query($con, "SELECT * FROM freelance where now() > end_date");
$minggu2 = mysqli_query($con, "SELECT * FROM freelance WHERE end_date BETWEEN CURDATE() AND CURDATE() + INTERVAL 14 DAY");
$query = "SELECT start_date, end_date, count(*) as number FROM freelance group by id_freelance";

$listTipeFreelance = mysqli_query($con, "SELECT * FROM morfeen.tipe_freelance tf");

$queryFix = "SELECT
              CASE
                WHEN now() < end_date - INTERVAL 2 WEEK THEN 'Aktif'
                WHEN end_date BETWEEN CURDATE() AND CURDATE() + INTERVAL 14 DAY THEN 'Kurang 2 Minggu'
                WHEN now() > end_date THEN 'Non-Aktif'
              END as status
              , COUNT(*) as number
              FROM morfeen.freelance f 
              GROUP BY status";

$result = mysqli_query($con, $query);
$resultFix = mysqli_query($con, $queryFix);

if (isset($_POST['search_freelance']) && $_POST['search_freelance'] != "All") {
  $search_freelance = $_POST['search_freelance'];

  $queryFix = "SELECT
              CASE
                WHEN now() < end_date - INTERVAL 2 WEEK THEN 'Aktif'
                WHEN end_date BETWEEN CURDATE() AND CURDATE() + INTERVAL 14 DAY THEN 'Kurang 2 Minggu'
                WHEN now() > end_date THEN 'Non-Aktif'
              END as status
              , COUNT(*) as number
              FROM morfeen.freelance f 
              WHERE tipe_freelance = '$search_freelance'
              GROUP BY status";

  $resultFix = mysqli_query($con, $queryFix);

  $freelances =  mysqli_query($con, "SELECT * FROM freelance where now() < end_date - INTERVAL 2 WEEK AND tipe_freelance = '$search_freelance'");
  $nonaktif = mysqli_query($con, "SELECT * FROM freelance where now() > end_date AND tipe_freelance = '$search_freelance'");
  $minggu2 = mysqli_query($con, "SELECT * FROM freelance WHERE end_date BETWEEN CURDATE() AND CURDATE() + INTERVAL 14 DAY AND tipe_freelance = '$search_freelance'");
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

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-1">PT. SISI <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="landingAdmin.php">
          <!-- <i class="fas fa-fw fa-cog"></i> -->
          <span>Data Freelance</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a> -->
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="aktifitas.php">
          <!-- <i class="fas fa-fw fa-wrench"></i> -->
          <span>Aktifitas Freelance</span>
        </a>
        <!-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <!-- <div class="sidebar-heading">
        Addons
      </div> -->

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>logout</span>
        </a> -->
        <!-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div> -->
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">



            <!-- Nav Item - Alerts -->
            <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>


            <!-- Nav Item - User Information -->
            <!-- <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a> -->
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
              <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a> -->

            </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

          </div>

          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load('current', {
              'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['status', 'number'],
                <?php
                while ($row = mysqli_fetch_array($resultFix)) {
                  echo "['" . $row["status"] . "'," . $row["number"] . "],";
                }
                ?>
              ]);
              var options = {
                title: 'Data Freelance',
                //is3D:true,  
                pieHole: 0.4
              };
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));
              chart.draw(data, options);
            }
          </script>
          </head>

          <body>
            <br /><br />
            <div style="width:900px;">
              <h3 align="center">PT SINERGI INFORMATIKA SEMEN INDONESIA</h3>
              <br />
              <form action="" method="post">
                <div class="form-group">
                  <select name="search_freelance" class="form-control" required>
                    <option selected disabled value="">-- Pilih Tipe Freelance --</option>
                    <?php
                    while ($row = mysqli_fetch_array($listTipeFreelance)) {
                      echo '<option value="' . $row["nama"] . '">' . $row["nama"] . '</option>';
                    }
                    ?>
                    <option value="All">All</option>
                  </select>
                </div>
                <button type="submit" id="submit" class="btn btn-success btn-block">Proses</button>
              </form>
              <br>
              <div id="piechart" style="width: 900px; height: 500px;"></div>
            </div>

            <br>

            <div class="col-md-8">
              <table class="table table-striped table-hover">
                <thead>
                  <label>Aktif</label>
                  <tr>
                    <th>Nama Freelance</th>
                    <th>Alamat Freelance</th>
                    <th>No Tlp Freelance</th>
                    <th>Project</th>
                    <th>Salary</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>SPK</th>
                    <th>Tipe Freelance</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($freelances as $row) : ?>
                    <tr>
                      <td><?= $row["nama"]; ?></td>
                      <td><?= $row["alamat"]; ?></td>
                      <td><?= $row["notlp"]; ?></td>
                      <td><?= $row["project"]; ?></td>
                      <td><?= $row["salary"]; ?></td>
                      <td><?= $row["start_date"]; ?></td>
                      <td><?= $row["end_date"]; ?></td>
                      <td><?= $row["spk"]; ?></td>
                      <td><?= $row["tipe_freelance"]; ?></td>
                    <?php endforeach; ?>
                </tbody>
              </table>
              <table class="table table-striped table-hover">
                <thead>
                  <label>Non Aktif</label>
                  <tr>
                    <th>Nama Freelance</th>
                    <th>Alamat Freelance</th>
                    <th>No Tlp Freelance</th>
                    <th>Project</th>
                    <th>Salary</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>SPK</th>
                    <th>Tipe Freelance</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($nonaktif as $row2) : ?>
                    <tr>
                      <td><?= $row2["nama"]; ?></td>
                      <td><?= $row2["alamat"]; ?></td>
                      <td><?= $row2["notlp"]; ?></td>
                      <td><?= $row2["project"]; ?></td>
                      <td><?= $row2["salary"]; ?></td>
                      <td><?= $row2["start_date"]; ?></td>
                      <td><?= $row2["end_date"]; ?></td>
                      <td><?= $row2["spk"]; ?></td>
                      <td><?= $row2["tipe_freelance"]; ?></td>
                    <?php endforeach; ?>
                </tbody>
              </table>
              <table class="table table-striped table-hover">
                <thead>
                  <label>Kurang 2 Minggu</label>
                  <tr>
                    <th>Nama Freelance</th>
                    <th>Alamat Freelance</th>
                    <th>No Tlp Freelance</th>
                    <th>Project</th>
                    <th>Salary</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>SPK</th>
                    <th>Tipe Freelance</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($minggu2 as $row3) : ?>
                    <tr>
                      <td><?= $row3["nama"]; ?></td>
                      <td><?= $row3["alamat"]; ?></td>
                      <td><?= $row3["notlp"]; ?></td>
                      <td><?= $row3["project"]; ?></td>
                      <td><?= $row3["salary"]; ?></td>
                      <td><?= $row3["start_date"]; ?></td>
                      <td><?= $row3["end_date"]; ?></td>
                      <td><?= $row3["spk"]; ?></td>
                      <td><?= $row3["tipe_freelance"]; ?></td>
                    <?php endforeach; ?>
                </tbody>
              </table>

              <script src="vendor/jquery/jquery.min.js"></script>
              <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

              <!-- Core plugin JavaScript-->
              <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

              <!-- Custom scripts for all pages-->
              <script src="js/sb-admin-2.min.js"></script>

              <!-- Page level plugins -->
              <script src="vendor/chart.js/Chart.min.js"></script>

              <!-- Page level custom scripts -->
              <script src="js/demo/chart-area-demo.js"></script>
              <script src="js/demo/chart-pie-demo.js"></script>

          </body>

</html>