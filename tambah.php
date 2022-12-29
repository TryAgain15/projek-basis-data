<?php
include 'php/koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/alert.js"></script>
</head>
<body>
    <div class="container">
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

    <button type="submit" class="btn btn-success center-align" value="create" name="create">Beli</button>
</form>
    </div>
</body>
</html>