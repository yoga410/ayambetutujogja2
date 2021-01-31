<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('m_menu');
	}

	public function index()
	{
		$data['data'] = $this->m_menu->get_all('t_menu');
		$this->load->view('home', $data);
	}

	public function FunctionName($value='')
	{
		# code...
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */