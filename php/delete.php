<?php
include "koneksi.php";
        extract ($_POST); 
        extract ($_GET); 
        $data="DELETE FROM tbpesan WHERE noid='$noid'"; 
        $query = mysqli_query($db,$data); 
        header("location: ../tambah.php"); 
        ?>