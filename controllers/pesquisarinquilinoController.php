<?php

class pesquisarinquilinoController extends controller {

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
        $i = new inquilino();
         $dados['lista'] ="";
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])) {



            $pesquisa = addslashes($_GET['pesquisar']);


            $dados['lista'] = $i->getListInquilino($pesquisa);
            foreach ($dados['lista'] as $value) {
                $id_inquilino = $value['id'];
            }
            $dados['total_imovel'] = $i->estanoImovel($id_inquilino);
            $dados['seufiador'] = $i->getFiador($id_inquilino);
        }















        $this->loadTemplate('pesquisarinquilino', $dados);
    }

}
