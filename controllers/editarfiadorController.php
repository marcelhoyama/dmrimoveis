<?php

class editarfiadorController extends controller {

    public function __construct() {
        parent::__construct();
        $c=new corretor();
      //  $c->verificarLogin();
    }

    public function index() {

$c=new corretor();
//$c->setLogado();
//$dados['usuario_nome']=$u->getNome($_SESSION['dmrlogin']);
        $dados = array('erro' => '', 'ok' => '');
$id = 0;

    $i = new fiador();
            
        if (isset($_GET['id']) && !empty($_GET['id'])) {
          $id = addslashes($_GET['id']);
         
                       
        }
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {

               
                 $rg= addslashes($_POST['rg']);            
                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $telefone2 = addslashes($_POST['telefone2']);
                $email = addslashes($_POST['email']);

                $dados['ok'] = $i->editarFiador($rg, $nome, $telefone, $telefone2, $email, $id);
           
        }
        
        if(isset($_GET['pesquisar']) && !empty($_GET['pesquisar'])){
            $dados['pesquisa'] = $_GET['pesquisar'];
        }
        $dados['dadosFiador'] = $i->getDados($id);
        $this->loadTemplate('editarfiador', $dados);
    

}
}
