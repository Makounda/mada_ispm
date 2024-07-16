<?php
/**
	 * 
	 */
	class benMod extends CI_model
	{
		public function Beneficiaire1($data)
		{
			$this->db->insert('b_form_mpe',$data);
		}

		public function Beneficiaire2($data)
		{
			$this->db->insert('b_form_maitre',$data);
		}
		public function Beneficiaire3($data)
		{
			$this->db->insert('b_form_jeune',$data);
		}		
	}


?>