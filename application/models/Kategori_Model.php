<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Model extends CI_Model {

    public function kategoriAll() {
        return $this->db->get('kategori')->result_array();
    }

    public function tambah($data) {
        return $this->db->insert('kategori', $data);
    }

    public function edit($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kategori');
        return $query->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kategori', $data);
    }
}
