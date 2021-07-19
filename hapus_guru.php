<?php 
include 'koneksi/koneksi.php';

$id_guru=$_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM guru WHERE id_guru='$id_guru' ");

header("location:index.php?halaman=guru");
 ?>