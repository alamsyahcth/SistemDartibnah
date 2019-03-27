<?php
include "koneksi.php";
?>
<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Data Pemohon</h4>
			</div>
			<div class="modal-body">
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
	</div>
</div>