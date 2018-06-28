<?php

class deletarfotoController extends controller {

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

        $f = new foto();


        if (isset($_GET['id']) && !empty($_GET['id'])) {

            $id_foto = addslashes($_GET['id']);


            $id_imovel = $f->excluirFoto($id_foto);
        }
        if (isset($id_imovel)) {
            header("Location:" . BASE_URL . "editarimovel?id=" . $id_imovel);
        } else {
            header("Location:" . BASE_URL . "pesquisarimoveiscliente?id=" . $id_imovel);
        }


        $this->loadView('deletarfoto', $dados);
    }

}
