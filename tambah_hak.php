<?php
include "cek.php";
include "header.php";

//autonumber
$sql	= "SELECT kd_hak FROM hak";
$result	= mysqli_query($connect, $sql);
$data 	= mysqli_fetch_array($result);
$jumlah	= mysqli_num_rows($result);
if ($data) {
	$nilai		= substr($data[0], 1);
	$kode 		= (int) $nilai;
	$kode 		= $jumlah+1;
	$autonumber	= "H".str_pad($kode, 2, "0", STR_PAD_LEFT);
} else {
	$autonumber	= "H01";
}

$tanggal	= date("Y-m-d");
?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h1>Tambah Pemohon</h1><br><br>
		</div>
	</div>
	<div class="box-shadow">
			<form class="form-horizontal" action="" role="form" method="post">
				<div class="form">
					<div class="form-group">
						<div class="form-group">
							<label for="kd_hak" class="col-md-2 control-label">Kode Hak</label>
							<div class="col-md-4">
								<input type="text" name="kd_hak" id="kd_hak" class="form-control" value="<?php echo $autonumber; ?>" size="30" required="" readonly="">
							</div>
						</div>
						<div class="form-group">
							<label for="jn_hak" class="col-md-2 control-label">Jenis Hak</label>
							<div class="col-md-4">
								<input type="text" name="jn_hak" id="jn_hak" class="form-control" placeholder="Masukkan Jenis Hak" size="30" required="">
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-4">
									<input type="submit" name="tambah" value="Tambah" class="btn btn-info btn-lg btn-block">
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
</div>
<?php
if (isset($_POST["tambah"])) {
	$kd_hak 	= $_POST["kd_hak"];
	$jn_hak		= $_POST["jn_hak"];

	$sql1 	= "INSERT INTO hak(kd_hak, jn_hak) VALUES('$kd_hak','$jn_hak');";
	$resut1	= mysqli_query($connect, $sql1);
	if ($resut1) {
		header("Location: daftar_hak.php");
	}
}
include "footer.php";
?>
