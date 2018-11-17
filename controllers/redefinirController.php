<?php

class redefinirController extends controller {

    public function index() {
        $dados = array();


        if (!empty($_GET['token']) && (!empty($_POST['senha']))) {

            $token = $_GET['token'];

            $senha = md5($_POST['senha']);



            $c = new corretor();
            $c->redefinirSenha($token, $senha);
        }


        $this->loadView('redefinir', $dados);
    }

}
