<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Menu extends CI_Model {

   function insert($table = '', $data = '')
   {
      $this->db->insert($table, $data);
   }
	
	function get_all()
	{
		$query = $this->db->get('t_menu');
		return $query->result_array();
	}

	function get_where($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	function update($id_menu, $menu)
	{
		$this->db->where('id_menu', $id_menu);
        $this->db->update('t_menu', $menu);
	}

}
