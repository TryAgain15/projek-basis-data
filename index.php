<?php

    include "php/koneksi.php";

?>
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
<br><br><br>
<nav class="navbar navbar-expand-lg bg-light m-sm-auto shadow p-3 mb-5 bg-body rounded fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="image/logo.png" height="40px"> Rosalia Indah Express Pasuruan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#home">Home</a>
        <a class="nav-link" href="index.php#about">About</a>
        <a class="nav-link" href="index.php#form">Pesan Tiket</a>
        </div>
    </div>
  </div>
</nav>
    <!-- AKHIR MENU NAVIGASI BAR -->
    <!-- AWAL HOME -->
        <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
    <section class="jumbotron text-center">
      <img src="image/jumbotron.jpg" alt="Bus" width="500px" class="rounded-circle">
  <h1 class="display-4">Selamat datang</h1>
  
  
</section>
    </div>
    <!-- AKHIR HOME -->

    <!-- ABOUT US -->
    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
    <div class="container">
      <div class="text-center">
        <h1>About US</h1>
      </div>
      <p class="lead">Cerita Singkat Tentang Kami </p>
  <div class="row text-center">
    <div class="col-sm">
    Berawal dari pasangan suami istri yang sederhana, Bapak Yustinus Soeroso dan Ibu Yustina Rahyuni Soeroso mengawali perjuangannya mendirikan usaha transportasi tahun 1983 yang waktu itu hanya 1 armada jenis Colt Diesel AD 9866 A, yang sekarang disebut dengan “Bibit Kawit” dengan membawa penumpang Solo – Blitar. Setelah itu berlanjut usaha travel dengan trayek/rute Jogja – Surabaya, Jogja – Blitar/Malang dan terus berkembang sampai tahun 1991.Pada tahun tersebut (1991) barulah mempunyai 5 armada “Bumel Non AC” dengan merk HINO type AK, dan sejak saat itu secara resmi Perusahaan Otobis (PO) Rosalia Indah resmi menjadi perusahaan perseorangan dengan ijin usaha Biro Perjalanan Umum disingkat BPU. Rosalia Indah dengan No. 05/D.2/BPU/III/1991 dari Deparpostel Dirjend Pariwisata.
    Seiring perkembangan dunia usaha transportasi, maka perusahaan perseorangan (PO) dituntut harus profesional dalam pengelolaan manajemen dan pelayanan, sehingga tepatnya tanggal 15 April 2015, 

  </div>
    <div class="col-sm">
    
    PO. Rosalia Indah berubah menjadi perusahaan berbadan hukum dengan nama PT. Rosalia Indah Transport berdasarkan SK. Menkumham RI No. AHU-2392920.AH.01.01. yang beralamat di Jl. Raya Solo - Sragen KM. 7,5 Jaten, Karanganyar, Jawa Tengah. PT. Rosalia Indah Transport adalah sebuah perusahaan yang sedang berkembang pesat dan merupakan perusahaan swasta yang diperhitungkan dalam percaturan bisnis jasa angkutan darat di Indonesia. Ketatnya kondisi persaingan bisnis transportasi darat sejak era 1990-an sampai saat ini bukan menjadi kendala bagi PT. Rosalia Indah Transport, bahkan pada masa itu dijadikan titik tolak dari yang semula berorientasi pada pelayanan transportasi AKDP (Antar Kota Dalam Provinsi) menjadi AKAP (Antar Kota Antar Provinsi) yang lebih memiliki daya jangkau luas, lebih handal dan lebih mantap hingga saat ini, dengan sumber daya manusia lebih dari 1.000 personil dan lebih dari 140 kantor perwakilan dan agen Rosalia Indah tersebar di Jawa - Sumatera. Bahkan PT. Rosalia Indah Transport juga siap melayani pariwisata dan carter bis pariwisata dengan armada pariwisata.
    </div>
  </div>
</div>
    <!-- AKHIR ABOUT US -->
    <!-- DAFTAR HARGA -->
    <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
    <div class="container"  style="background-color: rgba(191, 255, 43, 0.8);">
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
    <!-- AKHIR DAFTAR HARGA -->
    
    <div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="form-tab">
    <div class="container" style="background-color: rgba(67, 228, 129, 0.8);">
      <h1 class="text-center alert mt-3 container">Pesan Tiket</h1>
      <h3>Pemesanan Tiket Bus AKAP</h3>
    <!-- FORMULIR PEMBELIAN TIKET -->
      <form action="php/proses.php" method="POST" enctype="multipart/form-data" onsubmit="return cekform()">
      
      <!-- Isi konten/Formulir -->
      
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
        <p></p>
        <label for="noid">No Identitas</label>
        <input type="number" name="noid" id="noid" class="form-control" placeholder="KTP/KK/Kartu Pelajar">
        <p></p>
        <label for="nohp">NO. HP</label>
        <input type="number" name="nohp" id="nohp" class="form-control"placeholder="Nomer yang Bisa Dihubungi">
        <p></p>
        <!-- KELAS -->
        <div class="form-group">
          <!-- <select class="form-control"> -->
            <!-- <input type="button" value="kelas">  Kelas -->
        <label for="Kelas Penumpang"> <i class="fa fa-caret-down">Kelas Penumpang</i></label> 
            <select name="kelas" id="kelas" class="form-control">
       <option value="Ekonomi" name="kelas" id="Ekonomi">Ekonomi</option>
        <option value="Bisnis" nama="kelas" id="Bisnis">Bisnis</option>
        <option value="Eksekutif" name="kelas" id="Eksekutif"> Eksekutif</option>
        
        </select>
        </div>
        <!-- AKHIR KELAS -->
        <p></p>
        <label for="jadwal">jadwal Keberangkatan</label>
        <input type="date" name="jadwal" id="jadwal" class="form-control" placeholder="tgl/bulan/tahun">
        <p></p>
        <label for="jnorm">Jumlah Penumpang</label>
        <input type="number" name="jnorm" class="form-control" id="jnorm" value="0">
        <br>
        
        <!-- Akhir Konten/Formulir -->
         
<p>
        <!-- vALIDASI -->
        <input type="checkbox" oninput="validasi()" name="setuju" id="setuju">
        Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
        </p>
        
        <!-- Tombol -->
        <button type="submit" class="btn btn-success" value="create" name="create">Beli</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <!-- Akhir Tombol -->
        <!-- </form>     -->
        
    </form>
    </div>   
    <!--AKHIR DARI FORMULIR PEMBELIAN TIKET -->

<!-- TAMPILAN TABEL YANG SUDAH DIINPUTKAN -->
<div class="container text-xl-center">
<div class="tab-pane fade show active" id="tabel" role="tabpanel" aria-labelledby="tabel-tab">
<h2>Contact Us</h2>
<h6>Cs : 08587907978123 (Soso)</h6>

</div>
<!-- AKHIRAN TAMPILAN TABEL YANG SUDAH DIINPUTKAN -->
</body>
</html>
