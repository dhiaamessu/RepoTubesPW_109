<?php 
require '../fungsi/functions.php';

if (isset($_POST['ubah'])) {
	if (ubah($_POST)>0) {
		echo "<script>
				alert('Data Berhasil diubah!');
				document.location.href = 'admin.php';
			</script>";
	}else {
		echo "<script>
				alert('Data Gagal diubah!');
				document.location.href = 'admin.php';
			</script>";
	}
}

$id = $_GET['id'];
$hp = query("SELECT * FROM smartphone WHERE id =$id")[0];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data</title>
</head>
<style>
	*{
		padding: 0;
	}
	body{
		background-color: #e0dbff;
	}
	.container{
		background-color: #bcc5ff;
		width: 500px;
		margin: 50px auto;

	}
	h3{
		padding: 30px;
		font-size: 36px;
		text-align: center;
		color: #00107c;
		text-shadow: 10px 10px  #e0dbff;
	}
	table{
		margin:auto;
		padding-bottom: 30px;
	}
	td,th{
		padding: 5px;
		font-size: 18px;
		font-family: arial;
		font-weight: bold;
		color: #283066;
	}
	input{
		height: 25px;
		width: 200px;
	}
	.tombol{
		text-align: center;
		padding-bottom: 40px;
	}
	.tombol button{
		width: 60px;
		height: 30px;
		background-color: #283066;
		color: white;

	}
</style>
<body>
	<div class="container">
		<h3>Ubah Data Smartphone</h3>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table border="0">
			<tr>
				<td><label for="foto">Foto </label></td>
				<td>:</td>
				<td><input type="text" name="foto" id="foto"></td>
			</tr>
			<tr>
				<td><label for="nama">Nama</label></td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>
			<tr>
				<td><label for="tahun">Tahun  </label></td>
				<td>:</td>
				<td><input type="text" name="tahun" id="tahun"></td>
			</tr>
			<tr>
				<td><label for="ukuran">Ukuran </label></td>
				<td>:</td>
				<td><input type="text" name="ukuran" id="ukuran"></td>
			</tr>
			<tr>
				<td><label for="memori">Memori </label></td>
				<td>:</td>
				<td><input type="text" name="memori" id="memori"></td>
			</tr><tr>
				<td><label for="kamera">Kamera </label></td>
				<td>:</td>
				<td><input type="text" name="kamera" id="kamera"></td>
			</tr><tr>
				<td><label for="harga">Harga </label></td>
				<td>:</td>
				<td><input type="text" name="harga" id="harga"></td>
			</tr>
		</table>
		<div class="tombol">
			<button type="submit" name="ubah">Ubah</button>
			<a href="admin.php"><button>Kembali</button></a>
		</div>
	</form>
		
	</div>
</body>
</html>