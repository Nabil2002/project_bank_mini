<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Keywords" content="HTML,CSS,JQUERY">
    <meta name="author" content="Nabil Khoerul Rijal">
    <link rel="stylesheet" href="../../../../public/assets/css/users/tabungan/info_tabungan.css">
    <link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.css">
    <link rel="stylesheet" href="../../../../public/assets/fonts/fontawsome/css/all.min.css">
    <link rel="shortcut icon" href="../../../../public/assets/img/logo/logo.png" type="image/x-icon">
    <title>Internet Banking - OneDek</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
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
            <h3 class="admin">Ibanking SMKN 1</h3>
        </div>
        <div class="wrapper-content">
            <div class="wrapper-sidebar">
                <div class="sidebar">
                    <a href="../home/home.php"><button class="btnt"><i style="margin-right: 5px"
                                class="fa fa-home"></i><span>Home</span></button><br></a>
                    <!-- <a href="pembayaran"><button class="btn"><i style="margin-right: 5px"
                                class="fa fa-table"></i><span>Pembayaran</span></button><br></a> -->
                    <input type="checkbox" name="" id="tag-pembayaran">
                    <a href="../pembayaran/pembayaran.php"><button class="btnn"><i style="margin-right: 5px"
                                class="fa fa-money-check-alt"></i><span>Pembayaran</span></button><br></a>
                    <a href="info_tabungan.php"><button class="btnn"><i style="margin-right: 5px"
                                class="fa fa-money-check-alt"></i><span>Cek Saldo</span></button><br></a>
                </div>
            </div>
            <div class="wrapper">
                <div class="box-up">
                    <?php
                        session_start();
                        if (empty($_SESSION['number_rek'])) {
                            header("location:../../../../index.php"); // jika belum login, maka dikembalikan ke file form_login.php
                    } else {
                        include'../../../system/db_server.php';
                        $norek = $_SESSION['number_rek'];
                        $sql = "SELECT * FROM tb_tabungan WHERE number_rek = $norek";
                        $hasil  = mysqli_query($conn, $sql);
                        $sql2 = mysqli_fetch_array($hasil);

                    ?>
                    <span>
                        Informasi | Tabungan
                    </span>
                </div>
                <div class="wrap-box-inform">
                    <table cellspacing="0px" cellpadding="5px">
                        <tr>
                            <td class="thead">
                                <h2>No Rekening</h2>
                            </td>
                            <td class="kutip">
                                <h2>:</h2>
                            </td>
                            <td class="isi">
                                <h2> <?php echo $_SESSION['number_rek'] ?></h2>
                            </td>
                        </tr>
                        <tr>
                            <td class="thead">
                                <h2>Saldo</h2>
                            </td>
                            <td class="kutip">
                                <h2>:</h2>
                            <td class="isi">
                                <h3>RP. <?php echo $sql2['saldo'] ?></td></h3>
                            </td>
                    <?php }?>
                        </tr>
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
    </div>
</body>

</html>