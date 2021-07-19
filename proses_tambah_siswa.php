<?php 
include 'koneksi/koneksi.php';

if (isset($_POST['simpan'])) {
	
	$nama_siswa =$_POST['nama_siswa'];
	$jenis_kelamin =$_POST['jenis_kelamin'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$jurusan =$_POST['jurusan_siswa'];
	$lokasi =$_FILES['foto_siswa']['tmp_name'];
	$file =$_FILES['foto_siswa']['name'];

	move_uploaded_file($lokasi, "gambar/".$file);
	$tambah = mysqli_query($koneksi,"INSERT INTO siswa VALUES('','$nama_siswa','$jenis_kelamin','$asal_sekolah','$jurusan','$file')");

	header("location:index.php?halaman=siswa");
}
 ?>