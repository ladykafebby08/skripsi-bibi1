<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Perhitungan_model');
		$this->load->helper('electre_class');
	}

	public function index()
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

		$data['olah'] = $this->Perhitungan_model->getdata();
		$data['electre'] = new Electre($data['olah'], $bobot);
		$data['rank'] = $this->get_rank($data['electre']->total);
		$this->load->view('laporan', $data);
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
}
