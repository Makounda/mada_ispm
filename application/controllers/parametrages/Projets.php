<?php
/**
 * 
 */
  if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class Projets extends BaseController
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('parametragesMod/Projets_model','Projets_model');
		$this->load->model('parametragesMod/Etats_model','Etats_model');		
		$this->isLoggedIn();
	}

	public function index()
	{
	
	}
	
	public function listTypeProjet()
	{
		 $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $data['typeprojet'] = $this->Projets_model->getAllTypeProjet();

			// $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            // $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'FMFP : Platinium';
            
			$this->session->set_flashdata('success', 'Liste Type Projet');
            $this->loadViews("parametrages/TypeProjets", $this->global, $data, NULL);
        
		// $result = $this->Entreprise_model->getAllEntreprise();
		// $this->loadViews("entreprise/entreprise", $this->global, $data, NULL);
	}
	
	public function addTypeProjets(){
		$lib = $this->input->post("lib");
		$table=[
			'lib_typePro'=>$lib
		];
		$result = $this->Projets_model->addTypeProjet($table);
		$this->listTypeProjet();
	}
	public function supTypeProjets(){
		$deletation = $this->input->post('del');
		$this->Projets_model->deleteRowTypeProjet($deletation);
		$this->listTypeProjet();
	}
	
	public function MajTypeProjets(){
		$i = $this->input->post('idtypePro');
		$r = $this->input->post('libtypePro');
		$table=[
			'lib_typePro'=>$r
		];
		$this->Projets_model->updateTypeProjet($table,$i);
		$this->listTypeProjet();
	}
	
	
	// =================PROJET=================== //
	public function listProjets(){
		$searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $data['projets'] = $this->Projets_model->getAllProjet();
			$data['typeprojet'] = $this->Projets_model->getAllTypeProjet();
			$data['etats'] = $this->Etats_model->getAllEtat();

			// $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            // $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'FMFP : Platinium';
            
			$this->session->set_flashdata('success', 'Liste Projet');
            $this->loadViews("parametrages/Projets", $this->global, $data, NULL);
        
	}
	public function addProjets(){
		$idtypro = $this->input->post("tp");
		$intP = $this->input->post("intPr");
		$dateDe = $this->input->post("dde");
		$dateFi = $this->input->post("dfi");
		$datePu = $this->input->post("dpu");
		$dateCr =  date('Y/m/d');
		$idet = $this->input->post("ie");
		$table=[
			'id_typePro'=>$idtypro,
			'intitulePro'=>$intP,
			'dateDeb'=>$dateDe,
			'dateFin'=>$dateFi,
			'datePub'=>$datePu,
			'dateCreat'=>$dateCr,
			'id_etat'=>$idet		
		];
		$result = $this->Projets_model->addProjet($table);
		$this->listProjets();
	}
	public function supProjets(){
		$deletation = $this->input->post('del');
		$this->Projets_model->deleteRowProjet($deletation);
		$this->listProjets();
	}
	
	public function MajProjets(){
		$i = $this->input->post('idPro');		
		$a = $this->input->post('tp');
		$g = $this->input->post('intis');
		$b = $this->input->post('datedebs');
		$c = $this->input->post('datefins');
		$d = $this->input->post('datepubs');
		$f = $this->input->post('ie');
		
		
		$table=[
			'id_typePro'=>$a,
			'intitulePro'=>$g,
			'dateDeb'=>$b,
			'dateFin'=>$c,
			'datePub'=>$d,			
			'id_etat'=>$f
				
		];
		$this->Projets_model->updateProjet($table,$i);
		
		$this->listProjets();
	}
	// ========================================== //
}
?>