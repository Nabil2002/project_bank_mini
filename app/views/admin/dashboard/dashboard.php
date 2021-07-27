<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Keywords" content="HTML,CSS,JQUERY">
	<meta name="author" content="Nabil Khoerul Rijal">
	<link rel="stylesheet" href="../../../../public/assets/css/admin/dashboard.css">
	<link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.css">
	<link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.min.css">
	<link rel="shortcut icon" href="../../../../public/assets/img/logo/logo.png" type="image/x-icon">
	<script src="../../../../public/assets/js/jquery-3.3.1.min.js"></script>
	<title>Selamat Datang | MS Bank</title>
</head>

<body>
	<div class="container">
		<div class="header">
			<h1 class="judul">Dashboard MS-Bank</h1>
			<button class="tombol">MENU</button>
			<nav class="menu">
				<h4>Menu Navigasi</h4>
				<ul>
					<li><a href="dashboard.php"><i class="fas fa-home"></i>&nbsp;&nbsp;HOME</a></li>
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
				<?php
                    session_start();
                    if (empty($_SESSION['username'])) {
                        header("location:../login.php"); // jika belum login, maka dikembalikan ke file form_login.php
                    } else {
                ?>
					<span>
						Welcome | <?php echo $_SESSION['username'] ?>
					</span>
                <?php } ?>
			</div>
			<h1><u>Bijak Lah Dalam Mengelola Keuangan Sekolah<u></h1>
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