<?php
/**
 * 
 */
  if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class Etats extends BaseController
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('parametragesMod/Etats_model','Etats_model');
		$this->isLoggedIn();
	}

	public function index()
	{
		
	}
	
	public function listEtatSoumission()
	{
		 $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $data['etatsoumission'] = $this->Etats_model->getAllEtatSoumission();

			// $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            // $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'FMFP : Platinium';
            
			$this->session->set_flashdata('success', 'Liste Entreprise');
            $this->loadViews("parametrages/EtatSoumission", $this->global, $data, NULL);
        
		// $result = $this->Entreprise_model->getAllEntreprise();
		// $this->loadViews("entreprise/entreprise", $this->global, $data, NULL);
	}
	public function listEtat()
	{
		 $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $data['etats'] = $this->Etats_model->getAllEtat();

			// $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            // $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'FMFP : Platinium';
            
			$this->session->set_flashdata('success', 'Liste Entreprise');
            $this->loadViews("parametrages/Etats", $this->global, $data, NULL);
        
		// $result = $this->Entreprise_model->getAllEntreprise();
		// $this->loadViews("entreprise/entreprise", $this->global, $data, NULL);
	}
	public function addEtats(){
		$lib = $this->input->post("lib");
		$table=[
			'lib_etat'=>$lib
		];
		$result = $this->Etats_model->addEtat($table);
		$this->listEtat();
	}
	public function addEtatsoumission(){
		$lib = $this->input->post("lib");
		$table=[
			'lib_etatSou'=>$lib
		];
		$result = $this->Etats_model->addEtatSoumission($table);
		$this->listEtatSoumission();
	}
	public function supEtats(){
		$deletation = $this->input->post('del');
		$this->Etats_model->deleteRowEtat($deletation);
		$this->listEtat();
	}
	public function supEtatsoumission(){
		$deletation = $this->input->post('del');
		$this->Etats_model->deleteRowEtatsoumission($deletation);
		$this->listEtatSoumission();
	}
	
	
	public function MajEtats(){
		$i = $this->input->post('idetatLib');
		$r = $this->input->post('etatLib');
		$table=[
			'lib_etat'=>$r
		];
		$this->Etats_model->updateEtat($table,$i);
		
		$this->listEtat();
	}
	public function MajEtatsoumission(){
		$i = $this->input->post('idLibSou');
		$r = $this->input->post('etatLibSou');
		$table=[
			'lib_etatSou'=>$r
		];
		$this->Etats_model->updateEtatsoumission($table,$i);
		
		$this->listEtatSoumission();
	}
}


?>