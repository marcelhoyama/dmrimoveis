<?php

class pesquisarimoveisclienteController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
         $dados = array('erro'=>'');
         $i = new imovel();
       $c = new cliente();
         if(isset($_GET['id']) && !empty($_GET['id'])){
             $id= addslashes($_GET['id']);
             $dados['nome']=$c->getNome($id);
             $dados['imoveis'] =$i->pesquisarImovelCliente($id);
             
             
              $dados['item'] =$i->itemImovel($id);
            
         }
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
             
            
            
            $tipo = addslashes($_GET['pesquisar']);
          $dados['lista']= $i->listarImoveis($tipo);
        }else{
              
              $pesquisa='';
      //  $dados['lista']=$c->getListCliente($pesquisa);  
      
        }
       

    
         
           
        $this->loadTemplate('pesquisarimoveiscliente', $dados);
    }
    
    
}

