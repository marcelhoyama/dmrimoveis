<?php

class excluirinteressadoController extends controller {

    public function __construct() {
        parent::__construct();
        $co = new corretor();
        $co->verificarLogin();
    }

    public function index() {
        $co = new corretor();
        $co->setLogado();
        $dados['usuario_nome'] = $co->getNome($_SESSION['dmrlogin']);

        $i = new interesse();



        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id_interessado = addslashes($_GET['id']);
            $dados['erro'] = $i->excluirInteressado($id_interessado);
            header("Location:" . BASE_URL . "pesquisarinteressados");
        }




        $this->loadTemplate_1('pesquisarinteressados', $dados);
    }

}
