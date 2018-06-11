<?php

class editartenhointeressadoController extends controller {

    public function __construct() {
        parent::__construct();
        $c = new corretor();
        //  $c->verificarLogin();
    }

    public function index() {
        $c = new corretor();
//$c->setLogado();
//$dados['usuario_nome']=$u->getNome($_SESSION['dmrlogin']);
$dados = array('erro'=>'');
        $i = new interesse();

        
        if (isset($_POST['nome'])) {
            
            $id_interessado= addslashes($_POST['id']);
            echo $nome = addslashes($_POST['nome']);
            $id_imovel = addslashes($_POST['codigo_imovel']);
            $assunto = addslashes($_POST['assunto']);
            $telefone = addslashes($_POST['telefone']);
            $celular = addslashes($_POST['celular']);
            echo $email = addslashes($_POST['email']);
            $tipo_imovel = addslashes($_POST['tipoimovel']);
           echo $id_status = addslashes($_POST['id_status']);

            $i->editarInteressado($id_interessado, $nome, $id_imovel, $assunto, $telefone, $celular, $email, $tipo_imovel, $id_status);

        }


        $this->loadView('editartenhointeressado', $dados);
    }

}
