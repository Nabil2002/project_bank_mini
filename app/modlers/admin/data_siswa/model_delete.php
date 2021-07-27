<?php 
include '../../../system/db_server.php';
$number_rek = $_GET['number_rek'];
$query_data = mysqli_query($conn,"DELETE FROM tb_siswa WHERE number_rek='$number_rek'")or die(mysqli_error());

$qwe = mysqli_query($conn,$query_data);
var_dump($qwe);
    // echo "<script>alert('Data Berhasil Di Delete');
    // window .location='../../../views/admin/data_siswa/table_siswa.php'</script>";
?>

