<!DOCTYPE html>
<html>
<head>
	<title>CREATE PAKET</title>
</head>
<body>
	<form method="POST" action="listpaket.php"><center>
		<h4> MASUKAN DATA PAKET </h4>
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
<?php
	//include '2.php';
	if(isset($_POST['send'])) {
		
		if (strlen($_POST['tanggal'])>20|| $_POST['tanggal']=="") {
			echo "TANGGAL DATANG PAKET TIDAK BOLEH KOSONG<br>";
		} else {
			$tgl_datang = $_POST['tanggal'];
		}

		$sasaran = $_POST['sp'];
		$penerima = $_POST['pn'];
		$isipaket = $_POST['ip'];
		$tanggalambil = $_POST['ta'];
		$konek = mysqli_connect('localhost', 'root', '', 'karyawan');
		$sql = mysqli_query($konek, "INSERT INTO paket VALUES ('$tgl_datang','$sasaran', '$penerima','$isipaket','$tanggalambil') ");
		header("Location: listpaket.php");
	}
?>
<