<?php
session_start();
if (empty($_SESSION['access_code'])) {
    header("location:../../../index.php"); // jika belum login, maka dikembalikan ke file form_login.php
}            

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Keywords" content="HTML,CSS,JQUERY">
    <meta name="author" content="Nabil Khoerul Rijal">
    <link rel="shortcut icon" href="../../../public/assets/img/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../public/assets/css/admin/login.css">
    <link rel="stylesheet" href="../../../public/assets/fonts/fontawsome/css/all.css">
    <title>Selamat Datang | Silahkan Login</title>
</head>

<body>
    <div class="content">
        <form action="../../modlers/admin/model_login.php" method="POST">
            <div class="title"><span>Admin Login</span></div>

            <div class="input-icon">
                <input type="text" name="username" class="box_login" placeholder="Username" autocomplete="off"
                    required>
                <i class="fas fa-credit-card"></i>
            </div>

            <div class="input-icon">
                <input type="password" name="password" class="box_login" placeholder="Password" autocomplete="off"
                    required>
                <i class="fas fa-lock"></i>
            </div>
            <button type="submit" class="tombol" name="login"><i class="fa fa-location-arrow"></i> LOGIN</button>

            <div class="text1">
                <span> 
                    <a href="">Registrasi Admin</a>
                    <a href="../../modlers/users/model_logout.php">Kembali</a>
                </span>
            </div>
        </form>
    </div>
</body>

</html>