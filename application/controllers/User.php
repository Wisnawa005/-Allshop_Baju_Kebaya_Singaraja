<?php
defined('BASEPATH') or exit('No direct script acess allowed');
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $this->load->helper('url');
    }
    function index()
    {
        $data['title'] = "Beranda Web Shop";
        $data['description'] = 'edy wisnawa';
        $data['meta'] = "Ini HTML";
        $data['barang'] = $this->M_user->tampil_data()->result();
        $this->load->view('front_end/template', $data);
    }
    function beranda()
    {
        $data['title'] = "Beranda Web Shop";
        $data['meta'] = "Ini HTML";
        $data['beranda'] = 'front_end/beranda';
        $this->load->view('front_end/beranda');
    }
    function caraosel()
    {
        $data['title'] = "Caraosel Web Shop";
        $data['meta'] = "Ini HTML";
        $data['caraosel'] = 'front_end/caraosel';
        $this->load->view('front_end/caraosel');
    }
    function new_arrivals()
    {
        $data['title'] = "New Arrivals Web Shop";
        $data['meta'] = "Ini HTML";
        $data['new_arrivals'] = 'front_end/new_arrivals';
        $this->load->view('front_end/new_arrivals');
    }
    function best_seller()
    {
        $data['title'] = "Best Seller Web Shop";
        $data['meta'] = "Ini HTML";
        $data['best_seller'] = 'front_end/best_seller';
        $this->load->view('front_end/best_seller');
    }

    function blog()
    {
        $data['title'] = "Our Blog Web Shop";
        $data['meta'] = "Ini HTML";
        $data['top_rated'] = 'front_end/blog';
        $this->load->view('front_end/blog');
    }
    function footer()
    {
        $data['title'] = "Footer Web Shop";
        $data['meta'] = "Ini HTML";
        $data['footer'] = 'front_end/footer';
        $this->load->view('front_end/footer');
    }
    function kontak()
    {
        $data['title'] = "Contact Web Shop";
        $data['meta'] = "Ini HTML";
        $data['kontak'] = 'front_end/contact';
        $this->load->view('front_end/contact');
    }

    //fungsi untuk menambahkan ke keranjang belanja
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->M_user->find($id);

        $data = array(
            'id'      => $barang->kode_barang,
            'qty'     => 1,
            'price'   => $barang->harga_jual,
            'name'    => $barang->nama_barang,
            'image'   => $barang->foto
        );

        $this->cart->insert($data);
        redirect('user');
    }

    function detail_keranjang_belanja()
    {
        $data['title'] = "Beranda Web Shop";
        $data['description'] = 'edy wisnawa';
        $data['meta'] = "Ini HTML";
        $this->load->view('front_end/keranjang');
    }

    function hapus_belanja()
    {
        $this->cart->destroy();
        redirect('User');
    }

    function pembayaran()
    {
        $data['title'] = "Beranda Web Shop";
        $data['description'] = 'edy wisnawa';
        $data['meta'] = "Ini HTML";
        $this->load->view('front_end/pembayaran');
    }

    function pesanan()
    {
        $data['title'] = "Beranda Web Shop";
        $data['description'] = 'edy wisnawa';
        $data['meta'] = "Ini HTML";
        $this->cart->destroy();
        $this->load->view('front_end/pesanan');
    }

    //produk
    function detail_barang($id_barang)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_barang);
        $data['title'] = "Beranda Web Shop";
        $data['description'] = 'edy wisnawa';
        $data['meta'] = "Ini HTML";
        $this->cart->destroy();
        $this->load->view('front_end/detail_barang');
    }
}
