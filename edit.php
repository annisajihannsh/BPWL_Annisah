<?php 
	include 'database.php';
	$db = new database();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update DB</title>
</head>
<body>
	<h1>Edit Data User</h1>
	<form action="proses.php?aksi=update" method="post">
	<?php foreach ($db->edit($_GET['id']) as $data) { ?>
		<table>
			<tr>
				<td>Nama</td>
				<td>
				<input type="hidden" name="id" value="<?php echo $data['id']?>">
				<input type="text" name="nama" value="<?php echo $data['nama']?>">
				</td>
			</tr>
			<tr>
				<td>Usia</td>
				<td><input type="text" name="usia" value="<?php echo $data['usia']?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat']?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="simpan"></td>
			</tr>
		</table>
		<?php } ?>
	</form>
</body>
</html>