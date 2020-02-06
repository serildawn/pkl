<?php
$con = mysqli_connect("localhost", "root", "", "morfeen");
if (!$con) {
    die("Connecton Failed! : " . mysqli_connect_error());
}

function cari($keyword)
{
    $sql = "SELECT * FROM transaksi WHERE
                nama_cust LIKE '%$keyword%' OR
                tgl_pemesanan LIKE '%$keyword%'
            ";

    // kembalikan ke function query dengan parameter $sql
    return query($sql);
}
