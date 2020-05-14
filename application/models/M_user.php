<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }

    function get_produk1()
    {
        $query = "SELECT * FROM tb_barang,tb_ktbarang WHERE tb_barang.kode_barang=tb_ktbarang.kode_ktbarang AND tb_barang.kode_barang =1 ORDER BY kode_barang DESC";
        return $this->db->query($query)->result_array();
    }

    function get_produk2()
    {
        $query = "SELECT * FROM tb_barang,tb_ktbarang WHERE tb_barang.kode_barang=tb_ktbarang.kode_ktbarang AND tb_barang.kode_barang =2 ORDER BY kode_barang DESC";
        return $this->db->query($query)->result_array();
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
}
