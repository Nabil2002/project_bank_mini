<?php

require '../../system/db_server.php';

if (isset($_POST['login'])) {

    $number_rek = $_POST['number_rek'];
    $password   = $_POST['password'];

    $perintah   = "SELECT * FROM tb_siswa WHERE number_rek ='$number_rek' AND password ='$password'";
    $hasil      = mysqli_query($conn, $perintah);
    $row1       = mysqli_fetch_array($hasil);
  

    $nis                = $row1['nis'];
    $number_rek         = $row1['number_rek'];
    $nama               = $row1['nama'];
    $kelas_jurusan      = $row1['kelas_jurusan'];
    $tgl_lahir          = $row1['tgl_lahir'];
    $number_phone       = $row1['number_phone'];
    $alamat             = $row1['alamat'];

    if ($row1['number_rek'] == $number_rek and $row1['password'] == $password) {
        session_start();
        $_SESSION['nis']            = $nis;
        $_SESSION['number_rek']     = $number_rek;
        $_SESSION['nama']           = $nama;
        $_SESSION['number_phone']   = $number_phone;
        $_SESSION['kelas_jurusan']  = $kelas_jurusan;
        $_SESSION['tgl_lahir']      = $tgl_lahir;
        $_SESSION['alamat']         = $alamat;

        header('location: ../../views/users/home/home.php');
    } else {
        echo "<script>alert('Maaf Number rekening atau Password Salah!');
        window .location='../../../index.php'</script>";
    }
}