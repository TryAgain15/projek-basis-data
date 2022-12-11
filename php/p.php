<html>
<head>
    <title>Cek Harga Tiket</title>
</head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<body class="container p-5" background="../image/bg-light.jpg" >
    
    <h3 class="text-center container">Cek Harga</h3>
    <div class="container-fluid">
    <form method="POST">
        <table>
            
            <label for="kelas">Kelas Penumpang</label>
            <select name="kelas" id="kelas" class="form-control">
                <option value="10000" name="kelas" id="ekonomi">Ekonomi</option>
                <option value="50000" nama="kelas" id="bisnis">Bisnis</option>
                <option value="200000" name="kelas" id="eksekutif"> Eksekutif</option>
            <tr>
                
                <!-- <td><input type="text" name="harga" value="10000"></td> -->
                <input type="hidden" name="a" value="10000">
                <label for="harga" name="harga" value="10000"></label>
         
            <tr>
                <td>Jumlah Penumpang</td>
                <td>:</td> 
                <p></p>
                <td><input type="text" name="normal" class="form-control"></td>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Penumpang Lansia</td>
                <td>:</td> <p></p>
                <td><input type="text" name="lansia" class="form-control"></td>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="hitung" value="Hitung">
                    <input type="reset" name="reset" value="Reset">
                    <a href="../index.php"> <input type="button"  value="Home" name="Home" ></a>
                </td>
            </tr>
        </table>
    </form>
    </div>
    <hr />
    <h3>Hasil :</h3>
    <!-- Coding PHP hitung total bayar ketik disini    qty*-(harga*nama)-->
    <?php
    if(isset($_POST['hitung'])){
        $kelas = $_POST['kelas'];
        $kelas1 = intval($kelas); //AMAN
        $normal =  $_POST['normal'];
        $normal1 = intval($normal);
        $a = $normal1 *$kelas;

        $lansia = $_POST['lansia'];
        $lansia1 = intval ($lansia); 
        $lansia2 = $lansia1*$kelas1;
        $lansia4 = $kelas1;
        $diskon = $lansia2 / 10 * 2;
        $lansia3 = $kelas1 * $lansia1; //AMAN
        $diskon2 = $lansia3-$diskon; 


        $total = $diskon2 + $a;


        echo "
            <table border='2' cellpadding='4'>
                <tr>
                    <td>Harga Normal | </td>
                    <td>Harga Untuk Lansia | 
                    </td>
                    <td>Total Harga</td>
                </tr>
                <tr>  
                    <td align='center'>";echo number_format($a,0,',','.');echo "</td>
                    <td align='center'>";echo number_format($diskon2,0,',','.');echo "</td>
                    <td align='center'>";echo number_format($total,0,',','.');echo "</td>
                </tr>
            </table>
        ";
    }
?>
</body>
</html>