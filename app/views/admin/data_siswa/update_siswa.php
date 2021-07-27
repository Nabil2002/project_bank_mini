<?php
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:../login.php"); // jika belum login, maka dikembalikan ke file form_login.php
	} else {
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Keywords" content="HTML,CSS,JQUERY">
    <meta name="author" content="Nabil Khoerul Rijal">
    <link rel="stylesheet" href="../../../../public/assets/css/admin/data_siswa/update_siswa1.css">
    <link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.css">
    <link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.min.css">
    <link rel="shortcut icon" href="../../../../public/assets/img/logo/logo.png" type="image/x-icon">
	<script src="../../../../public/assets/js/jquery-3.3.1.min.js"></script>
    <title>Update Data Siswa</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="judul">Dashboard MS-Bank</h1>

            <button class="tombol">MENU</button>

            <nav class="menu">
                <h4>Menu Navigasi</h4>
                <ul>
                    <li><a href="../dashboard/dashboard.php"><i class="fas fa-home"></i>&nbsp;&nbsp;HOME</a></li>
                    <li><a href="../pembayaran/pembayaran.php"><i class="fa fa-money-bill"></i>&nbsp;&nbsp;Pembayaran</a></li>
                    <li><a href="../Pendaftaran/daftar_siswa.php"><i
                                class="fas fa-registered"></i>&nbsp;&nbsp;Pendaftaran Siswa</a></li>
                    <li><a href="../setoran/setor_saldo.php"><i class="fas fa-plus"></i>&nbsp;&nbsp;Setoran</a></li>
                    <li><a href="table_siswa.php"><i class="fas fa-table"></i>&nbsp;&nbsp;Data Siswa</a></li>
                    <li><a href="../../../modlers/admin/model_logout.php"><i
                                class="fa fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <div class="flat">
                <span>
                    Pembayaran | Data Siswa SMKN 1 DEPOK
                </span>
            </div>
            <div class="wrapper-payment">
                <?php 
                    include "../../../system/db_server.php";
                    $number_rek = $_GET['number_rek'];
                    $query_mysqli = mysqli_query($conn,"SELECT * FROM tb_siswa WHERE number_rek='$number_rek'")or die(mysqli_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysqli)){
                ?>
                <form action="../../../modlers/admin/data_siswa/model_update.php" method="POST" class="main-wrap">
                    <div class="payment-column">
                        <label for="" class="label-form">No Rekening</label>
                        <input type="number" class="column-form-rek" name="number_rek"
                            value="<?php echo $data['number_rek'] ?>" readonly>
                    </div>
                    <div class="payment-column">
                        <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa'] ?>">
                        <label for="" class="label-form">NIS</label>
                        <input type="number" class="column-form" name="nis" value="<?php echo $data['nis'] ?>">
                    </div>
                    <div class="payment-column">
                        <label for="column-form" class="label-form">Nama</label>
                        <input type="text" class="column-form" name="nama" value="<?php echo $data['nama'] ?>">
                    </div>
                    <div class="payment-column">
                        <label for="">Jenis_kelamin</label>
                        <input type="text" class="column-form" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">
                    </div>
                    <div class="payment-column">
                        <label for="column-form" class="label-form">Kelas Jurusan</label>
                        <input type="text" class="column-form" name="kelas_jurusan"
                            value="<?php echo $data['kelas_jurusan'] ?>">
                    </div>
                    <div class="payment-column">
                        <label for="column-form" class="label-form">Tanggal Lahir</label>
                        <input type="date" class="column-form" name="tgl_lahir"
                            value="<?php echo $data['tgl_lahir'] ?>">
                    </div>
                    <div class="payment-column">
                        <label for="column-form" class="label-form">Alamat</label>
                        <input type="textarea" class="column-form" name="alamat" value="<?php echo $data['alamat'] ?>">
                    </div>
                    <div class="wrapper-button">
                        <button type="submit" name="update" class="btn-daftar">Update</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
        <div class="footer">
            <div class="text-end">
                <span>Copyright <i class="fa fa-copyright"></i> Nabil Khoerul Rijal 2019 All Right Reserved</span>
                <!--Copyright © Your Website 2019-->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.tombol').click(function () {
                $('.menu').toggleClass("slide-menu-tampil");
            });
        });
    </script>
</body>

</html>