<?php
include "cek.php";
include "header.php";
?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h1>Data Pendaftar</h1>
		</div><br>
		<div class="col-md-3">
			<form class="form form-inline" role="form" action="" method="get">
				<div class="form">
					<input type="text" name="namaPemohon" class="form-control" placeholder="Cari Nama Pendaftar">
					<input type="submit" name="cari" value="Cari" class="btn btn-info btn-sm">
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<?php
			if (isset($_GET["update"]) == "success") {
				echo "
					<div class='alert alert-success alert-dismissable fade in' aria-label='close' style='background-color: #3ae374; color: #fff;>
						<button type='button' class='close' data-dismiss='alert'></button>
						<strong>Berhasil Mengupdate Data !</strong>
					</div>
				";
			}
		?>
		<table class="table table-stripted table-bordered table-hover" id="dataTables">
			<thead>
				<tr>
					<th width="5%">No</th>
					<th width="10%">No Daftar</th>
					<th width="20%">Tanggal Daftar</th>
					<th width="35%">Nama</th>
					<th width="20%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if (isset($_GET["cari"])) {
					$namaPemohon	= $_GET["namaPemohon"];
					$no 	= 1;

					$sql	= "SELECT no_daftar, tgl_daftar, nama FROM pemohon WHERE nama LIKE '%$namaPemohon%';";
					$result	= mysqli_query($connect, $sql);
					$data 	= mysqli_num_rows($result);

					echo "<a href='lihat_data_pendaftar.php'>Kembali</a>";
				} else {
					$sql	= "SELECT no_daftar, tgl_daftar, nama FROM pemohon;";
					$result	= mysqli_query($connect, $sql);
					$data 	= mysqli_num_rows($result);
				}

				if ($data>0) {
					$no 	= 1;
					while ($row = mysqli_fetch_assoc($result)) {
						$no_daftar	= $row["no_daftar"];
						$tgl_daftar	= $row["tgl_daftar"];
						$nama 		= $row["nama"];
				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $no_daftar; ?></td>
					<td><?php echo $tgl_daftar; ?></td>
					<td><?php echo $nama; ?></td>
					<td>
						<a href="update_pendaftar.php?no_daftar=<?php echo $no_daftar; ?>"><button class="btn btn-info btn-md" >Update</button></a>
						<a href="cetak_pemohon.php?no_daftar=<?php echo $no_daftar; ?>" target="output"><button class="btn btn-success btn-md" >Cetak</button></a>
						<a href="delete_pendaftar.php?no_daftar=<?php echo $no_daftar; ?>"><button class="btn btn-danger btn-md" onclick="return confirm('Yakin ingin menghapus?');">Hapus</button></a>
					</td>
				</tr>
				<?php
						$no++;
						}
					} else {
						echo "Data Tidak Ditemukan";
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<div class="modal fade" id='myModal' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Data Pemohon</h4>
			</div>
			<div class="modal-body" id="modal-edit">
			<?php
				//$no_daftar_pemohon = $_GET["no_daftar"];

				$sql1 			= "SELECT * FROM pemohon WHERE no_daftar='PDPU0001';";
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
					<table border="0" class="table table-hover">
							<tr><td>No Daftar</td><td>:</td><td><?php echo $nodaftar; ?></td></tr>
							<tr><td>Tanggal Daftar</td><td>:</td><td><?php echo $tgl_daftar; ?></td></tr>
							<tr><td>Nama</td><td>:</td><td><?php echo $nama; ?></td></tr>
							<tr><td>Tempat Lahir</td><td>:</td><td><?php echo $tempat;?></td></tr>
							<tr><td>Tanggal Lahir</td><td>:</td><td><?php echo $tgl_lahir; ?></td></tr>
							<tr><td>NIK</td><td>:</td><td><?php echo $nik; ?></td></tr>
							<tr><td>Warga Negara</td><td>:</td><td><?php echo $wn; ?></td></tr>
							<tr><td>Alamat</td><td>:</td><td><?php echo $alamat; ?></td></tr>
							<tr><td>Alamat Bidang</td><td>:</td><td><?php echo $alamat_bidang; ?></td></tr>
							<tr><td>Alas Hak</td><td>:</td><td><?php echo $alas_hak; ?></td></tr>
							<tr><td>Luas Tanah</td><td>:</td><td><?php echo $luas_tanah; ?></td></tr>
							<tr><td>NOP PBB</td><td>:</td><td><?php echo $nop_pbb; ?></td></tr>
							<tr><td>Telepon</td><td>:</td><td><?php echo $telepon; ?></td></tr>
							<tr><td>Koordinator</td><td>:</td><td><?php echo $koordinator; ?></td></tr>	

					</table>
			<?php
				}
			?>
		</div>
		<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
		<script type="text/javascript">
			$(document).on("click","#lihat_data", function() {
				var nodaftar	= $(this).data('nodaftar');
				$("#modal-edit #nodaftar").val(nodaftar); 
			});
		</script>
	</div>
</div>
<?php
include "footer.php";
?>