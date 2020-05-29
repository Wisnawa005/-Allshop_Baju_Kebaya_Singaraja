<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_shop');

		// if($this->session->userdata('kategoriuser')!='admin'){
		//     redirect('Latihan1');
		// }
	}
	public function index()
	{
		$data['title'] = "Sistem Informasi Shop";
		$data['meta'] = "ini adalah produk untuk All Shop Kebaya Bali";
		// $data['total_hotel']=$this->M_shop->get_num_rows_htl();
		// $data['total_paket']=$this->M_shop->get_num_rows_pkt();
		$data['total_barang'] = $this->M_shop->get_num_rows_barang();
		$data['content'] = 'beranda';
		$data['sidebar'] = 'sidebar';
		$this->load->view('admin/template', $data);
	}
	function daftar_barang($page = 0)
	{
		$data['title'] = "Daftar Wisata";
		$data['meta'] = "ini adalah produk untuk latihan HTML";
		$config['total_rows'] = $this->M_shop->get_num_rows_barang();
		$config['per_page'] = 10;
		$config['base_url'] = site_url('shop/daftar_barang');
		$data['wst'] = $this->M_shop->get_num_barang($config['per_page'], $page);
		$data['content'] = "admin/tb_barang";
		$data['sidebar'] = "sidebar";
		$this->pagination->initialize($config);
		$this->load->view('admin/template', $data);
	}
	function input_barang()
	{
		$data['title'] = "Tambah barang";
		$data['meta'] = "ini adalah produk untuk Latihan HTML";
		$data['content'] = 'admin/input_barang';
		$data['sidebar'] = 'sidebar';
		$this->load->view('admin/template', $data);
	}
	function update_input_barang($id_barang)
	{
		$data['title'] = "Tambah Barang";
		$data['meta'] = "ini adalah produk untuk Latihan HTML";
		$data['content'] = 'admin/input_barang';
		$data['sidebar'] = 'sidebar';
		$this->db->where('md5(id_barang)', $id_barang);
		$data['id_barang'] = $this->db->get('tb_barang')->row_array();
		$this->load->view('admin/template', $data);
	}

	function save_barang($page = 0)
	{
		$this->form_validation->set_rules('nama_barang', '', 'required', array('required' => 'Nama Barang harus diisi.'));
		$this->form_validation->set_rules('harga_jual', '', 'required', array('required' => 'Harga Jual harus diisi.'));
		$this->form_validation->set_rules('stok', '', 'required', array('required' => 'Stok harus diisi.'));
		$this->form_validation->set_rules('satuan', '', 'required', array('required' => 'Satuan harus diisi.'));
		$this->form_validation->set_rules('deskripsi', '', 'required', array('required' => 'Keterangan harus diisi.'));

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Tambah barang";
			$data['meta'] = "ini adalah produk untuk Latihan HTML";
			$data['content'] = 'admin/input_barang';
			$data['sidebar'] = 'sidebar';
			$this->load->view('admin/template', $data);
		} else {
			//mengirim post ke model
			if ($_POST['id_barang'] != '') {
				$this->M_shop->save_update_barang($_POST);
			} else {
				$this->M_shop->save_barang($_POST);
			}
			//akses fungsi untuk menampilkan halaman daftar peserta
			redirect('shop/daftar_barang');
		}
	}

	public function delbarang($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$this->M_shop->delete_barang($where, 'tb_barang');
		redirect('shop/daftar_barang');
	}
}
