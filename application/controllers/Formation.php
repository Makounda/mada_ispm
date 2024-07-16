<?php

 if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class Formation extends BaseController
{
	public function Construct()
	{
		parent::__Construct();
		$this->load->model('formatMod');
	}
	
		public function store()

		{
			$ibcc= $this->input->post('ibcc');
			$ibcca= $this->input->post('ibcca');
			$ibccja= $this->input->post('ibccja');
			$lieu_form= $this->input->post('lieu_form');
			$int_form= $this->input->post('int_form');
			$cdff= $this->input->post('cdff');

           // $newArray = array();  
          //foreach($array as $c)
          //{
                  $tables=[
                          'id_comp_form_ter'=>$ibcc,	
                          'id_comp_form_ma'=>$ibcca,
                          'id_comp_form_ja'=>$ibccja,	
                          'lieu_form'=>$lieu_form,	
                          'int_form'=>$int_form,	
                          'descr_form_fin'=>$cdff		  
                      ];
                      //var_dump($tables);
                     // die('eto le die');				 
                $this->formatMod->formationT($tables); 
                //$this->load->view("soumission/formulaire/context");       
          //}	
		}
	}
?>