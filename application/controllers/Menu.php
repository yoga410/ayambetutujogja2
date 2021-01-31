<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != TRUE ){
            redirect('login');
        };
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('m_menu');
	}

	
	public function index()
	{
		$data['data'] = $this->m_menu->get_all('t_menu');
		$this->load->view('admin/manage_menu', $data);
	}

	public function add_menu()
	{
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 3072;
                $config['max_width']            = 2048;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                	
                }
                else
                {
                	$img = $this->upload->data();
                	$gambar = $img['file_name'];
                	$nama = $this->input->post('nama', TRUE);
                	$harga = $this->input->post('harga', TRUE);
                	$desk = $this->input->post('deskripsi', TRUE);
                	
                	$data = array(
				        'nama_menu' => $nama,
				        'harga' => $harga,				        
				        'deskripsi' => $desk,
				        'gambar' => $gambar
				);

				$this->db->insert('t_menu', $data);
				redirect ('/menu');
                }

		$data['header'] = "Add New menu";

		$this->load->view('admin/menu_form', $data);
		
	}

	public function detail()
	{
		$id_menu = $this->uri->segment(3);
		$menu = $this->m_menu->get_where('t_menu', array('id_menu' => $id_menu));

		foreach ($menu->result() as $key) {
			$data['nama_menu'] = $key->nama_menu;
			$data['harga'] = $key->harga;
			$data['gambar'] = $key->gambar;
			$data['deskripsi'] = $key->deskripsi;
		}

		$this->load->view('admin/detail_menu', $data);
	}

	public function update_menu()
	{
		$id_menu = $this->uri->segment(3);

				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 3072;
                $config['max_width']            = 2048;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                


                if ( ! $this->upload->do_upload())
                {
                	$gbr = $this->upload->data();
					//proses insert
					$items['gambar'] = $gbr['file_name'];
					
                }
                else
                {
                	$menu = array(
	                	$nama = $this->input->post('nama', TRUE),
	                	$harga = $this->input->post('harga', TRUE),
	                	$desk = $this->input->post('deskripsi', TRUE)
	                	);
                	$this->m_menu->update('t_menu', $menu);

                	redirect(base_url().'/menu');
                }


		$menu = $this->m_menu->get_where('t_menu', array('id_menu' => $id_menu));

		foreach($menu->result() as $key){
			$data['nama_menu'] = $key->nama_menu;
			$data['harga'] = $key->harga;
			$data['gambar'] = $key->gambar;
			$data['deskripsi'] = $key->deskripsi;
		}
		
		$data['header'] = "Update menu";		
		$this->load->view('admin/update_form', $data);		
	}

}
