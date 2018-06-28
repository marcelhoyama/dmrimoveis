<?php

class cadastrartenhointeresseController extends controller{


 public function __construct(){
 	parent::__construct();
  $c = new corretor();
          $c->verificarLogin();
 }
    
    public function index() {
       $c = new corretor();
        $c->setLogado();
$dados['usuario_nome']=$c->getNome($_SESSION['dmrlogin']);

        $dados = array('erro'=>'');

    $t=new interesse();   
          
        
        if(isset($_POST['nome']) && !empty($_POST['nome']) ){
    
            $nome= addslashes($_POST['nome']);
            $email= addslashes($_POST['email']);
            $telefone= addslashes($_POST['telefone']);
            $celular= addslashes($_POST['celular']);
            $id_imovel= addslashes($_POST['id_imovel']);
            
            $id_tipo_imovel= addslashes($_POST['id_tipo_imovel']);
            $id_tipo_assunto= addslashes($_POST['id_tipo_assunto']);
           
  
    $dados['erro']=$t->cadastrarInteresse($id_tipo_imovel, $nome,$telefone,$celular, $email, $id_imovel, $id_tipo_assunto);
    
}
        $this->loadView('cadastrartenhointeresse', $dados);
    }
    
    
}
