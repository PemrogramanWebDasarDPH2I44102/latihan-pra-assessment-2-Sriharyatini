<?php
	session_start();
	$konek = mysqli_connect('localhost','root','','karyawan');

	$sql = "SELECT * FROM paket";
	$query = mysqli_query($konek, $sql);
	$view = mysqli_fetch_array($query);

	echo "TANGGAL DATANG :".$view['tanggal_datang']."<br><br>";
	echo "SASARAN :".$view['sasaran']."<br><br>";
	echo "PENERIMA :".$view['penerima']."<br><br>";
	echo "ISI PAKET:".$view['isi_paket']."<br><br>";
	echo "TANGGAL AMBIL :".$view['tanggal_ambil']."<br><br>";
	
		session_destroy();

?>
<a href='updatepaket.php?no=".$sql['no']."'> Update </a>