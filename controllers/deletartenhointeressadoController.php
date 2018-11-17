<?php

class deletartenhointeressadoController extends controller {

    public function __construct() {
        parent::__construct();
        $co = new corretor();
        $co->verificarLogin();
    }

    public function index() {
        $dados = array('erro' => '');
        $co = new corretor();
        $co->setLogado();
        $dados['usuario_nome'] = $co->getNome($_SESSION['dmrlogin']);

        $i = new interesse();


        if (isset($_POST['id_interessado']) && !empty($_POST['id_interessado'])) {

          echo  $id_interessado = addslashes($_POST['id_interessado']);


            $dados['erro'] = $i->excluirInteressado($id_interessado);
            
        }


        $this->loadView('deletartenhointeressado', $dados);
    }

}
