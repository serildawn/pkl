<?php
include 'connect.php';
include 'fungsi.php';

date_default_timezone_set("Asia/Bangkok");

if (isset($_POST["save"])) {
    if (count($_POST) > 0) {
        addFreelance($_POST);
    }
}
$freelance = mysqli_query($con, "SELECT * FROM freelance ORDER BY id_freelance ASC");

if (isset($_POST["ed_freelance"])) {
    if (count($_POST) > 0) {
        editFreelance($_POST);
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
    <title>PT SINERGI INFORMATIKA SEMEN INDONESIA</title>

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

    <br />
    <div class="col-md-4">
        <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Freelance</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda" required>
            </div>
			<div class="form-group">
                <label for="exampleInputEmail1">Alamat Freelance</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" required>
            </div>
			<div class="form-group">
                <label for="exampleInputEmail1">Nomer Telpon Freelance</label>
                <input type="text" name="notlp" class="form-control" id="notlp" placeholder="Masukkan Nomer Telepon Anda" required>
            </div>
			<div class="form-group">
                <label for="exampleInputEmail1">Project</label>
                <input type="text" name="project" class="form-control" id="project" placeholder="Masukkan Project Anda" required>
            </div>
			<div class="form-group">
                <label for="exampleInputEmail1">Salary</label>
                <input type="text" name="salary" class="form-control" id="salary" placeholder="Masukkan Gaji Anda" required>
            </div>
			<div class="form-group">
                <label for="exampleInputEmail1">Start Date</label>
                <input type="date" name="start_date" class="form-control" id="start_date" placeholder="Masukkan Start Date Anda" required>
            </div>
			<div class="form-group">
                <label for="exampleInputEmail1">End Date</label>
                <input type="date" name="end_date" class="form-control" id="end_date" placeholder="Masukkan End Date Anda" required>
            </div>
			<div class="form-group">
                <label for="exampleInputEmail1">SPK</label>
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
           

            <button type="submit" name="save" class="btn btn-primary btn-block">Save</button>
        </form>
        <button><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a></button>
    </div>

    <div class="col-md-8">
        <table class="table table-striped table-hover">
            <thead>
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
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($freelance as $row) : ?>
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
                        <td><a class="btn btn-sm btn-success" data-toggle="modal" href='#edit_user<?= $row["id_freelance"]; ?>'>Edit</a></td>
                        <td><a href="hapusfreelance.php?id=<?php echo $row["id_freelance"]; ?>">
                                <i class="fas fa-trash-alt bg-danger text-white p-2 " onclick="return confirm('Apakah data Freelance dari <?php echo $row['nama']; ?> Ingin Dihapus')" data-toggle="tooltip" title="Delete">
                    </tr>
                    <form action="" method="post">
                        <!-- Modal Edit -->
                        <div class="modal fade" id="edit_user<?= $row["id_freelance"] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Form Edit Freelance</h4>
                                    </div>
                                    <div class="modal-body">

                                        <input type="hidden" name="id_freelance" id="input" class="form-control" value="<?= $row["id_freelance"] ?>">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda" required value="<?= $row["nama"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" required value="<?= $row["alamat"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Telpon</label>
                                            <input type="text" name="notlp" class="form-control" id="notlp" placeholder="Masukkan Nomer Telpon Anda" required value="<?= $row["notlp"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Project</label>
                                            <input type="text" name="project" class="form-control" id="project" placeholder="Masukkan Project Anda" required value="<?= $row["project"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Salary</label>
                                            <input type="text" name="salary" class="form-control" id="salary" placeholder="Masukkan Salary Anda" required value="<?= $row["salary"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Start Date</label>
                                            <input type="date" name="start_date" class="form-control" id="start_date" placeholder="Masukkan Start Date Anda" required value="<?= $row["start_date"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">End Date</label>
                                            <input type="date" name="end_date" class="form-control" id="end_date" placeholder="Masukkan End Date Anda" required value="<?= $row["end_date"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">SPK</label>
                                            <input type="radio" name="spk" id="spk"  value="Ada" required value= "<?= $row["spk"] ?>">
                                            <input type="radio" name="spk"  id="spk"  value="Tidak" required value="<?= $row["spk"] ?>">
                                        </div>
                                        <label for="">Tipe Freelance</label>
						                <select name="tipe_freelance" id="tipe_freelance" class="form-control">
							            <option value="default">Select one</option>
															<option value="TW">TW</option>
															<option value="Programmer">Programmer</option>
															<option value="Admin">Accessories</option>
													</select>
                                        <!-- <div class="form-group">
                                            <label for="exampleInputEmail1">Tipe Freelance</label>
                                            <input type="text" name="tipe_freelance" class="form-control" id="tipe_freelance" placeholder="Masukkan Start Date Anda" required value="<?= $row["tipe_freelance"] ?>">
                                        </div> -->
										
                
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                                        <button type="submit" name="ed_freelance" class="btn btn-primary">Simpan</button>
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