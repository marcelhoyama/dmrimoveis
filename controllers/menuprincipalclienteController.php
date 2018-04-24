<?php

class menuprincipalclienteController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');

         $id=0;
         if(isset($_GET['id']) && !empty($_GET['id'])){
             $id= addslashes($_GET['id']);
             
             $c = new cliente();
             $dados['cliente']=$c->getDados($id);
           
         }
         
         
           
        $this->loadTemplate('menuprincipalcliente', $dados);
    }
    
    
}


