<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_Model extends CI_Model {

    public function get_all_produk(){
        return $this->db->select('a.*, b.nama AS nama_kategori')
                        ->from('produk a')
                        ->join('kategori b', 'a.kategori_id = b.id')
                        ->get()
                        ->result_array();
    }

    public function get_all_kategori(){
        return $this->db->get('kategori')->result_array();
    }

    public function get_all_kategori_except($id){
        return $this->db->where('id !=', $id)->get('kategori')->result_array();
    }

   public function tambah($data, $table)
   {
    $this->db->insert($table, $data);
   }

    public function get_by_id($id){
        return $this->db->select('a.*, b.nama AS nama_kategori')
                        ->from('produk a')
                        ->join('kategori b', 'a.kategori_id = b.id')
                        ->where('a.id', $id)
                        ->get()
                        ->row_array();
    }

    public function update_data($where, $data, $table)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }
        
    public function delete_produk($id){
        return $this->db->where('id', $id)->delete('produk');
    }

    
}
