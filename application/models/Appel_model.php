<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Appel_model extends CI_Model
{
	
	function __construct() {
	  parent::__construct();

    }
	function getAppelProjet()
    {
        //$this->si->select('appel_projet_id, appel_projet_nom, appel_projet_date_pub,appel_projet_date_limite_presentation');
        $this->si->select('appel_projet_id, appel_projet_nom, appel_projet_date_pub,appel_projet_date_limite_presentation');
        $this->si->from('appel_projet');
        $query = $this->si->get();
        
        return $query->result();
    }
	function getAppelCandidature($id)
    {
		$don = $this -> si -> query ( 'SELECT COUNT(`appel_projet_id`) as total,dossier_status FROM `appel_projet` As ap INNER JOIN formulaire AS f ON ap.appel_projet_id = f.formulaire_appel_projets_fk WHERE `appel_projet_id`='.$id.' GROUP BY `dossier_status` DESC' );
		return $don->result();
		
    }

}