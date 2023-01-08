<!DOCTYPE html>
<html>

<head>
	<title> Dinas Perumahan, kawasan Pemukiman & Pertanahan Kota Sungai Penuh</title>
</head>
<style>
	table {
		border-collapse: collapse;
	}

	table,
	th,
	td {
		border: 1px solid black;
	}
</style>

<body>
	<h4>Hasil Akhir Perankingan</h4>
	<table border="1" width="100%">
		<thead>
			<tr align="center">
				<th>Nik</th>
				<th>Nama Alternatif</th>
				<th>Alamat</th>
				<th>Tanggal</th>
				<th width="25%">Total Nilai</th>
				<th width="5%">Rank</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$rank = $rank;
			$no = 1;
			foreach ($rank as $key => $val) : ?>
				<tr align="center">
					<td><?= $alt[$key]['nik'] ?></td>
					<td><?= $alt[$key]['nama'] ?></td>
					<td><?= $alt[$key]['alamat'] ?></td>
					<td><?= $alt[$key]['tanggal'] ?></td>
					<td><?= $electre->total[$key] ?></td>
					<td><?= $no ?></td>
				</tr>
			<?php
				$no++;
			endforeach; ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>