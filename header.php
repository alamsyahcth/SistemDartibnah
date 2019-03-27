<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Dartibnah</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/DataTables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="bootstrap/select2/dist/css/select2.min.css"/>
	<link rel="stylesheet" href="bootstrap/datepicker/css/bootstrap-datepicker3.min.css"/>

</head>
<body bgcolor="#000">
<!--Header-->
	<div class="container-fluid">
		<nav class="navbar navbar-fixed-up navbar-inverse" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><strong>Home</strong></a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="tambah_pemohon.php">Tambah Pemohon</a></li>
					<li><a href="lihat_data_pendaftar.php">Daftar Pemohon</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Hak
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="tambah_hak.php">Tambah Hak</a></li>
							<li><a href="daftar_hak.php">Daftar Hak</a></li>
						</ul>
					</li>
					<li><a href="laporan_pendaftar.php" target="output">Laporan Pendaftar</a></li>
					<a href="logout.php">
						<button type="button" class="btn btn-md btn-primary btn-right navbar-btn">
							<font class="text-default"><span class="glyphicon glyphicon-login glyphicon-default"></span> Logout</font>
						</button>
					</a>
				</ul>
			</div>
		</nav>
	</div>
	<!--end header-->