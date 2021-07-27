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
	<link rel="stylesheet" href="../../../../public/assets/css/admin/data_siswa/table_siswa7.css">
	<link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.css">
	<link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.min.css">
	<link rel="shortcut icon" href="../../../../public/assets/img/logo/logo.png" type="image/x-icon">
	<script src="../../../../public/assets/js/jquery-3.3.1.min.js"></script>
	<title>Data Table Siswa</title>
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
					Table | Data Siswa SMKN 1 DEPOK
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
				<a href="table_siswa.php">Tampilkan Semua Data&nbsp;</a>
				<?php 
					if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
						echo "<b>Hasil pencarian : ".$cari."</b>";
					}
				?>
				<table class="table">
					<tr class="tr-header">
						<th class="child">No</th>
						<th class="child">Nomer Rekening</th>
						<th class="child">Nomer NIS</th>
						<th class="child">Nama</th>
						<th class="child">Jenis Kelamin</th>
						<th class="child">Kelas dan Jurusan</th>
						<th class="child">Tanggal Lahir</th>
						<th class="child">Alamat</th>
						<th class="th-last-child">Options</th>
					</tr>
					<?php 
						include "../../../system/db_server.php";
						if(isset($_GET['cari'])){
							$cari = $_GET['cari'];
							$query_data = mysqli_query($conn,"SELECT * FROM tb_siswa WHERE nama LIKE '%".$cari."%'");				
						}else{
							$query_data = mysqli_query($conn,"select * from tb_siswa");		
						}
							$no = 1;
							while($data = mysqli_fetch_array($query_data)){
					?>
					<tr>
						<td class="td-first-child"><?php echo $no++; ?></td>
						<td class="td-first-child"><?php echo $data['number_rek']; ?></td>
						<td class="td-first-child"><?php echo $data['nis']; ?></td>
						<td class="td-child"><?php echo $data['nama']; ?></td>
						<td class="td-child"><?php echo $data['jenis_kelamin']; ?></td>
						<td class="td-child"><?php echo $data['kelas_jurusan']; ?></td>
						<td class="td-child"><?php echo $data['tgl_lahir']; ?></td>
						<td class="td-child"><?php echo $data['alamat']; ?></td>
						<td class="td-last-child">
							<button class="button-options">
								<a class="edit" href="update_siswa.php?number_rek=<?php echo $data['number_rek']; ?>">
								Edit
								</a>
							</button>
							<br>
							<button class="button-options">
								<a class="hapus"
								href="../../../modlers/admin/data_siswa/model_delete.php?number_rek=<?php echo $data['number_rek']; ?>"
								onclick="konfirmasi()">Hapus</a>
							</button>
							<button class="button-options">
									<a href="../report/riwayat_spp.php?number_rek=<?php echo $data['number_rek']; ?>">Report</a>
							</button>
						</td>
					</tr>
				<?php } ?>
				</table>
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
	</script>
</body>

</html>