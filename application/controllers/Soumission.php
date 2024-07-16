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
class Soumission extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Appel_model');
        $this->isLoggedIn();
		$this->load->model('Soumission_model');
		$this->load->model('parametragesMod/Projets_model');
		$this->load->model('Entreprise_model');
		
		
    }
	public function index(){
		$this->global ['pageTitle'] = 'SOUMISSION : Etape';
		 if(!$this->isAdmin())
        {	
			
            $this->loadThis();
        }else{
			//$data['searchText'] = "Test";
			$port = $this->input->get('id');
			//var_dump($port);
			$data['entreprise'] = $this->Entreprise_model->getAllEntreprisee($port);
			$data['soumission'] = $this->Soumission_model->getAllSoumission();
			//return data;
			$this->loadViews('soumission/index', $this->global, $data, NULL);
			//$this->session->set_flashdata('data', $data);
			//redirect('soumission/index');
		}		
	}
 
    public function formulaire($id){
		$port = $this->input->get('id');
		$data['entreprise'] = $this->Entreprise_model->getAllEntreprisee($port);
		$data['port'] = $this->Entreprise_model->azerty($id);		
		$this->load->view('soumission/formulaire/port_proj', $data);
		
    }
	public function context(){
			$this->load->View("soumission/formulaire/contexte");
		}
    
    public function annexe(){
        // $this->load->view('soumission/formulaire/port_proj');
        $this->load->view('soumission/annexe/index');
    }
	
	public function beneficiaire(){
			$this->load->View("soumission/formulaire/beneficiaire");
		}
	public function formation(){
			$this->load->View("soumission/formulaire/formation");
		}
	public function typedurmodform(){
			$this->load->View("soumission/formulaire/typ_dur_mod_form");
		}
	// step 2 affichage
	public function metind(){
		$this->load->view("soumission/cdc/met_ind_suiv_eval");
	}
	public function calendriere(){
		$this->load->view("soumission/cdc/cal_real_prev");
	}
	public function presta(){
		$this->load->view("soumission/cdc/org_prest_form");
	}
	public function moyM(){
		$this->load->view("soumission/cdc/moy_mat");
	}
	public function fs(){
		$this->load->view("soumission/cdc/pro_det_cal_form");
	}
	public function propart(){
		$this->load->view("soumission/cdc/pro_part");
	}
	
	//--------------------SOUMISSION---------------------/
	
	
	public function listSoumission()
	{
		 $searchText = '';
            if(!empty($this->input->post('searchText'))) {
                $searchText = $this->security->xss_clean($this->input->post('searchText'));
            }
            $data['searchText'] = $searchText;           
            $this->load->library('pagination');           
            $data['soumission'] = $this->Soumission_model->getAllSoumission();
			$data['projets'] = $this->Projets_model->getAllProjet();
			$data['entreprise'] = $this->Entreprise_model->getAllEntreprise();
			// $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            // $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'FMFP : Platinium';
            
			$this->session->set_flashdata('success', 'Liste Soumission');
            $this->loadViews("soumission/soumission", $this->global, $data, NULL);
        
		// $result = $this->Entreprise_model->getAllEntreprise();
		// $this->loadViews("entreprise/entreprise", $this->global, $data, NULL);
	}
	public function addSoumission(){
		$ref_soum = $this->input->post("rfs");
		$idpr = $this->input->post("idp");
		$ident = $this->input->post("ide");
		$datsou = date('Y/m/d');
		$table=[
			'ref_sou'=>$ref_soum,
			'id_pro'=>$idpr,
			'id_entre'=>$ident,
			'date_sou'=>$datsou
		];
		$result = $this->Soumission_model->addSoumis($table);
		$this->listSoumission();
	}
	public function supSoumis(){
		$deletation = $this->input->post('del');
		$this->Soumission_model->deleteRow($deletation);
		$this->listSoumission();
	}
	
	
	public function MajSoumission(){
		$i = $this->input->post('refsou');
		$r = $this->input->post('idpr');
		$n = $this->input->post('identre');
		$s = $this->input->post('datesou');
		$table=[
			'ref_sou'=>$i,
			'id_pro'=>$r,
			'id_entre'=>$n,
			'date_sou'=>$s
		];
		$this->Soumission_model->updateSoumission($table,$i);
		
		$this->listSoumission();
	}
	
}