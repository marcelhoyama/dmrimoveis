<?php

class menuprincipalController extends controller{


 public function __construct(){
 	parent::__construct();
$c=new corretor();
      //  $c->verificarLogin();
 }
 
     	

    
    public function index() {
        $dados = array('erro'=>'');
$c=new corretor();
//$c->setLogado();
//$dados['usuario_nome']=$u->getNome($_SESSION['dmrlogin']);
       
         
         
           
        $this->loadTemplate('menuprincipal', $dados);
    }
    
    
}


