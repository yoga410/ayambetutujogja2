<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$data = array(
			'title' => 'Login Page',
		);
		$this->load->view('admin/login_form', $data);
	}

	public function login()
	{
		$this->load->model('auth_model');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->auth_model->cek_login("t_admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/admin"));
 
		}else{
			echo "Username dan password salah !";
		}
	} 

	function logout()
	{
		//destroy session
		$this->session->sess_destroy();

		redirect(site_url('login'),'refresh');
	}

}

