<?php

class cadastrarfiadorController extends controller {

    public function __construct() {
        parent::__construct();
        $c=new corretor();
       $c->verificarLogin();
    }

    public function index() {
$c=new corretor();
$c->setLogado();
$dados['usuario_nome']=$c->getNome($_SESSION['dmrlogin']);

        $dados = array('erro' => '', 'ok' => '');

        $c = new fiador();


        if (isset($_POST['cpf']) && !empty($_POST['cpf']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['telefone']) && !empty($_POST['telefone'])) {
            $rg = addslashes($_POST['rg']);
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $telefone = addslashes($_POST['telefone2']);
            $email = addslashes($_POST['email']);
            $cpf = addslashes($_POST['cpf']);

            $dados['erro'] = $c->verificarExistente($nome, $telefone, $telefone2, $email, $cpf, $rg);
        } 








        $this->loadTemplate('cadastrarfiador', $dados);
    }

}
