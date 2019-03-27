<?php
include "cek.php";
include "header.php";

?>
<div class="container">
	<div class="row">
		<h1>HAK Kepemilikan</h1>
	</div>
	<form class="form-horizontal" name="formwarga" role="form" action="" method="post">
		<div class="form">
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
						<label for="pemohon" class="control-label">Nama Pemohon</label>
					</div>
					<div class="col-md-4">
						<select name="pemohon" id="pemohon" class="select-picker form-control" data-live-search="true">
							<option value=""></option>
							<?php
								$sql 		= "SELECT * FROM pemohon ORDER BY no_daftar;";
								$result 	= mysqli_query($connect, $sql);
								$data 		= mysqli_num_rows($result);
								if ($data>0) {
									while ($row 		= mysqli_fetch_assoc($result)) {
										$no_daftar		= $row["no_daftar"];
										$nama			= $row["nama"];
								?>
									<option value="<?php echo $no_daftar; ?>">
										<?php echo "$no_daftar - $nama"; ?>
									</option>
								<?php
									}
								}
							?>
								
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<input type="submit" name="tampil" value="Tampil" class="btn btn-info btn-block">
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php
		if (isset($_POST["tampil"])) {
			$no_daftar 	= $_POST["pemohon"];

			$sql1 			= "SELECT * FROM pemohon WHERE no_daftar='$no_daftar';";
			$result1		= mysqli_query($connect, $sql1);
			$data1 			= mysqli_num_rows($result1);

			if ($data1==1) {
				$row 	= mysqli_fetch_assoc($result1);
				$nodaftar		= $row["no_daftar"];
				$tgl_daftar		= $row["tgl_daftar"];
				$nama 			= $row["nama"];
				$tempat 		= $row["tempat"];
				$tgl_lahir 		= $row["tgl_lahir"];
				$nik 			= $row["nik"];
				$wn				= $row["wn"];
				$alamat			= $row["alamat"];
				$alamat_bidang 	= $row["alamat_bidang"];
				$alas_hak		= $row["alas_hak"];
				$luas_tanah		= $row["luas_tanah"];
				$nop_pbb		= $row["nop_pbb"];
				$telepon		= $row["telepon"];
				$koordinator 	= $row["koordinator"];
	?>

	<div class="row">
		<!--Panel Untuk Tampil Data-->
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Berdasarkan data dibawah ini</strong>
				</div>
				<div class="panel-body">
					<table border="0" class="table table-hover table-bordered">
							<tr><td>No Daftar</td><td><?php echo $nodaftar; ?></td></tr>
							<tr><td>Tanggal Daftar</td><td><?php echo $tgl_daftar; ?></td></tr>
							<tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
							<tr><td>Tempat Lahir</td><td><?php echo $tempat;?></td></tr>
							<tr><td>Tanggal Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
							<tr><td>NIK</td><td><?php echo $nik; ?></td></tr>
							<tr><td>Warga Negara</td><td><?php echo $wn; ?></td></tr>
							<tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
							<tr><td>Alamat Bidang</td><td><?php echo $alamat_bidang; ?></td></tr>
							<tr><td>Alas Hak</td><td><?php echo $alas_hak; ?></td></tr>
							<tr><td>Luas Tanah</td><td><?php echo $luas_tanah; ?></td></tr>
							<tr><td>NOP PBB</td><td><?php echo $nop_pbb; ?></td></tr>
							<tr><td>Telepon</td><td><?php echo $telepon; ?></td></tr>
							<tr><td>Koordinator</td><td><?php echo $koordinator; ?></td></tr>	

					</table>
				</div>
			</div>
		</div>

		<!--Panel Untuk Pilih Hak-->
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Silahkan Pilih Hak</strong>
				</div>
				<div class="panel-body">
					<form class="form form-horizontal" action="" name="hak" method="post" >
						<div class="form">
							<div class="form-group">
								<div class="col-md-12">
									<?php
										$sql2 		= "SELECT * from hak;";
										$result2 	= mysqli_query($connect, $sql2);
										$data 		= mysqli_num_rows($result2);

										if ($data>0) {
									?>
									<input type="hidden" name="nomor" value="$data">
									<?php
											$angka	= 0;
											while ($row 	= mysqli_fetch_assoc($result2)) {
												$kd_hak 	= $row["kd_hak"];
												$jn_hak 	= $row["jn_hak"];
									?>
										<div class="checkbox">
											<label><input type="checkbox" name="kd_hak[]" id="kd_hak[]" class="form" value="<?php echo  $kd_hak ?>" multiple="multiple"><?php echo $jn_hak; ?></label>
										</div>
										
										<input type="text" name="no_hak" id="no_hak" placeholder="input Nomor <?php echo $jn_hak ?>" multiple="multiple" class="form-control" size="30"><br>
									<?php	
											$angka++;		
											}
										}
									?>
								</div>
								
							</div>
				</div>
				<div class="panel-footer">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-success btn-block">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
			}
		}

		if (isset($_POST["simpan"])) {
			$nodaftar1 	= $no_daftar;
			$angka 		= $_POST["nomor"];
			$kd_hak1	= $_POST["kd_hak"];
			$no_hak		= $_POST["no_hak"];
			//$jumlah 	= count($kd_hak1);
			$i 			= 0;

			
			/*
			$sql4 		= "INSERT INTO detil_hak(no_daftar, kd_hak, nomor) VALUES";
			for ($i=0; $i < $jumlah ; $i++) { 
				 "('$nodaftar', '$kd_hak[$i]', '$no_hak[$i]'); ";
			}
			$result4	= mysqli_query($connect, $sql4);
			if ($result4) {
				echo "Berhasil";
			}

			for ($i=0; $i < $jumlah ; $i++) {
				$nodaftar1 	= $no_daftar;
				$kd_hak		= $_POST["kd_hak"];
				$no_hak		= $_POST["no_hak".$i]; 
				$sql4 		= "INSERT INTO detil_hak(no_daftar, kd_hak, nomor) VALUES ('$nodaftar1', '$kd_hak[$i]', '$no_hak'); ";
				$result4	= mysqli_query($connect, $sql4);
				if ($result4) {
					echo "Berhasil";
				}
			}*/

			/*
			while ($i < $jumlah ) {
				$sql3 		= "INSERT INTO detil_hak(no_daftar, kd_hak, nomor) VALUES ('$no_daftar', '$kd_hak[$i]', '$no_hak[$i]'); ";
				$result3	= mysqli_query($connect, $sql3);

				if ($result3) {
					echo "Berhasil";
				}
				$i++;
			}*/

			foreach ($kd_hak1 as $key) {
				$sql4 		= "INSERT INTO detil_hak(no_daftar, kd_hak, nomor) VALUES ('$nodaftar1', '$key', '$no_hak'); ";
				$result4	= mysqli_query($connect, $sql4);

				if ($result4) {
					echo "Berhasil";
				}
			} 
		}
	?>
</div>
<?php
include "footer.php";
?>