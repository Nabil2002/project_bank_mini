<?php
require '../../../system/db_server.php';
include '../../users/pembayaran/model_payment.php';

if (isset($_POST['bayar'])) {

    $nis                = $_POST['nis'];
    $number_rek         = $_POST['number_rek'];
    $name               = $_POST['name'];
    $kelas_jurusan      = $_POST['kelas_jurusan'];
    $bulan              = $_POST['bulan'];
    $thn_ajaran         = $_POST['thn_ajaran'];
    $tgl_bayar          = date("Y-m-d H:i:s");
    $pembayaran         = $_POST['pembayaran'];

    $perintah   = "SELECT * FROM siswa WHERE nis ='$nis' AND number_rek ='$number_rek'";
    $result     = mysqli_query($conn, $perintah);
    $row1       = mysqli_fetch_array($result);

    if ($row1['nis'] == $nis and $row1['number_rek'] == $number_rek) {

        $query  = "INSERT INTO spp VALUES (
                                    '',
                                    '$nis',
                                    '$number_rek',
                                    '$name',
                                    '$kelas_jurusan',
                                    '$bulan',
                                    '$thn_ajaran',
                                    '$tgl_bayar',
                                    '$pembayaran'
                                    )";

        mysqli_query($conn, $query);

        $_SESSION['nis']            = $_POST['nis'];
        $_SESSION['number_rek']     = $_POST['number_rek'];
        $_SESSION['name']           = $_POST['name'];
        $_SESSION['kelas_jurusan']  = $_POST['kelas_jurusan'];
        $_SESSION['bulan']          = $_POST['bulan'];
        $_SESSION['thn_ajaran']     = $_POST['thn_ajaran'];
        $_SESSION['tgl_bayar']      = date("Y-m-d H:i:s");
        $_SESSION['pembayaran']     = $_POST['pembayaran'];

        echo "<script>alert('Pembayaran Sukses, Tekan OK untuk print Bukti Pembayaran');
        window .location='../../../views/admin/struck/struck_spp.php'</script>";
        // header('location: ../../../views/users/pembayaran/tampil.php');
        } else {
            echo "<script>alert('Data Tidak Terdaftar');
        window .location='../../../views/admin/pembayaran/spp.php'</script>";
            exit();
    }
}