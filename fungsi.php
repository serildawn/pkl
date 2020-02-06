<?php
    //membuat koneksi
    $conn=mysqli_connect("localhost","root","","morfeen");

    //Cek koneksi
    if(!$conn)
    {
        die('Connection Failed : '.mysqli_connect_errno()
        .' - '.mysqli_connect_error());
    }

    function addFreelance($data)
{
    global $con;

    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $notlp = $data["notlp"];
    $project = $data["project"];
    $salary = $data["salary"];
    $start_date = $data["start_date"];
    $end_date = $data["end_date"];
    $spk = $data["spk"];
    $tipe_freelance = $data["tipe_freelance"];

    $query = "INSERT INTO freelance VALUES
            ('','$nama', '$alamat','$notlp',  '$project', '$salary', '$start_date' , '$end_date',  '$spk', '$tipe_freelance')";
    mysqli_query($con, $query);
}

function editFreelance($data)
{
    global $con;

    $id = $data["id_freelance"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $notlp = $data["notlp"];
    $project = $data["project"];
    $salary = $data["salary"];
    $start_date = $data["start_date"];
    $end_date = $data["end_date"];
    $spk = $data["spk"];
    $tipe_freelance = $data["tipe_freelance"];

    $query = "UPDATE freelance SET
    nama = '$nama',
    alamat = '$alamat',
    notlp = '$notlp',
    project = '$project',
    salary = '$salary',
    start_date = '$start_date',
    end_date = '$end_date',
    spk = '$spk',
    tipe_freelance = '$tipe_freelance'
    WHERE id_freelance LIKE '$id'";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

    //ambil data dari tabel 
    $result=mysqli_query($conn,"SELECT * FROM barang");
    $rescart=mysqli_query($conn,"SELECT * FROM addcart");
    
    //function query
    function query($query_kedua)
    {
        global $conn;
        $result = mysqli_query($conn,$query_kedua);
        $rows =[];
        while ($row = mysqli_fetch_assoc($result))
        {
            $rows[]=$row;
        }
        return $rows;
    }
    function addActivity($data)
{
    global $conn;

    $nama = $data["nama"];
    $tgl = $data["tgl"];
    $aktifitas = $data["aktifitas"];

    $query = "INSERT INTO aktifitas VALUES
            ('','$nama','$tgl','$aktifitas')";
    mysqli_query($conn, $query);
}

function editActivity($data)
{
    global $conn;

    $id = $data["id_aktifitas"];
    $nama = $data["nama"];
    $tgl = $data["tgl"];
    $aktifitas = $data["aktifitas"];

    $query = "UPDATE aktifitas SET
    nama = '$nama',
    tgl = '$tgl',
    aktifitas = '$aktifitas'
    WHERE id_aktifitas LIKE '$id'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


    function querycart($query_kedua)
    {
        global $conn;
        $rescart = mysqli_query($conn,$query_kedua);
        $rows =[];
        while ($row = mysqli_fetch_assoc($rescart))
        {
            $rows[]=$row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;
        $jenis=htmlspecialchars($data["jenis"]);
        $warna=htmlspecialchars($data["warna"]);
        $size=htmlspecialchars($data["size"]);
        $harga=htmlspecialchars($data["harga"]);
        $gambar=htmlspecialchars($data["gambar"]);

    //    var_dump($dat);

        $query= "INSERT INTO barang VALUES
                ('','$jenis','$warna','$size','$harga','$gambar')";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }
    
    function confirm($id)
    {
        global $conn;
        mysqli_query($conn,"UPDATE cekout SET status = 'Pembayaran Anda Telah Kami Terima. Mohon Tunggu 2-3 Hari Pengiriman Barang. 
        Terimakasih Telah Berbelanja di Morfeen Thirteen.' WHERE idbarang=$id");
        return mysqli_affected_rows($conn);
    }

    function pemesanan($data)
    {
        global $conn;
        $idcus = $_SESSION["idcus"];
        $nama  = ($data["nama"]);
        $daerah	= ($data["daerah"]);
        $alamatlengkap = ($data["alamatlengkap"]);
        $kodepos =($data["kodepos"]);
        $email  =($data["email"]);
        $phone =($data["phone"]);
    
          $pem= "INSERT INTO pemesanan VALUES
          ('','$idcus','$nama','$daerah','$alamatlengkap','$kodepos','$email','$phone')";
            mysqli_query($conn,$pem);
            return mysqli_affected_rows($conn);
    }

    function confirmuser($id)
    {
        global $conn;
        mysqli_query($conn,"UPDATE cekout SET status = 'Pesanan Selesai' WHERE idbarang=$id");
        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {
        global $conn;
        mysqli_query($conn,"DELETE FROM user WHERE id=$id");
        return mysqli_affected_rows($conn);
    }

    function hapuscart($id)
    {
        global $conn;
        mysqli_query($conn,"DELETE FROM addcart WHERE idadd=$id");
        return mysqli_affected_rows($conn);
    }

    function hapuscek($id)
    {
        global $conn;
        mysqli_query($conn,"DELETE FROM cekout WHERE idbarang=$id");
        return mysqli_affected_rows($conn);
    }

    function edit($data)
    {
        global $conn;

        $id                                 =$data ["id"];
        $nama                          	    =$data["nama"];
        $alamat                           	=$data["alamat"];
        $notlp            					=$data["notlp"];
        $project            				=$data["project"];
        $salary               				=$data["salary"];
        $start_date                         =$data["start_date"];
        $end_date                           =$data["end_date"];
        $spk               				    =$data["spk"];
        $tipe_freelance               		=$data["tipe_freelance"];

        $query="UPDATE freelance SET
            nama ='$nama',
            alamat = '$alamat',
            notlp = '$notlp',
            project = '$project',
            salary = '$salary'
            start_date = '$start_date'
            end_date = '$end_date'
            spk = '$spk'
            tipe_freelance = '$tipe_freelance'
            WHERE id_freelance = '$id' ";
            // die($query);
        mysqli_query($conn,$query);
        // return mysqli_affected_rows($conn);
    }

    
    function caricart($keyword)
    {
        $sql = " SELECT * FROM addcart
                WHERE
                jenis LIKE '%$keyword%' OR
                warna LIKE '%$keyword%' OR
                size LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                gambar LIKE '%$keyword%' ";
        // kembalian ke function query dengan parameter $sql
        return query($sql);
        //pastikan $keyword pada line 77 terdapat petik satu karena nilai berupa String
    }

    function cari($keyword)
    {
        $sql = " SELECT * FROM barang
                WHERE
                jenis LIKE '%$keyword%' OR
                warna LIKE '%$keyword%' OR
                size LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                gambar LIKE '%$keyword%' ";
        // kembalian ke function query dengan parameter $sql
        return query($sql);
        //pastikan $keyword pada line 77 terdapat petik satu karena nilai berupa String
    }

    function cart($id)
    {
        
    }

    // function pemesanan($data)



    function registrasi($data)
    {
        global $conn;

        
        $nama = $_POST['nama'];
        $notlp = $_POST['notlp'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $password = md5($_POST['pass']);
        $email = $_POST['email'];
        

        //mysqli_real_escape_string untuk memberikan perlindungan terhadap karakter2 unik (sql_injection)
        //pada mysqli_real_escape_string terdapat 2 parameter
        $password=mysqli_real_escape_string($conn,$data["password"]);
        // $password2=mysqli_real_escape_string($conn,$data["password2"]);

        //cek username sudah ada atau belum
        $result=mysqli_query($conn,"SELECT username FROM user WHERE username='$username'");

        //cek kondisi jika bernilai true maka cetak echo
        if(mysqli_fetch_assoc($result))
        {
            echo 
            "
                <script type='text/javascript'>
                    alert('Username Sudah Ada');
                </script>
            ";
            //agar proses insertnya gagal
            return false;
        }

        //cek konfirmasi password
        if($password)
        {
            echo "
            <script type='text/javascript'>
                    alert('Password Anda Tidak Sama');
                </script>
                ";
            //agar proses insertnya gagal
            return false;
        }

        //enkripsi password
        //$password=md5($password);

        // $password=password_hash($password,PASSWORD_DEFAULT);

        //var_dump($password);

        //tambahkan user baru ke database
        // mysqli_query($conn,"INSERT INTO customer VALUES('','$nama','$alamat','$daerah','$username','$password','$password2','$kodepos','$email','$notelp')");
        // return mysqli_affected_rows($conn);

        mysqli_query($conn,"INSERT INTO user VALUES('','$nama','$notlp','$alamat','$username','$password','$password2')");
        return mysqli_affected_rows($conn);
    }

    function upload()
    {
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpfile = $_FILES['gambar']['tmp_name'];

        if($error===4)
        {
            //pastikan pada inputan gambar tidak terdapat attribute required
            echo "
                <script>
                    alert('Tidak ada gambar yang di upload');
                </script>
                ";
            return false;
        }

        $jenis_gambar=['jpg', 'jpeg', 'gif', 'png'];
        $pecah_gambar=explode('.', $nama_file);
        $pecah_gambar=strtolower(end($pecah_gambar));
        if(!in_array($pecah_gambar,$jenis_gambar))
        {
            echo "
            <script>
                alert('yang Anda upload bukan file gambar');
            </script>
            ";
            return false;
        }

        // cek kapasitas gambar dalam byte. jika 1000000 byte = 1 Megabyte
        if($ukuran_file > 10000000)
        {
            echo "
                <script>
                    alert('ukuran gambar terlalu besar');
                </script>
            ";
            return false;
        }

        move_uploaded_file($tmpfile, 'image/'. $nama_file);

        // kita return nama filenya agar dapat masuk ke $gambar=$upload() pada function tambah
        return $nama_file;
    }
