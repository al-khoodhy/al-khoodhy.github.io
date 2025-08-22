<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		header('Content-Type: application/json; charset=utf-8');
		header('Access-Control-Allow-Origin: *');
	}

	public function announcements()
	{
		$this->db->select('judul AS title, isi AS body, tanggal AS date');
		$this->db->where('dipublikasikan', 1);
		$this->db->order_by('tanggal', 'desc');
		$this->db->limit(20);
		$data = $this->db->get('tb_pengumuman')->result_array();
		echo json_encode($data);
	}

	public function agenda()
	{
		$this->db->select('a.tanggal AS tanggal, a.jam_mulai AS jam_mulai, a.judul_kegiatan AS judul, a.narasumber AS narasumber, a.keterangan AS lokasi');
		$this->db->from('tb_kegiatan a');
		$this->db->where('a.tanggal >=', date('Y-m-d'));
		$this->db->order_by('a.tanggal', 'asc');
		$this->db->order_by('a.jam_mulai', 'asc');
		$this->db->limit(20);
		$data = $this->db->get()->result_array();
		echo json_encode($data);
	}

	public function services()
	{
		$this->db->select('judul AS title, deskripsi AS `desc`, kontak AS contact');
		$this->db->where('aktif', 1);
		$this->db->order_by('urutan', 'asc');
		$this->db->order_by('id', 'asc');
		$data = $this->db->get('tb_layanan')->result_array();
		echo json_encode($data);
	}

	public function finance()
	{
		$monthStart = date('Y-m-01');
		$monthEnd = date('Y-m-t');
		$this->db->select('date, keterangan, pemasukan, pengeluaran');
		$this->db->from('tb_kas_masjid');
		$this->db->where('date >=', $monthStart);
		$this->db->where('date <=', $monthEnd);
		$this->db->order_by('date', 'asc');
		$rows = $this->db->get()->result_array();

		$items = [];
		$totalIn = 0; $totalOut = 0;
		foreach ($rows as $r) {
			if (!is_null($r['pemasukan'])) {
				$items[] = [
					'date' => $r['date'],
					'type' => 'Pemasukan',
					'desc' => $r['keterangan'],
					'amount' => (float)$r['pemasukan']
				];
				$totalIn += (float)$r['pemasukan'];
			}
			if (!is_null($r['pengeluaran'])) {
				$items[] = [
					'date' => $r['date'],
					'type' => 'Pengeluaran',
					'desc' => $r['keterangan'],
					'amount' => (float)$r['pengeluaran']
				];
				$totalOut += (float)$r['pengeluaran'];
			}
		}

		$response = [
			'month' => strftime('%B %Y'),
			'items' => $items,
			'total_in' => $totalIn,
			'total_out' => $totalOut,
			'balance' => $totalIn - $totalOut
		];
		echo json_encode($response);
	}
}


