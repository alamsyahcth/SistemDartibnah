<?php
include "cek.php";
include "header.php";
?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h1>Daftar Pemohon</h1>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4">
			<a href="tambah_hak.php">
				<button class="btn btn-md btn-info">
					Tambah Hak
				</button>
			</a>
		</div>
	</div>
	<br><br>
	<table class="table table-hover table-bordered">
		<tr>
			<td>No</td>
			<td>Kode Hak</td>
			<td>Jenis Hak</td>
			<td>Action</td>
		</tr>
		

			<?php
			$sql	= "SELECT * FROM hak;";
			$result = mysqli_query($connect, $sql);
			$data 	= mysqli_num_rows($result);
			$no = 1;
			if ($data>0) {
				while ($row 	= mysqli_fetch_assoc($result)) {
					$kd_hak		= $row["kd_hak"];
					$jn_hak		= $row["jn_hak"];

					echo "<tr><td>".$no."</td>".
					"<td>".$kd_hak."</td>".
					"<td>".$jn_hak."</td>".
					"<td>.<a href='delete_hak.php?kd_hak=$kd_hak'><button class='btn btn-danger btn-sm'>Hapus</button></a></td></tr>";
					$no++;
				}
			}
			?>
	</table>
</div>
<?php
include "footer.php";
?>