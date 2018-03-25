<?php

class menuprincipalController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');

       
         
         
           
        $this->loadTemplate('menuprincipal', $dados);
    }
    
    
}


