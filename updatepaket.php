<?php
session_start();
	$konek = mysqli_connect('localhost','root','','karyawan');
	$query="UPDATE paket SET '$tgl_datang','$sasaran', '$penerima','$isipaket','$tanggalambil')";
	mysqli_query($koneksi, $query);
	header("location: listpaket.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PAKETNYA </title>
</head>
<body>
	<form method="POST" action="listpaket.php"><center>
		<h4> MASUKAN DATA PAKET BARU</h4>
		Tanggal Datang : <input type="date" name="tanggal"><br><br>
		Sasaran Paket :
		<select name="sp" required="">
				<option value="Firda Amalia">Firda Amalia</option>
				<option value="Dania Zalfa">Dania Zalfa</option>
				<option value="Desi Manurung">Desi Manurung</option>
			</select><br><br>
		Penerima : <input type="text" name="pn"><br><br>
		Isi Paket :<input type="text" name="ip"><br><br>
		Tanggal Ambil :<input type="date" name="ta"><br><br>
		<input type="submit" name="send" value="kirim">
	</center>
	</form>
</body>
</html>