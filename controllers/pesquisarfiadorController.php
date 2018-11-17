<?php

class pesquisarfiadorController extends controller {

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
 $dados['lista'] = '';
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])) {

            $i = new fiador();
           
            $pesquisa = addslashes($_GET['pesquisar']);
            if (!empty($dados['lista'] = $i->getListFiador($pesquisa))) {
                foreach ($dados['lista'] as $value) {
                    $id = $value['id'];
                }
            } else {
                $dados['erro'] = "Nada encontrado!";
            }
        }


        $this->loadTemplate_1('pesquisarfiador', $dados);
    }

}
