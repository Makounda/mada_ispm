<?php
/**
	 * 
	 */
	class formatMod extends CI_model
	{
		public function formationT($data)
		{
			$this->db->insert('formation',$data);
		}	
	}


?>