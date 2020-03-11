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

		$conn = mysqli_connect($servername,$username,$password,$database);
		if($_POST['send'])
		{
			$nama	= htmlentities(mysql_real_escape_string($_POST['nama']));
			$email	= htmlentities(mysql_real_escape_string($_POST['email']));
			$isi	= htmlentities(mysql_real_escape_string($_POST['isi']));
			
			$sql = "INSERT INTO buku_tamu (nama, email, isi) VALUES ('$nama','$email', '$isi')";
		if (mysqli_query($conn,$sql)) {
		echo "New record created successfully";
		}else 	{
			echo "Error : " . $sql . "<br>". mysqli_error($conn);
		}
		mysqli_close($conn);
		
		$conn = mysqli_connect($servername,$username,$password,$database);
		$select = "SELECT id_bt, nama, email, isi FROM buku_tamu;";
		$result = mysqli_query($conn, $select);

			if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) 
				{
				echo "<br> ID : ". $row['id_bt'] ." Nama : ". $row['nama']. " Email : ". $row['email']. " Isi : " .$row['isi']. "<br>";
				}
			}else {
				echo "0 results";
				}
		mysqli_close($conn);
		}
		
		?>

</body>
</html>