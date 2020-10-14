<?php 
include 'config.php';
$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id=$id");
$row = mysqli_fetch_assoc($query);

	if (isset($_POST["edit"])) {
		if (editMahasiswa($_POST) > 0) {
			echo " <script>
					 	alert('data berhasil di edit');
					 </script>";
			header("location:tampil.php");
		}else{
			echo " <script>
					 	alert('data gagal di edit');
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
		<h1>Edit Data Mahasiswa</h1><br>
		<form method="POST" action="">
			<input type="text" name="id" hidden="" value="<?= $id ?>">
			<input type="text" placeholder="Nama" value="<?= $row['nama'] ?>" name="nama"><br>
			<input type="text" placeholder="NIM" value="<?= $row['nim'] ?>" name="nim"><br>
			<input type="text" placeholder="Jurusan" value="<?= $row['jurusan'] ?>" name="jurusan"><br>
			<input type="text" placeholder="Fakultas" value="<?= $row['fakultas'] ?>" name="fakultas"><br>
			<input type="text" placeholder="Universitas" value="<?= $row['universitas'] ?>" name="universitas"><br><br>
			<button type="submit" name="edit">Edit Data</button>
		</form>
	</div>
</center>

 </body>
 </html>