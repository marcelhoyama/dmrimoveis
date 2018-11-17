<?php

class cadastrarfiadorController extends controller {

    public function __construct() {
        parent::__construct();
        $co = new corretor();
        $co->verificarLogin();
    }

    public function index() {
        $dados = array('erro' => '', 'ok' => '');
        $co = new corretor();
        $co->setLogado();
        $dados['usuario_nome'] = $co->getNome($_SESSION['dmrlogin']);



        $f = new fiador();


        if (isset($_POST['cpf']) && !empty($_POST['cpf']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['telefone']) && !empty($_POST['telefone'])|| isset($_POST['telefone2']) && !empty($_POST['telefone2'])) {
            $rg = addslashes($_POST['rg']);
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $telefone2 = addslashes($_POST['telefone2']);
            $email = addslashes($_POST['email']);
            $cpf = addslashes($_POST['cpf']);

            $dados['erro'] = $f->verificarExistente($nome, $telefone, $telefone2, $email, $cpf, $rg);
        }


        $this->loadTemplate_1('cadastrarfiador', $dados);
    }

}
