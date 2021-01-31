<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cart extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

   function insert($table = '', $data = '')
   {
      $this->db->insert($table, $data);
   }
	
	function get_all()
	{
		$query = $this->db->get('t_menu');
		return $query->result_array();
	}

	function get_menu_id($id)
	{
		$this->db->select('t_menu.*');
		$this->db->from('t_menu');
		$this->db->where('id_menu', $id);

		return $this->db->get();
	}

	public function tambah_pesanan($data)
	{
		$this->db->insert('t_pesanan', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	function update($id_pesanan, $t_pesanan)
	{
		$this->db->where('id_pesanan', $id_pesanan);
        $this->db->update('t_pesanan', $t_pesanan);
	}	

}

/* End of file M_cart.php */
/* Location: ./application/models/M_cart.php */