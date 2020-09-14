<?php 

$koneksi=mysqli_connect("localhost","root","","phpdasar");


function query($query){
	global $koneksi;
	$result = mysqli_query($koneksi,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}

	return $rows;

}



function tambah($data){
	global $koneksi;
	//data dari tiap elemen dalam form
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);


	//query insert data
	$query="INSERT INTO mahasiswa 
	        VALUES 
	        ('','$nama','$nrp','$email','$jurusan','$gambar')
	        ";
	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);

}




 ?>