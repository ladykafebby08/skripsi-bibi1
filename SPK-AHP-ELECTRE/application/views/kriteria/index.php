<?php $this->load->view('layouts/header_admin'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800" style="color: #395B64;"><i class="fas fa-fw fa-cube"></i> Data Kriteria</h1>

	<div>
		<a href="<?= base_url('Kriteria/prioritas'); ?>" class="btn btn-primary"> <i class="fa fa-sync"></i> Bobot Preferensi AHP </a>
		<a href="<?= base_url('Kriteria/create'); ?>" class="btn btn-success"> <i class="fa fa-plus"></i> Tambah Data </a>
	</div>
</div>

<?= $this->session->flashdata('message'); ?>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold" style="color: #395B64;"><i class=" fa fa-table"></i> Daftar Data Kriteria</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead class="text-white bg-warning">
					<tr align="center">
						<th width="5%">No</th>
						<th>Kode Kriteria</th>
						<th>Nama Kriteria</th>
						<th>Bobot</th>
						<th width="15%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($list as $data => $value) {
					?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?php echo $value->id_kriteria ?></td>
							<td><?php echo $value->keterangan ?></td>
							<td>
								<?php
								if (empty($value->bobot)) {
									echo "-";
								} else {
									echo $value->bobot;
								}
								?>
							</td>
							<td>
								<div class="btn-group" role="group">
									<a data-toggle="tooltip" data-placement="bottom" title="Edit Data" href="<?= base_url('Kriteria/edit/' . $value->id_kriteria) ?>" class="btn btn-sm" style="background-color:#395B64 ;"><i class="fa fa-edit"></i></a>
									<a data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="<?= base_url('Kriteria/destroy/' . $value->id_kriteria) ?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-sm" style="background-color:#A5C9CA ;"><i class=" fa fa-trash"></i></a>
								</div>
							</td>
						</tr>
					<?php
						$no++;
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<?php $this->load->view('layouts/footer_admin'); ?>