<?php

class menuprincipalinquilinoController extends controller{


 public function __construct(){
 	parent::__construct();
        $c=new corretor();
       $c->verificarLogin();

 }
    
    public function index() {
        $c=new corretor();
$c->setLogado();
$dados['usuario_nome']=$c->getNome($_SESSION['dmrlogin']);
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


