<?php
include '../helper/Connection.php';
if(isset($_POST ['Input']))
{
    $nama_cust = $_POST['nama_cust'];
    $no_telp_cust = $_POST['no_telp_cust'];
    $alamat_cust = $_POST['alamat_cust'];
    $tema = $_POST['tema'];
    $lainnya = $_POST['lainnya'];
    $tgl_pemesanan = $_POST['tgl_pemesanan'];
    
    $queryCheckName = "SELECT nama_cust FROM transaksi WHERE nama_cust = '$nama_cust' ";
    $checkResultName = mysqli_query($con, $queryCheckName);

    if (mysqli_num_rows($checkResultName) == 0)
    {
            $query = "INSERT INTO transaksi(nama_cust,no_telp_cust, alamat_cust, tema, lainnya, tgl_pemesanan) VALUES ('$nama_cust', '$no_telp_cust', '$alamat_cust', '$tema', '$lainnya', '$tgl_pemesanan')";
            mysqli_query($con, $query);
            header("Location: inputPemesanan.php");
    }
    else
    {
        echo "<script>alert('Nama Cust Sudah Terpakai!'); window.location = 'inputPemesanan.php';</script>";
    }
}
?>