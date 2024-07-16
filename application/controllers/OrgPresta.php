<?php 
/**
 * 
 */
class OrgPresta extends CI_controller
{
		public function Construct()
		{
			parent::__Construct();
			$this->load->model('OrgPreMod');
		}
		public function store()
		{
			$int_mod= $this->input->post('int_mod');
			$cat_pres= $this->input->post('cat_pres');
			$org= $this->input->post('org');
			$nom_form= $this->input->post('nom_form');
			$ref_form= $this->input->post('ref_form');

                  $tables=[
                          'int_mod'=>$int_mod,	
                          'cat_prest'=>$cat_pres,
                          'organisme'=>$org,	
                          'nom_formateur'=>$nom_form,
                          'ref_formateur'=>$ref_form		  
                      ];        				 
                $this->OrgPreMod->orgaP($tables); 	
		}						
}
?>