<?php
/**
	 * 
	 */
	class contextMod extends CI_model
	{
		public function contexteT($data)
		{
			$this->db->insert('context',$data);
		}	
	}


?>