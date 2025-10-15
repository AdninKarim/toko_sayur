<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

    public function login($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', md5($password)); // pakai md5 buat contoh
        return $this->db->get('users')->row_array();
    }
}
