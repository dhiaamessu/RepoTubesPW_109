<?php 

if (!isset($_GET['id'])) {
	header("Location: ../index.php");
	exit;
}
require '../fungsi/functions.php';
$id = $_GET['id'];

$hp = query("SELECT * FROM smartphone WHERE id=$id")[0];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Index</title>
 </head>
 <style>
 	.container{
		width: 800px;
		height: 200px;
		background-color: #ffdcc4;
		margin:auto;
		padding-top: 40px;

	}
	table{
		margin: auto;
		text-align: center;
		background-color: #8c3c02;
		border-color: white;
	}
	td,th{
		text-decoration: none;
		color: #fffa05;
			padding: 10px;
	}
	.tombol{
		width: 80px;
		margin: auto;
	}
 </style>
 <body>
 	<div class="container">
		<table border="1" cellspacing="0" cellpadding="10">
			<tr>
				<th>Gambar</th>
				<th>Nama</th>
				<th>Tahun</th>
				<th>Ukuran</th>
				<th>Memori</th>
				<th>Kamera</th>
				<th>Harga</th>
			</tr>
			<tr>
				<td><img src="../assets/img/<?= $hp['foto']?>" width="100px"></td>
				<td><?= $hp['nama']?></td>
				<td><?= $hp['tahun']?></td>
				<td><?= $hp['ukuran']?></td>
				<td><?= $hp['memori']?></td>
				<td><?= $hp['kamera']?></td>
				<td><?= $hp['harga']?></td>
			</tr>
	</table>
	<div class="tombol">
		<a href="../index.php"><button type="submit" >Kembali</button></a>
	</div>
 	</div>
 	


 </body>
 </html>
