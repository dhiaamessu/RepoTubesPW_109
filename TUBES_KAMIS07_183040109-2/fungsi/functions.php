<?php 

// function untuk koneksi ke DB

function koneksi(){
	$conn = mysqli_connect("localhost","root","") or die("Koneksi ke DB gagal!"); mysqli_select_db($conn,"pw_183040109") or die("Data salah!");

	return $conn;
}
// end of function

// function untuk query

function query($sql){
	$conn = koneksi();
	$result = mysqli_query($conn,"$sql");

	$rows =[];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	};
	return $rows;
}

// end of function
function tambah($data){
	$conn = koneksi();

	$foto = htmlspecialchars($data['foto']);
	$nama = htmlspecialchars($data['nama']);
	$tahun = htmlspecialchars($data['tahun']);
	$ukuran = htmlspecialchars($data['ukuran']);
	$memori = htmlspecialchars($data['memori']);
	$kamera = htmlspecialchars($data['kamera']);
	$harga = htmlspecialchars($data['harga']);

	$querytambah = "INSERT INTO smartphone
						VALUES (' ','$foto','$nama','$tahun','$ukuran','$memori','$kamera','$harga')";

	mysqli_query($conn,$querytambah);

	return mysqli_affected_rows($conn);
}

function hapus($id){
	$conn = koneksi();
	mysqli_query($conn,"DELETE FROM smartphone WHERE id = $id");

	return mysqli_affected_rows($conn);

}

function ubah($data){
	$conn = koneksi();

	$id = $data['id'];
	$foto = htmlspecialchars($data['foto']);
	$nama = htmlspecialchars($data['nama']);
	$tahun = htmlspecialchars($data['tahun']);
	$ukuran = htmlspecialchars($data['ukuran']);
	$memori = htmlspecialchars($data['memori']);
	$kamera = htmlspecialchars($data['kamera']);
	$harga = htmlspecialchars($data['harga']);

	$queryubah = "UPDATE smartphone
					SET 
					foto = '$foto',
					nama = '$nama',
					tahun = '$tahun',
					ukuran = '$ukuran',
					memori = '$memori',
					kamera = '$kamera',
					harga = '$harga'
				  WHERE id = '$id' ";

	mysqli_query($conn,$queryubah);

	return mysqli_affected_rows($conn);
}

 ?>


