<?php 
include 'koneksi/koneksi.php';
if (isset($_POST['simpan'])) {
	$id=$_POST['id'];
	$nama_siswa =$_POST['nama_siswa'];
	$jenis_kelamin =$_POST['jenis_kelamin'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$jurusan =$_POST['jurusan_siswa'];
	$lokasi =$_FILES['foto_siswa']['tmp_name'];
	$file =$_FILES['foto_siswa']['name'];

	move_uploaded_file($lokasi, "gambar/".$file);

	if (!empty($lokasi)) {
		
		$ubah= mysqli_query($koneksi,"UPDATE siswa SET nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', asal_sekolah='$asal_sekolah', jurusan_siswa='$jurusan', foto_siswa='$file' WHERE id_siswa='$id'");
		header("location:index.php?halaman=siswa");
	}else{

		$ubah= mysqli_query($koneksi,"UPDATE siswa SET nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', asal_sekolah='$asal_sekolah', jurusan_siswa='$jurusan'  WHERE id_siswa='$id'");
		header("location:index.php?halaman=siswa");
	}

}
 ?>