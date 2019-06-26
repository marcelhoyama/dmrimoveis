<?php

class meuanuncioController extends controller {

    public function __construct() {
        parent::__construct();
        $co=new corretor();
        $co->verificarLogin();
    }

    public function index() {
        $dados = array('erro' => '');
        $co=new corretor();
        $co->setLogado();
        $dados['usuario_nome']=$co->getNome($_SESSION['dmrlogin']);
        $t = new telefone();
        $f = new foto();
        $i = new imovel();
        $offset = '';
        $limit = '';

        if (isset($_GET['id'])) {
            $id_imovel = addslashes($_GET['id']);


            $dados['telefone'] = $t->fixo();
            $dados['endereco'] = $t->endereco();
            $dados['celular'] = $t->celular();

            $dados['listfotoimovel'] = $f->listFotosImovel($id_imovel);
            $dados['listimovel'] = $i->listTipoImovel($id_imovel);
            $dados['listfotos'] = $f->listFotos($id_imovel);
        }
        $this->loadTemplate_1('meuanuncio', $dados);
    }

}
