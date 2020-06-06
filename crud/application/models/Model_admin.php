<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {


	// Produk
	public function data_produk()
	{
		$this->db->select('*');
		$this->db->from('t_produk','t_kategori','t_kasir');
		$this->db->join('t_kategori', 't_kategori.id_kategori = t_produk.id_kategori', 'left');
		$this->db->join('t_kasir', 't_kasir.id_kasir = t_produk.id_kasir', 'left');
		$this->db->order_by('id_produk', 'desc');
		$query = $this->db->get();
		return $query->result();
	}	

	public function tambah_produk($data){
		$this->db->insert('t_produk', $data);
	}

	public function detail_produk($id_produk)
	{
		$this->db->select('*');
		$this->db->from('t_produk','t_kategori','t_kasir');
		$this->db->join('t_kategori', 't_kategori.id_kategori = t_produk.id_kategori', 'left');
		$this->db->join('t_kasir', 't_kasir.id_kasir = t_produk.id_kasir', 'left');
		$this->db->where('id_produk', $id_produk);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit_produk($data) {
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->update('t_produk', $data);
	}

	public function hapus_produk($data) {
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->delete('t_produk', $data);
	}



	// Kasir
	public function data_kasir()
	{
		$this->db->select('*');
		$this->db->from('t_kasir');
		$this->db->order_by('id_kasir', 'desc');
		$query = $this->db->get();
		return $query->result();
	}	

	public function tambah_kasir($data){
		$this->db->insert('t_kasir', $data);
	}

	public function detail_kasir($id_kasir)
	{
		$this->db->select('*');
		$this->db->from('t_kasir');
		$this->db->where('id_kasir', $id_kasir);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit_kasir($data) {
		$this->db->where('id_kasir', $data['id_kasir']);
		$this->db->update('t_kasir', $data);
	}

	public function hapus_kasir($data) {
		$this->db->where('id_kasir', $data['id_kasir']);
		$this->db->delete('t_kasir', $data);
	}



	// kategori
	public function data_kategori()
	{
		$this->db->select('*');
		$this->db->from('t_kategori');
		$this->db->order_by('id_kategori', 'desc');
		$query = $this->db->get();
		return $query->result();
	}	

	public function tambah_kategori($data){
		$this->db->insert('t_kategori', $data);
	}

	public function detail_kategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('t_kategori');
		$this->db->where('id_kategori', $id_kategori);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit_kategori($data) {
		$this->db->where('id_kategori', $data['id_kategori']);
		$this->db->update('t_kategori', $data);
	}

	public function hapus_kategori($data) {
		$this->db->where('id_kategori', $data['id_kategori']);
		$this->db->delete('t_kategori', $data);
	}

}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */