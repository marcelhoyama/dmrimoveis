<?php

class menuprincipalinquilinoController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');

         $id=0;
         if(isset($_GET['id']) && !empty($_GET['id'])){
             $id= addslashes($_GET['id']);
             
             $c = new inquilino();
             $dados['inquilino']=$c->getDados($id);
           
         }
         
         
           
        $this->loadTemplate('menuprincipalinquilino', $dados);
    }
    
    
}


