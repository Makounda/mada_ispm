<?php 
/**
 * 
 */
  if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class indexCon extends BaseController
{
		public function__Construct()
		{
			parent::__Construct();
			$this->load->model('indexMod');
		}
		public function store()
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
			 foreach($newArray as $f)
          {
                  $tables=[
						  'sel'=>$f['sel']
                          'file'=>$f['file']			  
                      ];
					  
              // print_r($t['int_mod']);
                      $result = $this->indexMod->index($tab1es);        
          }
   		
			if($result > 0){
				$this->session->set_flashdata('success', 'Nouveau enregistrement');
			} else {
				$this->session->set_flashdata('error', 'Erreur d\'enregistrement');
			}
			$this->loadViews("soumission/annexe/index");
			
		
		}
?>