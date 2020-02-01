<?php 
    include '../helper/Connection.php';

    $query = "SELECT * FROM paket WHERE deleted=0";

    $result = mysqli_query($con,$query)or die(mysqli_error());

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blitz Party Planner - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Blitz Party Planner</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
					<a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>  
            </ul>
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Data Tabel<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Data Paket</a>
                                </li>
                              
                                <li>
                                    <a href="dataPemesanan.php">Data dataPemesanan</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Input Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../Input/inputPaket.php">Input Data Paket</a>
                                </li>
                                <li>
                                    <a href="../Input/inputPemesanan.php">Input Data Pemesanan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Paket</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Paket
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Paket</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php  
                                    while($row = mysqli_fetch_array($result)) 
                                    {
                                        $id= $row['id_paket'];
                                        $nama = $row['nama'];
                                        $deskripsi = $row['deskripsi']; 
                                        $harga = $row['harga'];  
                                        $gambar = $row['gambar'];        
										echo "<tr>";
										echo "<td>".$id."</td>";
										echo "<td>".$nama."</td>";
                                        echo "<td>".$deskripsi."</td>";
                                        echo "<td>".$harga."</td>";
                                        echo "<td><img src='../images/".$row["gambar"]."'></td>";
										echo "<td><a class='btn btn-warning' href='../update/edit_paket.php?id_paket=$row[id_paket]'>Edit</a>
                                        <a class='btn btn-warning' href='../Action/actionDeletePaket.php?id_paket=$row[id_paket]'>Hapus</a></td></tr>";			
									}
								?>	
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
        
    <!-- jQuery -->
    <script src="../admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../admin/vendor/raphael/raphael.min.js"></script>
    <script src="../admin/vendor/morrisjs/morris.min.js"></script>
    <script src="../admin/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
