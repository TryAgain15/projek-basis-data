<?php
include'koneksi.php';
$nama = $_POST['nama'];
$noid = $_POST['noid'];
$nohp = $_POST['nohp'];
$kelas = $_POST['kelas'];
$jadwal = $_POST['jadwal'];
$jnorm = $_POST['jnorm'];
$jtua = $_POST['jtua'];

// var_dump('y');    

if(isset($_POST['create'])){

    $sql =  "INSERT INTO tbpesan VALUES('','$nama','$noid','$nohp','$kelas','$jadwal','$jnorm','$jtua')";
    $query = mysqli_query($db, $sql);
    // $query = mysqli_query($db, )


}
header("location: ../print2.php");

?>