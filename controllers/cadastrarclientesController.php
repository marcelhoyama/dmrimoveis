<?php

class cadastrarclientesController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {


        $dados = array('erro' => '', 'ok' => '');

        $c = new cliente();

        if (isset($_POST['cpf']) && !empty($_POST['cpf'])) {

            $cpf = addslashes($_POST['cpf']);


            $dados['erro'] = $c->verificarExistente($cpf);
        }

        if (isset($_POST['cpf']) && !empty($_POST['cpf']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['telefone']) && !empty($_POST['telefone'])) {
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $telefone = addslashes($_POST['telefone2']);
            $email = addslashes($_POST['email']);
            $cpf = addslashes($_POST['cpf']);
            $dados['erro'] = $c->cadastroCliente($nome, $telefone, $telefone2, $email, $cpf);
        }






        $this->loadTemplate('cadastrarclientes', $dados);
    }

}
