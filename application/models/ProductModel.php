<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

    public function getKategori() {
    return $this->db->get('kategori')->result_array();
    }

    public function getProduk($keyword = null, $kategori = null) {
        if($keyword){
            $this->db->like('nama', $keyword);
        } elseif($kategori){
            $this->db->select('id');
            $this->db->where('nama', $kategori);
            $id = $this->db->get('kategori')->row();
            if($id){
                $this->db->where('kategori_id', $id->id);
            }
        }
        return $this->db->get('produk')->result_array();
    }

    public function getProdukByNama($nama) {
        return $this->db->get_where('produk', ['nama' => $nama])->row_array();
    }

    public function getProdukById($id)
    {
        return $this->db->get_where('produk', ['id' => $id])->row_array();
    }

    public function getProdukTerkait($kategori_id, $id) 
    {
        $this->db->where('kategori_id', $kategori_id);
        $this->db->where('id !=', $id);
        $this->db->limit(4);
        return $this->db->get('produk')->result_array();
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)
                           ->limit(1)
                           ->get('produk');
        if ($result->num_rows() > 0) {
            return $result->row();
        }else{
            return array();
        }
    }
}
