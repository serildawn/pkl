<?php
include 'connect.php';
include 'fungsi.php';

date_default_timezone_set("Asia/Bangkok");

if (isset($_POST["save"])) {
    if (count($_POST) > 0) {
        addActivity($_POST);
    }
}
$act = mysqli_query($conn, "SELECT * FROM aktifitas ORDER BY id_aktifitas ASC");

if (isset($_POST["ed_act"])) {
    if (count($_POST) > 0) {
        editActivity($_POST);
        echo "
        <script>
            document.location.href='landingUser.php';
        </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#tgl').datepicker({
                dateFormat: 'yy-mm-dd'
            }).val();
        });
    </script>
</head>

<body>

    <!-- <br />
    <div class="col-md-4">
        <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal</label>
                <input type="text" name="tgl" class="form-control" id="tgl" value="<?= date("Y-m-d") ?>" placeholder="Masukkan Tgl Sekarang" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Aktifitas</label>
                <textarea name="aktifitas" id="" class="form-control" cols="30" rows="10" required></textarea>
            </div>

            <button type="submit" href="landingUser.php" name="save" class="btn btn-primary btn-block">Save</button>
        </form>
        <br>
        <button><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a></button>
    </div> -->

    <div class="col-md-8">
        <table class="table table-striped table-hover">
            <thead>
                <tr>             
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Aktifitas</th>
                    <!-- <th colspan="2">Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($act as $row) : ?>
                    <tr>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["tgl"]; ?></td>
                        <td><?= $row["aktifitas"]; ?></td>
                        <!-- <td><a class="btn btn-sm btn-success" data-toggle="modal" href='#edit_user<?= $row["id_aktifitas"]; ?>'>Edit</a></td>
                        <td><a href="hapusUser.php?id=<?php echo $row["id_aktifitas"]; ?>">
                                <i class="fas fa-trash-alt bg-danger text-white p-2 " onclick="return confirm('Apakah Aktifitas dari <?php echo $row['nama']; ?> Ingin Dihapus')" data-toggle="tooltip" title="Delete"> -->
                    </tr>
                    <form action="" method="post">
                        <!-- Modal Edit -->
                        <div class="modal fade" id="edit_user<?= $row["id_aktifitas"] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Form Edit Aktifitas</h4>
                                    </div>
                                    <div class="modal-body">

                                        <input type="hidden" name="id_aktifitas" id="input" class="form-control" value="<?= $row["id_aktifitas"] ?>">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda" required value="<?= $row["nama"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal</label>
                                            <input type="text" name="tgl" class="form-control" id="tgl" value="<?= date("Y-m-d") ?>" value="<?= $row["tgl"] ?>" placeholder="Masukkan Tgl Sekarang" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Aktifitas</label>
                                            <input type="text" name="aktifitas" id="" class="form-control" value="<?= $row["aktifitas"] ?>" required></input>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                                        <button type="submit" name="ed_act" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <!-- jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>