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
           foreach ($dados['lista'] as $value) {
            $id=$value['id'];
            
        }
        $dados['total_imovel']=$c->totalImovel($id);
        
        }else{
              $c = new cliente();
              $pesquisa='';
        $dados['lista']=$c->getListCliente($pesquisa);
       
       
        
     
        }
       

        
        
           
         
           
        $this->loadTemplate('pesquisarclientes', $dados);
    }
    
    
}

