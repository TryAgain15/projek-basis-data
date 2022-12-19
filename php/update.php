<?php 

extract($_GET); 
extract($_POST); 
include "koneksi.php"; 
$edit= "UPDATE tbpesan SET nama ='$nama', noid='$noid', nohp = '$nohp', kelas='$kelas', jadwal='$jadwal', jnorm='$jnorm', jtua='$jtua' WHERE noid ='$noid'"; 
$query=mysqli_query($db, $edit);  
header("location: ../index.php#tabel"); 
?> 