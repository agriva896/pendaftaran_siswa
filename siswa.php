<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table class="table table-striped table-bordered table-hover" id="dataTables-example" width="300">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Siswa</th>
				<th>Jenis Kelamin</th>
				<th>Asal Sekolah</th>
				<th>Jurusan Siswa</th>
				<th>Foto Siswa</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<?php 
		include 'koneksi/koneksi.php';
		$no = 1;
		$pilih = mysqli_query($koneksi,"select * from siswa");
		while ($tampil = mysqli_fetch_array($pilih)){
		 ?>
		<tbody>
			<tr >
				<td><?php echo $no++; ?></td>
				<td><?php echo $tampil['nama_siswa']; ?></td>
				<td><?php echo $tampil['jenis_kelamin']; ?></td>
				<td><?php echo $tampil['asal_sekolah']; ?></td>
				<td><?php echo $tampil['jurusan_siswa']; ?></td>
				<td>
					<img src="gambar/<?php echo $tampil['foto_siswa']; ?>" width="150">
				</td>
				<td>
					<a href="index.php?halaman=ubah&id=<?php echo $tampil['id_siswa']; ?>" class="btn btn-info">Ubah</a>
					<a href="index.php?halaman=hapus&id=<?php echo $tampil['id_siswa']; ?>" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
	<a href="index.php?halaman=tambah" class="btn btn-danger">Tambah</a>


</body>
</html>