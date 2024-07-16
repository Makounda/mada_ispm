<?php
/**
	 * 
	 */
	class portMod extends CI_model
	{
		public function porteur($data)
		{
			$this->db->insert('port_projet',$data);
		}	
	}


?>