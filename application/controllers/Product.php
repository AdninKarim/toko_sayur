<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('ProductModel');
        $this->load->helper(['url', 'form']);
        if ( !$this->session->userdata('logged_in')){
            redirect('auth/login');
        }
    }

    public function index(){
        $keyword  = $this->input->get('keyword');
        $kategori = $this->input->get('kategori');

        $data['kategori'] = $this->ProductModel->getKategori();
        $data['produk']   = $this->ProductModel->getProduk($keyword, $kategori);

        $this->load->view('product', $data);
    }

    public function detail($nama){
        $data['produk'] = $this->ProductModel->getProdukByNama($nama);
        if(!$data['produk']){
            show_404();
        }
        $this->load->view('product', $data);
    }

    public function detailp($id)
    {
        $data['judul'] = 'Detail Produk';
        $data['produk'] = $this->ProductModel->getProdukById($id);
        if(!$data['produk']){
            show_404();
        }
        $data['product_terkait'] = $this->ProductModel->getProdukTerkait(
            $data['produk']['kategori_id'], 
            $data['produk']['id']);
        
        $this->load->view('templates/header', $data);
        $this->load->view('detailp', $data);
        $this->load->view('templates/footer');
    }

    public function add_cart($id)
    {
        $produk = $this->ProductModel->find($id);

        $data = array(
        'id'      => $produk->id,
        'qty'     => 1,
        'price'   => $produk->harga,
        'name'    => $produk->nama
        );

        $this->cart->insert($data);
        redirect('product');
    }

    public function cart()
    {
        $data['judul'] = 'Keranjang Belanja'; 

        $this->load->view('templates/header', $data);
        $this->load->view('cart', $data);
        $this->load->view('templates/footer');
        $this->load->view('footer');
    }

    public function update_cart()
    {
        $rowid  = $this->input->post('rowid');
        $qty    = $this->input->post('qty');
        $action = $this->input->post('action');

        // pastikan qty numerik
        $qty = is_numeric($qty) ? (int)$qty : 1;

        // ambil isi cart berdasarkan rowid untuk memastikan qty terbaru
        $cart_items = $this->cart->contents();
        if (isset($cart_items[$rowid])) {
            $current_qty = (int)$cart_items[$rowid]['qty'];

            // atur logic tambah/kurang
            if ($action === 'increase') {
                $qty = $current_qty + 1;
            } elseif ($action === 'decrease' && $current_qty > 1) {
                $qty = $current_qty - 1;
            } else {
                $qty = $current_qty; // kalau action gak cocok, gak diubah
            }

            // update cart
            $data = [
                'rowid' => $rowid,
                'qty'   => $qty
            ];
            $this->cart->update($data);
        }

        redirect('product/cart');
    }



    public function hapus_item($rowid)
    {
        $this->cart->remove($rowid);
        redirect('product/cart');
    }

    public function pembayaran()
    {
        $data['judul'] = 'Pembayaran'; 

        $this->load->view('templates/header', $data);
        $this->load->view('pembayaran', $data);
        $this->load->view('templates/footer');
        $this->load->view('footer');
    }
}
