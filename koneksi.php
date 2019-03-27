<?php
	$host 	= 'localhost';
	$name	= 'root';
	$pass	= '';
	$db		= 'db_bpn';

	$connect	= mysqli_connect($host, $name, $pass, $db);
	if (!$connect) {
		die("Koneksi Tidak Berhasil");
	}
?>