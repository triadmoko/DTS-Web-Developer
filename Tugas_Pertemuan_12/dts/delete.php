<?php 
include 'config.php';
$id = $_GET['id'];

if (delete($id) > 0 ) {


	echo "<script> alert('hapus berhasil');


				   document.location.href = 'tampil.php'; </script>";

}else{


	echo "<script> alert('hapus gagal');


				   document.location.href = 'tampil.php' </script>";


}