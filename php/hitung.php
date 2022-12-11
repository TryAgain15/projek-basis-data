<!-- 
        // $norm    =$_POST['norm'];
        // $hasil1 = $_POST['jnorm'];
        // $tua    =$_POST['tua'];
        // $hasil2   =$_POST['jtua'];
        // $hasil3    = $norm*$hasil1;
        // $hasil4 = $tua*$hasil2;
        // $total = $hasil4 +$hasil3;
        
        // $tua2    =$_POST['tua2'];
        // $norm2    =$_POST['norm2'];
        // $norm3    =$_POST['norm3'];
        // $tua3    =$_POST['tua3'];
    //     if(isset($_POST['hitung'])){
    //     echo "
    //         <table border='1' cellpadding='4'>
    //             <tr>
    //                 <td>Jumlah Penumpang</td>
    //                 <td>Jumlah Penumpang Lansia</td>
    //                 <td>Total Biaya</td>
    //             </tr>
    //             <tr>
    //                 <td>$nama</td>
    //                 <td> echo $total /td>
    //             </tr>
    //         </table>
    //     ";
    // }
    // header("location: tabel.php");
    //     

 -->
 <?php

include "koneksi.php";

        $norm    =$_POST['norm'];
        $hasil1 = $_POST['jnorm'];
        $tua    =$_POST['tua'];
        $hasil2   =$_POST['jtua'];
        $hasil3    = $norm*$hasil1;
        $hasil4 = $tua*$hasil2;
        $total = $hasil4 +$hasil3;
        ?>

<html>
    <head>
<link rel="stylesheet" href="bootstrap.css">
<body>
<h2>Jumlah Pemesanan Tiket</h2>
<table border="1">
    <tr>
        <td>No.</td>
        <td>Harga tiket normal</td>
        <td>Harga tiket untuk lansia</td>
        <td>Total</td>
    </tr>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil3; ?></td>
        <td><?php echo $hasil4; ?></td>
        <td><?php echo $total; ?></td>
        
    </tr>
    <?php
        
    ?>
</table>
</body>
</html>
?>