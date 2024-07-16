<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Entreprise_model extends CI_Model
{
	
	function __construct() {
	  parent::__construct();

    }
	
	function getAllEntreprise()
    {
		
        $this->db->select('*');
        $this->db->from('entreprise');
        // $this->db->where('roleId', $roleId);
        // $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
	}
	function addEntre($data){
		$this->db->insert('entreprise',$data);
	}
	
    public function deleteRow($id) {
        $this->db->where('id_entre', $id);
        $this->db->delete('entreprise'); // Remplacez 'table_name' par le nom de votre table
    }
	
	public function updateEntreprise($data,$id){
		$this->db->where('id_entre', $id);
        $this->db->update('entreprise', $data);
        
        return TRUE;
	}
	public function getAllEntreprisee($data)
    {
		
        $this->db->select('*');
        $this->db->from('entreprise');
        $this->db->where('id_entre',$data);
        //$this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
	}
    public function azerty($id){
        $query= $this->db->get_where('entreprise',['id_entre'=>$id]);
        return $query->row();
    }


}

