<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kategori_Model');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('role') != 1) {
            redirect('auth/login'); 
        }
        $data['kategori'] = $this->Kategori_Model->kategoriAll();
        $data['jumlahKategori'] = count($data['kategori']);

        $this->load->view('admin/kategori', $data);
    }

    public function tambah()
    {
        $nama = htmlspecialchars($this->input->post('kategori'));

        $data = array(

            'nama' => $nama
        );

        $this->Kategori_Model->tambah($data);
        redirect('admin/kategori');
    }

    public function edit($id)
    {
        $queryKategoriDetail = $this->Kategori_Model->edit($id);
        $data = array('queryKategori' => $queryKategoriDetail);
        $this->load->view('admin/edit_kategori', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');

        $dataUpdate = array(

            'nama' => $nama
        );

        $this->Kategori_Model->update($id, $dataUpdate);
        redirect('admin/kategori');

    }
}
