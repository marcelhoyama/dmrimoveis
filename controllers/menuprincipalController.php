<?php

class menuprincipalController extends controller {

    public function __construct() {
        parent::__construct();
        $co = new corretor();
        $co->verificarLogin();
    }

    public function index() {
        $dados = array('erro' => '');
        $co = new corretor();
        $co->setLogado();
        $dados['usuario_nome'] = $co->getNome($_SESSION['dmrlogin']);


        $i = new imovel();
        $dados['totalimovel'] = $i->totalImovel();
        $dados['totalvenda'] = $i->totalvenda();
        $dados['totalaluga'] = $i->totalaluga();
        $dados['totallivre'] = $i->totalstatuslivre();
        $dados['totalbloqueado'] = $i->totalstatusbloqueado();


        $this->loadTemplate_1('menuprincipal', $dados);
    }

}
