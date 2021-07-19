<?php 
include 'koneksi/koneksi.php';

$ambil = $koneksi->query("SELECT * FROM siswa WHERE id_siswa='$_GET[id]'");
$tampil = mysqli_fetch_array($ambil);

$id_siswa=$_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM siswa WHERE id_siswa='$id_siswa' ");

header("location:index.php?halaman=siswa");
 ?>