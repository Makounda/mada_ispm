<?php

 if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class tdmfCon extends BaseController
{
	public function__Construct()
	{
		parent::__Construct();
		$this->load->model('tdmfMod');
	}
	public function store2()
		{
			$array= $this->input->post('fmfp');
            $newArray = array();
            foreach (array_keys($array) as $fieldKey)
			{
                foreach ($array[$fieldKey] as $key=>$value) 
				{
                    $newArray[$key][$fieldKey] = $value;
                }
		    }
		  
          foreach($newArray as $c)
          {
                  $tables=[
                          'nom'=>$c['nom'],
						  'adrss'=>$c['adrss'],
						  'mail'=>$c['mail'],
						  'tel'=>$c['tel']
						  
                      ];
					  
              // print_r($t['int_mod']);
                      $result = $this->tdmfMod->tdmf($tab1es);        
          }
   		
			if($result > 0){
				$this->session->set_flashdata('success', 'Nouveau enregistrement');
			} else {
				$this->session->set_flashdata('error', 'Erreur d\'enregistrement');
			}
			$this->loadViews("soumission/formulaire/typ_dur_mod_form");
		}
		
		public function store3()
		{
			$array= $this->input->post('fmfp');
            $newArray = array();
            foreach (array_keys($array) as $fieldKey)
			{
                foreach ($array[$fieldKey] as $key=>$value) 
				{
                    $newArray[$key][$fieldKey] = $value;
                }
		    }
		  
          foreach($newArray as $c)
          {
                  $tables=[
                          'durH'=>$c['durH'],
						  'durF'=>$c['durF'],
						  'datdeb'=>$c['datdeb'],
						  'datfin'=>$c['datfin']
						  
                      ];
					  
              // print_r($t['int_mod']);
                      $result = $this->tdmfMod->tdmf($tab1es);        
          }
   		
			if($result > 0){
				$this->session->set_flashdata('success', 'Nouveau enregistrement');
			} else {
				$this->session->set_flashdata('error', 'Erreur d\'enregistrement');
			}
			$this->loadViews("soumission/formulaire/typ_dur_mod_form");
		}
		
		public function store4()
		{
			$array= $this->input->post('fmfp');
            $newArray = array();
            foreach (array_keys($array) as $fieldKey)
			{
                foreach ($array[$fieldKey] as $key=>$value) 
				{
                    $newArray[$key][$fieldKey] = $value;
                }
		    }
		  
          foreach($newArray as $c)
          {
                  $tables=[
                          'durH'=>$c['durH'],
						  'durF'=>$c['durF'],
						  'datdeb'=>$c['datdeb'],
						  'datfin'=>$c['datfin']
						  
                      ];
					  
              // print_r($t['int_mod']);
                      $result = $this->tdmfMod->tdmf($tab1es);        
          }
   		
			if($result > 0){
				$this->session->set_flashdata('success', 'Nouveau enregistrement');
			} else {
				$this->session->set_flashdata('error', 'Erreur d\'enregistrement');
			}
			$this->loadViews("soumission/formulaire/typ_dur_mod_form");
		}
		
			public function store5()
		{
			$array= $this->input->post('fmfp');
            $newArray = array();
            foreach (array_keys($array) as $fieldKey)
			{
                foreach ($array[$fieldKey] as $key=>$value) 
				{
                    $newArray[$key][$fieldKey] = $value;
                }
		    }
		  
          foreach($newArray as $c)
          {
                  $tables=[
                          'durH'=>$c['durH'],
						  'durF'=>$c['durF'],
						  'datdeb'=>$c['datdeb'],
						  'datfin'=>$c['datfin']
						  
                      ];
					  
              // print_r($t['int_mod']);
                      $result = $this->tdmfMod->tdmf($tab1es);        
          }
   		
			if($result > 0){
				$this->session->set_flashdata('success', 'Nouveau enregistrement');
			} else {
				$this->session->set_flashdata('error', 'Erreur d\'enregistrement');
			}
			$this->loadViews("soumission/formulaire/typ_dur_mod_form");
		}
}

?>