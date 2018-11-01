<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST"><center>
		<h4> LOGIN KARYAWAN </h4>
		Nama :<input type="" name="nama"><br><br>
		NIP  :<input type="text" name="nip"> <br><br>
		<input type="submit" name="send" value="kirim">
	</center>
	</form>
</body>
</html>
<?php
	//include '2.php';
	if(isset($_POST['send'])) {

		if (strlen($_POST['nama'])>20|| $_POST['nama']=="") {
			echo "NAMANYA TIDAK BOLEH LEBIH DARI 20 HURUF<br>";
		} else {
			$nama = $_POST['nama'];
		}

		if (strlen($_POST['nip'])>20|| $_POST['nip']=="") {
			echo "NIP TIDAK BOLEH KOSONG<br>";
		} else {
			$nip = $_POST['nip'];
		}

		$konek = mysqli_connect('localhost', 'root', '', 'karyawan');
		$sql = mysqli_query($konek, "INSERT INTO krywn VALUES ('$nama','$nip') ");
		session_start();
		$_SESSION['nip']=$nip;
		header("Location: createpaket.php");
		
	}
?>