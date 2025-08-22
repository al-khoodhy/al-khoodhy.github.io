<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_m extends CI_Model {

	public function list($limit = 100, $offset = 0)
	{
		$this->db->order_by('tanggal', 'desc');
		$this->db->limit($limit, $offset);
		return $this->db->get('tb_pengumuman')->result();
	}

	public function getById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tb_pengumuman')->row_array();
	}

	public function tambah($data)
	{
		return $this->db->insert('tb_pengumuman', $data) ? true : false;
	}

	public function edit($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tb_pengumuman', $data) ? true : false;
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_pengumuman');
		return ($this->db->affected_rows() === 1) ? true : false;
	}
}

/* End of file Pengumuman_m.php */

