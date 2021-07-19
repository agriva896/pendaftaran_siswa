<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="proses_tambah_ruangan.php" method="post">
		<div class="form-group">
			<label for="">Nama Siswa</label>
			<select name="nama_siswa" class="form-control">
				<option>Pilih</option>

				<?php 
				include 'koneksi/koneksi.php';

				$pilih = mysqli_query($koneksi,"SELECT * FROM siswa");
				while ($tampil=mysqli_fetch_array($pilih)) {
					$id_siswa =$tampil['id_siswa'];
					$nama_siswa =$tampil['nama_siswa'];
				 ?>
				 <option value="<?php echo $id_siswa; ?>"><?php echo $nama_siswa; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Kelas</label>
			<input type="text" name="kelas" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-danger" name="simpan">Tambah</button>
		</div>
	</form>
</body>
</html>