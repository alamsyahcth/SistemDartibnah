<?php
include "cek.php";
include "header.php";

$no_daftar	= $_GET["no_daftar"];
$_SESSION["no_daftar"] = $no_daftar;
print_r($_SESSION["no_daftar"]);
?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h1>Tambah Hak</h1>
		</div>
	</div>
	<div class="row">
		<div class="box-shadow">
			<form class="form-horizontal" action="" role="form" method="post">
				<div class="form">
					<div class="form-group">
						<div class="form-group">
							<label for="kd_hak" class="col-md-2 control-label">Daftar Hak</label>
							<div class="col-md-4">
								<select name="kd_hak" id="kd_hak" class="form-control">
									<?php
										$sql	= "SELECT * FROM hak";
										$result	= mysqli_query($connect, $sql);
										if (mysqli_num_rows($result)>0) {
											while ($row 	= mysqli_fetch_assoc($result)) {
												$kd_hak		= $row["kd_hak"];
												$jn_hak		= $row["jn_hak"];
									?>
										<option value="<?php echo $kd_hak; ?>"><?php echo $kd_hak."-".$jn_hak; ?></option>
									<?php
											}
										}
									?>
								</select>
							</div>
							
							<label for="no_hak" class="col-md-2 control-label">Nomor Hak</label>
							<div class="col-md-4">
								<input type="text" name="no_hak" id="no_hak" class="form-control"  size="30" required="">
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
						<?php
							if (isset($_POST["tambah"])) {
								$no_daftar_plg	= $_SESSION["no_daftar"];
								$kd_hak_plg		= $_POST["kd_hak"];
								$no_hak_plg		= $_POST["no_hak"];

								$sql2	= "INSERT INTO detil_hak(no_daftar, kd_hak, nomor) VALUES('$no_daftar_plg','$kd_hak_plg', '$no_hak_plg');";
								$result2= mysqli_query($connect, $sql2);

								if ($result2) {
									header("Location: detilhak2.php?no_daftar=$no_daftar_plg");
								}					
							}
						?>
					</div>
				</div>
			</form>
		</div>

		<br>
		<h2>Daftar Detil HAK</h2>
		<table class="table table-hover table-bordered">
		<tr>
			<td>No</td>
			<td>Kode Hak</td>
			<td>Nomor Hak</td>
		</tr>
		

			<?php
			$sql3	= "SELECT * FROM detil_hak WHERE no_daftar='".$_SESSION['no_daftar']."';";
			$result3 = mysqli_query($connect, $sql3);
			$data3 	= mysqli_num_rows($result3);
			$no = 1;
			if ($data3>0) {
				while ($row 	= mysqli_fetch_assoc($result3)) {
					$kd_hak		= $row["kd_hak"];
					$nomor		= $row["nomor"];

					echo "<tr><td>".$no."</td>".
					"<td>".$kd_hak."</td>".
					"<td>".$nomor."</td></tr>";
					$no++;
				}
			} else{
				echo "Data Belum dientry";
			}
			?>
		</table>
	</div>

	<div class="row">
		<div class="col-md-4">
			<a href="lihat_data_pendaftar.php">
				<button class="btn btn-success btn-lg">Lihat Data Pendaftar</button>
			</a>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>