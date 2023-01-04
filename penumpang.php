<div class="container text-xl-center">
<div class="tab-pane fade show active" id="tabel" role="tabpanel" aria-labelledby="tabel-tab">
<h2>Daftar Pemesanan Tiket</h2>
<table border="1" align="center">
    <tr>
        <td>No.</td>
        <td>Nama</td>
        <td>No. Identitas</td>
        <td>No. HP</td>
        <td>Kelas Penumpang</td>
        <td>Jadwal</td>
        <td>Jumlah Penumpang</td>
        <td colspan="3">
          Atur
        </td>
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
        <td><?php echo $hasil['jnorm']; ?></td>
        <td>
          <a href="edit.php?noid=<?php echo $hasil['noid']; ?>"><button type="button" class="btn btn-warning btn-outline-dark">Edit</button></a> | 
          <a href="print1.php?noid=<?php echo $hasil['noid']; ?>"><button type="button" class="btn btn-primary btn-outline-dark text-white">Print</button></a> | 
        <a href="php/delete.php?&noid=<?php echo $hasil['noid']; ?>"><button type="button" class="btn btn-danger btn-outline-dark text-white">Hapus</button></a> </td>

    </tr>
    <?php
        }
    ?>
</table>
<p></p>
<a href="print.php"> <input type="button" value="CETAK" class="btn btn-light btn-outline-dark"> </a>