<?php

class deletartenhointeressadoController extends controller {

    public function __construct() {
        parent::__construct();
        $c = new corretor();
          $c->verificarLogin();
    }

    public function index() {
        $c = new corretor();
$c->setLogado();
$dados['usuario_nome']=$c->getNome($_SESSION['dmrlogin']);
$dados = array('erro'=>'');
        $i = new interesse();

        
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            
            $id_interessado= addslashes($_GET['id']);
          

            $id_interessado=$i->deletarInteressado($id_interessado);
            header("Location:". BASE_URL."tenhointeressado?id=".$id_interessado);
        }


        $this->loadView('editartenhointeressado', $dados);
    }

}
