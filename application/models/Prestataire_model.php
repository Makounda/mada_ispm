<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Prestataire_model extends CI_Model
{
	
	function __construct() {
	  parent::__construct();

    }
	
	function getAllPrestataire()
    {
		
        $this->db->select('*');
        $this->db->from('prestataire');
        // $this->db->where('roleId', $roleId);
        // $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
	}
	function getAllStatus()
    {
		
        $this->db->select('*');
        $this->db->from('status_prest');
        // $this->db->where('roleId', $roleId);
        // $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
	}
	function getAllSecteur()
    {
		
        $this->db->select('*');
        $this->db->from('param_secteur');
        // $this->db->where('roleId', $roleId);
        // $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
	}
	function getAllRegion()
    {
		
        $this->db->select('*');
        $this->db->from('param_terr_region');
        // $this->db->where('roleId', $roleId);
        // $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
	}
	function addPrest($data){
		$this->db->insert('prestataire',$data);
	}
	
    public function deleteRow($id) {
        $this->db->where('id_prest', $id);
        $this->db->delete('prestataire'); // Remplacez 'table_name' par le nom de votre table
    }
	
	public function updatePrestataire($data,$id){
		$this->db->where('id_entre', $id);
        $this->db->update('prestataire', $data);
        
        return TRUE;
	}

}

