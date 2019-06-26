<?php

class cadastrarfotoController extends controller {

    public function __construct() {
        parent::__construct();
        $c = new corretor();
        //  $c->verificarLogin();
    }

    public function index() {
        $dados = array('erro' => '', 'ok' => '');
        $co = new corretor();
//$co->setLogado();
//$dados['usuario_nome']=$co->getNome($_SESSION['dmrlogin']);



        $i = new imovel();
        //aqui eh tratar o nome das fotos enviados
        //se contagem as fotos for maior de 0 faça que o nome do arquivo seja mudado com o tempo(relogio) crie criptografia randomica
        // e salve no diretorio upload   com o comando especifico do PHP
        if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])) {
            if (count($_FILES['arquivo']['tmp_name']) > 0) {
                for ($q = 0; $q < count($_FILES['arquivo']['tmp_name']); $q++) {
                    $novo_nome = md5($_FILES['arquivo']['name'][$q] . time() . rand(0, 999)) . '.jpg';
                    $diretorio = "upload/";
                    move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], $diretorio . $novo_nome);

                    $i->enviarUrlImagem($id_imovel, $novo_nome);
                }
            }
        }






        $this->loadTemplate_1('cadastrarfoto', $dados);
    }

}
