<?php

class editartenhointeressadoController extends controller {

    public function __construct() {
        parent::__construct();
        $c = new corretor();
        $c->verificarLogin();
    }

    public function index() {
        $dados = array('erro' => '');
        $co = new corretor();
        $co->setLogado();
        $dados['usuario_nome'] = $co->getNome($_SESSION['dmrlogin']);

        $i = new interesse();


        if (isset($_POST['nome']) && !empty($_POST['nome'])) {

            
           $id_interessado = addslashes($_POST['id_interessado']);
            $nome = trim(addslashes($_POST['nome']));
            $id_tipo_imovel = addslashes($_POST['id_tipo_imovel']);
            $id_tipo_assunto = addslashes($_POST['id_tipo_assunto']);
            $telefone = trim(addslashes($_POST['telefone']));
            $celular = trim(addslashes($_POST['celular']));
            $email = trim(addslashes($_POST['email']));
            $id_tipo_negociacao= addslashes($_POST['id_tipo_negociacao']);
            $status = trim(addslashes($_POST['status']));

            $i->editarInteressado($id_interessado, $nome, $id_tipo_assunto, $telefone, $celular, $email, $id_tipo_imovel, $id_tipo_negociacao, $status);
      
       
            }


        $this->loadView('editartenhointeressado', $dados);
    }

}
