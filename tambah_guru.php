<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="proses_tambah_guru.php" method="post">
		<div class="form-group">
			<label for="">Kelas</label>
			<select name="kelas" class="form-control">
				<option value="">Pilih</option>
				<?php 
				include 'koneksi/koneksi.php';
				$pilih = mysqli_query($koneksi,"SELECT * FROM ruangan");
				while ($tampil=mysqli_fetch_array($pilih)) {
					$id_ruangan=$tampil['id_ruangan'];
					$kelas =$tampil['kelas'];
				 ?>
				 <option value="<?php echo $id_ruangan; ?>"><?php echo $kelas; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label for="">Nama Guru</label>
			<input type="text" name="nama_guru" class="form-control">
		</div>
		<div class="form-group">
			<label>Mata Pelajaran</label>
			<input type="text" name="mata_pelajaran" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-danger" name="simpan">Tambah</button>
		</div>
	</form>
</body>
</html>