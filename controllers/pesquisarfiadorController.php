<?php

class pesquisarfiadorController extends controller{


 public function __construct(){
 	parent::__construct();
        $c=new corretor();
       $c->verificarLogin();

 }
    
    public function index() {
        $c=new corretor();
$c->setLogado();
$dados['usuario_nome']=$c->getNome($_SESSION['dmrlogin']);
         $dados = array('erro'=>'');
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
             
            $i = new fiador();
            
            $pesquisa = addslashes($_GET['pesquisar']);
          $dados['lista']= $i->getListFiador($pesquisa);
           foreach ($dados['lista'] as $value) {
            $id=$value['id'];
            
        }
        
        
        }else{
              $i = new fiador();
              $pesquisa='';
        $dados['lista']=$i->getListFiador($pesquisa);
       
       
        
     
        }
       

        
        
           
         
           
        $this->loadTemplate('pesquisarfiador', $dados);
    }
    
    
}

