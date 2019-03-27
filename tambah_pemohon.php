<?php
include "cek.php";
include "header.php";
ob_start();

$query = "SELECT max(no_daftar) as maxKode FROM pemohon";
$result	= mysqli_query($connect, $query);
$data  = mysqli_fetch_array($result);
$kode = $data['maxKode'];
$noUrut = (int) substr($kode, 4, 8);

$noUrut++;

$autonumber = "PDPU".sprintf("%04s", $noUrut);

$tanggal	= date("Y-m-d");
?>
<div class="container">
	<div class="row">
		<h1>Daftar Pemohon</h1><br><br>
	</div>
	<div class="box-shadow">
			<form class="form-horizontal" action="" role="form" method="post">
				<div class="form">
					<div class="form-group">
						<div class="form-group">
							<label for="no_daftar" class="col-md-2 control-label">No Daftar</label>
							<div class="col-md-4">
								<input type="text" name="no_daftar" id="no_daftar" class="form-control" value="<?php echo $autonumber; ?>" size="30" required="" readonly="">
							</div>

							<label for="tanggal" class="col-md-2 control-label">Tanggal</label>
							<div class="col-md-4">
								<input type="text" name="tanggal" id="tanggal" class="form-control" value="<?php echo $tanggal; ?>" size="30" required="" readonly="">
							</div>
						</div>
						<br>


						<!--NIK dan Nama-->
						<div class="form-group">
							<label for="NIK" class="col-md-2 control-label">NIK</label>
							<div class="col-md-10">
								<input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK Pemohon" size="40" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="Nama" class="col-md-2 control-label">Nama</label>
							<div class="col-md-10">
								<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Pemohon" size="40" required="">
							</div>
						</div>
						<!--End NIK dan Nama-->

						<div class="form-group">
							<label for="tempatlahir" class="col-md-2 control-label">Tempat Lahir</label>
							<div class="col-md-4">
								<input type="text" name="tempatlahir" id="tempatlahir" class="form-control" placeholder="Masukkan Kota Tempat Lahir" size="30" required="">
							</div>
							
							<label for="tgllahir" class="col-md-2 control-label">Tanggal Lahir</label>
							<div class="col-md-4">
									<input type="date" name="tgllahir" id="tgllahir" class="tgllahir form-control" id="tgllahir" placeholder="YYYY-MM-DD" size="30" required="">
							</div>
						</div>

						<div class="form-group">
							<label for="wn" class="col-md-2 control-label">Warga Negara</label>
								<div class="col-md-4">
									<select name="wn" id="wn" class="form-control">
										<option value="" disabled selected>Pilih Warga Negara</option>
										<option value="WNI">WNI</option>
										<option value="WNA">WNA</option>
									</select>
								</div>
						</div>

						<div class="form-group">
							<label for="alamat" class="col-md-2 control-label">Alamat</label>
							<div class="col-md-4">
								<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" size="40" required="">
							</div>

							<label for="alamat_bidang" class="col-md-2 control-label">Alamat Bidang</label>
							<div class="col-md-4">
								<input type="text" name="alamat_bidang" id="alamat_bidang" class="form-control" placeholder="Masukkan Alamat Bidang" size="40" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="alas-hak" class="col-md-2 control-label">Alas Hak</label>
							<div class="col-md-4">
								<input type="text" name="alashak" id="alashak" class="form-control" placeholder="Masukkan Alamat" value="Girik No : " size="40" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="luas" class="col-md-2 control-label">Luas</label>
							<div class="col-md-4">
								<input type="number" name="luas" id="luas" class="form-control" placeholder="Masukkan Luas" size="40" required="">
							</div>

							<label for="koordinator" class="col-md-2 control-label">Koordinator</label>
							<div class="col-md-4">
								<input type="text" name="koordinator" id="koordinator" class="form-control" placeholder="Koordinator" size="40" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="nopPBB" class="col-md-2 control-label">NOP PBB</label>
							<div class="col-md-4">
								<input type="text" name="nopPBB" id="nopPBB" class="form-control" placeholder="Masukkan NOP PBB" value="31.71.011.005." size="40" required="">
							</div>
							<label for="telepon" class="col-md-2 control-label">Telepon</label>
							<div class="col-md-4">
								<input type="text" name="telepon" id="telepon" class="form-control" placeholder="Masukkan No Telepon" size="40" required="">
							</div>
						</div>
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
	$no_daftar		= $_POST["no_daftar"];
	$tanggal 		= $_POST["tanggal"];
	$nik 			= $_POST["nik"];
	$nama 			= $_POST["nama"];
	$tempatlahir	= $_POST["tempatlahir"];
	$tgllahir		= $_POST["tgllahir"];
	$wn 			= $_POST["wn"];
	$alamat 		= $_POST["alamat"];
	$alamat_bidang	= $_POST["alamat_bidang"];
	$alashak 		= $_POST["alashak"];
	$luas 			= $_POST["luas"];
	$koordinator 	= $_POST["koordinator"];
	$nopPBB 		= $_POST["nopPBB"];
	$telepon 		= $_POST["telepon"];

	$sql1		= "INSERT INTO pemohon(no_daftar, tgl_daftar, nama, tempat, tgl_lahir, nik, wn, alamat, alamat_bidang, alas_hak, luas_tanah, nop_pbb, telepon, koordinator) VALUES ('$no_daftar', '$tanggal', '$nama', '$tempatlahir', '$tgllahir', '$nik', '$wn', '$alamat', '$alamat_bidang', '$alashak', '$luas', '$nopPBB', '$telepon', '$koordinator');";
	$result1	= mysqli_query($connect, $sql1);

	if ($result1) {
		header("Location: detilhak2.php?no_daftar=$no_daftar");
	} 

}
include "footer.php";
?>
