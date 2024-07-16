<?php 
	/**
	 * 
	 */
	class Cdc_model extends CI_model
	{
		
		public function getdata($data)
		{
			$this->db->insert('cal_real_prev',$data);
			$insert_id = $this->db->insert_id();
        
			$this->db->trans_complete();
			
			return $insert_id;
		}
	}

 ?>