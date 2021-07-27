<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Nabil Khoerul Rijal">
    <link rel="stylesheet" href="../../../../public/assets/css/users/struck/struck_pembayaran.css">
    <link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.css">
    <link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.min.css">
    <link rel="shortcut icon" href="../../../../public/assets/img/logo/logo.png" type="image/x-icon">
    <title>laporan</title>
</head>

<body>
    <div class="container">
        <div class="wrapper-btn-back">
            <a href="../pembayaran/pembayaran.php"><i class="fas fa-arrow-alt-circle-left fa-2x icon-back"></i></a>
        </div>
        <div class="main-container">
            <div class="header-struck">
                <div class="wrapper-img">
                    <img src="../../../../public/assets/img/logo/logo.png" alt="Logo SMKN 1 Depok" class="icon">
                </div>
                <div class="text-hd">
                    <span>Bukti Pembayaran</span>
                </div>
            </div>
            <div class="content-struck">
                <?php
                session_start();
                if (empty($_SESSION['number_rek'])) {
                    header('../../../views/admin/pembayaran/spp.php');
                } else {
                    include'../../../system/db_server.php';
                    $kode_pembayaran = $_POST['kode_pembayaran'];
                    $query  ="SELECT * FROM tb_pembayaran WHERE kode_pembayaran ='$kode_pembayaran'";
                    $hasil          = mysqli_query($conn, $query);
                    $row1           = mysqli_fetch_array($hasil);
                
                    ?>
                <span class="tgl">&nbsp;<?php echo $row1['tgl_bayar'] ?></span>
                <span class="tgl">Tanggal Pembayaran:</span>
                <div class="info">
                    <table cellspacing="0">
                        <tr>
                            <th>NO</th>
                            <td>01</td>
                        </tr>
                        <tr>
                            <th>Nis</th>
                            <td><?php echo $row1['number_rek'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td><?php echo $_SESSION['nama'] ?></td>
                        </tr>
                        <tr>
                            <th>Kelas dan Jurusan</th>
                            <td><?php echo $_SESSION['kelas_jurusan'] ?></td>
                        </tr>
                        <tr>
                            <th>Bulan</th>
                            <td><?php echo $row1['bulan'] ?></td>
                        </tr>
                        <tr>
                            <th>Tahun Ajaran</th>
                            <td><?php echo $row1['thn_ajaran'] ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Pembayaran</th>
                            <td><?php echo $row1['jenis_pembayaran'] ?></td>
                        </tr>
                        <tr>
                            <th>Jumlah Uang</th>
                            <td><?php echo $row1['pembayaran'] ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <div class="note">
                        <span>Note : Simpan bukti pembayaran ini baik-baik!</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-btn-print">
            <button value="Print Halaman Ini!" onclick="printPage()" class="btn-print"><i class="fas fa-print"></i>
                Struck</button>
        </div>
    </div>
    <script>
    function printPage() {
        window.print();
    }
    </script>
</body>

</html>