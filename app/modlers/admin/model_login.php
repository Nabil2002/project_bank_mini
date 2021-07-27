<?php

require '../../system/db_server.php';

if (isset($_POST['login'])) {

    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $perintah   = "SELECT * FROM tb_petugas WHERE username ='$username' AND password ='$password'";
    $hasil      = mysqli_query($conn, $perintah);
    $row1       = mysqli_fetch_array($hasil);

    $username   = $row1['username'];
    $alamat     = $row1['alamat'];

    if ($row1['username'] == $username and $row1['password'] == $password) {
        session_start();
        $_SESSION['username']       = $username;
        $_SESSION['alamat']         = $alamat;

        header('location: ../../views/admin/dashboard/dashboard.php');
    } else {
        echo "<script>alert('Maaf Username atau Password Salah!');
        window .location='../../views/admin/login.php'</script>";
    }
}