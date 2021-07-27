<html>
    <?php
require 'app/modlers/users/model_autolog.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Keywords" content="HTML,CSS,JQUERY">
    <meta name="author" content="Nabil Khoerul Rijal">
    <link rel="shortcut icon" href="public/assets/img/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="public/assets/css/users/login.css">
    <link rel="stylesheet" href="public/assets/css/admin/alert_code.css">
    <link rel="stylesheet" href="public/assets/fonts/fontawsome/css/all.css">
    <title>Selamat Datang | Silahkan Login</title>
</head>

<body>
    <div class="content">
        <form action="app/modlers/users/model_login.php" method="POST">
            <div class="title"><span>Member Login</span></div>

            <div class="input-icon">
                <input type="number" name="number_rek" class="box_login" placeholder="No REK" autocomplete="off"
                    required>
                <i class="fas fa-credit-card"></i>
            </div>

            <div class="input-icon">
                <input type="password" name="password" class="box_login" placeholder="Password" autocomplete="off"
                    required>
                <i class="fas fa-lock"></i>
            </div>
            <button type="submit" class="tombol" name="login"><i class="fa fa-location-arrow"></i> LOGIN</button>
        </form>
        <div class="text1">
                <a href="#popup">Log-Admin?</a>
                <!-- <div id="button"><a href="">Click Me</a></div> -->
        </div>
        <div id="popup">
            <div class="window">
                <a href="#" class="close-button" title="Close">X</a>
                <div class="head-text">
                    <h1>Access Code</h1>
                </div>
                <div class="content-alert">
                    <form action="app/modlers/admin/valid_accode/model_accode.php" method="POST">
                        <!-- input code -->
                        <div>
                            <input type="password" name="access_code" class="input-field" placeholder="Masukan Access Code" required autocomplete="off">
                        </div>
                        <!-- Button -->
                        <div>
                            <button type="submit" name="submit" class="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>