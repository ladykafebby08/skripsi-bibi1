<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function get_kriteria()
	{
		$query = $this->db->get('kriteria');
		return $query->result();
	}

	public function getALT()
	{
		$query = $this->db->query("SELECT * FROM alternatif ORDER BY id_alternatif");
		return $query->result();
	}

	public function getKRT()
	{
		$query = $this->db->query("SELECT id_kriteria, keterangan, bobot FROM kriteria ORDER BY id_kriteria");
		return $query->result();
	}

	public function getdata()
	{
		$rows =  $this->db->query("SELECT a.id_alternatif, p.id_kriteria, sk.nilai FROM alternatif a INNER JOIN penilaian p ON p.id_alternatif=a.id_alternatif INNER JOIN sub_kriteria sk ON sk.id_sub_kriteria=p.nilai ORDER BY a.id_alternatif")->result();
		foreach ($rows as $row) {
			$data[$row->id_alternatif][$row->id_kriteria] = $row->nilai;
		}
		return $data;
	}
}
