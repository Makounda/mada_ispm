<?php

 if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';

class Beneficiaire extends BaseController
{
	public function Construct()
	{
		parent::__Construct();
		$this->load->model('benMod');
	}
	
	public function store1()
	{
		 $nom_meH  = $this->input->post('nom_meH');
		 $typ_metH =$this->input->post('typ_metH');
		 $niv_qua_visH =$this->input->post('niv_qua_visH');
		 $nom_meF =$this->input->post('nom_meF');
		 $typ_metF = $this->input->post('typ_metF');
		 $niv_qua_visF =$this->input->post('niv_qua_visF');
		 $nom_meT =$this->input->post('nom_meT');
		 $typ_metT = $this->input->post('typ_metT');
		 $niv_qua_visT =$this->input->post('niv_qua_visT');

			$tables=[
                          'nbr_micro_entreH'=>$nom_meH,	
                          '	type_metierH'=>$typ_metH,
                          'niveauxH'=>$niv_qua_visH,	
                          'nbr_micro_entreF'=>$nom_meF,	
                          'type_metierF'=>$typ_metF,	
                          'niveauxF'=>$niv_qua_visF,
                          'nbr_micro_entreT'=>$nom_meT,	
                          'type_metierT'=>$typ_metT,	
                          'niveauxT'=>$niv_qua_visT		  
                      ];
        $this->benMod->Beneficiaire1($tables); 
	} 
		
	 
	public function store2()
	{
		 $nmaH = $this->input->post('nmaH');
		 $tmH =$this->input->post('tmH');
		 $nqH =$this->input->post('nqH');
		 $nmaF =$this->input->post('nmaF');
		 $tmF= $this->input->post('tmF');
		 $nqF =$this->input->post('nqF');
		 $nmaT =$this->input->post('nmaT');
		 $tmT = $this->input->post('tmT');
		 $nqT =$this->input->post('nqT');

			$tables=[
                          'nbr_micro_entreH'=>$nmaH,	
                          'type_metierH'=>$tmH,
                          'niveauxH'=>$nqH,	
                          'nbr_micro_entreF'=>$nmaF,	
                          'type_metierF'=>$tmF,	
                          'niveauxF'=>$nqF,
                          'nbr_micro_entreT'=>$nmaT,	
                          'type_metierT'=>$tmT,	
                          'niveauxT'=>$nqT		  
                      ];
        $this->benMod->Beneficiaire2($tables); 
	}
  		 
	public function store3()
	{
		 $njsaH = $this->input->post('njsaH');
		 $tmcfH =$this->input->post('tmcfH');
		 $nqvH =$this->input->post('nqvH');
		 $njsaF =$this->input->post('njsaF');
		 $tmcfF= $this->input->post('tmcfF');
		 $nqvF =$this->input->post('nqvF');
		 $njsaT =$this->input->post('njsaT');
		 $tmcfT = $this->input->post('tmcfT');
		 $nqvT=$this->input->post('nqvT');

			$tables=[
                          'nbr_micro_entreH'=>$njsaH,	
                          'type_metierH'=>$tmcfH,
                          'niveauxH'=>$nqvH,	
                          'nbr_micro_entreF'=>$njsaF,	
                          'type_metierF'=>$tmcfF,	
                          'niveauxF'=>$nqvF,
                          'nbr_micro_entreT'=>$njsaT,	
                          'type_metierT'=>$tmcfT,	
                          'niveauxT'=>$nqvT		  
                      ];
        $this->benMod->Beneficiaire3($tables); 
	}

	
}
?>