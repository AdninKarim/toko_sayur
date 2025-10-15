<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login'); // kalau belum login, tendang ke login
        }
        $this->load->model('Profile_Model');
    }

    public function index()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->Profile_Model->getUserByEmail($email);

        $this->load->view('profile', $data);
    }

    public function update()
    {
        $email = $this->session->userdata('email');
        $data = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
        ];

        $this->Profile_Model->updateUser($email, $data);
        $this->session->set_flashdata('success', 'Profil berhasil diperbarui');
        redirect('profile');
    }
}
