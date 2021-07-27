<?php
    include '../../../system/db_server.php';

    if(isset($_POST['daftar'])) {

        $number_rek         =$_POST['number_rek'];
        $nis                =$_POST['nis'];
        $nama               =$_POST['nama'];
        $password           =$_POST['password'];
        $jenis_kelamin      =$_POST['jenis_kelamin'];
        $kelas_jurusan      =$_POST['kelas_jurusan'];
        $tgl_lahir          =$_POST['tgl_lahir'];
        $alamat             =$_POST['alamat'];

        $cek        = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE number_rek='$number_rek'");
        $row1       = mysqli_fetch_array($cek);
        if (empty($row1)) {

            $data = "INSERT INTO tb_siswa VALUES (
                                        '$number_rek',   
                                        '$nis',                
                                        '$nama',               
                                        '$password',           
                                        '$jenis_kelamin',
                                        '$kelas_jurusan',      
                                        '$tgl_lahir',          
                                        '$alamat') ";
            $data1 = "INSERT INTO tb_tabungan VALUES (
                                        '$number_rek') ";

        $data3 = mysqli_query($conn,$data);
          $data2 = mysqli_query($conn,$data1);
        
        

            echo "<script>alert('Data Berhasil Di Tambah');
        window .location='../../../views/admin/setoran/setor_saldo.php'</script>";
        } else {
            echo "<script>alert('Data gagal');
        window .location='../../../views/admin/pendaftaran/daftar_siswa.php'</script>";
        }
    }    