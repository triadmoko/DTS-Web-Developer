<?php 
$conn = mysqli_connect("localhost","root","","dts_mahasiswa");


function addMahasiswa($data){
	global $conn;
	$nama = htmlspecialchars($data['nama']);
	$nim = htmlspecialchars($data['nim']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$fakultas = htmlspecialchars($data['fakultas']);
	$universitas = htmlspecialchars($data['universitas']);

	$query = "INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jurusan`, `fakultas`, `universitas`) VALUES (NULL, '$nama', '$nim', '$jurusan', '$fakultas', '$universitas')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function editMahasiswa($data){
	global $conn;
	$id = htmlspecialchars($_POST['id']);
	$nama = htmlspecialchars($data['nama']);
	$nim = htmlspecialchars($data['nim']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$fakultas = htmlspecialchars($data['fakultas']);
	$universitas = htmlspecialchars($data['universitas']);


	$query = "UPDATE mahasiswa SET 
					nama = '$nama',
					nim = '$nim',
					jurusan = '$jurusan',
					fakultas = '$fakultas',
					universitas = '$universitas'
					 WHERE id = $id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);	
}
function delete($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}