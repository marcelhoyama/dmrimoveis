<?php

class menuprincipalController extends controller{


 public function __construct(){
 	parent::__construct();
$co=new corretor();
        $co->verificarLogin();
 }
 
     	

    
    public function index() {
        $dados = array('erro'=>'');
$co=new corretor();
$co->setLogado();
$dados['usuario_nome']=$co->getNome($_SESSION['dmrlogin']);
       
         
         
           
        $this->loadTemplate_1('menuprincipal', $dados);
    }
    
    
}


