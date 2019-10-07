<?php  
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$dbase = 'db_monitoring';

	$conn = mysqli_connect($server, $user, $pass, $dbase);

	if(!$conn){
		die("Koneksi Gagal : ".mysqli_connect_error());
	}
?>