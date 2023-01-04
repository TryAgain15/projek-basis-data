<?php
include 'php/koneksi.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/alert.js"></script>
</head>
<body>
    <!-- MENU NAVIGASI BAR -->
    <nav class="navbar navbar-expand-lg bg-light m-sm-auto shadow p-3 mb-5 bg-body rounded fixed-top ">
        <div class="container-fluid ">
        <a class="navbar-brand" href="index.php"><img src="image/logo.png" height="40px"> Rosalia Indah Express Pasuruan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php#home">Home</a>
        <a class="nav-link" href="index.php#about">About</a>
        <a class="nav-link" href="logout.php">Logout</a>
        </div>
    </div>
  </div>
</nav>
<!-- AKHIR MENU NAVIGASI BAR -->
<br><br><br><br>
<div class="container">
    <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
    <div class="container"  style="background-color: rgba(191, 255, 43, 0.2);">
    <h1 class="text-center " >List Harga Tiap Kelas</h1>
    <table border="1" align="center" width="500px" style="text-align: center;">
       <!-- Pilih Data di PHP -->
       <tr>
         <td>Kelas</td>
         <td>Tujuan</td>
         <td>Harga Normal</td>
         <td>Jumlah Tiket yang Tersedia</td>
       </tr>
       <?php

$sql="SELECT * FROM stock";
$no = 1;
$tampil = mysqli_query($db, $sql);
while($array = mysqli_fetch_array($tampil)){
?>

<tr>
  <td><?php echo $array['kelas']; ?></td>   
  <td><?php echo $array['tujuan']; ?></td>
  <td><?php echo $array['harga']; ?></td>
  <td><?php echo $array['stock']; ?></td>

      </tr>
      <?php
}
?>
<!-- PHP Berakhir -->
</table>
</div>
</div>
<br><br><br><br>
    <h2 class="text-center">Tambah Stock Tiket</h2>
    <form action="php/proses2.php" method="post" enctype="multipart/form-data" onsubmit="return cekform()">
    <label for="kelas">Pilih Kelas</label>
    <select name="kelas" id="kelas" class="form-control">
        <option value="ekonomi">Ekonomi</option>
        <option value="bisnis">Bisnis</option>
        <option value="eksekutif">Eksekutif</option>
    </select>
    
    <label for="tujuan">Tujuan</label>
    <input type="text" name="tujuan" id="tujuan" disabled placeholder="Malang" class="form-control" value="Malang">

    <label for="jumlah">Jumlah</label>
    <input type="number" name="jumlah" id="jumlah" class="form-control">

    <label for="harga">Harga</label>
    <input type="number" name="harga" id="harga" class="form-control">

    <p></p>

    <button type="submit" class="btn btn-success center-align" value="create" name="create">Simpan</button>
</form>

    
</body>
 
<br><br><br><br>
<?php
}
else {
    echo "<script>
        alert('Anda Harus Login Dahulu!');
    </script>";
    header("location:logadmin.php?pesan=belum_login");
}
include 'penumpang.php';
?>

</div>
</html>