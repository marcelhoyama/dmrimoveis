<?php

class deletarimovelController extends controller {

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


        if (isset($_POST['id']) && !empty($_POST['id'])) {

        echo  $id_imovel = addslashes($_POST['id']);

exit;
            $dados['erro'] = $i->excluirImovel($id_imovel);
            
        }


        $this->loadView('deletarimovel', $dados);
    }

}
