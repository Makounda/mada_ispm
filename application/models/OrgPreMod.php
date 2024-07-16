<?php
/**
	 * 
	 */
	class OrgPreMod extends CI_model
	{
		public function orgaP($data)
		{
			$this->db->insert('prest_form',$data);
		}	
	}


?>
