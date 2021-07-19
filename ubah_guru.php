<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	include 'koneksi/koneksi.php';
	$pilih = mysqli_query($koneksi,"SELECT * FROM guru INNER JOIN ruangan ON guru.id_ruangan=ruangan.id_ruangan WHERE id_guru='$_GET[id]'");
	
	$tampil = mysqli_fetch_array($pilih);
	 ?>
	<form action="proses_ubah_guru.php" method="post">
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $tampil['id_guru']; ?>">
		</div>
		<div class="form-group">
			<label for="">Kelas</label>
			<input type="text" name="kelas" value="<?php echo $tampil['kelas']; ?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for="">Nama Guru</label>
			<input type="text" name="nama_guru" value="<?php echo $tampil['nama_guru']; ?>" class="form-control">
		</div>
		<div class="form-group">
			<label>Mata Pelajaran</label>
			<input type="text" name="mata_pelajaran" value="<?php echo $tampil['mata_pelajaran']; ?>" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-danger" name="simpan">Tambah</button>
		</div>
	</form>
</body>
</html>