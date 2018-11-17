<?php

class tenhointeressadoController extends controller {

    public function __construct() {
        parent::__construct();
        $c = new corretor();
        $c->verificarLogin();
    }

    public function index() {
        $c = new corretor();
        $c->setLogado();
        $dados['usuario_nome'] = $c->getNome($_SESSION['dmrlogin']);

        $i = new interesse();

        $dados = array('erro' => '');

        if (isset($_POST['id_interessado'])) {
            $id_interessado = addslashes($_POST['id_interessado']);
            $dados['listinteressado'] = $i->getInteressados($id_interessado);
            $dados['listnegociacao'] = $i->getListnegociacao();
            $dados['listassunto'] = $i->getListAssunto();
        }


        $this->loadView('tenhointeressado', $dados);
    }

}

