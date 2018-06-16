<?php

class menuprincipalfiadorController extends controller{


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
             
             $c = new fiador();
             $dados['fiador']=$c->getDados($id);
           
         }
         
         
           
        $this->loadTemplate('menuprincipalfiador', $dados);
    }
    
    
}


