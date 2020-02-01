<?php
 require '../fungsi.php';
session_start();
$error = '';

if(!empty($_POST["uname"]) || !empty($_POST["pass"])) {
    # Get username and password from user
    $username = $_POST["uname"];
    $password = md5($_POST["pass"]);

    # Write MySql Query
    $query = "SELECT * FROM user WHERE uname='$username' AND pass='$password'";
    # Get the query result
    $result = mysqli_query($conn, $query);
    // echo $username.$password.
    mysqli_num_rows($result);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $level = $row["level"];

        if($level == 1) {
            $_SESSION["uname"] = $username;
            $_SESSION["level"] = $level;
            header("Location: ../dashboard.php");
        } else {
            $_SESSION["uname"] = $username;
            $_SESSION["level"] = $level;
            $_SESSION['id'] = $row['id'];
            header("Location: ../landingUser.php");
        }
    } else {
        echo "<script>alert('Username and Password invalid'); window.location = '../login.php';</script>";
    }

    # Close connection to database
    mysqli_close($con);

} else {
    echo "masuk";
    die();
    $error = urlencode("Username atau password kosong!");
    header("Location: ../login.php?pesan=$error");
}
