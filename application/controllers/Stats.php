<?php 
 if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Stats extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
       $this->load->model('Appel_model');
        $this->isLoggedIn();
    }
	public function listAppel(){
		$this->global ['pageTitle'] = 'STAT : Statistique';
		// $isLoggedIn = $this->session->userdata('isLoggedIn');
		//$this->si = $this->load->database('si');
		//$data['listAp']= $this->Appel_model->getAppelProjet();
		// $this->global['pageTitle'] = 'FMFP : Platinium';
		if(!$this->isAdmin())
        {
            $this->loadThis();
        }else{
			$data['searchText'] = "Test";
			$this->loadViews("statistique/appeList", $this->global);
		}
		
		// $this->load->view('includes/header');
		// $this->load->view('statistique/appeList',$data);
		// $this->load->view('includes/footer');
	}
	public function cadidature(){
		$idrecu = $this->input->post('idEnvoyer');
		
		 $this->si = $this->load->database('si', TRUE);
		$listCandi= $this->Appel_model->getAppelCandidature($idrecu);
			// echo json_encode($data);
		 $data = [];
 
		foreach($listCandi as $row) {
			if($row->dossier_status == NULL){
				$data['label'][] = 'Projet Saisie';			
			}else{
				$data['label'][] = $row->dossier_status;				
			}
            $data['data'][] = (int) $row->total;
		}
		$data['chart_data'] = json_encode($data);
// var_dump(json_encode($data));
		$this->load->view('statistique/dashboardchart',$data);
	}
	
	public function bar_chart() {
   
      $query =  $this->db->query("SELECT COUNT(id) as count,MONTHNAME(created_at) as month_name FROM users WHERE YEAR(created_at) = '" . date('Y') . "'
      GROUP BY YEAR(created_at),MONTH(created_at)"); 
 
      $record = $query->result();
      $data = [];
 
      foreach($record as $row) {
            $data['label'][] = $row->month_name;
            $data['data'][] = (int) $row->count;
      }
      $data['chart_data'] = json_encode($data);
      $this->load->view('bar_chart',$data);
    }
    
   
}
?>