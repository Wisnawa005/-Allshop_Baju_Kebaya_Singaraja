<?php
defined('BASEPATH') or exit('No direct script acess allowed');
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('M_admin');
		$this->load->helper('url');
	}
	function index()
	{
		$data['title'] = "Admin Allshop Baju Kebaya";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/templates/footer');
	}

	public function user_data()
	{

		$data['title'] = "Data User";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['user'] = $this->M_admin->getviewData_User();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/data_user', $data);
		$this->load->view('admin/templates/footer');
	}
	////////////////////////////////////////////////////////
	public function product_data()
	{
		$data['title'] = "Data Product";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['product'] = $this->M_admin->getviewData_Product();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/data_product', $data);
		$this->load->view('admin/templates/footer');
	}


	public function add_data_barang()
	{
		$ktbarang      	 = $this->input->post('ktbarang');
		$nama_barang     = $this->input->post('nama_barang');
		$harga_jual      = $this->input->post('harga_jual');
		$stok          	 = $this->input->post('stok');
		$satuan          = $this->input->post('satuan');
		$deskripsi       = $this->input->post('stok');
		$foto            = $_FILES['foto']['name'];
		$foto2            = $_FILES['foto']['name'];
		if ($foto = '') {
		} else {
			$config['upload_path']     = './upload/produk/';
			$config['allowed_types']   = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "Gambar Gagal Diupload!";
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

		if ($foto2 = '') {
		} else {
			$config['upload_path']     = './upload/produk';
			$config['allowed_types']   = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto2')) {
				echo "Gambar Gagal Diupload!";
			} else {
				$foto2 = $this->upload->data('file_name');
			}
		}

		$data = array(
			'ktbarang'           => $ktbarang,
			'nama_barang'        => $nama_barang,
			'harga_jual'         => $harga_jual,
			'stok'            	 => $stok,
			'satuan'             => $satuan,
			'deskripsi'          => $deskripsi,
			'foto'               => $foto,
			'foto2'              => $foto2
		);
		// var_dump('add_data_barang');
		// die;

		$this->M_admin->tambah_barang($data, 'tb_barang');
		redirect('Admin/product_data');
	}

	public function delete_product($id)
	{
		$where = array('kode_barang' => $id);
		$this->M_admin->delete($where, 'tb_barang');
		redirect('admin/product_data');
	}

	public function edit_product($id)
	{
		$data['title'] = "Edit Data Product";
		$where = array('kode_barang' => $id);
		$data['product'] = $this->M_admin->edit_barang($where, 'tb_barang')->result();
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/edit_data_product', $data);
		$this->load->view('admin/templates/footer');
	}

	public function update_product()
	{
		$id     		 = $this->input->post('kode_barang');
		$ktbarang      	 = $this->input->post('ktbarang');
		$nama_barang     = $this->input->post('nama_barang');
		$harga_jual      = $this->input->post('harga_jual');
		$stok          	 = $this->input->post('stok');
		$satuan          = $this->input->post('satuan');
		$deskripsi       = $this->input->post('stok');
		// $foto            = $_FILES['foto']['name'];
		// $foto2           = $_FILES['foto']['name'];

		$data = array(
			'ktbarang'           => $ktbarang,
			'nama_barang'        => $nama_barang,
			'harga_jual'         => $harga_jual,
			'stok'            	 => $stok,
			'satuan'             => $satuan,
			'deskripsi'          => $deskripsi,
			// 'foto'               => $foto,
			// 'foto2'              => $foto2
		);

		$where = array(
			'kode_barang'       => $id
		);

		$this->M_admin->update_data($where, $data, 'tb_barang');
		redirect('admin/product_data');
	}

	////////////////////////////////////////////////////////////////////////

	public function ktbarang_data()
	{
		$data['title'] = "Data Kategori";
		$data['ktbarang'] = $this->M_admin->getviewData_ktbarang();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/data_ktbarang', $data);
		$this->load->view('admin/templates/footer');
	}

	public function invoice()
	{
		$data['title'] = "Data Invoice";
		$data['invoice'] = $this->M_admin->getviewData();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('admin/templates/footer');
	}

	function detail_invoice($id_invoice)
	{
		$data['title'] = "Detail Data Invoice";
		$data['invoice'] = $this->M_admin->getviewInvoice_Id($id_invoice);
		$data['pesanan'] = $this->M_admin->getviewPesanan_Id($id_invoice);
		$data['invoice_id'] = $this->M_admin->getInvoice_Id($id_invoice);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('admin/templates/footer');
	}
}
