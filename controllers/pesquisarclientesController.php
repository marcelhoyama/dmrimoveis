<?php

class pesquisarclientesController extends controller {

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

        $pesquisa = '';
        $dados['lista'] = '';
        $c = new cliente();
        $dados['listclientes'] = $c->listClientes();
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])) {



            $pesquisa = addslashes($_GET['pesquisar']);
            if (empty($dados['lista'] = $c->getListCliente($pesquisa))) {
                $dados['erro'] = "Nada Encontrado!";
            } else {
                $dados['lista'] = $c->getListCliente($pesquisa);
            }
        }


        $this->loadTemplate_1('pesquisarclientes', $dados);
    }

}
