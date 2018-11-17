<?php

class menuprincipalinquilinoController extends controller {

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

        $id = 0;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = addslashes($_GET['id']);

            $c = new inquilino();
            $dados['inquilino'] = $c->getDados($id);
        }



        $this->loadTemplate_1('menuprincipalinquilino', $dados);
    }

}
