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
	<link rel="stylesheet" href="../../../../public/assets/css/admin/report/riwayat_ki1.css">
	<link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.css">
	<link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.min.css">
	<link rel="shortcut icon" href="../../../../public/assets/img/logo/logo.png" type="image/x-icon">
	<script src="../../../../public/assets/js/jquery-3.3.1.min.js"></script>
	<title>Report Pembayaran Kunjungan Industri</title>
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
					<input type="checkbox" id="drop-menu" />
					<label class="text-drop" for="drop-menu"><i
							class="fas fa-money-bill-wave"></i>&nbsp;&nbsp;Pembayaran</label>
					<div class="menu-list">
						<nav>
							<ul>
								<li><a href="../pembayaran/spp.php"><i class="fa fa-user"></i>&nbsp;&nbsp;SPP</a></li>
								<li><a href="../pembayaran/pkl.php"><i class="fa fa-table"></i>&nbsp;&nbsp;PKL</a></li>
								<li><a href="../pembayaran/seragam.php"><i
											class="fa fa-user"></i>&nbsp;&nbsp;Seragam</a></li>
								<li><a href="../pembayaran/ki.php"><i class="fa fa-table"></i>&nbsp;&nbsp;Kunjungan
										Industri</a></li>
							</ul>
						</nav>
					</div>
					<br>
					<li><a href="../Pendaftaran/daftar_siswa.php"><i
								class="fas fa-registered"></i>&nbsp;&nbsp;Pendaftaran Siswa</a></li>
					<li><a href="../setoran/setor_saldo.php"><i class="fas fa-plus"></i>&nbsp;&nbsp;Setoran</a></li>
					<li><a href="../data_siswa/table_siswa.php"><i class="fas fa-table"></i>&nbsp;&nbsp;Data Siswa</a></li>
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
		<div class="search-nav">
			<form action="" method="get">
				<input type="search" name="cari" class="kolom-search" autocomplete="off" placeholder="Cari..." required>
				<button class="fa fa-search button" for="search"></button>
			</form>
		</div>
			<div class="Wrapper-table">
				<h3>Data Siswa SMK NEGERI 1 Depok</h3>
				<div class="wrapper-btn-print">
				<br>
					<button value="Print Halaman Ini!" onclick="printPage()" class="btn-print"><i class="fas fa-print"></i>
						Struck
					</button>
				</div>
				<table class="table">
					<tr class="tr-header">
						<th>No</th>
						<th>Nomer NIS</th>
						<th>Nomer Rekening</th>
						<th>Nama</th>
						<th>Kelas dan Jurusan</th>
						<th>Tanggal bayar</th>
						<th>Pembayaran</th>
					</tr>
					<?php 
						include "../../../system/db_server.php";
						$number_rek = $_GET['number_rek'];
						$query_mysqli = mysqli_query($conn,"SELECT * FROM ki WHERE number_rek='$number_rek'")or die(mysqli_error());
						$nomor = 1;
                    while($data = mysqli_fetch_array($query_mysqli)){
					?>
					<tr>
						<td class="column-content"><?php echo $nomor++; ?></td>
						<td class="column-content"><?php echo $data['nis']; ?></td>
						<td class="column-content"><?php echo $data['number_rek']; ?></td>
						<td class="column-content"><?php echo $data['name']; ?></td>
						<td class="column-content"><?php echo $data['kelas_jurusan']; ?></td>
						<td class="column-content"><?php echo $data['tgl_bayar']; ?></td>
						<td class="column-content">RP.<?php echo $data['pembayaran']; ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
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

		$(".hapus").click(function () {
			var jawab = confirm("Anda Yakin Ingin Menghapus Data Ini?");
			if (jawab === true) {
				//            kita set hapus false untuk mencegah duplicate request
				var hapus = false;
				if (!hapus) {
					hapus = true;
					$.post('hapus.php', {
							id: $(this).attr('data-id_siswa')
						},
						function (data) {
							alert(data);
						});
					hapus = false;
				}
			} else {
				return false;
			}
		});

    function printPage() {
        window.print();
    }
    </script>
</body>

</html>