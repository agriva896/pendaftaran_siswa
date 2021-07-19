<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>NO</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<?php 
		include 'koneksi/koneksi.php';
		$no = 1;
		$pilih = mysqli_query($koneksi,"SELECT * FROM ruangan INNER JOIN siswa ON ruangan.id_siswa=siswa.id_siswa");

		while ($tampil=mysqli_fetch_array($pilih)) {
		 ?>
		<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $tampil['nama_siswa']; ?></td>
				<td><?php echo $tampil['kelas']; ?></td>
				<td>
					<a href="index.php?halaman=ubah_ruangan&id=<?php echo $tampil['id_ruangan']; ?>" class="btn btn-info">Ubah</a>
					<a href="index.php?halaman=hapus_ruangan&id=<?php echo $tampil['id_ruangan']; ?>" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
	<a href="index.php?halaman=tambah_ruangan" class="btn btn-danger">Tambah</a>			
</body>
</html>