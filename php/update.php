<?php 
include "koneksi.php"; 

extract($_GET); 
extract($_POST); 

// $id = $_POST['id'];
// $nama = $_POST['nama'];
// $noid = $_POST['noid'];
// $nohp = $_POST['nohp'];
// $kelas = $_POST['kelas'];
// $jadwal = $_POST['jadwal'];
// $jnorm = $_POST['jnorm'];

$edit= "UPDATE tbpesan SET nama ='$nama', nohp = '$nohp', kelas='$kelas', jadwal='$jadwal', jnorm='$jnorm' WHERE noid ='$noid'";
$query=mysqli_query($db, $edit);  

  
header("location: ../tambah.php"); 
?> 