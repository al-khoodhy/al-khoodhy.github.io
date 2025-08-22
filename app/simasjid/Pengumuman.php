<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends SIMASJID_Core {

	public function __construct()
	{
		parent::__construct();
		$this->access_control->check_login();
		$this->access_control->check_role();
		$this->load->model('Pengumuman_m');
	}

	public function index()
	{
		$this->css_plugin = array(
			'fontawesome/css/all.min',
			'mdi/css/materialdesignicons.min',
			'datatables/datatables.min'
		);

		$this->js_plugin = array(
			'datatables/datatables.min'
		);

		$this->_partial = array('head','sidebar','navbar','body','footer','script');
		$this->_module = 'pengumuman/pengumuman_view';
		$this->js = 'halaman/pengumuman';
		$this->_data = array(
			'title' => 'SIMASJID - Pengumuman',
			'data'  => $this->Pengumuman_m->list()
		);
		$this->load_view();
	}

	public function tambah()
	{
		$post = $this->input->post(null, TRUE);
		$this->form_validation->set_rules('judul','Judul','required|min_length[3]|max_length[150]');
		$this->form_validation->set_rules('tanggal','Tanggal','required|regex_date');
		$this->form_validation->set_rules('isi','Isi','required|min_length[5]');
		$status = 0; $msg = '';
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'judul' => $post['judul'],
				'isi' => $post['isi'],
				'tanggal' => $post['tanggal'],
				'dipublikasikan' => isset($post['dipublikasikan']) ? 1 : 0
			);
			$status = ($this->Pengumuman_m->tambah($data) == true) ? 1 : 0;
			$msg = ($status===1)?'Berhasil menambah data.':'Gagal menambah data.';
		} else { $msg = validation_errors(); }
		$result = array('result'=>$status,'msg'=>$msg,'token'=>$this->security->get_csrf_hash());
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function edit()
	{
		$post = $this->input->post(null, TRUE);
		$this->form_validation->set_rules('id','ID','required|integer');
		$this->form_validation->set_rules('judul','Judul','required|min_length[3]|max_length[150]');
		$this->form_validation->set_rules('tanggal','Tanggal','required|regex_date');
		$this->form_validation->set_rules('isi','Isi','required|min_length[5]');
		$status = 0; $msg = '';
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'judul' => $post['judul'],
				'isi' => $post['isi'],
				'tanggal' => $post['tanggal'],
				'dipublikasikan' => isset($post['dipublikasikan']) ? 1 : 0
			);
			$status = ($this->Pengumuman_m->edit($post['id'], $data) == true) ? 1 : 0;
			$msg = ($status===1)?'Berhasil mengubah data.':'Gagal mengubah data.';
		} else { $msg = validation_errors(); }
		$result = array('result'=>$status,'msg'=>$msg,'token'=>$this->security->get_csrf_hash());
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function hapus()
	{
		$post = $this->input->post(null, TRUE);
		$status = 0; $msg = '';
		if (!empty($post['id']) && is_numeric($post['id'])) {
			$status = ($this->Pengumuman_m->hapus($post['id']) == true) ? 1 : 0;
			$msg = ($status===1)?'Berhasil menghapus data.':'Gagal menghapus data.';
		} else { $msg = 'Data tidak valid.'; }
		$result = array('result'=>$status,'msg'=>$msg,'token'=>$this->security->get_csrf_hash());
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}
}


