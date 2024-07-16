<?php
class Moyenmat extends CI_Controller{

    public function construct(){
        parent::__construct();
        $this->load->model('moyenmod');
    }
    public function Moy(){
        $a= $this->input->post('a');
        $b= $this->input->post('b');
        $c= $this->input->post('c');

        $tables=[
            'int_mod'=>$a,
            'support_formation'=>$b,
            'outil_mater'=>$c
        ];
        $this->moyenmod->momo($tables);
    }
    public function prca(){
        $a= $this->input->post('a');
        $b= $this->input->post('b');
        $c= $this->input->post('c');
        $d= $this->input->post('d');

        $tables=[
            'int_mod'=>$a,
            'durée'=>$b,
            'objectif'=>$c,
            'critere'=>$d
        ];
        $this->moyenmod->mama($tables);
    }
    public function mimis(){
        $a= $this->input->post('a');
        $b= $this->input->post('b');
        $c= $this->input->post('c');
        $d= $this->input->post('d');

        $tables=[
            'categorie'=>$a,
            'fonction'=>$b,
            'competence'=>$c,
            'fpe'=>$d
        ];
        $this->moyenmod->mimi($tables);
    }
    public function presto(){
        $a= $this->input->post('a');
        $b= $this->input->post('b');
        $c= $this->input->post('c');
        $d= $this->input->post('d');

        $tables=[
            'int_mod'=>$a,
            'deb'=>$b,
            'fin'=>$c,
            'lieu'=>$d
        ];
        $this->moyenmod->mumu($tables);
    }

}
?>