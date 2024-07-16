<?php 
/**
 * 
 */
  if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class Context extends BaseController
{
		public function Construct()
		{
			parent::__Construct();
			$this->load->model('contextMod');
		}
		
		
		public function store()
		{
			$dcs= $this->input->post('dcs');
			$dcmc= $this->input->post('dcmc');
			$dcmac= $this->input->post('dcmac');
			$dqj= $this->input->post('dqj');

           // $newArray = array();  
          //foreach($array as $c)
          //{
                  $tables=[
                          'descri_cont'=>$dcs,	
                          'def_comp_micro'=>$dcmc,
                          'def_comp_maitre'=>$dcmac,	
                           'def_comp_emploi'=>$dqj		  
                      ];
                      //var_dump($tables);
                     // die('eto le die');				 
                $this->contextMod->contexteT($tables); 
                //$this->load->view("soumission/formulaire/context");       
          //}	
		}
			
		
		
		
		
}
?>