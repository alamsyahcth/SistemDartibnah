<?php
include "koneksi.php";

$no_daftar = $_GET["no_daftar"];
$kd_hak = $_GET["kd_hak"];
$no_hak = $_GET["no_hak"];

$sql	= "INSERT INTO detil_hak(no_daftar, kd_hak, nomor) VALUES ('$no_daftar', '$kd_hak', '$no_hak'); ";
$result	= mysqli_query($connect, $sql);
?>