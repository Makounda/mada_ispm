<?php
    class Suivie_eva extends CI_controller
    {
        public function Construct()
	{
		parent::__Construct();
		$this->load->model('typformMod');
	}

    public function teboka()
    {
        $a = $this->input->post('a');
        $b =$this->input->post('b');
         $c=$this->input->post('c');
         $d=$this->input->post('d');
         $e=$this->input->post('e');
         $f=$this->input->post('f');
         $g=$this->input->post('g');
          $h=$this->input->post('h');
          $i=$this->input->post('i');
         $j=$this->input->post('j');
         $k=$this->input->post('k');
         $l=$this->input->post('l');
         $m=$this->input->post('m');
         $n=$this->input->post('n');
         $o=$this->input->post('o');
         $p=$this->input->post('p');
         $q=$this->input->post('q');
         $r=$this->input->post('r');
         $s=$this->input->post('s');
      $tables=[
         'maitrise'=>$a,
          'e_chaud'=> $b,	
          'app_int'=> $c,
          'test_theo'=>$d,	
          'con_base'=>$e,		  
          'app_avance'=>$f,	  
          'mise_real'=>$g,		  
          'app_base'=>$h,		  
          'interview'=>$i,		  
          'acc_prod'=>$j,		  
         'e_froid'=>$k,		  
          'acq_comp'=>$l,		  
          'e_perf'=>$m,		  
          'acc_qual'=>$n,		  
          'meil_orga'=>$o,		  
          'form_pro'=>$p,		  
          'fiche_pres'=>$q,		  
          'rap_tech'=>$r,		  
         'form_pre'=>$s		  
         	  
      ];       
     //var_dump($datfin);
     $this->typformMod->typF10($tables);
}
public function teboka2(){
    $A1 = $this->input->post('A1');
    $A2 = $this->input->post('A2');
    $A3 = $this->input->post('A3');
    $A4 = $this->input->post('A4');
    $N1 = $this->input->post('N1');
    $N2 = $this->input->post('N2');
    $N3 = $this->input->post('N3');
    $N4 = $this->input->post('N4');
    $N5 = $this->input->post('N5');
    $tables=[
        'precision1'=>$A1,
        'precision2'=>$A2,
        'precision3'=>$A3,
        'precision4'=>$A4,
        'nbr1'=>$N1,
        'nbr2'=>$N2,
        'nbr3'=>$N3,
        'nbr4'=>$N4,
        'nbr5'=>$N5
    ];
    $this->typformMod->typF00($tables);
}
public function teboka3(){
    $N1 = $this->input->post('N1');
    $N2 = $this->input->post('N2');
    $N3 = $this->input->post('N3');
    $N4 = $this->input->post('N4');
    $N5 = $this->input->post('N5');
    $tables=[
        'nbr1'=>$N1,
        'nbr2'=>$N2,
        'nbr3'=>$N3,
        'nbr4'=>$N4,
        'nbr5'=>$N5
    ];
    $this->typformMod->typF001($tables);
}

    }
?>