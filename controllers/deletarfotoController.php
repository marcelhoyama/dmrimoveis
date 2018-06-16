<?php

class deletarfotoController extends controller {

    public function __construct() {
        parent::__construct();
        $c = new corretor();
          $c->verificarLogin();
    }

    public function index() {
        $c = new corretor();
$c->setLogado();
$dados['usuario_nome']=$c->getNome($_SESSION['dmrlogin']);
$dados = array('erro'=>'');
        $f = new foto();

        
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            
            $id_foto= addslashes($_GET['id']);
          

            $id_imovel=$f->excluirFoto($id_foto);
        }
        if(isset($id_imovel)){
            header("Location:". BASE_URL."editarimovel?id=".$id_imovel);
        }else{
             header("Location:". BASE_URL."pesquisarimoveiscliente?id=".$id_imovel);
        }


        $this->loadView('deletarfoto', $dados);
    }

}
