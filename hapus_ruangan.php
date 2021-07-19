<?php 
include 'koneksi/koneksi.php';

$id=$_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM ruangan WHERE id_ruangan='$id'");

header("location:index.php?halaman=ruangan");
 ?>