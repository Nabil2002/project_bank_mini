<?php
    include "../../../system/db_server.php";

    if (isset($_POST['submit'])) {

        $access_code = $_POST['access_code'];

        $perintah = "SELECT * FROM tb_code WHERE access_code='$access_code'";
        $data  = mysqli_query($conn, $perintah);
        $row1   = mysqli_fetch_array($data);

        $cek = mysqli_num_rows($data);
        if($cek > 0){
            session_start();
            $_SESSION['access_code'] = $access_code;
            $_SESSION['status'] = "login";
            header("location: ../../../views/admin/login.php");;
        }else{
            echo "<script>alert('Maaf Access Code Salah!');
            window .location='../../../../index.php#popup'</script>";
        }
    } else {
        mysqli_error($conn);
    }
    

