<?php

class pesquisarinquilinoController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
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
