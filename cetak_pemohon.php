<?php
//require "cekAdminTransaksi.php";
require "koneksi.php";

$no_daftar = $_GET["no_daftar"];
$sql	= "SELECT * FROM pemohon WHERE no_daftar='$no_daftar';";
$result	= mysqli_query($connect, $sql);
$data	= mysqli_num_rows($result);

if ($data == 1) {
	$row 		= mysqli_fetch_assoc($result);
	$no_daftar 	= $row["no_daftar"];
	$tgl_daftar	= $row["tgl_daftar"];
	$nama		= $row["nama"];
	$tempat		= $row["tempat"];
	$tgl_lahir	= $row["tgl_lahir"];
	$nik 		= $row["nik"];
	$wn 		= $row["wn"];
	$alamat 	= $row["alamat"];
	$alamat_bidang	= $row["alamat_bidang"];
	$alas_hak	= $row["alas_hak"];
	$luas_tanah	= $row["luas_tanah"];
	$no_pbb 	= $row["nop_pbb"];
	$telepon 	= $row["telepon"];
	$koordinator 	= $row["koordinator"];



$nmdokumen	= 'Pemohon';
define('_MPDF_PATH', 'bootstrap/mpdf60/');
include(_MPDF_PATH . "mpdf.php");
$mpdf = new mPDF('utf8','A4',10.5,'segoe ui',20,20,20,20);
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Pemohon</title>
</head>
<body>
<!--<img src="../../img/kop_surat.jpg">-->
<h5 align="center"><strong><u>BIODATA PEMOHON</u></strong></h5>
<p align="center">Nomor pendaftar: <?php echo $no_daftar; ?></p>
<table border="0">
	<tr>
		<td>Tanggal Daftar</td>
		<td>:</td>
		<td><?php echo $tgl_daftar; ?></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?php echo $nik; ?></td>

	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $nama; ?></td>
	</tr>
	<tr>
		<td>Tempat</td>
		<td>:</td>
		<td><?php echo $tempat; ?></td>
	</tr>
	<tr>
		<td>Tgl Lahir</td>
		<td>:</td>
		<td><?php echo $tgl_lahir; ?></td>
	</tr>
	<tr>
		<td>Warga Negara</td>
		<td>:</td>
		<td><?php echo $wn; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $alamat; ?></td>
	</tr>
	<tr>
		<td>Alamat Bidang</td>
		<td>:</td>
		<td><?php echo $alamat_bidang; ?></td>
	</tr>
	<tr>
		<td>Alas Hak</td>
		<td>:</td>
		<td><?php echo $alas_hak; ?></td>
	</tr>
	<tr>
		<td>Luas Tanah</td>
		<td>:</td>
		<td><?php echo $luas_tanah; ?></td>
	</tr>
	<tr>
		<td>Nomor PBB</td>
		<td>:</td>
		<td><?php echo $no_pbb; ?></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td>:</td>
		<td><?php echo $telepon; ?></td>
	</tr>
	<tr>
		<td>Koordinator</td>
		<td>:</td>
		<td><?php echo $koordinator; ?></td>
	</tr>
</table>
<h5>Dokumen Tanah</h5>
	<?php
	//mengambil data maksud
	$sql3 	= "SELECT a.jn_hak, nomor FROM hak a, detil_hak b WHERE a.kd_hak=b.kd_hak AND b.no_daftar='$no_daftar';";
	$result3 	= mysqli_query($connect, $sql3);
	$data3 		= mysqli_num_rows($result3);
	$no 		= 1;

	if ($data3>0) {
		while ($row3 	= mysqli_fetch_assoc($result3)) {
			$jn_hak 	= $row3["jn_hak"];
			$nomor 		= $row3["nomor"];
	?>
	<table>
		<tr>
			<td><?php echo "Jenis Hak : ".$jn_hak."<br>Nomor : ".$nomor; ?><br></td>
		</tr>
	</table>
	<?php
			}
		} else {
			echo "Data Tidak Ada";
		}
	} else {
	 	echo "Data Tidak Ada";
	}
	?>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output('SP.pdf','I');
exit;
?>