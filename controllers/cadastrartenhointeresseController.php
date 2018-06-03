<?php

class cadastrartenhointeresseController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');

    $t=new interesse();   
          
        
        if(isset($_POST['nome']) && !empty($_POST['nome']) ){
    
          echo  $nome= addslashes($_POST['nome']);
          echo  $email= addslashes($_POST['email']);
          echo  $telefone= addslashes($_POST['telefone']);
          echo  $celular= addslashes($_POST['celular']);
          echo  $id_imovel= addslashes($_POST['id_imovel']);
          echo  $assunto= addslashes($_POST['assunto']);
           echo $tipoimovel= addslashes($_POST['tipoimovel']);
  
    $dados['erro']=$t->cadastrarInteresse($tipoimovel, $nome,$telefone,$celular, $email, $id_imovel, $assunto);
    
}
        $this->loadView('cadastrartenhointeresse', $dados);
    }
    
    
}
