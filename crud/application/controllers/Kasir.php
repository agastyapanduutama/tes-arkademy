<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
	}

	public function index()
	{
		$kasir = $this->model_admin->data_kasir();

		$data = array(	'title' => 'Data kasir',
						'kasir' => $kasir , );

		$this->load->view ('templates/header');
		$this->load->view('admin/kasir/index', $data , FALSE);
		$this->load->view ('templates/footer');

	}

	public function tambah()
	{

		$kasir = $this->model_admin->data_kasir();

		$valid = $this->form_validation;
		
		$valid->set_rules('nama_kasir', 'kasir','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		
		$data = array('title'	=>  'kasir',
					  'kasir'	=> $kasir,
					  'isi'		=>	'kasir/tambah');
	
		$this->load->view ('templates/header');
		$this->load->view('admin/kasir/add', $data , FALSE);
		$this->load->view ('templates/footer');
		
		}else{
			$i = $this->input;
			$data = array(	'nama_kasir'	=> $i->post('nama_kasir'), );

			$this->model_admin->tambah_kasir($data);
			$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
			redirect(base_url('kasir'),'refresh');	
		}
	}
	

	public function edit($id_kasir) {

		$kasir = $this->model_admin->detail_kasir($id_kasir);

		$valid = $this->form_validation;

		$valid->set_rules('nama_kasir', 'Nama kasir','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {

		$data = array('title'	=>  'Ubah kasir',
					  'kasir'	=> $kasir,
					 'isi'		=>	'kasir/edit');

		$this->load->view ('templates/header');
		$this->load->view('admin/kasir/edit', $data , FALSE);
		$this->load->view ('templates/footer');
	
		}else{
			$i = $this->input;
			$data = array(	'id_kasir'		=> $id_kasir,
							'nama_kasir'	=> $i->post('nama_kasir'),
		);
			$this->model_admin->edit_kasir($data);
			$this->session->set_flashdata('sukses', 'Data berhasil diedit');
			redirect(base_url('kasir'),'refresh');	
		}
	}

	public function hapus($id_kasir)
	{
			$data = array('id_kasir' => $id_kasir);
			$this->model_admin->hapus_kasir($data);
			$this->session->set_flashdata('sukses', 'Data berhasil Dihapus');
			redirect(base_url('kasir'),'refresh');	
	}

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */