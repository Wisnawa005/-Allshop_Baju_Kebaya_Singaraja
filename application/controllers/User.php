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

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/index', $data);
		$this->load->view('front_end/no_login/template/footer');
	}

	function about()
	{
		$data['title'] = "About Us";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/about', $data);
		$this->load->view('front_end/no_login/template/footer');
	}

	//detail keranjang belanja
	function product_grid()
	{
		$data['title'] = "Product Grid";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');

		//config
		$config['base_url'] = site_url('user/product_grid');
		$config['total_rows'] = $this->M_user->CountTable_barang();
		$config['per_page'] = 5;
		//$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<ul class="htc__pagenation">';
		$config['full_tag_close'] = '</ul>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="zmdi zmdi-chevron">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="zmdi zmdi-chevron">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="zmdi zmdi-chevron">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="zmdi zmdi-chevron">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="zmdi zmdi-chevron active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="zmdi zmdi-chevron">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['barang_all'] = $this->M_user->getAllTable_tb_barang($config['per_page'], $data['start']);

		//$data['barang_all'] = $this->M_user->Table_barang()->result();

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/product_grid', $data);
		$this->load->view('front_end/no_login/template/footer');
	}

	//detail keranjang belanja
	function wishlist()
	{
		$this->session->set_flashdata('no_login', 'Maaf, anda harus login terlebih dahulu');
		redirect(base_url('user'), 'refresh');
	}

	function kontak()
	{
		$data['title'] = "Contact Web Shop";
		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/contact');
		$this->load->view('front_end/no_login/template/footer');
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

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/detail_barang', $data);
		$this->load->view('front_end/no_login/template/footer');
	}

	function checkout()
	{
		$this->session->set_flashdata('no_login', 'Maaf, anda harus login terlebih dahulu');
		redirect(base_url('user'), 'refresh');
	}

	public function blocked()
	{
		$data['title'] = "Page Ongoing";
		$this->load->view('front_end/no_login/template/error404', $data);
	}

	//kategori
	public function kebaya()
	{
		$data['title'] = "Kategori Kebaya";
		$data['kebaya'] = $this->M_user->data_kebaya()->result();
		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/kategori_nologin/kebaya', $data);
		$this->load->view('front_end/no_login/template/footer');
	}
	public function selendang()
	{
		$data['title'] = "Kategori Selendang";
		$data['selendang'] = $this->M_user->data_selendang()->result();
		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/kategori_nologin/selendang', $data);
		$this->load->view('front_end/no_login/template/footer');
	}
	public function dress()
	{
		$data['title'] = "Kategori Dress";
		$data['dress'] = $this->M_user->data_dress()->result();
		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/kategori_nologin/dress', $data);
		$this->load->view('front_end/no_login/template/footer');
	}
	public function kebaya_anak()
	{
		$data['title'] = "Kategori Kebaya Anak";
		$data['kebaya_anak'] = $this->M_user->data_kebaya_anak()->result();
		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/kategori_nologin/kebaya_anak', $data);
		$this->load->view('front_end/no_login/template/footer');
	}

	public function accessories()
	{
		$data['title'] = "Kategori Accessories";
		$data['accessories'] = $this->M_user->data_accessories()->result();
		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/kategori_nologin/accessories', $data);
		$this->load->view('front_end/no_login/template/footer');
	}

	public function kamben()
	{
		$data['title'] = "Kategori Kamben";
		$data['kamben'] = $this->M_user->data_kamben()->result();
		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/kategori_nologin/kamben', $data);
		$this->load->view('front_end/no_login/template/footer');
	}
}
