<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('AuthModel');
		$this->load->library('form_validation');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE ) {
			$this->load->view('login');
		} else {
			$email = $this->input->post('email');
			$cek = $this->AuthModel->cekEmail($email); 

			if( $cek->num_rows() === 1 ){
				$password = $this->input->post('password');

				if (password_verify($password, $cek->row()->password)){
					$user = $cek->row();

					$session['nama'] = $user->nama;
					$session['logged_in'] = TRUE;
					$session['email'] = $user->email;
					$session['username'] = $user->username;
					$session['role'] = $user->role;

					$this->session->set_userdata($session);
					if($user->role == 1 ){
						redirect('admin/admin');
					} else {
						redirect('user');
					}
				
			} else {
				echo 'maaf, password yang anda masukkan salah';
			}
		} else {
			echo 'maaf, username anda tidak terdaftar';
		}
	}
}
	public function register()
	{
		$this->load->view('register');
	}

	public function proses_register() 
	{

		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');

		if ($this->form_validation->run() === FALSE ){
			$this->load->view('register');
		} else{


			$data = [
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
			];


			$insert = $this->AuthModel->register($data);

			if($insert){
				echo 'Berhasil Registrasi';
			} else {
				echo 'Gagal Registrasi';
			}
		}

    }    
    public function logout()
	{
		$this->session->sess_destroy();

		redirect('auth/login');
	}
}

?>