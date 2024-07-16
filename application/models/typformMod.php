<?php
/**
	 * 
	 */
	class typformMod extends CI_model
	{
		public function typF($data)
		{
			$this->db->insert('type_formation',$data);
		}	
		public function typF1($data)
		{
			$this->db->insert('format_mpej',$data);
		}	
		public function typF2($data)
		{
			$this->db->insert('format_mpe',$data);
		}	
		public function typF3($data)
		{
			$this->db->insert('format_ma',$data);
		}	
		public function typF4($data)
		{
			$this->db->insert('format_jeune',$data);
		}	
		public function typF10($data)
		{
			$this->db->insert('suivie_eva',$data);
		}
		public function typF00($data){
			$this->db->insert('suivie_eva',$data);
		}	
		public function typF001($data){
			$this->db->insert('suivie_eva',$data);
		}	
	}


?>