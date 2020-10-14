<?php 
include 'config.php';
$data = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
	<div class="tabel">
		<h1>Data Mahasiswa</h1>
		<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jurusan</th>
			<th>Fakultas</th>
			<th>Universitas</th>
			<th colspan="2">Action</th>
		</tr>
		<?php $no = 1; ?>
		<?php while ($row = mysqli_fetch_assoc($data)): ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['nim'] ?></td>
				<td><?= $row['jurusan'] ?></td>
				<td><?= $row['fakultas'] ?></td>
				<td><?= $row['universitas'] ?></td>
				<td><a href="delete.php?id=<?= $row['id'] ?>">Delete</a></td>
				<td><a href="edit.php?id=<?= $row['id'] ?>">Edit</a></td>
			</tr>
		<?php endwhile; ?>
		</table>
	</div>
</body>
</html>