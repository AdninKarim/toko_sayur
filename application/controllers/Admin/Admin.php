<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // load database
        $this->load->database();
        // load session library
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('role') != 1) {
            redirect('auth/login'); 
        }

        // ambil user yang sedang login
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        // hitung jumlah kategori
        $jumlahKategori = $this->db->count_all('kategori');

        // hitung jumlah produk
        $jumlahProduk = $this->db->count_all('produk');

        // kirim data ke view
        $data['user'] = $user;
        $data['jumlahKategori'] = $jumlahKategori;
        $data['jumlahProduk'] = $jumlahProduk;
        $data['judul'] = 'Home | Admin';

        $this->load->view('templates/header', $data);
        $this->load->view('admin/admin', $data);
        $this->load->view('templates/footer');
    }
}
