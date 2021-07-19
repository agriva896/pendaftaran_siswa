<?php 
include 'koneksi/koneksi.php';

$pilih = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id_siswa='$_GET[id]'");
$tampil = mysqli_fetch_array($pilih);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="proses_ubah_siswa.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $tampil['id_siswa']; ?>">
		</div>
		<div class="form-group">
			<label>Nama Siswa</label>
			<input type="text" name="nama_siswa" value="<?php echo $tampil['nama_siswa']; ?>" class="form-control">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<input type="text" name="jenis_kelamin" value="<?php echo $tampil['jenis_kelamin']; ?>" class="form-control">
		</div>
		<div class="form-group">
			<label>Asal Sekolah</label>
			<input type="text" name="asal_sekolah" value="<?php echo $tampil['asal_sekolah']; ?>" class="form-control">
		</div>
		<div class="form-group">
			<label>Jurusan Sekolah</label>
			<input type="text" name="jurusan_siswa" value="<?php echo $tampil['jurusan_siswa']; ?>" class="form-control">
		</div>
		<div class="form-group">
			<label>Foto Siswa</label>
			<input type="file" name="foto_siswa" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-info" name="simpan">Ubah</button>
			
		</div>
	</form>
</body>
</html>