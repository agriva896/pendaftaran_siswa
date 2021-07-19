<?php 
include 'koneksi/koneksi.php';
$pilih = mysqli_query($koneksi,"SELECT * FROM ruangan ");

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
	<?php 
	include 'koneksi/koneksi.php';
	$id = $_GET['id'];
	$pilih = mysqli_query($koneksi,"SELECT * FROM ruangan INNER JOIN siswa ON ruangan.id_siswa=siswa.id_siswa WHERE id_ruangan='$id'");
	while ($tampil = mysqli_fetch_array($pilih)){
	 ?>
	<form action="proses_ubah_ruangan.php" method="post">
		<div class="form-group">
			<input type="hidden" name="id" class="form-control" value="<?php echo $tampil['id_ruangan']; ?>">
		</div>
		<div class="form-group">
			<label for="">Nama Siswa</label>
			<input type="text" name="nama_siswa" class="form-control" value="<?php echo $tampil['nama_siswa']; ?>" readonly>
			
		</div>
		<div class="form-group">
			<label>Kelas</label>
			<input type="text" name="kelas" value="<?php echo $tampil['kelas']; ?>" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-danger" name="simpan">Tambah</button>
		</div>
	</form>
<?php } ?>
</body>
</html>