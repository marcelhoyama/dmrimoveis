<?php

class pesquisarinteressadosController extends controller {

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
        $dados['pesquisarInteressados'] = "";

        $dados['listInteressados'] = $i->getListInteressados();
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])) {



            $pesquisa = addslashes($_GET['pesquisar']);


            $dados['pesquisarInteressados'] = $i->pesquisarInteressados($pesquisa);
        }


        $this->loadTemplate_1('pesquisarinteressados', $dados);
    }

}
