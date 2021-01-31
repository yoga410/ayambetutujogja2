<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != TRUE ){
            redirect('login');
        };
		$this->load->model('m_admin');
		
}
	
	function index()
	{
		$this->load->view('admin/home');

	}
}
