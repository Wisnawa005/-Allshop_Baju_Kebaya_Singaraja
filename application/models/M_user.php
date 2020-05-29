<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	//menampilkan semua data tb_barang
	public function getTable_tb_barang()
	{
		return $this->db->get('tb_barang');
	}

	//menampilkan semua data tb_ktbarang
	public function getTable_tb_ktbarang()
	{
		return $this->db->get('tb_ktbarang');
	}

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
}
