<?php
        extract ($_POST); 
        extract ($_GET); 
        include "koneksi.php";
        $data="DELETE FROM tbpesan WHERE noid='$noid'"; 
        $query = mysqli_query($db,$data); 
        header("location: ../tambah.php"); 
        ?>