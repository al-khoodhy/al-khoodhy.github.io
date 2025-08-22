<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_m extends CI_Model {

	public function list($limit = 100, $offset = 0)
	{
		$this->db->order_by('urutan', 'asc');
		$this->db->order_by('id', 'asc');
		return $this->db->get('tb_layanan')->result();
	}

	public function getById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tb_layanan')->row_array();
	}

	public function tambah($data)
	{
		return $this->db->insert('tb_layanan', $data) ? true : false;
	}

	public function edit($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tb_layanan', $data) ? true : false;
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_layanan');
		return ($this->db->affected_rows() === 1) ? true : false;
	}
}

/* End of file Layanan_m.php */

