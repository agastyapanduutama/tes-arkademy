<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
	}

	public function index()
	{
		$kategori = $this->model_admin->data_kategori();

		$data = array(	'title' => 'Data kategori',
						'kategori' => $kategori , );

		$this->load->view ('templates/header');
		$this->load->view('admin/kategori/index', $data , FALSE);
		$this->load->view ('templates/footer');

	}

	public function tambah()
	{

		$valid = $this->form_validation;
		
		$valid->set_rules('nama_kategori', 'kategori','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		
		$data = array('title'	=>  'kategori',
					  'isi'		=>	'kategori/tambah');
	
		$this->load->view ('templates/header');
		$this->load->view('admin/kategori/add', $data , FALSE);
		$this->load->view ('templates/footer');
		
		}else{
			$i = $this->input;
			$data = array(	
								'nama_kategori'	=> $i->post('nama_kategori'),
		);
			$this->model_admin->tambah_kategori($data);
			$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
			redirect(base_url('kategori'),'refresh');	
		}
	}
	

	public function edit($id_kategori) {

		$kategori = $this->model_admin->detail_kategori($id_kategori);

		$valid = $this->form_validation;

		$valid->set_rules('nama_kategori', 'Nama kategori','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {

		$data = array('title'	=>  'Ubah kategori',					  
					 'kategori'	=> $kategori,
					 'isi'		=>	'kategori/edit');

		$this->load->view ('templates/header');
		$this->load->view('admin/kategori/edit', $data , FALSE);
		$this->load->view ('templates/footer');
	
		}else{
			$i = $this->input;
			$data = array(	'id_kategori'		=> $id_kategori,
							'nama_kategori'	=> $i->post('nama_kategori'),
		);
			$this->model_admin->edit_kategori($data);
			$this->session->set_flashdata('sukses', 'Data berhasil diedit');
			redirect(base_url('kategori'),'refresh');	
		}
	}

	public function hapus($id_kategori)
	{
			$data = array('id_kategori' => $id_kategori);
			$this->model_admin->hapus_kategori($data);
			$this->session->set_flashdata('sukses', 'Data berhasil Dihapus');
			redirect(base_url('kategori'),'refresh');	
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */