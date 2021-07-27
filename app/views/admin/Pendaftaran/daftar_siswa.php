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
	<link rel="stylesheet" href="../../../../public/assets/css/admin/pendaftaran/daftar_siswa.css">
	<link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.css">
	<link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.min.css">
	<link rel="shortcut icon" href="../../../../public/assets/img/logo/logo.png" type="image/x-icon">
	<script src="../../../../public/assets/js/jquery-3.3.1.min.js"></script>
	<title>Pendaftaran Siswa Baru</title>
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
					<li><a href="daftar_siswa.php"><i class="fas fa-registered"></i>&nbsp;&nbsp;Pendaftaran Siswa</a>
					</li>
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
					Pendaftaran | Siswa SMKN 1 DEPOK
				</span>
			</div>
			<div class="wrapper-payment">
				<form action="../../../modlers/admin/data_siswa/model_insert.php" method="post" class="main-wrap"
					name="random_form">
					<div class="payment-column">
						<label for="" class="label-form">No Rekening</label>
						<input type="button" class="btn-generate" value="Generate" onClick="random_all();">
						<input type="number" class="column-form-rek" name="number_rek" placeholder="Number Rekening"
							readonly required>
					</div>
					<div class="payment-column">
						<label for="" class="label-form">NIS</label>
						<input type="number" class="column-form" id="nis" name="nis" placeholder="Number NIS" required>
					</div>
					<div class="payment-column">
						<label for="column-form" class="label-form">Nama</label>
						<input type="text" class="column-form" name="nama" placeholder="Nama Lengkap" required>
					</div>
					<div class="payment-column">
						<label for="" class="label-form">password</label>
						<input type="password" class="column-form" name="password" placeholder="Password" required>
					</div>
					<div class="payment-column">
						<label for="">Jenis_kelamin</label>
						<select name="jenis_kelamin" class="column-form">
							<option value="-">Pilih Jenis kelamin</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
					<div class="payment-column">
						<label for="column-form" class="label-form">Kelas Jurusan</label>
						<input type="text" class="column-form" name="kelas_jurusan" placeholder="Kelas jurusan"
							required>
					</div>
					<div class="payment-column">
						<label for="column-form" class="label-form">Tanggal Lahir</label>
						<input type="date" class="column-form" name="tgl_lahir" placeholder="Tanggal lahir" required>
					</div>
					<div class="payment-column">
						<label for="column-form" class="label-form">Alamat</label>
						<input type="text" class="column-form" name="alamat" placeholder="Alamat Rumah" required>
					</div>
					<div class="wrapper-button">
						<button type="submit" name="daftar" class="btn-daftar">Daftar</button>
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
	</script>
	<script language="javascript" type="text/javascript">
		function random_all() {
			var campur = "1234567890";
			var panjang = 10;
			var random_all = '';
			for (var i = 0; i < panjang; i++) {
				var hasil = Math.floor(Math.random() * campur.length);
				random_all += campur.substring(hasil, hasil + 1);
			}
			document.random_form.number_rek.value = random_all;
		}
	</script>
</body>

</html>