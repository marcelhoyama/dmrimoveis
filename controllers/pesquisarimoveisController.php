<?php

class pesquisarimoveisController extends controller {

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

        $i = new imovel();

        $dados['lista'] = '';
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])) {

            $codigo = addslashes($_GET['pesquisar']);
            $dados['lista'] = $i->getDadosImovel($codigo);
        }

        $this->loadTemplate_1('pesquisarimoveis', $dados);
    }

}
