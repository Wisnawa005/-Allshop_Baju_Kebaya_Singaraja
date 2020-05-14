<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_shop extends CI_Model
{

    function get_num_barang($limit, $page)
    {
        //mengurutkan data dari data terbaru
        $this->db->order_by('id_barang', 'desc');
        $this->db->limit($limit, $page);
        $data = $this->db->get('tb_barang')->result_array();
        return $data;
    }

    function get_num_rows_barang()
    {
        $data = $this->db->get('tb_barang')->result_array();
        return $data;
    }

    //fungsi input data ke tb_registrasi pada Database
    function save_barang()
    {
        $konfigurasi = array(
            'allowed_types' => 'JPG|jpg|JPEG|jpeg|PNG|png|pdf|doc|docx|gif',
            'upload_path' => realpath('./upload/foto')
            // 'max_size' => 1024
        );

        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('userfile');
        //menampung post yang dikirim oleh controller untuk disimpan dalam array sesuai field dalam table
        $data = array(
            //'sesuai field table' => 'sesuai name inpt dalam form'
            // 'kode_ktbarang'=>$_POST['kode_ktbarang'],
            'nama_barang' => $_POST['nama_barang'],
            'harga_jual' => $_POST['harga_jual'],
            'stok' => $_POST['stok'],
            'satuan' => $_POST['satuan'],
            'deskripsi' => $_POST['deskripsi'],
            'foto' => $_FILES['userfile']['name']
        );
        //menyimpan data ke table
        $this->db->insert('tb_barang', $data);
    }
    function save_update_barang($post)
    {
        //menampung post yang dikirim oleh controller untuk disimpan dalam array sesuai field dalam table
        $data = array(
            //'sesuai field table' => 'sesuai name inpt dalam form'
            // 'kode_ktbarang'=>$_POST['kode_ktbarang'],
            'nama_barang' => $_POST['nama_barang'],
            'harga_jual' => $_POST['harga_jual'],
            'stok' => $_POST['stok'],
            'satuan' => $_POST['satuan'],
            'deskripsi' => $_POST['deskripsi'],
            'foto' => $_FILES['userfile']['name']
        );
        //menyimpan data ke table
        $this->db->where('md5(id_barang)', $post['id_barang']);
        $this->db->update('tb_barang', $data);
    }

    // function save_update_barang(){
    //     //menampung post yang dikirim oleh controller untuk disimpan dalam array sesuai field dalam table
    //     $data=array(
    //         //'sesuai field table' => 'sesuai name inpt dalam form'
    //         'nama_barang'=>$_POST['nama_barang'],
    //         'harga_jual'=>$_POST['harga_jual'],
    //         'stok'=>$_POST['stok'],
    //         'satuan'=>$_POST['satuan'],
    //         'deskripsi'=>$_POST['deskripsi'],
    //         'foto'=>$_FILES['userfile']['name']
    //     );
    //     $this->db->where('md5(id_barang)',$post['id_barang']);
    //     $this->db->update('tb_barang',$data);

    // }

    public function delete_barang($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    // Diagram di Beranda

    // public function get_num_rows_htl(){
    //     $query = $this->db->get('tb_hotel');
    //     if($query->num_rows()>0){
    //         return $query->num_rows();
    //     }
    //     else{return 0;}
    // }
    // public function get_num_rows_pkt(){
    //     $query = $this->db->get('tb_paketwisata');
    //     if($query->num_rows()>0){
    //         return $query->num_rows();
    //     }
    //     else{return 0;}
    // }
    public function get_num_rows_brg()
    {
        $query = $this->db->get('tb_barang');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // End 

}
