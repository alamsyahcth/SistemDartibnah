<?php
include "koneksi.php";
session_start();
$tanggal = date("d-m-Y");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="bootstrap/select2/dist/css/select2.min.css"/>
	<link rel="stylesheet" href="bootstrap/datepicker/css/bootstrap-datepicker3.min.css"/>
</head>
<body>
<!--navbar start-->
<nav class="navbar navbar-fixed-up navbar-inverse" role="navigation">
	<div class="navbar-header">
		<a class="navbar-brand" href="#">Sistem Dartibnah</a>
	</div>
	<div>
		<ul class="nav navbar-nav">
			<li><a href="about.php">About Dartibnah</a></li>
			<li><a href="#">Struktur</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
		<ul>
			<li><p class="navbar-text" style="color: #fff;">Tanggal : <?php echo $tanggal; ?></li>
		</ul>
	</div>
</nav>
<!--navbar-end-->

<!--form login start-->
<div class="container">
	<div class="row">
	</div>
	<div class="panel">
		<div class="panel-heder">
			<div class="row">
				<div class="col-md-4"></div>
				<img src="img/logo.png"><br>
				<div class="col-md-2"></div>
				<div class="col-md-8" style="text-align: center;"><h1 class="text-danger"><strong>Form Login</strong></h1><h2>POKMAS DARTIBNAH PETUKANGAN UTARA</h2></div><br>
				<div class="col-md-2"></div>
				<div class="col-md-4"></div>
				<div class="col-md-4" style="text-align: center;"></p></div>
				<div class="col-md-4"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form class="form-horizontal" role="form" action="user.php" method="post">
					<div class="form">
						<div class="form-group">
							<label for="username" class="col-md-4 control-lable">Username</label>
							<input type="text" name="username" id="username" class="form-control" placeholder="Masukkan  Username anda" required="">
						</div>
						<div class="form-group">
							<label for="password" class="col-md-4 control-lable">Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password anda" required="">
						</div>
						<div class="form-group">
							<label for="kataRahasia" class="col-md-4 control-lable">Kata Rahasia</label>
							<input type="password" name="kataRahasia" id="kataRahasia" class="form-control" placeholder="Masukkan Kata Rahasia" required="">
						</div>
						<?php
							if (isset($_SESSION["error"])) {
                				unset($_SESSION["error"]);
                		?>
							<h4 class="text-danger">Data yang anda masukkan salah</h4>               		
                		<?php
                			}
						?>
						<div class="form-group">
							<input type="submit" name="login" id="login" value="Login" class="btn btn-block btn-default">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
<!--form login end-->


<footer>
	<div class="container">
		&copy; copyright Pokmasdartibnah-2017
	</div>
</footer>
	
	<script src="jquery/jquery-3.2.1.min.js"></script>
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/select2/dist/js/select2.min.js"></script>
	<script src="bootstrap/datepicker/js/bootstrap-datepicker.min.js"></script>
</body>
</html>