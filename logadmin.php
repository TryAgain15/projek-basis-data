<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
    <div class="row">
      
      <div class="col-sm-6 col-md-5 hidden-xs hidden-sm">   
         <img src="https://raw.githubusercontent.com/rexxars/react-hexagon/master/logo/react-hexagon.png" alt="" class="center-block img-responsive" />
        </div>
      
        <div class="col-md-1 hidden-xs hidden-sm">   
          <div class="border-login"></div>
        </div>
      
      
        <div class="col-sm-12 col-xs-12 col-md-4">            
           <div class="space-top">
             
             
             <h3 class="text-center">Login</h3>
	<!-- cek pesan notifikasi -->
	<?php 
    include 'php/koneksi.php';
	
 
// 	session_start();
// 	if (isset($_SESSION['username'])) {
//     header("Location: tambah.php");
// }
	session_start();
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username atau password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php" class="form-signin form-horizontal">
		<!-- <table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN" name="submit" id="submit"></td>
			</tr>
		</table>			 -->

		<label class="username"> Username</label>
                                           
            <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required autofocus>
            
             <label class=""> Password </label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
            
               <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit">
                    Masuk
            </button>   
            
          </form>
            </div>
          
            <p class="text-center"> Halaman ini khusus untuk Admin!  <a href="index.php"  data-toggle="modal" data-target="#myModal"> Bukan Admin?</a></p>

	</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>