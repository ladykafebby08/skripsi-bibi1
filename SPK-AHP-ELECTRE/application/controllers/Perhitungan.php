<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Perhitungan_model');
		$this->load->helper('electre_class');
	}

	public function index()
	{
		if ($this->session->userdata('id_user_level') != "1") {
?>
			<script type="text/javascript">
				alert('Anda tidak berhak mengakses halaman ini!');
				window.location = '<?php echo base_url("Login/home"); ?>'
			</script>
<?php
		}
		$rows = $this->Perhitungan_model->getALT();
		foreach ($rows as $row) {
			$ALT[$row->id_alternatif] = $row->nama;
		}
		$data['alt'] = $ALT;

		$rows = $this->Perhitungan_model->getKRT();
		foreach ($rows as $row) {
			$KRT[$row->id_kriteria] = array(
				'keterangan' => $row->keterangan,
				'bobot' => $row->bobot
			);
		}
		$data['krt'] = $KRT;

		foreach ($data['krt'] as $key => $val) {
			$bobot[$key] = $val['bobot'];
		}


		$data['page'] = "Perhitungan";
		$data['olah'] = $this->Perhitungan_model->getdata();
		$data['kriteria'] = $this->Perhitungan_model->get_kriteria();
		$data['electre'] = new Electre($data['olah'], $bobot);
		$data['rank'] = $this->get_hitung($data['electre']->total);
		$this->load->view('Perhitungan/perhitungan', $data);
	}

	public function hasil()
	{
		$rows = $this->Perhitungan_model->getALT();
		foreach ($rows as $row) {
			$ALT[$row->id_alternatif] = array(
				'nama' => $row->nama,
				'nik' => $row->nik,
				'alamat' => $row->alamat,
				'tanggal' => $row->tanggal,
			);
		}
		$data['alt'] = $ALT;

		$rows = $this->Perhitungan_model->getKRT();
		foreach ($rows as $row) {
			$KRT[$row->id_kriteria] = array(
				'keterangan' => $row->keterangan,
				'bobot' => $row->bobot
			);
		}
		$data['krt'] = $KRT;

		foreach ($data['krt'] as $key => $val) {
			$bobot[$key] = $val['bobot'];
		}

		$data['page'] = "Hasil";
		$data['olah'] = $this->Perhitungan_model->getdata();
		$data['electre'] = new Electre($data['olah'], $bobot);
		$data['rank'] = $this->get_rank($data['electre']->total);
		$this->load->view('Perhitungan/hasil', $data);
	}

	function get_rank($array)
	{
		$data = $array;
		arsort($data);
		$no = 1;
		$new = array();
		foreach ($data as $key => $value) {
			$new[$key] = $no++;
		}
		return $new;
	}

	function get_hitung($array)
	{
		$data = $array;
		$no = 1;
		$new = array();
		foreach ($data as $key => $value) {
			$new[$key] = $no++;
		}
		return $new;
	}
}
