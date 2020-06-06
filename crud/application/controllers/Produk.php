<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
	}

	public function index()
	{
		$produk = $this->model_admin->data_produk();

		$data = array(	'title' => 'Data Produk',
						'produk' => $produk , );

		$this->load->view ('templates/header');
		$this->load->view('admin/produk/index', $data , FALSE);
		$this->load->view ('templates/footer');

	}

	public function tambah()
	{

		$kasir = $this->model_admin->data_kasir();
		$kategori = $this->model_admin->data_kategori();

		$valid = $this->form_validation;
		
		$valid->set_rules('nama_produk', 'produk','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		
		$data = array('title'	=>  'produk',
					  'kasir'	=> $kasir,
					  'kategori'	=> $kategori,
					  'isi'		=>	'produk/tambah');
	
		$this->load->view ('templates/header');
		$this->load->view('admin/produk/add', $data , FALSE);
		$this->load->view ('templates/footer');
		
		}else{
			$i = $this->input;
			$data = array(	
								'nama_produk'	=> $i->post('nama_produk'),
								'harga_produk'	=> $i->post('harga_produk'),
								'id_kategori'	=> $i->post('id_kategori'),
								'id_kasir'	=> $i->post('id_kasir'),
		);
			$this->model_admin->tambah_produk($data);
			$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
			redirect(base_url('produk'),'refresh');	
		}
	}
	

	public function edit($id_produk) {

		$produk = $this->model_admin->detail_produk($id_produk);
		$kasir = $this->model_admin->data_kasir();
		$kategori = $this->model_admin->data_kategori();

		$valid = $this->form_validation;

		$valid->set_rules('nama_produk', 'Nama produk','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {

		$data = array('title'	=>  'Ubah produk',
					  'kasir'	=> $kasir,
					  'produk'	=> $produk,
					  'kategori'	=> $kategori,
					 'isi'		=>	'produk/edit');

		$this->load->view ('templates/header');
		$this->load->view('admin/produk/edit', $data , FALSE);
		$this->load->view ('templates/footer');
	
		}else{
			$i = $this->input;
			$data = array(	'id_produk'		=> $id_produk,
							'nama_produk'	=> $i->post('nama_produk'),
							'harga_produk'	=> $i->post('harga_produk'),
							'id_kategori'	=> $i->post('id_kategori'),
							'id_kasir'	=> $i->post('id_kasir'),
		);
			$this->model_admin->edit_produk($data);
			$this->session->set_flashdata('sukses', 'Data berhasil diedit');
			redirect(base_url('produk'),'refresh');	
		}
	}

	public function hapus($id_produk)
	{
			$data = array('id_produk' => $id_produk);
			$this->model_admin->hapus_produk($data);
			$this->session->set_flashdata('sukses', 'Data berhasil Dihapus');
			redirect(base_url('produk'),'refresh');	
	}


}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */