<?php 
	include 'database.php';
	$db = new database();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil PHP</title>
</head>
<body>
	<h1>Data User</h1>
	<a href="input.php">Input Data</a>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Usia</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		<?php 
			$no = 1;
			foreach ($db->tampil_data() as $data) {  ?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $data['nama']?></td>
					<td><?php echo $data['usia']?></td>
					<td><?php echo $data['alamat']?></td>
					<td>
						<a href="edit.php?id=<?php echo $data['id']?>&aksi=edit">Edit</a>
						<a href="proses.php?id=<?php echo $data['id']?>&aksi=hapus">Hapus</a>
					</td>
				</tr>
		<?php 
		}
		 ?>
	</table>
</body>
</html>