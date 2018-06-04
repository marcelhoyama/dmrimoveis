<?php

class pesquisarimoveisController extends controller{


 public function __construct(){
 	parent::__construct();
        $c=new corretor();
      //  $c->verificarLogin();

 }
    
    public function index() {
        $c=new corretor();
//$c->setLogado();
//$dados['usuario_nome']=$u->getNome($_SESSION['dmrlogin']);
         $dados = array('erro'=>'');
         $i = new imovel();
       
        $dados['lista']='';
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
             
            
            
            $codigo = addslashes($_GET['pesquisar']);
          $dados['lista']= $i->getDadosImovel($codigo);
         
       

    
        }   
           
        $this->loadTemplate('pesquisarimoveis', $dados);
    
    
    

    }
}

