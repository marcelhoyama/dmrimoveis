<?php

class cadastrartenhointeresseController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');

    $t=new interesse();   
          
        
        if(isset($_POST['nome']) && !empty($_POST['nome']) ){
    
            $nome= addslashes($_POST['nome']);
            $email= addslashes($_POST['email']);
            $telefone= addslashes($_POST['telefone']);
            $celular= addslashes($_POST['celular']);
            $id_imovel= addslashes($_POST['id_imovel']);
            $assunto= addslashes($_POST['assunto']);
            $tipoimovel= addslashes($_POST['tipoimovel']);
  
    $dados['erro']=$t->cadastrarInteresse($tipoimovel, $nome,$telefone,$celular, $email, $id_imovel, $assunto);
    
}
        $this->loadView('cadastrartenhointeresse', $dados);
    }
    
    
}
