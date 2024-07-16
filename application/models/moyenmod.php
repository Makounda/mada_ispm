<?php
/**
	 * 
	 */
	class moyenmod extends CI_model
	{
		public function momo($data)
		{
			$this->db->insert('moyen_mat',$data);
		}	
        public function mama($data)
		{
			$this->db->insert('format_pedago',$data);
		}	
        public function mimi($data)
		{
			$this->db->insert('programme_port',$data);
		}	
        public function mumu($data)
		{
			$this->db->insert('',$data);
		}	
	}


?>