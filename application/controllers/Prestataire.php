<?php 
/**
 * 
 */
  if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class Prestataire extends BaseController
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Prestataire_model');
		$this->isLoggedIn();
	}

	public function index()
	{
		
	}
	
	public function listPrestataire()
	{
		 $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $data['status'] = $this->Prestataire_model->getAllStatus();
            $data['region'] = $this->Prestataire_model->getAllRegion();
            $data['secteur'] = $this->Prestataire_model->getAllSecteur();
            $data['prestataire'] = $this->Prestataire_model->getAllPrestataire();

			// $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            // $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'FMFP : Platinium';
            
			$this->session->set_flashdata('success', 'Liste Prestataire');
            $this->loadViews("prestataire/prestataire", $this->global, $data, NULL);
        
		// $result = $this->Prestataire_model->getAllEntreprise();
		// $this->loadViews("entreprise/entreprise", $this->global, $data, NULL);
	}
	public function addPrestataire(){
		$denomination = $this->input->post("denomination");
		$nif = $this->input->post("nif");
		$stat = $this->input->post("stat");
		$mail = $this->input->post("mail");
		$tel = $this->input->post("tel");
		$status = $this->input->post("selStatus");
		$adresse = $this->input->post("adresse");
		$secteur = $this->input->post("selSecteur");
		$region = $this->input->post("selRegion");
		$reference = $this->input->post("ref");
		$selStatus = $this->input->post("selStatus");
		$competence = $this->input->post("competence");
		$plaquette = "test";
		$table=[
			'denomination'=>$denomination,
			'adresse'=>$adresse,
			'NIF'=>$nif,
			'stat_prest'=>$stat,
			'mail_prest'=>$mail,
			'tel'=>$tel,
			'id_secteur'=>$secteur,
			'id_status'=>$status,
			'id_region'=>$region,
			'competence'=>$competence,
			'reference'=>$reference,
			'plaquette'=>$plaquette
			
		];
		$result = $this->Prestataire_model->addPrest($table);
		$this->listPrestataire();
	}
	public function supPrest(){
		$deletation = $this->input->post('del');
		$this->Prestataire_model->deleteRow($deletation);
		$this->listPrestataire();
	}
	
	
	public function MajPrestataire(){
		$i = $this->input->post('idModify');
		$a = $this->input->post('raisonModify');
		$b = $this->input->post('nifModify');
		$c = $this->input->post('statModify');
		$d = $this->input->post('mailModify');
		$e = $this->input->post('telModify');
		$table=[
			'nom_entre'=>$a,
			'nif_entre'=>$b,
			'stat_entre'=>$c,
			'mail_entre'=>$d,
			'tel_entre'=>$e
		];
		$this->Prestataire_model->updatePrestataire($table,$i);
		
		$this->listPrestataire();
	}
}