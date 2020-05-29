<?php
defined('BASEPATH') or exit('No direct script acess allowed');
class User_login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('M_user');
		$this->load->model('M_admin');
		$this->load->helper('url');
		$this->load->library('cart');
	}
	function index()
	{
		$data['title'] = "Allshop Baju Kebaya";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['barang'] = $this->M_user->getTable_tb_barang()->result();

		$this->load->view('front_end/template/header_login', $data);
		$this->load->view('front_end/login/index', $data);
		$this->load->view('front_end/template/footer_login');
	}

	function account()
	{
		$data['title'] = "My Account";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/template/header_login', $data);
		$this->load->view('front_end/login/account', $data);
		$this->load->view('front_end/template/footer_login');
	}

	function blog()
	{
		$data['title'] = "Our Blog Web Shop";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['top_rated'] = 'front_end/login/blog';
		$this->load->view('front_end/blog');
	}


	function kontak()
	{
		$data['title'] = "Contact Web Shop";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/template/header_login', $data);
		$this->load->view('front_end/login/contact');
		$this->load->view('front_end/template/footer_login');
	}

	// function keranjang belanja digunakan 
	// sekaligus data yang menampung 
	// semua mulai dari detail_keranjang belanja
	// dan Checkout untuk sebagai acuan
	public function tambah_ke_keranjang($id)
	{
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$barang = $this->M_user->find($id);

		$data = array(
			'id'      => $barang->kode_barang,
			'qty'     => 1,
			'price'   => $barang->harga_jual,
			'name'    => $barang->nama_barang,
			'image'   => $barang->foto2
		);

		$this->cart->insert($data);
		redirect('user_login');
	}

	//detail keranjang belanja
	function detail_keranjang_belanja()
	{
		$data['title'] = "Detail Cart";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/template/header_login', $data);
		$this->load->view('front_end/login/keranjang');
		$this->load->view('front_end/template/footer_login');
	}

	//Checkout
	function checkout()
	{
		$data['title'] = "Checkout";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/template/header_login', $data);
		$this->load->view('front_end/login/checkout');
		$this->load->view('front_end/template/footer_login');
	}

	function proses_pesanan()
	{
		$is_prosessed = $this->M_admin->invoice();
		if ($is_prosessed) {
			$this->cart->destroy();
			$this->load->view('front_end/template/header_login');
			$this->load->view('front_end/login/proses_pesanan');
			$this->load->view('front_end/template/footer_login');
		} else {
			echo "Maaf, pesanan anda gagal kami proses";
		}
	}

	// function detail_order()
	// {
	// 	$data['title'] = "Beranda Web Shop";
	// 	$this->cart->destroy();
	// 	$this->load->view('front_end/pesanan');
	// }

	//produk
	function detail_barang($kode_barang)
	{
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['title'] = "Detail Produk";
		$data['produsen'] = "Allshop Baju Kebaya Bu Ayu";
		$data['dikirim'] = "Buleleng-Banyuning, Kab. Buleleng";

		$data['barang'] = $this->M_user->detail_brg($kode_barang);
		//$data['kategori'] = $this->M_user->getTable_tb_ktbarang()->result();

		$this->load->view('front_end/template/header_login', $data);
		$this->load->view('front_end/login/detail_barang', $data);
		$this->load->view('front_end/template/footer_login');
	}

	//hapus item & semua item belanja
	function hapus()
	{
		$this->cart->destroy();
		$this->session->set_flashdata('sukses', 'Data Keranjang Belanja Telah Dihapus');
		redirect(base_url('User_login/detail_keranjang_belanja'), 'refresh');

		// redirect(base_url('User/detail_keranjang_belanja'), 'refresh');
		// if ($rowid == "all") {
		// 	$this->cart->destroy();
		// 	$this->session->set_flashdata('sukses', 'Data Keranjang Belanja Telah Dihapus');
		// } else {
		// 	$data = array(
		// 		'rowid' => $rowid,
		// 		'qty' => 0
		// 	);
		// 	$this->cart->update($data);
		// 	$this->session->set_flashdata('sukses', 'Item Telah Dihapus');
		// }
		// redirect(base_url('User/detail_keranjang_belanja'), 'refresh');
	}
}
