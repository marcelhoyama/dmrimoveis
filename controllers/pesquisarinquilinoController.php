<?php

class pesquisarinquilinoController extends controller {

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

        $i = new inquilino();
        $dados['lista'] = "";
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])) {



            $pesquisa = addslashes($_GET['pesquisar']);


            $dados['lista'] = $i->getListInquilino($pesquisa);
            foreach ($dados['lista'] as $value) {
                $id_inquilino = $value['id'];
            }
            if(empty($id_inquilino)){
                $dados['erro']="Nada encontrado!";
            }else{
            $dados['total_imovel'] = $i->estanoImovel($id_inquilino);
            $dados['seufiador'] = $i->getFiador($id_inquilino);
        }
        }




        $this->loadTemplate_1('pesquisarinquilino', $dados);
    }

}
