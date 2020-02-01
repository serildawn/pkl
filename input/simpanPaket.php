<?php
    include '../helper/Connection.php';
    
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $code=$_FILES["gambar"]["error"];
            if($code===0){
                $nama_folder="images";
                $tmp=$_FILES["gambar"]["tmp_name"];
                $nama_file=$_FILES["gambar"]["name"];
                $path="../$nama_folder/$nama_file";
                $upload_check=false;
                $tipe_file=array("image/jpeg","image/jpg","image/png");

                if(!in_array($_FILES["gambar"]["type"],$tipe_file)){
                    $error.="Cek kembali ekstensi file anda (*.jpeg,*.jpg,*.png)<br>";
                    $upload_check=true;
                    header("Location: inputPaket.php?error=$error");
                }
                
                if(file_exists($path)){
                    $error.="File dengan nama yang sama sudah tersimpan, coba lagi<br>";
                    $upload_check=true;
                    header("Location: inputPaket.php?error=$error");
                }
                
                if(!$upload_check AND move_uploaded_file($tmp,$path))
                { 
                    $query="INSERT INTO paket (nama,  deskripsi, harga,  gambar,deleted) VALUES 
                    ('$nama', '$deskripsi', '$harga','$nama_file',  0)";
                    
                    if(mysqli_query($con, $query)){
                        header("Location: inputPaket.php");
                    }else{
                        $error=urlencode("Data tidak berhasil ditambahkan");
                        header("Location: inputPaket.php?error=$error");
                    }
                    
                    mysqli_close($con);      
                }
            else{
                $error="Upload Gambar Gagal! Gambar sudah ada (*.jpeg,*.jpg,*.png)<br>";
                header("Location: inputBuku.php?error=$error");
            }
        }
    
?>