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
                                    <a href="../Tabel/dataPaket.php">Data Paket</a>
                                </li>
                                <li>
                                    <a href="../Tabel/dataPemesanan.php">Data Pemesanan</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Input Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="inputPaket.php">Input Data Paket</a>
                                </li>
                                <li>
                                    <a href="inputPemesanan.php">Input Data Pemesanan</a>
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
                    <h1 class="page-header">Input Data Pemesanan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pemesanan
                        </div>
                        <div class="panel-body">
                            <form action="simpanPemesanan.php" method="post" name="form1" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Customer</label>
                                            <input type="text" name="nama_cust" class="form-control" placeholder="Nama Customer">
                                        </div>

                                        <div class="form-group">
                                            <label>Nomer Telpon customer</label>
                                            <input type="text" name="no_telp_cust" class="form-control" placeholder="Nomer Telpon Customer">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Customer</label>
                                            <input type="text" name="alamat_cust" class="form-control" placeholder="Alamat Customer">
                                        </div>
                                        <div class="form-group">
                                            <label>Theme Decoration</label>
                                            <input type="text" name="tema" class="form-control" placeholder="Theme Decoration">
                                        </div>
                                        <div class="form-group">
                                            <label>Pesan</label>
                                            <input type="text" name="lainnya" class="form-control" placeholder="Lainnya">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" name="tgl_pemesanan" class="form-control" placeholder="Tanggal">
                                        </div>
                                        </select>

                                        <input type="submit" name="Input" class="btn btn-primary" value="Submit" />
                                    </div>
                                </div>
                            </form>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>


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