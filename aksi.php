<?php
		$nama=$_POST["nama"];
		$jk=$_POST["jk"];
		$asalSmu=$_POST["asalSmu"];
		$kabupatenKota=$_POST["kabupatenKota"];
		$propinsi1=$_POST["propinsi1"];
		$kodepos=$_POST["kodepos"];
		$tempatLahir=$_POST["tempatLahir"];
		$tanggal="{$_POST["tanggal1"]}{$_POST["tanggal2"]}";
		$bulan="{$_POST["bulan1"]}{$_POST["bulan2"]}";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hasil</title>
		<link rel="stylesheet" type="text/css" href="Website_DataDiri.css">
	</head>
	<body>
		<div style="margin-left: 20%;">
			<table>
				<tr>
					<th colspan="17" style="text-align: left;"><h3>A. Data Pribadi</h3></th>
				</tr>
				<tr class="tr1 tr3">
					<td class="td1">A1.</td>
					<td style="padding-top: 10px; padding-left: 10px; padding-bottom: 10px;">Nama Lengkap</td>
					<td style="padding-top: 10px; padding-bottom: 10px;"> : </td>
					<td style="padding-top: 10px; padding-bottom: 10px;" colspan="14"><?php echo $nama ?></td>
				</tr>
				<tr class="tr1 tr3">
					<td class="td1">A2.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Jenis Kelamin</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="padding-top: 10px;" colspan="14"><?php echo $jk ?></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="2">A3.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Asal SMU</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="padding-top: 10px;"><?php echo $asalSmu ?></td>
					<td></td>
					<td style="padding-top: 10px;" colspan="4">Kabupaten/Kota</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="padding-top: 10px;" colspan="7"><?php echo $kabupatenKota ?></td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;">Propinsi</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;"><?php echo $propinsi1 ?></td>
					<td style="padding-bottom: 10px; width: 30px;"></td>
					<td style="padding-bottom: 10px;" colspan="4">Kode Pos</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;" colspan="7"><?php echo $kodepos ?></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="2">A4.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Tempat/Tanggal lahir</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="padding-top: 10px;" class="A4" >Tempat</td>
					<td></td>
					<td style="padding-top: 10px;" class="A4" colspan="2">Tanggal</td>
					<td style="padding-top: 10px; width: 30px;"></td>
					<td style="padding-top: 10px;" class="A4" colspan="2">Bulan</td>
					<td style="padding-top: 10px; width: 30px;"></td>
					<td style="padding-top: 10px;" class="A4" colspan="4">Tahun</td>
					<td style="padding-top: 10px;" colspan="2"></td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;" colspan="2"></td>
					<td style="padding-bottom: 10px;" class="A4"><?php echo $tempatLahir ?></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;" class="A4" colspan="2"><?php echo $tanggal ?></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;" class="A4" colspan="2"><?php echo $bulan ?></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;" class="A4" colspan="4"></td>
					<td style="padding-bottom: 10px;" colspan="2"></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="3">A5.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Alamat kantor</td>
					<td style="padding-top: 10px;" colspan="15"> : </td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;" colspan="16">
						
					</td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;">No telp</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;"></td>
					<td style="padding-bottom: 10px;" colspan="2">Kode pos</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;" colspan="10"></td>
				</tr>
				<tr class="tr1">
					<td class="td1" rowspan="6">A6.</td>
					<td style="padding-top: 10px; padding-left: 10px;">Alamat rumah/kontak</td>
					<td style="padding-top: 10px;" colspan="15"> : </td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;" colspan="16">
						
					</td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;">kelurahan</td>
					<td> : </td>
					<td></td>
					<td></td>
					<td colspan="2">kecamatan</td>
					<td> : </td>
					<td colspan="5"></td>
					<td colspan="2">kabupaten</td>
					<td> : </td>
					<td style="padding-right: 10px"></td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;">Propinsi</td>
					<td> : </td>
					<td colspan="14"></td>
				</tr>
				<tr class="tr2">
					<td style="padding-left: 10px;">No telp</td>
					<td> : </td>
					<td></td>
					<td></td>
					<td colspan="2">Kode pos</td>
					<td> : </td>
					<td colspan="10"></td>
				</tr>
				<tr class="tr3">
					<td style="padding-left: 10px; padding-bottom: 10px;">No HP(mobile phone)</td>
					<td style="padding-bottom: 10px;"> : </td>
					<td style="padding-bottom: 10px;" colspan="15"></td>
				</tr>
				<tr class="tr1 tr3">
					<td style="border-bottom-left-radius: 20px; padding-top: 10px; padding-left: 10px;" class="td1">A7.</td>
					<td style="padding-top: 10px;">Alamat Email</td>
					<td style="padding-top: 10px;"> : </td>
					<td style="border-bottom-right-radius: 20px; padding-left: 10px; padding-bottom: 10px;" colspan="14"></td>
				</tr>
			</table>
		</div>
	</body>
</html>