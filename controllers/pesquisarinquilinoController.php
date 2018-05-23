<?php

class pesquisarinquilinoController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
         $dados = array('erro'=>'');
          $i = new inquilino();
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
             
            
            
            $pesquisa = addslashes($_GET['pesquisar']);
             if($i->getListInquilino($pesquisa)==true){
                 $pesquisa = addslashes($_GET['pesquisar']);
              $dados['lista']= $i->getListInquilino($pesquisa);
                   foreach ($dados['lista'] as $value) {
            $id=$value['id'];
            
        }
       // $dados['total_imovel']=$i->estanoImovel($id);
        //$dados['seufiador']=$i->getFiador($id);
              }else{
          
          $dados['erro']="nada encontrado";
         
        
        }
             
             
             
    
       
        
     
        }
       
$dados['lista']='';
        
        
           
         
           
        $this->loadTemplate('pesquisarinquilino', $dados);
    }
    
    
}

