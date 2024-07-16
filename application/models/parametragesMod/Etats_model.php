<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Etats_model extends CI_Model
{
	
	function __construct() {
	  parent::__construct();

    }
	
	function getAllEtatsoumission()
    {
		
        $this->db->select('*');
        $this->db->from('etatSoumission');
        // $this->db->where('roleId', $roleId);
        // $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
	}
	function getAllEtat()
    {
		
        $this->db->select('*');
        $this->db->from('etat');
        // $this->db->where('roleId', $roleId);
        // $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
	}
	function addEtat($data){
		$this->db->insert('etat',$data);
	}
	function addEtatSoumission($data){
		$this->db->insert('etatSoumission',$data);
	}
	
    public function deleteRowEtat($id) {
        $this->db->where('id_etat', $id);
        $this->db->delete('etat'); // Remplacez 'table_name' par le nom de votre table
    }
	 public function deleteRowEtatsoumission($id) {
        $this->db->where('id_etatSou', $id);
        $this->db->delete('etatSoumission'); // Remplacez 'table_name' par le nom de votre table
    }
	
	public function updateEtat($data,$id){
		$this->db->where('id_etat', $id);
        $this->db->update('etat', $data);
        
        return TRUE;
	}
	public function updateEtatsoumission($data,$id){
		$this->db->where('id_etatSou', $id);
        $this->db->update('etatSoumission', $data);
        
        return TRUE;
	}

}

