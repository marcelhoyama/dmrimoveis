<?php

class editarclientesController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {


        $dados = array('erro' => '', 'ok' => '');
$id = 0;

 
            
        if (isset($_GET['id']) && !empty($_GET['id'])) {
          $id = addslashes($_GET['id']);
            $c = new cliente();
                       
        }
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {

                $c = new cliente();
                             
                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $telefone2 = addslashes($_POST['telefone2']);
                $email = addslashes($_POST['email']);

                $dados['ok'] = $c->editarCliente($nome, $telefone, $telefone2, $email, $id);
           
        }
        
        if(isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
            $dados['pesquisa'] = $_GET['pesquisar'];
        }
        $dados['dadosCliente'] = $c->getDados($id);
        $this->loadTemplate('editarclientes', $dados);
    

}
}
