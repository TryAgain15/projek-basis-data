<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/alert.js"></script>
</head>
<body background="image/bg.jpg" style="background-size: 100%; width: 500% background-repeat: no-repeat ">
<!-- MENU NAVIGASI BAR -->
<nav class="navbar navbar-expand-lg bg-light m-sm-auto shadow p-3 mb-5 bg-body rounded">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="image/logo.png" height="40px"> Rosalia Indah Express Pasuruan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="index.php#about">About</a>
        <a class="nav-link" href="index.php#form">Pesan Tiket</a>
        </div>
    </div>
  </div>
</nav>
    <!-- AKHIR MENU NAVIGASI BAR -->
    <!-- AWAL HOME -->
    <div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="form-tab">
    <div class="container" style="background-color: rgba(67, 228, 129, 0.8);">
      <h1 class="text-center alert mt-3 container">Pesan Tiket</h1>
      <h3>Pemesanan Tiket Bus AKAP</h3>
    <!-- FORMULIR PEMBELIAN TIKET -->
      <form action="php/update.php" method="POST" enctype="multipart/form-data" onsubmit="return cekform()">
      
      <!-- Pilih Data di PHP -->
        <?php
        extract ($_POST); 
        extract ($_GET); 
        include "php/koneksi.php";
        $data="SELECT * FROM tbpesan WHERE noid='$noid'"; 
        $query = mysqli_query($db,$data); 
        $array=mysqli_fetch_array($query); 
        ?>

      <!-- PHP Berakhir -->
      <!-- Isi konten/Formulir -->
<p></p>
      <label for="id">Id Tiket</label>
        <input type="number" name="id" id="id" class="form-control" disabled value="<?php echo $array['id'];?>" />
        <p></p>
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" class="form-control" disabled value="<?php echo $array['nama'];?>" />
        <p></p>
        <label for="noid">No Identitas</label>
        <input type="number" name="noid" id="noid" class="form-control" disabled value="<?php echo $array['noid'];?>" />
        <p></p>
        <label for="nohp">NO. HP</label>
        <input type="number" name="nohp" id="nohp" disabled class="form-control" value="<?php echo $array['nohp'];?>" />
        <p></p>

        <!-- KELAS -->
       
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas" disabled class="form-control" value="<?php echo $array['kelas'];?>" />
        <!-- AKHIR KELAS -->

        <p></p>
        <label for="jadwal">jadwal Keberangkatan</label>
        <input type="date" name="jadwal" disabled id="jadwal" class="form-control" value="<?php echo $array['jadwal'];?>">
        <p></p>
        <label for="jnorm">Jumlah Penumpang</label>
        <input type="number" name="jnorm" disabled class="form-control" id="jnorm" value="<?php echo $array['jnorm'];?>">
<br>
        <!-- Akhir Konten/Formulir -->
        
    </form>
  </div>  
  <br> 
  <center>
    <a href="tambah.php"> <button class="btn btn-success center-align yellow"><< Back</button> </a>
  </center>
  <!--AKHIR DARI FORMULIR PEMBELIAN TIKET -->

</body>
</html>
<script>
  window.print();
</script>