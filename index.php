<?php

    $nama = "Siti Nur Rohimah";
    $jenis_kelamin = "Perempuan";
    $umur = "21";
    $berat = "40 kg";
    $tinggi = "160 cm";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biodata Diri</title>
<style>
	table {
		font-family: monospace;
		width: auto;
		background-color: azure;
	}
	tbody tr:hover{
	background-color: lightskyblue;
	color: white;
	}
</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $nama ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $jenis_kelamin ?></td>
		</tr>
		<tr>
			<td>Umur</td>
			<td>:</td>
			<td><?php echo $umur ?></td>
		</tr>
		<tr>
			<td>Berat</td>
			<td>:</td>
			<td><?php echo $berat ?></td>
		</tr>
		<tr>
			<td>Tinggi</td>
			<td>:</td>
			<td><?php echo $tinggi ?></td>
		</tr>
	</table>
</body>
</html>