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

		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/index', $data);
		$this->load->view('front_end/login/template/footer_login');
	}

	function account()
	{
		$data['title'] = "My Account";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/account', $data);
		$this->load->view('front_end/login/template/footer_login');
	}

	function about()
	{
		$data['title'] = "About Us";
		$data['about'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/about', $data);
		$this->load->view('front_end/login/template/footer_login');
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
		$config['base_url'] = site_url('user_login/product_grid');
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


		//$data['barang_all'] = $this->M_user->getAllTable_tb_barang()->result();

		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/product/product_grid', $data);
		$this->load->view('front_end/login/template/footer_login');
	}

	//detail keranjang belanja
	function wishlist()
	{
		$data['title'] = "Wishlist";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/product/wishlist', $data);
		$this->load->view('front_end/login/template/footer_login');
	}

	// public function tambah_ke_wishlist($id)
	// {
	// 	$data['account'] = $this->db->get_where('tb_user', ['email' =>
	// 	$this->session->userdata('email')])->row_array();

	// 	$barang = $this->M_user->find($id);

	// 	$data = array(
	// 		'id'      => $barang->kode_barang,
	// 		'qty'     => 1,
	// 		'price'   => $barang->harga_jual,
	// 		'name'    => $barang->nama_barang,
	// 		'image'   => $barang->foto2
	// 	);

	// 	$this->cart->insert($data);
	// 	redirect('product_grid');
	// }


	function kontak()
	{
		$data['title'] = "Contact Web Shop";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/contact');
		$this->load->view('front_end/login/template/footer_login');
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

		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/cart/keranjang');
		$this->load->view('front_end/login/template/footer_login');
	}

	//Checkout
	function checkout()
	{
		$data['title'] = "Checkout";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/cart/checkout');
		$this->load->view('front_end/login/template/footer_login');
	}

	function proses_pesanan()
	{
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$is_prosessed = $this->M_admin->invoice();
		if ($is_prosessed) {
			$this->cart->destroy();
			$this->session->set_flashdata('berhasil', 'Pesanan Anda Sukses Kami Proses!');
			redirect(base_url('user_login'), 'refresh');
		} else {
			echo "Maaf, pesanan anda gagal kami proses";
		}
	}

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

		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/product/detail_barang', $data);
		$this->load->view('front_end/login/template/footer_login');
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

	public function blocked()
	{
		$data['title'] = "Page Ongoing";
		$this->load->view('front_end/login/template/error404_login', $data);
	}

	//kategori
	public function kebaya()
	{
		$data['title'] = "Kategori Kebaya";
		$data['kebaya'] = $this->M_user->data_kebaya()->result();
		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/kategori/kebaya', $data);
		$this->load->view('front_end/login/template/footer_login');
	}
	public function selendang()
	{
		$data['title'] = "Kategori Selendang";
		$data['selendang'] = $this->M_user->data_selendang()->result();
		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/kategori/selendang', $data);
		$this->load->view('front_end/login/template/footer_login');
	}
	public function dress()
	{
		$data['title'] = "Kategori Dress";
		$data['dress'] = $this->M_user->data_dress()->result();
		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/kategori/dress', $data);
		$this->load->view('front_end/login/template/footer_login');
	}
	public function kebaya_anak()
	{
		$data['title'] = "Kategori Kebaya Anak";
		$data['kebaya_anak'] = $this->M_user->data_kebaya_anak()->result();
		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/kategori/kebaya_anak', $data);
		$this->load->view('front_end/login/template/footer_login');
	}

	public function accessories()
	{
		$data['title'] = "Kategori Accessories";
		$data['accessories'] = $this->M_user->data_accessories()->result();
		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/kategori/accessories', $data);
		$this->load->view('front_end/login/template/footer_login');
	}

	public function kamben()
	{
		$data['title'] = "Kategori Kamben";
		$data['kamben'] = $this->M_user->data_kamben()->result();
		$this->load->view('front_end/login/template/header_login', $data);
		$this->load->view('front_end/login/kategori/kamben', $data);
		$this->load->view('front_end/login/template/footer_login');
	}
}
