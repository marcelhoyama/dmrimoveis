<?php

class pesquisarclientesController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
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

