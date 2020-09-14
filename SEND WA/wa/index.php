<?php 
//koneksi database
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>


<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
		<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>
	<?php $i=1; ?>
	
	<?php foreach ($mahasiswa as $mhs) : ?>
		<tr>
			
			<td><?= $i ?></td>
			<td>
				<a href=" https://api.whatsapp.com/send?phone=<?php echo $mhs["nrp"]; ?>&text=Saya%20tertarik%20untuk%20berlangganan%20KIRIM.EMAIL" >Kirim Wa</a> |
				<a href="">Hapus</a> |
			</td>

			<td><img src="img/<?php echo $mhs["gambar"] ?>"width=80></td>
			<td><?php echo $mhs["nrp"]; ?></td>
			<td><?php echo $mhs["nama"]; ?></td>
			<td><?php echo $mhs["email"]; ?></td>
			<td><?php echo $mhs["jurusan"]; ?></td>

		</tr>
	<?php $i++;  ?>
	<?php endforeach; ?>




</table>


</body>
</html>