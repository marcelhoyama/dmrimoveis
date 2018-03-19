<?php

class pesquisarclientesController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
         $dados = array('erro'=>'');
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
             
            $c = new cliente();
            
            $pesquisa = addslashes($_GET['pesquisar']);
          $dados['lista']= $c->getListCliente($pesquisa);
        }else{
              $c = new cliente();
              $pesquisa='';
        $dados['lista']=$c->getListCliente($pesquisa);  
      
        }
       

        
         $t=new telefone();
           $dados['telefone']=$t->fixo();
           $dados['celular']=$t->celular();
           $dados['email']=$t->email();
           
         
           
        $this->loadTemplate('pesquisarclientes', $dados);
    }
    
    
}

