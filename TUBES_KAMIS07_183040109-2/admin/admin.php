<?php 
require '../fungsi/functions.php';

if (isset($_GET['cari'])) {
	$keyword = $_GET['s'];
	$smartphone = query("SELECT * FROM smartphone WHERE 
		foto LIKE '%$keyword%' OR
		nama LIKE '%$keyword%' OR
		tahun LIKE '%$keyword%' OR
		ukuran LIKE '%$keyword%' OR
		memori LIKE '%$keyword%' OR
		kamera LIKE '%$keyword%' OR
		harga LIKE '%$keyword%' ");
} else{
	$smartphone = query("SELECT * FROM smartphone");
 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<style>
	*{
		padding: 0;
		margin: 0;
	}
	.logout{
		height: 50px;
		text-align: right;
		background-color: #ed4977;
		line-height: 50px;
		font-size: 24px;
	}
	.logout a{
		font-weight: bold;
		font-family: arial;
		background-color: #f2baca;
		color: #ed4977;
	}
	.container{
		background-color: #ffe8ed;
		margin:auto;
		padding-bottom: 30px;


	}
	h3{
		text-align: center;
		color: #ed315b;
		padding-top: 20px;
		padding-bottom: 40px;
		font-size: 42px;
		background-color: #f9acbd;
		border-radius: 70px;
		width: 800px;
		margin:auto;
	}
	table{
		margin: auto;
		text-align: center;
		background-color: #f8d6fc;
		color: #a000b2;
		border-color: white;
	}
	a{
		text-decoration: none;
		color: #fffa05;
			padding: 10px;
	}
	td{
		padding: 10px;
		font-weight: bold;
	}
	th{
		padding: 10px;
		font-weight: bold;
		background-color: #a000b2;
		color:  #f8d6fc;;
	}
	.tambah{
		margin-left: 550px;
		margin-bottom: 40px;
		padding: 10px;
		background-color: #a100ff;
		color: white;
	}
	.search{ 
		width: 300px;
		height: 60px;
		margin-left:550px; 
	}
	.search input{
		height: 20px;
		width: 150px;
	}
	.search button{
		width: 40px;
		height: 30px;
		background-color: #700ea5;
		color: white;
	}

	.ubah{
		padding: 10px;
		background-color: blue;
		color: white;
	}
	.hapus{
		padding: 10px;
		background-color: red;
		color: white;
	}
</style>
<body>
	<div class="logout">
		<a href="../index.php">Log out</a>
	</div>
	<div class="container">
		<h3>Daftar Smartphone</h3>

	<a href="tambah.php"><button type="submit" class="tambah">Tambah Data Smartphone</button></a>

	<div class="search">
		<form action="" method="get">
			<input type="text" name="s" id="s" class="form-control" placeholder="Search...">
			<button type="submit" name="cari" id="cari">Cari</button>
		</form>	
	</div>

	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>#</th>
			<th>Opsi</th>
			<th>Foto</th>
			<th>Nama</th>
			<th>Tahun</th>
			<th>Ukuran</th>
			<th>Memori</th>
			<th>Kamera</th>
			<th>Harga</th>
		</tr>
	<?php if (empty($smartphone)): ?>
		<tr>
			<td colspan="7">
				<h1 align="center">Data Tidak ditemukan</h1>
			</td>
		</tr>
	<?php else : ?>
	<?php $i=1; ?>
	<?php foreach ($smartphone as $hp):?>
		<tr>
			<td><?= $i++; ?></td>
			<td><a href="ubah.php?id=<?=$hp['id'];?>"><button type="button" class="ubah">Ubah</button></a> | 
				<a href="hapus.php?id=<?=$hp['id'];?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><button type="button" class="hapus">Hapus</button></a>
			</td>
			<td><img src="../assets/img/<?= $hp['foto']; ?>" width="100px"></td>
			<td><?= $hp['nama']; ?></td>
			<td><?= $hp['tahun']; ?></td>
			<td><?= $hp['ukuran']; ?></td>
			<td><?= $hp['memori']; ?></td>
			<td><?= $hp['kamera']; ?></td>
			<td><?= $hp['harga']; ?></td>
		</tr>
	<?php endforeach ?>
<?php endif ?>
	</table>
	</div>
	
</body>
</html>