<?php
include "cek.php";

$kd_hak	= $_GET['kd_hak'];
$sql	= "DELETE FROM hak WHERE kd_hak='$kd_hak';";
$result	= mysqli_query($connect, $sql);
if ($result) {
	header("Location: daftar_hak.php");
}