<?php

class pesquisarinquilinoController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
         $dados = array('erro'=>'');
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
             
            $i = new inquilino();
            
            $pesquisa = addslashes($_GET['pesquisar']);
          $dados['lista']= $i->getListInquilino($pesquisa);
           foreach ($dados['lista'] as $value) {
            $id=$value['id'];
            
        }
        $dados['total_imovel']=$i->estanoImovel($id);
        //$dados['seufiador']=$i->getFiador($id);
        
        }else{
              $i = new inquilino();
              $pesquisa='';
        $dados['lista']=$i->getListInquilino($pesquisa);
       
       
        
     
        }
       

        
        
           
         
           
        $this->loadTemplate('pesquisarinquilino', $dados);
    }
    
    
}

