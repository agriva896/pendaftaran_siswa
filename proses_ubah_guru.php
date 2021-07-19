<?php 
include 'koneksi/koneksi.php';

if (isset($_POST['simpan'])) {

$no=$_POST['id'];
$kelas=$_POST['kelas'];
$nm=$_POST['nama_guru'];
$mata=$_POST['mata_pelajaran'];

mysqli_query($koneksi,"UPDATE guru SET nama_guru='$nm', mata_pelajaran='$mata' WHERE id_guru='$no'");

header('location:index.php?halaman=guru');
}
 ?>