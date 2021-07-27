<?php
require '../../../system/db_server.php';

if (isset($_POST['bayar'])) {

    $number_rek         = $_POST['number_rek'];
    $nis                = $_POST['nis'];
    $nama               = $_POST['nama'];
    $jenis_pembayaran   = $_POST['jenis_pembayaran'];
    $bulan              = $_POST['bulan'];
    $thn_ajaran         = $_POST['thn_ajaran'];
    $tgl_bayar          = date("Y-m-d H:i:s");
    $pembayaran         = $_POST['pembayaran'];
    $kode_pembayaran    = $_POST['kode_pembayaran'];

    $perintah           = "SELECT * FROM tb_siswa WHERE number_rek ='$number_rek'";
    $result             = mysqli_query($conn, $perintah);
    $row1               = mysqli_fetch_array($result);

    if ($row1['number_rek'] == $number_rek) {

        $query          = "INSERT INTO tb_pembayaran VALUES (
                                    '',
                                    '$number_rek',
                                    '$nis',
                                    '$nama',
                                    '$jenis_pembayaran',
                                    '$bulan',
                                    '$thn_ajaran',
                                    '$tgl_bayar',
                                    '$pembayaran',
                                    '$kode_pembayaran'
                                    )";
                                    
var_dump($nis);
        mysqli_query($conn, $query);

        $query1         = "SELECT * FROM tb_tabungan WHERE number_rek='$number_rek'";
        $hasil          = mysqli_query($conn, $query1);
        $row1           = mysqli_fetch_array($hasil);
        $itungan        = $row1['saldo'] - $pembayaran;
        $itungan1       = $row1['pembayaran'] + $pembayaran;
        $query2         = "UPDATE tb_tabungan SET 
                                        pembayaran          = '$itungan1',      
                                        saldo               ='$itungan'
                                        WHERE number_rek    ='$number_rek'";
       
        mysqli_query($conn, $query2);

    } else {
        echo "<script>alert('Data Salah');
    window .location='../../../views/users/pembayaran/pembayaran.php'</script>";
        exit();
    }
}    ?>    <html>
            <form action="../../../views/users/struck/struck_pembayaran.php" method="post">
            <input type="hidden" name="kode_pembayaran" value="<?php echo $_POST['kode_pembayaran']?>">
            <button name="post">button</button>
            </form>
        </html>