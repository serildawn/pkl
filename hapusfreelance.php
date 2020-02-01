<?php

include 'connect.php';

$id = $_GET["id"];

function hapusUser($id)
{
    global $con;
    mysqli_query($con, "DELETE FROM freelance WHERE id_freelance LIKE '$id'");

    return mysqli_affected_rows($con);
}

if (hapusUser($id) > 0) {
    echo "
        <script>
            alert('Data User Berhasil Dihapus');
            document.location.href='landingAdmin.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data User Gagal Dihapus');
            document.location.href='landingAdmin.php';
        </script>
        ";
    echo "<br>";
    echo mysqli_error($con);
}
