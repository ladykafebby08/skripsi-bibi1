<!DOCTYPE html>
<html>

<head>
	<title> Dinas Perumahan, kawasan Pemukiman & Pertanahan Kota Sungai Penuh</title>
</head>
<style>
	*,
	*::after,
	*::before {
		box-sizing: border-box;
		margin: 0;
		padding: 0;
	}

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
	<div style="display: flex; align-items: center;">
		<img src="<?= base_url('assets/') ?>img/logo-kota-sungai-penuh.png" alt="" style="width: 10%; margin-right: 1rem;">
		<h1 style="text-align: center;">Dinas Perumahan, Kawasan Pemukiman & Pertanahan Kota Sungai Penuh</h1>
	</div>

	<hr style="height: 0.2rem; background-color: black; border: none; margin-block: 1rem;">

	<table border="1" width="100%">
		<thead>
			<tr align="center">
				<th width="5%">Rank</th>
				<th>Nik</th>
				<th>Nama Alternatif</th>
				<th>Alamat</th>
				<th>Tanggal</th>
				<th width="25%">Total Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$rank = $rank;
			$no = 1;
			foreach ($rank as $key => $val) : ?>
				<tr align="center">
					<td><?= $no ?></td>
					<td><?= $alt[$key]['nik'] ?></td>
					<td><?= $alt[$key]['nama'] ?></td>
					<td><?= $alt[$key]['alamat'] ?></td>
					<td><?= $alt[$key]['tanggal'] ?></td>
					<td><?= $electre->total[$key] ?></td>
				</tr>
			<?php
				$no++;
			endforeach; ?>
		</tbody>
	</table>

	<div style="float: right; margin-top: 5rem; margin-right: 1rem;">
		<p>Diketahui Oleh</p>
		<p>Sungai Penuh, <?= date("d-m-Y") ?> </p>
		<p style="margin-bottom: 5rem;">Kepala Dinas</p>

		<p>Drs.Sutisno M.si</p>
		<hr>
		<p>196512141992031003</p>
	</div>
	<script>
		window.print();
	</script>
</body>

</html>