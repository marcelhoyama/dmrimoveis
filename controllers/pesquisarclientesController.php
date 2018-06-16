<?php

class pesquisarclientesController extends controller{


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
         $pesquisa='';
         $c = new cliente();
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
             
            
            
            $pesquisa = addslashes($_GET['pesquisar']);
        $dados['lista']= $c->getListCliente($pesquisa);
          
        } else {
            
            $dados['lista']= $c->getListCliente($pesquisa);
        }
               
       
        
        
             
       
        
     
        
       

        
         
           
         
           
        $this->loadTemplate('pesquisarclientes', $dados);
    }
    
    
}

