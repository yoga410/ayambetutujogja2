<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model(array('m_cart', 'm_menu'));
		
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('cart');
		$this->load->view('footer');
	}

	public function add()
	{
		//if (is_numeric($this->uri->segment(3)))
		//{
			$id = $this->uri->segment(3);
			//$get = $this->m_menu->get_where('t_menu', array('id_menu' => $id_menu))->row();


			$data = array(
				'id' => $this->input->post('id_menu'),
				'name' => $this->input->post('nama_menu'),
				'price' => $this->input->post('harga'),
				'qty' => $this->input->post('qty')
				
			);
			
			$this->cart->insert($data);

			redirect('cart/show_cart','refresh');
		//}
	}

	public function show_cart()
	{
		$keranjang = $this->cart->contents();
		echo '<pre>';
		print_r($keranjang);
	}

	public function upadte()
	{
		# code...
	}

	public function delete()
	{

	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */