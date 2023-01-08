<?php $this->load->view('layouts/header_admin'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-calculator"></i> Data Perhitungan</h1>
</div>

<div class="alert alert-danger text-justify">
	Bobot kriteria didapatkan dari perhitungan menggunakan metode <b>AHP</b>. Silahkan menuju ke halaman <a href="<?= base_url('') ?>Kriteria/prioritas" class="btn btn-info">Kriteria</a> untuk melihat proses perhitungan.
</div>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Bobot Kriteria (W)</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<?php foreach ($kriteria as $key) : ?>
							<th><?= $key->id_kriteria ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<tr align="center">
						<?php foreach ($kriteria as $key) : ?>
							<td>
								<?php
								echo $key->bobot;
								?>
							</td>
						<?php endforeach ?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Rating Kecocokan Alternatif Pada Kriteria</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Alternatif</th>
						<?php foreach ($electre->kriteria as $key => $val) : ?>
							<th width="13%"><?= $krt[$key]['keterangan'] ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($olah as $key => $val) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $alt[$key] ?></td>
							<?php foreach ($val as $k => $v) : ?>
								<td><?= $v ?></td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Normalisasi Matriks Keputusan</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Alternatif</th>
						<?php foreach ($electre->kriteria as $key => $val) : ?>
							<th width="13%"><?= $krt[$key]['keterangan'] ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($electre->normal as $key => $val) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $alt[$key] ?></td>
							<?php foreach ($val as $k => $v) : ?>
								<td><?= round($v, 2) ?></td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Pembobotan Pada Matriks Yang Telah Dinormalisasi</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Alternatif</th>
						<?php foreach ($electre->kriteria as $key => $val) : ?>
							<th width="13%"><?= $krt[$key]['keterangan'] ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($electre->terbobot as $key => $val) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $alt[$key] ?></td>
							<?php foreach ($val as $k => $v) : ?>
								<td><?= round($v, 2) ?></td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Himpunan Concordance</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Alternatif</th>
						<?php foreach ($electre->concordance as $key => $val) : ?>
							<th width="13%"><?= $alt[$key] ?></th>
						<?php endforeach ?>

					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($electre->concordance as $key => $val) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $alt[$key] ?></td>
							<?php foreach ($val as $k => $v) : ?>
								<td><?= $key == $k ? '-' : implode(', ', $v) ?></td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Himpunan Discordance</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Alternatif</th>
						<?php foreach ($electre->discordance as $key => $val) : ?>
							<th width="13%"><?= $alt[$key] ?></th>
						<?php endforeach ?>

					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($electre->discordance as $key => $val) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $alt[$key] ?></td>
							<?php foreach ($val as $k => $v) : ?>
								<td><?= $key == $k ? '-' : implode(', ', $v) ?></td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Matriks Concordance</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Alternatif</th>
						<?php foreach ($electre->m_concordance as $key => $val) : ?>
							<th width="13%"><?= $alt[$key] ?></th>
						<?php endforeach ?>

					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($electre->m_concordance as $key => $val) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $alt[$key] ?></td>
							<?php foreach ($val as $k => $v) : ?>
								<td><?= $key == $k ? '-' : $v ?></td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Matriks Discordance</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Alternatif</th>
						<?php foreach ($electre->m_discordance as $key => $val) : ?>
							<th><?= $alt[$key] ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($electre->m_discordance as $key => $val) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $alt[$key] ?></td>
							<?php foreach ($val as $k => $v) : ?>
								<td><?= $key == $k ? '-' : round($v, 2) ?></td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Matriks Dominan Concordance</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Alternatif</th>
						<?php foreach ($electre->md_concordance as $key => $val) : ?>
							<th><?= $alt[$key] ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($electre->md_concordance as $key => $val) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $alt[$key] ?></td>
							<?php foreach ($val as $k => $v) : ?>
								<td><?= $key == $k ? '-' : $v ?></td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Matriks Dominan Discordance</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Alternatif</th>
						<?php foreach ($electre->md_discordance as $key => $val) : ?>
							<th><?= $alt[$key] ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($electre->md_discordance as $key => $val) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $alt[$key] ?></td>
							<?php foreach ($val as $k => $v) : ?>
								<td><?= $key == $k ? '-' : round($v, 2) ?></td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-warning"><i class="fa fa-table"></i> Aggregate Dominance Matrix</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-warning text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Alternatif</th>
						<?php foreach ($electre->agregate as $key => $val) : ?>
							<th><?= $alt[$key] ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$rank = $rank;
					$no = 1;
					foreach ($rank as $key => $val) : ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $alt[$key] ?></td>
							<?php foreach ($electre->agregate[$key] as $k => $v) : ?>
								<td><?= $key == $k ? '-' : round($v, 2) ?></td>
							<?php endforeach ?>
						</tr>
					<?php
						$no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>



<?php
$this->load->view('layouts/footer_admin');
?>