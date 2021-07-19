<?php 
include 'koneksi/koneksi.php';
if (isset($_POST['simpan'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];

	$register = mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password','$nama')");

	header("location:login.php");
}

 ?>