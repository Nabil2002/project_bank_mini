<?php
    session_start();
    if (empty($_SESSION['number_rek'])) {
        header("location:../../../../index.php"); // jika belum login, maka dikembalikan ke file form_login.php
    } else {
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Keywords" content="HTML,CSS,JQUERY">
    <meta name="author" content="Nabil Khoerul Rijal">
    <link rel="stylesheet" href="../../../../public/assets/css/users/pembayaran/pembayaran1.css">
    <link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.css">
    <link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.min.css">
    <link rel="shortcut icon" href="../../../../public/assets/img/logo/logo.png" type="image/x-icon">
    <script src="jquery-2.2.4.min.js"></script>
    <script src="process.js"></script>
    <script src="../../../../public/assets/js/jquery-ui.js"></script>
    <script src="../../../../public/assets/js/jquery.js"></script>
    <title>IBanking - SMKN1 Depok</title>
</head>

<body>
    <div class="container">
        <!-- header bar -->
        <div class="navbar">
            <!-- user icon link -->
            <div class="icon-user">
                <input type="checkbox" id="tag-menu">
                <label class="fas fa-user-circle" for="tag-menu"></label>
                <div class="drop-icon-user">
                    <nav>
                        <ul>
                            <li><a href="../profile/profile.php">Profil</a></li>
                            <hr>
                            <li><a href="../../../modlers/users/model_logout.php">Log Out</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- ///// -->
            <h3 class="admin">Ibanking SMKN 1</h3>
        </div>
        <!-- ///// -->
        <div class="wrapper-content">
            <!-- menu slide left -->
            <div class="wrapper-sidebar">
                <div class="sidebar">
                    <a href="../home/home.php"><button class="btnt"><i style="margin-right: 5px"
                                class="fa fa-home"></i><span>Home</span></button><br></a>
                    <!-- <a href="pembayaran"><button class="btn"><i style="margin-right: 5px"
                                class="fa fa-table"></i><span>Pembayaran</span></button><br></a> -->
                    <input type="checkbox" name="" id="tag-pembayaran">
                    <a href="pembayaran.php"><button class="btnn"><i style="margin-right: 5px"
                                class="fa fa-money-check-alt"></i><span>Pembayaran</span></button><br></a>
                    <a href="../tabungan/info_tabungan.php"><button class="btnn"><i style="margin-right: 5px"
                                class="fa fa-money-check-alt"></i><span>Cek Saldo</span></button><br></a>
                </div>
            </div>
            <!-- ///// -->
            <!-- isi content -->
            <div class="wrapper">
                <!-- box up -->
                <div class="box-up">
                    <span>
                        Pembayaran | Sekolah
                    </span>
                </div>
                <!-- ///// -->
                <!-- box payment -->
                <div class="wrapper-payment">
                    <form action="../../../modlers/users/pembayaran/model_pembayaran.php" method="post" class="main-wrap" name="random_form">
                        <div class="payment-column">
                            <label for="" class="label-form">No Rekening</label>
                            <input type="number" class="column-form" id="number_rek" name="number_rek"
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
                                <option value="SPP">Pilih Pembayaran</option>
                                <option value="SPP">SPP</option>
                                <option value="KI">KI</option>
                                <option value="Seragam">Seragam</option>
                                <option value="PKL">PKL</option>
                            </select>
                        </div>
                        <div class="payment-column">
                            <label for="">Bulan</label>
                            <select name="bulan" class="column-form">
                                <option value="">Pilih Bulan</option>
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
                <!-- ///// -->
            </div>
            <!-- ///// -->
            <div>
            </div>
        </div>
        <div class="footer">
            <div class="text-end">
                <span>Copyright <i class="fa fa-copyright"></i> Nabil Khoerul Rijal 2019 All Right Reserved</span>
                <!--Copyright © Your Website 2019-->
            </div>
        </div>
    </div>
    </div>
    <script language="javascript" type="text/javascript">
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
