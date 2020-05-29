<?php
defined('BASEPATH') or exit('No direct script acess allowed');
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->helper('url');
		$this->load->library('cart');
	}
	function index()
	{
		$data['title'] = "Allshop Baju Kebaya";
		$data['barang'] = $this->M_user->getTable_tb_barang()->result();

		$this->load->view('front_end/template/header', $data);
		$this->load->view('front_end/index', $data);
		$this->load->view('front_end/template/footer');
	}

	function blog()
	{
		$data['title'] = "Our Blog Web Shop";

		$data['top_rated'] = 'front_end/blog';
		$this->load->view('front_end/blog');
	}

	function kontak()
	{
		$data['title'] = "Contact Web Shop";

		$this->load->view('front_end/template/header', $data);
		$this->load->view('front_end/contact');
		$this->load->view('front_end/template/footer');
	}

	//tambah_ke_keranjang redirect ke user dan bilang belom mempunyai account
	//melakukan registrasi di auth
	public function tambah_ke_keranjang()
	{
		$this->session->set_flashdata('no_login', 'Maaf, anda harus login terlebih dahulu');
		redirect(base_url('user'), 'refresh');
	}

	//detail keranjang belanja
	function detail_keranjang_belanja()
	{
		$data['title'] = "Detail Cart";

		$this->session->set_flashdata('no_login', 'Maaf, anda harus login terlebih dahulu');
		redirect(base_url('user'), 'refresh');
	}

	//produk
	function detail_barang($kode_barang)
	{
		$data['title'] = "Detail Produk";

		$data['produsen'] = "Allshop Baju Kebaya Bu Ayu";
		$data['dikirim'] = "Buleleng-Banyuning, Kab. Buleleng";

		$data['barang'] = $this->M_user->detail_brg($kode_barang);
		//$data['kategori'] = $this->M_user->getTable_tb_ktbarang()->result();

		$this->load->view('front_end/template/header', $data);
		$this->load->view('front_end/detail_barang', $data);
		$this->load->view('front_end/template/footer');
	}
}
