<?php

class cadastrarinquilinoController extends controller {

    public function __construct() {
        parent::__construct();
        $c=new corretor();
      //  $c->verificarLogin();
    }

    public function index() {

$c=new corretor();
//$c->setLogado();
//$dados['usuario_nome']=$u->getNome($_SESSION['dmrlogin']);
        $dados = array('erro' => '', 'ok' => '');

        $c = new inquilino();

        if (isset($_POST['cpf']) && !empty($_POST['cpf'])) {

            $cpf = addslashes($_POST['cpf']);


            $dados['erro'] = $c->verificarExistente($cpf);
        }

        if (isset($_POST['cpf']) && !empty($_POST['cpf']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['telefone']) && !empty($_POST['telefone'])) {
            $rg= addslashes($_POST['rg']);
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $telefone2 = addslashes($_POST['telefone2']);
            $email = addslashes($_POST['email']);
            $cpf = addslashes($_POST['cpf']);
            $dados['erro'] = $c->cadastroInquilino($nome, $telefone, $telefone2, $email, $cpf, $rg);
        }






        $this->loadTemplate('cadastrarinquilino', $dados);
    }

}
