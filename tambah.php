<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="proses_tambah_siswa.php" method="post" enctype="multipart/form-data">
		
		<div class="form-group">
			<label>Nama Siswa</label>
			<input type="text" name="nama_siswa" class="form-control">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<input type="text" name="jenis_kelamin" class="form-control">
		</div>
		<div class="form-group">
			<label>Asal Sekolah</label>
			<input type="text" name="asal_sekolah" class="form-control">
		</div>
		<div class="form-group">
			<label>Jurusan Sekolah</label>
			<input type="text" name="jurusan_siswa" class="form-control">
		</div>
		<div class="form-group">
			<label>Foto Siswa</label>
			<input type="file" name="foto_siswa" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-info" name="simpan">Simpan</button>
			
		</div>
	</form>
</body>
</html>