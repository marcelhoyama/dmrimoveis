<?php

class redefinirController extends controller {

    public function index() {
        $dados = array();


        if (!empty($_GET['token'])) {

            $token = $_GET['token'];

}
if(!empty($_POST['senha'])){
            $senha = md5($_POST['senha']);



            $c = new corretor();
            $c->redefinirSenha($token, $senha);
        }


        $this->loadView('redefinir', $dados);
    }

}
