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
        <a class="nav-link active" aria-current="page" href="#home">Home</a>
        <a class="nav-link" href="#about">About</a>
        <a class="nav-link" href="#form">Pesan Tiket</a>
        <a class="nav-link" href="#tabel">Daftar Pemesan Tiket</a>
      </div>
    </div>
  </div>
</nav>
    <!-- AKHIR MENU NAVIGASI BAR -->
    <!-- AWAL HOME -->

    <!-- DAFTAR HARGA -->
    <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
    <div class="container"  style="background-color: rgba(191, 255, 43, 0.8);">
    <h1 class="text-center " >List Harga Tiap Kelas</h1>
    <table border="1" align="center">
      <tr>
        <td>No.</td>
        <td>Tujuan</td>
        <td>Kelas</td>
        <td>Harga Normal</td>
        <td>Harga Diskon(Untuk Lansis >60 Tahun)</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Malang</td>
        <td>Ekonomi</td>
        <td>Rp. 10.000</td>
        <td>20%</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Malang</td>
        <td>Bisnis</td>
        <td>Rp. 50.000</td>
        <td>20%</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Malang</td>
        <td>Eksekutif</td>
        <td>Rp. 200.000</td>
        <td>20%</td>
      </tr>
      <tr>
        <td> <a href="php/p.php"></a> </td>
      </tr>
    </table>
    </div>
    </div>
    <!-- AKHIR DAFTAR HARGA -->

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
      
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $array['nama'];?>" />
        <p></p>
        <label for="noid">No Identitas</label>
        <input type="number" name="noid" id="noid" class="form-control" value="<?php echo $array['noid'];?>" />
        <p></p>
        <label for="nohp">NO. HP</label>
        <input type="number" name="nohp" id="nohp" class="form-control" value="<?php echo $array['nohp'];?>" />
        <p></p>

        <!-- KELAS -->
        <div class="form-group">
        <label for="Kelas Penumpang"> <i class="fa fa-caret-down">Kelas Penumpang</i></label> 
            <select name="kelas" id="kelas" class="form-control">
       <option value="<?php echo $array['kelas'];?>" name="kelas" id="<?php echo $array['kelas'];?>"><?php echo $array['kelas'];?></option>
       <option value="ekonomi" name="kelas" id="ekonomi">Ekonomi</option>
        <option value="bisnis" nama="kelas" id="bisnis">Bisnis</option>
        <option value="eksekutif" name="kelas" id="eksekutif"> Eksekutif</option>
        </select>
        </div>
        <!-- AKHIR KELAS -->

        <p></p>
        <label for="jadwal">jadwal Keberangkatan</label>
        <input type="date" name="jadwal" id="jadwal" class="form-control" value="<?php echo $array['jadwal'];?>">
        <p></p>
        <label for="jnorm">Jumlah Penumpang</label>
        <input type="number" name="jnorm" class="form-control" id="jnorm" value="<?php echo $array['jnorm'];?>">
        <p style="font-size: 60%;">Bukan Lansia (Usia<60) </p>
        <p></p>
        <label for="jtua">Jumlah Penumpang Lansia</label>
        <input type="number" name="jtua" class="form-control" id="jtua" value="<?php echo $array['jtua'];?>">
        <p style = " font-size: 60%; " > Usia 60 tahun ke atas</p>
        <!-- Akhir Konten/Formulir -->
         
<p>
       
        <button type="submit" class="btn btn-success" value="simpan" name="simpan">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <!-- Akhir Tombol -->
        <!-- </form>     -->
        <a href="php/p.php"> <input type="button" class="btn btn-primary" value="Cek Harga" name="Perkiraan Harga" ></a>
        
    </form>
    </div>   
    <!--AKHIR DARI FORMULIR PEMBELIAN TIKET -->

</body>
</html>