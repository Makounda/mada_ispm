<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Projets_model extends CI_Model
{
	
	function __construct() {
	  parent::__construct();

    }
	
	function getAllTypeProjet()
    {
		
        $this->db->select('*');
        $this->db->from('typeProjet');
        // $this->db->where('roleId', $roleId);
        // $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
	}
	
	function addTypeProjet($data){
		$this->db->insert('typeProjet',$data);
	}
	
	
    public function deleteRowTypeProjet($id) {
        $this->db->where('id_typePro', $id);
        $this->db->delete('typeProjet'); // Remplacez 'table_name' par le nom de votre table
    }
	
	
	public function updateTypeProjet($data,$id){
		$this->db->where('id_typePro', $id);
        $this->db->update('typeProjet', $data);
        
        return TRUE;
	}
	
//-----------------PROJETS-----------------//
function getAllProjet()
    {		
        $this->db->select('*');
        $this->db->from('projet');
		// $this->db->join('typeProjet','projet.id_typePro = typeProjet.id_typePro');
        // $this->db->where('roleId', $roleId);
        // $this->db->where('isDeleted', 0);
        $query = $this->db->get();    
        return $query->result();
	}	
	function addProjet($data){
		$this->db->insert('projet',$data);
	}	
    public function deleteRowProjet($id) {
        $this->db->where('id_Pro', $id);
        $this->db->delete('projet'); // Remplacez 'table_name' par le nom de votre table
    }
	public function updateProjet($data,$id){
		$this->db->where('id_Pro', $id);
        $this->db->update('projet', $data);
        
        return TRUE;
	}

}

