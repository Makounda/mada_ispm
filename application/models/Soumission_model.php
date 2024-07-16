<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Soumission_model extends CI_Model
{
	
	function __construct() {
	  parent::__construct();

    }
	
	function getAllSoumission()
    {	
        $this->db->select('*');
        $this->db->from('soumission');
        // $this->db->where('roleId', $roleId);
        // $this->db->where('isDeleted', 0);
        $query = $this->db->get();       
        return $query->result();
	}
	function addSoumis($data){
		$this->db->insert('soumission',$data);
	}
	
    public function deleteRow($id) {
        $this->db->where('ref_sou', $id);
        $this->db->delete('soumission'); // Remplacez 'table_name' par le nom de votre table
    }
	
	public function updateSoumission($data,$id){
		$this->db->where('ref_sou', $id);
        $this->db->update('soumission', $data);
        
        return TRUE;
	}

}

