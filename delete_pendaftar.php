<?php
include "cek.php";

$no_daftar	= $_GET['no_daftar'];
$sql	= "DELETE FROM pemohon WHERE no_daftar='$no_daftar';";
$result	= mysqli_query($connect, $sql);
if ($result) {
	$sql2	= "DELETE FROM detil_hak WHERE no_daftar='$no_daftar';";
	$result2	= mysqli_query($connect, $sql2);

	if ($result2) {
		header("Location: lihat_data_pendaftar.php");
	}
}