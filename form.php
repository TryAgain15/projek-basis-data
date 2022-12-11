
<!-- Sambungan ke database -->
<?php
include'koneksi.php';
?>
<!-- Akhir Sambungan DataBase -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="js/alert.js"></script>

</head>
<body>
    <!-- Header -->
    <header>Pemesanan Tiket Bus AKAP</header>
    <!-- Akhir Header -->
    <div class="container">
        <!-- Isi konten/Formulir -->
        <h1>Form Pemesanan</h1>
        <form action="proses.php" method="POST" enctype="multipart/form-data" onsubmit="return cekform()">
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" placeholder="Nama Lengkap">
        <p></p>
        <label for="noid">No Identitas</label>
        <input type="number" name="noid" id="noid" placeholder="KTP/KK/Kartu Pelajar">
        <p></p>
        <label for="nohp">NO. HP</label>
        <input type="number" name="nohp" id="nohp" placeholder="Nomer yang Bisa Dihubungi">
        <p></p>
        <!-- KELAS -->
        Kelas Penumpang
        <select name="kelas">
        <option value="ekonomi" name="kelas" id="ekonomi">Ekonomi</option>
        <input type="hidden" name="norm" value="10000">
        <input type="hidden" name="tua" value="8000">
        <option value="bisnis" nama="kelas" id="bisnis">Bisnis</option>
        <input type="hidden" name="norm" value="20000">
        <input type="hidden" name="tua" value="16000">
        <option value="eksekutif" name="kelas" id="eksekutif"> Eksekutif</option>
        <input type="hidden" name="norm" value="40000">
        <input type="hidden" name="tua" value="50000">
        </select>
        <!-- AKHIR KELAS -->
        <p></p>
        <label for="jadwal">jadwal Keberangkatan</label>
        <input type="date" name="jadwal" id="jadwal" placeholder="tgl/bulan/tahun">
        <p></p>
        <label for="jnorm">Jumlah Penumpang</label>
        <input type="number" name="jnorm" id="jnorm" value="0">
        <p>Bukan Lansia (Usia<60) </p>
        <p></p>
        <label for="jtua">Jumlah Penumpang Lansia</label>
        <input type="number" name="jtua" id="jtua" value="0">
        <p> Usia 60 tahun ke atas</p>
        <!-- Akhir Konten/Formulir -->
        <p>
        <!-- <form action="" method="POST"> -->
        <input type="checkbox" oninput="validasi()" name="setuju" id="setuju">
        Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
        </p>
        
        <!-- Tombol -->
        <input type="button" value="Hitung Total Bayar" name="hitung">
        <input type="submit" value="Pesan" name="create">
        <input type="button" value="Cancel" name="">
        <!-- Akhir Tombol -->
        <!-- </form>     -->
    </form>
    </div>
    
</body>
</html>
<script>
    window.print();

</script>