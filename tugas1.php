<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 1 BUKU TAMU</title>
</head>
<body>
	<?php
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'mydb';

	//Create Connection
	$conn = mysqli_connect($servername,$username,$password,$database);
	//Check Koneksi
	if (!$conn) {
		die("Connection failed : ". mysqli_connect_error());
		}
	?>
		<h1>Buku Tamu</h1>
		<p>Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</p>
		<form method="post" action="send.php">
			<p><b>Nama Lengkap :</b><br><input type="text" name="nama"/></p>
			<p><b>Email :</b><br><input type="text" name="email" /></p>
			<p><b>Isi Pesan:</b><br><textarea name="isi" rows="5" cols="50" ></textarea></p>
			<p><input type="submit" name="send" value="Kirim">
				<input type="reset" name="del" value="Hapus"></p>
		</form>
		</body>
</html>