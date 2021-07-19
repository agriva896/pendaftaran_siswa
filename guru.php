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
			<th>No</th>
            <th>Kelas</th>
            <th>Nama Guru</th>
            <th>Mata Pelajaran</th>
            <th>Aksi</th>
			</tr>
		</thead>
		<?php 
		include 'koneksi/koneksi.php';
		$no =1;
		$pilih = mysqli_query($koneksi,"SELECT * FROM guru INNER JOIN ruangan ON guru.id_ruangan=ruangan.id_ruangan");
		while ($tampil =mysqli_fetch_array($pilih)) {
		 ?>
		<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $tampil['kelas']; ?></td>
				<td><?php echo $tampil['nama_guru']; ?></td>
				<td><?php echo $tampil['mata_pelajaran']; ?></td>
				<td>
					<a href="index.php?halaman=ubah_guru&id=<?php echo $tampil['id_guru']; ?>" class="btn btn-info">Ubah</a>
					<a href="index.php?halaman=hapus_guru&id=<?php echo $tampil['id_guru']; ?>" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
	<a href="index.php?halaman=tambah_guru" class="btn btn-danger">Tambah</a>
</body>
</html>