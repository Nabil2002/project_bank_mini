<?php
require '../../../system/db_server.php';

if (isset($_POST['bayar'])) {

    $number_rek         = $_POST['number_rek'];
    $setoran            = $_POST['setoran'];

    $perintah           = "SELECT * FROM tb_siswa WHERE number_rek ='$number_rek'";
    $result             = mysqli_query($conn, $perintah);
    $row1               = mysqli_fetch_array($result);

    if ($row1['number_rek'] == $number_rek) {

        $query         	= "SELECT * FROM tb_tabungan WHERE number_rek='$number_rek'";
        $hasil          = mysqli_query($conn, $query);
        $row1           = mysqli_fetch_array($hasil);
        $itungan        = $row1['saldo'] + $setoran;
		$itungan1       = $row1['setoran'] + $setoran;
		
        $query         	= "UPDATE tb_tabungan SET 
                                        setoran          	= '$itungan1',      
                                        saldo               ='$itungan'
                                        WHERE number_rek    ='$number_rek'";
        mysqli_query($conn, $query);

    } else {
        echo "<script>alert('Data Salah');
    window .location='../../../views/users/pembayaran/pembayaran.php'</script>";
        exit();
    }
}