<?php
include "koneksi.php";
session_start();

$username 		= $_POST["username"];
$password		= $_POST["password"];
$kataRahasia	= $_POST["kataRahasia"];

$sql		= "SELECT * FROM petugas WHERE id='$username' AND password='$password' AND kata_rahasia='$kataRahasia';";
$result		= mysqli_query($connect, $sql);
$data		= mysqli_num_rows($result);

if ($data==1) {
	$row 	= mysqli_fetch_assoc($result);
	$_SESSION["username"]		= $row["id"];
	$_SESSION["nama"]			= $row["nama"];
	$_SESSION["password"]		= $row["password"];
	$_SESSION["kataRahasia"]	= $row["kata_rahasia"];

	//redirect ke index.php
	header("location: index.php");
} else {
	$_SESSION["error"] = "found";
	//redirect ke login.php
	header("location: login.php");
}
?>