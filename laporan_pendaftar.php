<?php
//require "cekAdminTransaksi.php";
require "koneksi.php";

$nmdokumen	= 'LaporanPemohon';
define('_MPDF_PATH', 'bootstrap/mpdf60/');
include(_MPDF_PATH . "mpdf.php");
$mpdf = new mPDF('utf8','A4-L',10.5,'segoe ui',5,5,5,5);
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Pemohon</title>
</head>
<body>
<!--<img src="../../img/kop_surat.jpg">-->
<h5 align="center"><strong><u>DATA PEMOHON</u></strong></h5>
<table border="1" width="100%">
	<tr>
		<td><p style="font-size: 7pt;" >Tanggal Daftar</p></td>
		<td><p style="font-size: 7pt;" >NIK</p></td>
		<td><p style="font-size: 7pt;" >Nama</p></td>
		<td><p style="font-size: 7pt;" >Tempat</p></td>
		<td><p style="font-size: 7pt;" >Tgl Lahir</p></td>
		<td><p style="font-size: 7pt;" >Warga Negara</p></td>
		<td><p style="font-size: 7pt;" >Alamat</p></td>
		<td><p style="font-size: 7pt;" >Alamat Bidang</p></td>
		<td><p style="font-size: 7pt;" >Alas Hak</p></td>
		<td><p style="font-size: 7pt;" >Luas Tanah</p></td>
		<td><p style="font-size: 7pt;" >Nomor PBB</p></td>
		<td><p style="font-size: 7pt;" >Telepon</p></td>
		<td><p style="font-size: 7pt;" >Koordinator</p></td>
	</tr>
<?php
$sql	= "SELECT * FROM pemohon";
$result	= mysqli_query($connect, $sql);
$data	= mysqli_num_rows($result);

if ($data == 1) {
	while($row 		= mysqli_fetch_assoc($result)) {
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
?>
	<tr>
		<td><p style="font-size: 7pt;" ><?php echo $tgl_daftar; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $nik; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $nama; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $tempat; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $tgl_lahir; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $wn; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $alamat; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $alamat_bidang; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $alas_hak; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $luas_tanah; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $no_pbb; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $telepon; ?></p></td>
		<td><p style="font-size: 7pt;" ><?php echo $koordinator; ?></p></td>
	</tr>
<?php
	}
}
?>
</table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output('SP.pdf','I');
exit;
?>