<?php
include "cek.php";
include "header.php";
ob_start();

$no_daftar = $_GET['no_daftar'];

//autonumber
$sql	= "SELECT * FROM pemohon WHERE no_daftar='$no_daftar'";
$result	= mysqli_query($connect, $sql);
$row	= mysqli_fetch_assoc($result);
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
								<input type="text" name="no_daftar" id="no_daftar" class="form-control" value="<?php echo $row['no_daftar']; ?>" size="30" required="" readonly="">
							</div>

							<label for="tanggal" class="col-md-2 control-label">Tanggal</label>
							<div class="col-md-4">
								<input type="text" name="tanggal" id="tanggal" class="form-control" value="<?php echo $row['tgl_daftar']; ?>" size="30" required="" readonly="">
							</div>
						</div>
						<br>


						<!--NIK dan Nama-->
						<div class="form-group">
							<label for="NIK" class="col-md-2 control-label">NIK</label>
							<div class="col-md-10">
								<input type="text" name="nik" id="nik" class="form-control" value="<?php echo $row['nik']; ?>" placeholder="Masukkan NIK Pemohon" size="40" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="Nama" class="col-md-2 control-label">Nama</label>
							<div class="col-md-10">
								<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $row['nama']; ?>" placeholder="Masukkan Nama Pemohon" size="40" required="">
							</div>
						</div>
						<!--End NIK dan Nama-->

						<div class="form-group">
							<label for="tempatlahir" class="col-md-2 control-label">Tempat Lahir</label>
							<div class="col-md-4">
								<input type="text" name="tempatlahir" id="tempatlahir" class="form-control" value="<?php echo $row['tempat']; ?>" placeholder="Masukkan Kota Tempat Lahir" size="30" required="">
							</div>
							
							<label for="tgllahir" class="col-md-2 control-label">Tanggal Lahir</label>
							<div class="col-md-4">
									<input type="date" name="tgllahir" id="tgllahir" class="tgllahir form-control" id="tgllahir" value="<?php echo $row['tgl_lahir']; ?>" placeholder="YYYY-MM-DD" size="30" required="">
							</div>
						</div>

						<div class="form-group">
							<label for="wn" class="col-md-2 control-label">Warga Negara</label>
								<div class="col-md-4">
									<select name="wn" id="wn" class="form-control">
										<option value="" disabled>Pilih Warga Negara</option>
										<option <?php if($row['wn'] == "WNI") { echo "selected"; } ?> value="WNI">WNI</option>
										<option <?php if($row['wn'] == "WNA") { echo "selected"; } ?> value="WNA">WNA</option>
									</select>
								</div>
						</div>

						<div class="form-group">
							<label for="alamat" class="col-md-2 control-label">Alamat</label>
							<div class="col-md-4">
								<input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $row['alamat']; ?>" placeholder="Masukkan Alamat" size="40" required="">
							</div>

							<label for="alamat_bidang" class="col-md-2 control-label">Alamat Bidang</label>
							<div class="col-md-4">
								<input type="text" name="alamat_bidang" id="alamat_bidang" class="form-control" value="<?php echo $row['alamat_bidang']; ?>" placeholder="Masukkan Alamat Bidang" size="40" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="alas-hak" class="col-md-2 control-label">Alas Hak</label>
							<div class="col-md-4">
								<input type="text" name="alashak" id="alashak" class="form-control" value="<?php echo $row['alas_hak']; ?>" placeholder="Masukkan Alamat" value="Girik No : " size="40" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="luas" class="col-md-2 control-label">Luas</label>
							<div class="col-md-4">
								<input type="number" name="luas" id="luas" class="form-control" value="<?php echo $row['luas_tanah']; ?>" placeholder="Masukkan Luas" size="40" required="">
							</div>

							<label for="koordinator" class="col-md-2 control-label">Koordinator</label>
							<div class="col-md-4">
								<input type="text" name="koordinator" id="koordinator" class="form-control" value="<?php echo $row['koordinator']; ?>" placeholder="Koordinator" size="40" required="">
							</div>
						</div>
						<div class="form-group">
							<label for="nopPBB" class="col-md-2 control-label">NOP PBB</label>
							<div class="col-md-4">
								<input type="text" name="nopPBB" id="nopPBB" class="form-control" value="<?php echo $row['nop_pbb']; ?>" placeholder="Masukkan NOP PBB" value="31.71.011.005." size="40" required="">
							</div>
							<label for="telepon" class="col-md-2 control-label">Telepon</label>
							<div class="col-md-4">
								<input type="text" name="telepon" id="telepon" class="form-control" value="<?php echo $row['telepon']; ?>" placeholder="Masukkan No Telepon" size="40" required="">
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-4">
									<input type="submit" name="tambah" value="Ubah" class="btn btn-info btn-lg btn-block">
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

	$sql1		= "UPDATE pemohon SET tgl_daftar='$tanggal', nama='$nama', tempat='$tempatlahir', tgl_lahir='$tgllahir', nik='$nik', wn='$wn', alamat='$alamat', alamat_bidang='$alamat_bidang', alas_hak='$alashak', luas_tanah='$luas', nop_pbb='$nopPBB', telepon='$telepon', koordinator='$koordinator' WHERE no_daftar='$no_daftar';";
	$result1	= mysqli_query($connect, $sql1);

	if ($result1) {
		header("Location: lihat_data_pendaftar.php?update=success");
	} 

}
include "footer.php";
?>
