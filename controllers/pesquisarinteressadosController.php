<?php

class pesquisarinteressadosController extends controller {

    public function __construct() {
        parent::__construct();
        $c=new corretor();
        $c->verificarLogin();
    }

    public function index() {
        $c=new corretor();
$c->setLogado();
$dados['usuario_nome']=$c->getNome($_SESSION['dmrlogin']);
        $dados = array('erro' => '');
        $i = new interesse();
         $dados['pesquisarInteressados'] ="";
         
         $dados['listInteressados']=$i->getListInteressados();
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])) {



            $pesquisa = addslashes($_GET['pesquisar']);


            $dados['pesquisarInteressados'] = $i->pesquisarInteressados($pesquisa);
            
   
        }















        $this->loadTemplate('pesquisarinteressados', $dados);
    }

}
