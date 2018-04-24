<?php

class pesquisarfiadorController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
         $dados = array('erro'=>'');
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
             
            $i = new fiador();
            
            $pesquisa = addslashes($_GET['pesquisar']);
          $dados['lista']= $i->getListFiador($pesquisa);
           foreach ($dados['lista'] as $value) {
            $id=$value['id'];
            
        }
        $dados['total_imovel']=$i->totalImovel($id);
        
        }else{
              $i = new fiador();
              $pesquisa='';
        $dados['lista']=$i->getListFiador($pesquisa);
       
       
        
     
        }
       

        
        
           
         
           
        $this->loadTemplate('pesquisarfiador', $dados);
    }
    
    
}

