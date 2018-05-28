<?php

class editarclientesController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {


        $dados = array('erro' => '', 'ok' => '');
        $id = 0;
  $c = new cliente();


        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = addslashes($_GET['id']);
          
$dados['dadosCliente'] = $c->getDados($id);

            if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['telefone']) && !empty($_POST['telefone'])) {

                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $telefone2 = addslashes($_POST['telefone2']);
                $email = addslashes($_POST['email']);

                $dados['ok'] = $c->editarCliente($nome, $telefone, $telefone2, $email, $id);
            }
        }
        if (isset($_POST['nome']) && empty($_POST['nome']) || isset($_POST['telefone']) && empty($_POST['telefone'])) {

            $dados['erro'] = "Deixou campo obrigatorio em branco! ";
        }
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])) {
            $dados['pesquisa'] = $_GET['pesquisar'];
        }
        

        $this->loadTemplate('editarclientes', $dados);
    }

}
