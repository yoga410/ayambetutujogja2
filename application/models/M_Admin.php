<<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

	//    nama tabel dan primary key
    private $table = 't_admin';
    private $pk = 'id_admin';
     
    public function getById($id) {
        $q = $this->db->where($this->pk,$id);
        $q = $this->db->get($this->table);
        return $q;
    }
    
    public function ubah($id,$data) {
        $this->db->where($this->pk, $id);
        $this->db->update($this->table, $data);
    } 
}