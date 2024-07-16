<?php 
/**
 * 
 */
  if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class Entreprise extends BaseController
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Entreprise_model');
		$this->isLoggedIn();
	}

	public function index()
	{
		
	}
	
	public function listEntreprise()
	{
		 $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $data['entreprise'] = $this->Entreprise_model->getAllEntreprise();

			// $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            // $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'FMFP : Platinium';
            
			$this->session->set_flashdata('success', 'Liste Entreprise');
            $this->loadViews("entreprise/entreprise", $this->global, $data, NULL);
        
		// $result = $this->Entreprise_model->getAllEntreprise();
		// $this->loadViews("entreprise/entreprise", $this->global, $data, NULL);
	}
	public function addEntreprise(){
		$raison = $this->input->post("raison");
		$nif = $this->input->post("nif");
		$stat = $this->input->post("stat");
		$mail = $this->input->post("mail");
		$tel = $this->input->post("tel");
		$table=[
			'nom_entre'=>$raison,
			'nif_entre'=>$nif,
			'stat_entre'=>$stat,
			'mail_entre'=>$mail,
			'tel_entre'=>$tel
			
		];
		$result = $this->Entreprise_model->addEntre($table);
		$this->listEntreprise();
	}
	public function supEntre(){
		$deletation = $this->input->post('del');
		$this->Entreprise_model->deleteRow($deletation);
		$this->listEntreprise();
	}
	
	
	public function MajEntreprise(){
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
		$this->Entreprise_model->updateEntreprise($table,$i);
		
		$this->listEntreprise();
	}
}