<?php

class pesquisarclientesController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
         $dados = array('erro'=>'');
         $pesquisa='';
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
             
            $c = new cliente();
            
            $pesquisa = addslashes($_GET['pesquisar']);
        $dados['lista1']= $c->getListCliente($pesquisa);
           foreach ($dados['lista1'] as $value) {
            $id=$value['id'];
            $nome=$value['nome'];
        }
         if($nome == ''){
              $dados['erro']="Nada encontrado!";
        $dados['lista']='';
              }else{
                   $dados['lista']= $c->getListCliente($pesquisa);
        $dados['total_imovel']=$c->totalImovel($id);
        
        }
             
       
        
     
        
       

        
        }
           
         
           
        $this->loadTemplate('pesquisarclientes', $dados);
    }
    
    
}

