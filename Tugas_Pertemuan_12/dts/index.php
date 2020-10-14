<?php 
include 'config.php';
	if (isset($_POST["tambah"])) {
		if (addMahasiswa($_POST) > 0) {
			echo " <script>
					 	alert('data berhasil di tambahkan');
					 </script>";
					 header("location:tampil.php");
		}else{
			echo " <script>
					 	alert('data gagal di tambahkan');
					 </script>";
		}
	}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Mahasiswa</title>
 </head>
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <body>

<center>
	<div class="form">
		<h1>Input Data Mahasiswa</h1><br>
		<form method="POST" action="">
			<input type="text" placeholder="Nama" name="nama"><br>
			<input type="text" placeholder="NIM" name="nim"><br>
			<input type="text" placeholder="Jurusan" name="jurusan"><br>
			<input type="text" placeholder="Fakultas" name="fakultas"><br>
			<input type="text" placeholder="Universitas" name="universitas"><br><br>
			<button type="submit" name="tambah">Tambah Data</button>
		</form>
	</div>
</center>

 </body>
 </html>