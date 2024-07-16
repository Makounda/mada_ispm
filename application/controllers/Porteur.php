<?php

 if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class Porteur extends BaseController
{
	public function Construct()
	{
		parent::__Construct();
		$this->load->model('portMod');
	}
	  
public function store()
	{
		 $teriT = $this->input->post('teriT');
		 $codI =$this->input->post('codI');
		 $narelo =$this->input->post('narelo');
		 $nomPr =$this->input->post('nomPr');
		 $emaiL = $this->input->post('emaiL');
		 $teL =$this->input->post('teL');		
			$tables=[
                          'id_territoire'=> $teriT,	
                          'codification'=>$codI,
                          'nat_reg'=>$narelo ,	
                          'nom_resp'=>$nomPr,	
                          'mail_resp'=>$emaiL,	
                          'tel_resp'=>$teL	  
                      ];
        $this->portMod->porteur($tables); 
	} 	
}
?>