<?php

include '../helper/Connection.php';

if (isset($_POST['register'])) 
{
    $nama = $_POST['nama'];
    $notlp = $_POST['notlp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $username = $_POST['uname'];
    $password = md5($_POST['pass']);
    $password2 = md5($_POST['confirm_password']);
    $pass = $_POST['pass'];
    
    $queryCheckUsername = "SELECT uname FROM user WHERE uname = '$username' ";
    $checkResultUsername = mysqli_query($con, $queryCheckUsername);
    $queryCheckEmail = "SELECT email FROM user WHERE email = '$email'";
    $checkResultEmail = mysqli_query($con, $queryCheckEmail);

    if (mysqli_num_rows($checkResultUsername) == 0) 
    {
        if (mysqli_num_rows($checkResultEmail) == 0) 
        {
            if (strlen($pass) >= 6) 
            {
                if($password2 == $password)
                {
                    $query = "INSERT INTO user(nama, notlp, alamat, email, uname, pass, level) VALUES ('$nama','$notlp', '$alamat', '$email', '$username', '$password', 2)";
                    // if(mysqli_query($con,$query))
                    // {
                    //     echo "<script>document.location.href = '../index.php#login';</script>";
                    // }
                    // else
                    // {
                    //     echo "<script>alert('Input data tidak valid');document.location.href = '../index.php';</script>";
           	        // }
                    mysqli_query($con, $query);
                    header("Location: ../Login.php");
                }
                else 
                {
                    echo "<script>alert('Konfirmasi Password Tidak Sesuai!'); window.location = '../register.php';</script>";
                }
            }
            else 
            {
                echo "<script>alert('Password minimal 6 karakter!'); window.location = '../register.php';</script>";
            }
        }
        else 
        {
            echo "<script>alert('Email sudah digunakan!'); window.location = '../register.php';</script>";
        } 
    }
    else 
    {
        echo "<script>alert('Username sudah digunakan!'); window.location = '../register.php';</script>";
    }
}



mysqli_close($con);
