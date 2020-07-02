<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	//menampilkan 8 data tb_barang
	public function getTable_tb_barang()
	{
		return $this->db->limit('8')->get('tb_barang');
	}

	//menampilkan semua data tb_barang
	public function getAllTable_tb_barang($limit, $start) //untuk pagination
	{
		return $this->db->get('tb_barang', $limit, $start)->result_array();
	}
	public function CountTable_barang() //untuk all
	{
		return $this->db->get('tb_barang')->num_rows();
	}
	public function Table_barang() //untuk all
	{
		return $this->db->get('tb_barang');
	}

	//menampilkan semua data tb_ktbarang
	public function getTable_tb_ktbarang()
	{
		return $this->db->get('tb_ktbarang');
	}

	//model menambahkan witlist keranjang belanja
	// public function find($id)
	// {
	// 	$result = $this->db->where('kode_barang', $id)
	// 		->limit(1)
	// 		->get('tb_barang');
	// 	if ($result->num_rows() > 0) {
	// 		return $result->row();
	// 	} else {
	// 		return array();
	// 	}
	// }

	//model menambahkan jumlah keranjang belanja
	public function find($id)
	{
		$result = $this->db->where('kode_barang', $id)
			->limit(1)
			->get('tb_barang');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}

	//menampilkan detail barang
	public function detail_brg($kode_barang)
	{
		$result = $this->db->where('kode_barang', $kode_barang)->get('tb_barang');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	//ketegori barang
	public function data_kebaya()
	{
		return $this->db->get_where("tb_barang", array('ktbarang' => 'kebaya'));
	}

	public function data_selendang()
	{
		return $this->db->get_where("tb_barang", array('ktbarang' => 'selendang'));
	}

	public function data_dress()
	{
		return $this->db->get_where("tb_barang", array('ktbarang' => 'dress'));
	}

	public function data_kebaya_anak()
	{
		return $this->db->get_where("tb_barang", array('ktbarang' => 'kebaya_anak'));
	}

	public function data_accessories()
	{
		return $this->db->get_where("tb_barang", array('ktbarang' => 'accessories'));
	}

	public function data_kamben()
	{
		return $this->db->get_where("tb_barang", array('ktbarang' => 'kamben'));
	}
}
