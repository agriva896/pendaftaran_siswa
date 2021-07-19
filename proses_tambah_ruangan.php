<?php 
include 'koneksi/koneksi.php';

if (isset($_POST['simpan'])) {
	
$nama_siswa =$_POST['nama_siswa'];
$kelas = $_POST['kelas'];

$tambah = mysqli_query($koneksi,"INSERT INTO ruangan VALUES('','$nama_siswa','$kelas')");

header("location:index.php?halaman=ruangan");
}

 ?>