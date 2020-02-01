<?php
 require 'fungsi.php';
include 'connect.php';

$id = $_GET["id"];

function hapusUser($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM aktifitas WHERE id_aktifitas LIKE '$id'");

    return mysqli_affected_rows($conn);
}

if (hapusUser($id) > 0) {
    echo "
        <script>
            alert('Data User Berhasil Dihapus');
            document.location.href='landingUser.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data User Gagal Dihapus');
            document.location.href='landingUser.php';
        </script>
        ";
    echo "<br>";
    echo mysqli_error($conn);
}