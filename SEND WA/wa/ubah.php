<?php 

include "functions.php";
//cek apakah tombol submit sudah di klik atau bemul

if(isset($_POST["submit"])){
	

	//cek apakah data berhasil ditambhkan
	if (ubah($_POST)>0) {

		echo "
			<script>
			alert('data berhasil diubah !');
			document.location.href='index.php';
			</script>
		";

	}else {
		echo "
		<script>
			alert('data gagal ubah !');
			document.location.href='index.php';
			</script>

		";
	}

}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>

<h1>Ubah Data Mahasiswa</h1>


	<form action="" method="POST">
		<ul>
			
			<li>
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" required="">
			</li>

			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required="">
			</li>

			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required="">
			</li>

			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required="">
			</li>

			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required="">
			</li>

			<li>
				<button type="submit" name="submit">Ubah</button>
			</li>
		</ul>

	</form>


</body>
</html>