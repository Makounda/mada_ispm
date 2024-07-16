<?php 
/**
 * 
 */
  if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class Cdc extends BaseController
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cdc_model');
		$this->isLoggedIn();
	}

	public function vue()
	{
		$this->global ['pageTitle'] = 'CDC : Cahier de charge';

		if(!$this->isAdmin())
        {
            $this->loadThis();
        }else{
			$data['searchText'] = "Test";
		// $this->loadViews("statistique/appeList", $this->global, $data, NULL);
		$this->loadViews("soumission/cdc/cal_real_prev", $this->global, $data, NULL);
		}
		
		// $this->load->view('cal_real_prev');
    }
   
   public function store()
   {
        $array = $this->input->post('fmfp');
            $newArray = array();
            foreach (array_keys($array) as $fieldKey) {
                foreach ($array[$fieldKey] as $key=>$value) {
                    $newArray[$key][$fieldKey] = $value;
                }
		  } 

          foreach($newArray as $t)
          {
                  $newArray1=[

                          'int_mod'=>$t['int_mod'],
                          'debut'=>$t['datde'],
                          'fin'=>$t['datfin'],
                          'lieu_form'=>$t['lifo']
                      ];
              // print_r($t['int_mod']);
                      $result = $this->Cdc_model->getdata($newArray1);
          }
   		
			if($result > 0){
				$this->session->set_flashdata('success', 'Nouveau enregistrement');
			} else {
				$this->session->set_flashdata('error', 'Erreur d\'enregistrement');
			}
			$this->loadViews("soumission/cdc/cal_real_prev", $this->global, NULL, NULL);

   }
}

 ?>