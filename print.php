<?php

    include "php/koneksi.php";

?>
<html>
    <head>
<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
<body>
<div class="container text-xl-center">
<div class="tab-pane fade show active" id="tabel" role="tabpanel" aria-labelledby="tabel-tab">
<h2 style="text-align: center;">Daftar Pemesanan Tiket</h2>
<table border="1" align="center">
    <tr>
        <td>No.</td>
        <td>Nama</td>
        <td>No. Identitas</td>
        <td>No. HP</td>
        <td>Kelas Penumpang</td>
        <td>Jadwal</td>
        <td>Jumlah Penumpang</td>
        
    </tr>
    <tr>
    <?php

        $sql="SELECT * FROM tbpesan";
        $no = 1;
        $tampil = mysqli_query($db, $sql);
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['nama']; ?></td>
        <td><?php echo $hasil['noid']; ?></td>
        <td><?php echo $hasil['nohp']; ?></td>
        <td><?php echo $hasil['kelas']; ?></td>
        <td><?php echo $hasil['jadwal']; ?></td>
        
        
    </tr>
    <?php
        }
    ?>
</table>
</div>
<script>
    window.print();

</script>