<?php

class pesquisarimoveisclienteController extends controller {

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
        $c = new cliente();
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = addslashes($_GET['id']);
            $dados['nome'] = $c->getNome($id);
            if (empty($dados['imoveis'] = $i->pesquisarImovelCliente($id))) {

                $dados['erro'] = "Nada encontrado";
            } else {
                $dados['imoveis'] = $i->pesquisarImovelCliente($id);
            }


            //  $dados['item'] =$i->itemImovel($id);
        }
        if (isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])) {



            $tipo = addslashes($_GET['pesquisar']);
            $dados['lista'] = $i->listarImoveis($tipo);
        } else {

            $pesquisa = '';
            //  $dados['lista']=$c->getListCliente($pesquisa);  
        }


        $this->loadTemplate_1('pesquisarimoveiscliente', $dados);
    }

}
