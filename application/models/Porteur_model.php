<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Porteur_model extends CI_Model
{
	
	function __construct() {
	  parent::__construct();

    }
	
	public function updateSoumission($data,$id){
		$this->db->where('ref_sou', $id);
        $this->db->update('soumission', $data);
        
        return TRUE;
	}
	

}

