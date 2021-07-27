<?php 

include '../../../system/db_server.php';

if (isset($_POST['update'])) {

        $number_rek         =$_POST['number_rek'];
        $nis                =$_POST['nis'];
        $nama               =$_POST['nama'];
        $jenis_kelamin      =$_POST['jenis_kelamin'];
        $kelas_jurusan      =$_POST['kelas_jurusan'];
        $tgl_lahir          =$_POST['tgl_lahir'];
        $alamat             =$_POST['alamat'];

        mysqli_query($conn,"UPDATE tb_siswa SET 
                                        nis           = '$nis',                
                                        nama          = '$nama',               
                                        jenis_kelamin = '$jenis_kelamin',
                                        kelas_jurusan = '$kelas_jurusan',      
                                        tgl_lahir     = '$tgl_lahir',          
                                        alamat        = '$alamat' 
                                        WHERE number_rek ='$number_rek'");

        echo "<script>alert('Data Berhasil Di Update');
        window .location='../../../views/admin/data_siswa/table_siswa.php'</script>";
        
} else {

}


?>