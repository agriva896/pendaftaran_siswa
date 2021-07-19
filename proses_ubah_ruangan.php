<?php 
include 'koneksi/koneksi.php';

if (isset($_POST['simpan'])) {

$id =$_POST['id'];

$kelas = $_POST['kelas'];

$tambah = mysqli_query($koneksi,"UPDATE ruangan SET kelas='$kelas' WHERE id_ruangan='$id'");

header("location:index.php?halaman=ruangan");
}

 ?>