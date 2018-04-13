<?php

class pesquisarimoveisController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
         $dados = array('erro'=>'');
         $i = new imovel();
       $c = new cliente();
       
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
             
            
            
            $nome = addslashes($_GET['pesquisar']);
          $dados['lista']= $i->pesquisarImovelClienteNome($nome);
          foreach ($dados['lista'] as $value) {
              $id_imovel=$value['id_imovel'];
          }
          echo $id_imovel;
        }else{
              
              $pesquisa='';
        $dados['lista']=$c->getListCliente($pesquisa);  
      
        }
       

    
         
           
        $this->loadTemplate('pesquisarimoveis', $dados);
    }
    
    
}

