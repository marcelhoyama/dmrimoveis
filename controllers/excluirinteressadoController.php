<?php

class excluirinteressadoController extends controller {

    public function __construct() {
        parent::__construct();
        $c=new corretor();
      //  $c->verificarLogin();
    }

    public function index() {
        $c=new corretor();
//$c->setLogado();
//$dados['usuario_nome']=$u->getNome($_SESSION['dmrlogin']);
        
        $i = new interesse();
        
         
        
        if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id_interessado = addslashes($_GET['id']);
 $dados['erro']=$i->excluirInteressado($id_interessado);
 header("Location:".BASE_URL."pesquisarinteressados");

          


            
            
   
        }















        $this->loadTemplate('pesquisarinteressados', $dados);
    }

}
