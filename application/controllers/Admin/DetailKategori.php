<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailKategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // load database
        $this->load->database();
        // load helper form + url
        $this->load->helper(['form', 'url']);
        // load library session
        $this->load->library('session');
    }

    public function index(){
        if ($this->session->userdata('role') != 1) {
            redirect('auth/login'); 
        }
    }

    // edit kategori
    public function edit($id) {
        // ambil data kategori by id
        $data['kategori'] = $this->db->get_where('kategori', ['id' => $id])->row_array();

        // kalau tombol edit ditekan
        if ($this->input->post('editBtn')) {
            $kategori = htmlspecialchars($this->input->post('kategori'));

            // kalau tidak ada perubahan
            if ($data['kategori']['nama'] == $kategori) {
                redirect('admin/kategori');
            } else {
                // cek apakah nama kategori sudah ada
                $cek = $this->db->get_where('kategori', ['nama' => $kategori])->num_rows();
                if ($cek > 0) {
                    $data['error'] = "Kategori sudah ada!";
                } else {
                    $this->db->where('id', $id);
                    $update = $this->db->update('kategori', ['nama' => $kategori]);
                    if ($update) {
                        $data['success'] = "Kategori berhasil di Edit!";
                        redirect('admin/kategori');
                    }
                }
            }
        }

        // kalau tombol delete ditekan
        if ($this->input->post('deleteBtn')) {
            // cek apakah kategori dipakai produk
            $cekProduk = $this->db->get_where('produk', ['kategori_id' => $id])->num_rows();
            if ($cekProduk > 0) {
                $data['error'] = "Kategori tidak bisa dihapus karena masih ada produk!";
            } else {
                $this->db->delete('kategori', ['id' => $id]);
                $data['success'] = "Kategori berhasil dihapus!";
                redirect('admin/kategori');
            }
        }

        // load view
        $this->load->view('admin/detail_kategori', $data);
    }
}
