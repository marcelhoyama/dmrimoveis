<?php

class deletarimovelController extends controller {

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


        if (isset($_GET['id']) && !empty($_GET['id'])) {

            $id_imovel = addslashes($_GET['id']);


            if($i->excluirImovel($id_imovel)==true){
                
                header("Location:".BASE_URL."pesquisarimoveis");
            
        }else{
            $dados['erro']="Algo deu errado!";
        }


        $this->loadView('deletarimovel', $dados);
    }

}
}