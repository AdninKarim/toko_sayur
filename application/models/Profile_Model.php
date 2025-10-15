<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_Model extends CI_Model {
    public function getUserByEmail($email) {
        return $this->db->get_where('users', ['email' => $email])->row_array();
    }

    public function updateUser($email, $data) {
        $this->db->where('email', $email);
        return $this->db->update('users', $data);
    }
}
?>