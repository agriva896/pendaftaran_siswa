<?php 
include 'koneksi/koneksi.php';

if (isset($_POST['simpan'])) {
	
$kelas =$_POST['kelas'];
$nama_guru = $_POST['nama_guru'];
$mata_pelajaran = $_POST['mata_pelajaran'];

$tambah = mysqli_query($koneksi,"INSERT INTO guru VALUES ('','$kelas','$nama_guru','$mata_pelajaran')");

header("location:index.php?halaman=guru");
}
 ?>