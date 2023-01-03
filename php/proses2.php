<?php
include 'koneksi.php';

$kelas = $_POST['kelas'];
$tujuan = $_POST['tujuan'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];


if(isset($_POST['create'])){

    $sql =  "INSERT INTO tambah VALUES('$kelas','$tujuan','$jumlah','$harga')";
    $query = mysqli_query($db, $sql);
    // $query = mysqli_query($db, )
}
header("location: ../tambah.php");

?>