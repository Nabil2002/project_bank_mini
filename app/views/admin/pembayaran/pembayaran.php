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
	<link rel="stylesheet" href="../../../../public/assets/css/admin/pembayaran/pembayaran1.css">
	<link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.css">
	<link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.min.css">
	<link rel="shortcut icon" href="../../../../public/assets/img/logo/logo.png" type="image/x-icon">
	<script src="../../../../public/assets/js/jquery-3.3.1.min.js"></script>
	<title>Cara Membuat Sliding Menu Dengan CSS3 - WWW.MALASNGODING.COM</title>
</head>

<body>

	<style type="text/css">

	</style>
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
					<li><a href="../data_siswa/table_siswa.php"><i class="fas fa-table"></i>&nbsp;&nbsp;Data Siswa</a>
					</li>
					<li><a href="../../../modlers/admin/model_logout.php"><i
								class="fa fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a></li>
				</ul>
			</nav>
		</div>
		<div class="content">
			<div class="flat">
				<span>
					Pembayaran | Sekolah
				</span>
			</div>
                <div class="wrapper-payment">
                    <form action="../../../modlers/admin/pembayaran/model_pembayaran.php" method="post" class="main-wrap" name="random_form">
                        <div class="payment-column">
                            <label for="" class="label-form">No Rekening</label>
                            <input type="number" class="column-form" name="number_rek"
                                placeholder="Number Rekening" required>
                        </div>
                        <div class="payment-column">
                            <label for="" class="label-form">NIS</label>
                            <input type="number" class="column-form" name="nis"
                                placeholder="Number NIS" required>
                        </div>
                        <div class="payment-column">
                            <label for="" class="label-form">Nama</label>
                            <input type="text" class="column-form" name="nama"
                                placeholder="Nama" required>
                        </div>
                        <div class="payment-column">
                            <label for="" class="label-form">Jenis Pembayaran</label>
                            <select name="jenis_pembayaran" class="column-form">
                                <option value="-">Pilih Pembayaran</option>
                                <option value="SPP">SPP</option>
                                <option value="KI">KI</option>
                                <option value="Seragam">Seragam</option>
                                <option value="PKL">PKL</option>
                            </select>
                        </div>
                        <div class="payment-column">
                            <label for="">Bulan</label>
                            <select name="bulan" class="column-form">
                                <option value="-">Pilih Bulan</option>
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                        <div class="payment-column">
                            <label for="" class="label-form">Tahun Ajaran</label>
                            <select name="thn_ajaran" class="column-form">
                                <option value="2018/2019">2018/2019</option>
                                <option value="2019/2020">2019/2020</option>
                                <option value="2021/2022">2020/2021</option>
                                <option value="2023/2024">2022/2023</option>
                                <option value="2024/2025">2023/2024</option>
                                <option value="2024/2025">2024/2025</option>
                            </select>
                        </div>
                        <div class="payment-column">
                            <label for="" class="label-form">Jumlah Uang</label>
                            <input type="number" class="column-form" name="pembayaran" placeholder="Jumlah Uang Anda"
                                onkeyup="convertToRupiah(this);" required>
                        </div>
                        <div class="payment-column">
                        <label for="">Kode Pembayaran</label>
                        <input type="button" class="btn-generate" value="Generate" onClick="random_all();">
						<input type="number" class="column-form-rek" name="kode_pembayaran" placeholder="Number Rekening"
                            readonly required>
                        </div>
                        <div class="wrapper-button">
                            <button type="submit" name="bayar" class="button-sub">Bayar</button>
                        </div>
                    </form>
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
		function random_all() {
			var campur = "1234567890";
			var panjang = 10;
			var random_all = '';
			for (var i = 0; i < panjang; i++) {
				var hasil = Math.floor(Math.random() * campur.length);
				random_all += campur.substring(hasil, hasil + 1);
			}
			document.random_form.kode_pembayaran.value = random_all;
		}
	</script>
</body>

</html>