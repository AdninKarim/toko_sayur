<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Produk_Model');
        $this->load->helper(['url', 'form']);
        $this->load->library(['session', 'upload']);
    }

    // ✅ List produk
    public function index(){
        $data['produk'] = $this->Produk_Model->get_all_produk();
        $data['kategori'] = $this->Produk_Model->get_all_kategori();
        $this->load->view('admin/produk', $data);
    }

    // ✅ Tambah produk
    public function tambah(){
            $nama = htmlspecialchars($this->input->post('nama'));
            $kategori = htmlspecialchars($this->input->post('kategori'));
            $harga = htmlspecialchars($this->input->post('harga'));
            $detail = htmlspecialchars($this->input->post('detail'));
            $ketersediaan_stock = htmlspecialchars($this->input->post('ketersediaan_stock'));
            $foto = $_FILES['foto']['name'];

            // upload foto
            if($foto == ''){} else{
            $config['upload_path'] = './assets/img/menu/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 500;
            $config['file_name'] = uniqid();

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto')){
                echo "Foto gagal di ditambahkan";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'kategori_id' => $kategori,
            'harga' => $harga,
            'detail' => $detail,
            'ketersediaan_stock' => $ketersediaan_stock,
            'foto' => $foto
        );

        $this->Produk_Model->tambah($data, 'produk');
        redirect('admin/produk');
        $this->load->view('admin/edit_produk', $data);
    }

    // Edit Produk
    public function edit($id)
    {
        $where = array('id' =>$id);
        $data['produk']= $this->Produk_Model->get_by_id($id);
        $data['kategori']= $this->Produk_Model->get_all_produk();

        if(empty($data['produk'])) {
            show_error('Produk Tidak Ditemukan');
        }

        $this->load->view('admin/edit_produk', $data);
    }

    public function update()
    {   
        $id = $this->input->post('id');

        $nama = htmlspecialchars($this->input->post('nama'));
        $kategori = htmlspecialchars($this->input->post('kategori'));
        $harga = htmlspecialchars($this->input->post('harga'));
        $detail = htmlspecialchars($this->input->post('detail'));
        $ketersediaan_stock = htmlspecialchars($this->input->post('ketersediaan_stock'));

        $data = array(
            'nama' => $nama,
            'kategori_id' => $kategori,
            'harga' => $harga,
            'detail' => $detail,
            'ketersediaan_stock' => $ketersediaan_stock
        );

        $where = array('id' => $id);
        $this->Produk_Model->update_data($where, $data, 'produk');
        redirect('admin/produk/');
    }
}
