<?php
    class Typ_dur_mod_form extends CI_controller
    {
        public function Construct()
	{
		parent::__Construct();
		$this->load->model('typformMod');
	}
        public function maka()
        {
            $sit_trav = $this->input->post('sit_trav');
            $extern =$this->input->post('extern');
            $intern=$this->input->post('intern');
            $datdeb=$this->input->post('datdeb');
            $datfin=$this->input->post('datfin');
            $jours=$this->input->post('jours');
            $heur=$this->input->post('heur');
        
        $tables=[
            'sit_travail'=> $sit_trav,	
            'centre_form_extern'=> $extern,
            'centre_form_intern'=>$intern,	
            'dat_fin'=>$datfin,
            'dat_deb'=>$datdeb,		  
            'dur_J'=>$jours,		  
            'dur_H'=>$heur		  
        ];       
         //var_dump($datfin);
        $this->typformMod->typF($tables);
    }

    public function mako()
    {
        $a = $this->input->post('a');
        $b =$this->input->post('b');
        $c=$this->input->post('c');
        $d=$this->input->post('d');
       
    
    $tables=[
        'nom'=> $a,	
        'adress'=> $b,
        'mail'=>$c,	
        'tel'=>$d		  
    ];       
     //var_dump($datfin);
    $this->typformMod->typF1($tables);
}



public function mako2()
{
    $a = $this->input->post('a');
    $b =$this->input->post('b');
    $c=$this->input->post('c');
    $d=$this->input->post('d');
   

$tables=[
    'durée_ben'=> $a,	
    'durée_form	'=> $b,
    'dat_beb'=>$c,	
    'dat_fin'=>$d		  
];       
 //var_dump($datfin);
$this->typformMod->typF2($tables);
}

public function mako3()
{
    $a = $this->input->post('a');
    $b =$this->input->post('b');
    $c=$this->input->post('c');
    $d=$this->input->post('d');
   

$tables=[
    'durée_ben'=> $a,	
    'durée_form	'=> $b,
    'dat_beb'=>$c,	
    'dat_fin'=>$d		  
];       
 //var_dump($datfin);
$this->typformMod->typF3($tables);
}

public function mako4()
{
    $a = $this->input->post('a');
    $b =$this->input->post('b');
    $c=$this->input->post('c');
    $d=$this->input->post('d');
   

$tables=[
    'durée_ben'=> $a,	
    'durée_form	'=> $b,
    'dat_beb'=>$c,	
    'dat_fin'=>$d		  
];       
 //var_dump($datfin);
$this->typformMod->typF4($tables);
}


    }
?>