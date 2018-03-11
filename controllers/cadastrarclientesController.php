<?php

class cadastrarclientesController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
      
           
          $dados = array('erro'=> '','ok'=>'');
         
           
          
  if(isset($_POST['cpf']) && !empty($_POST['cpf'])){
      
       $c = new cliente();
       $c->verificarExistente($cpf);
              $nome= addslashes($_POST['nome']);
             $telefone= addslashes($_POST['telefone']);
            $email= addslashes($_POST['email']);
            $cpf= addslashes($_POST['cpf']);
                   
          
     
     $dados['ok']=  $c->cadastroCliente($nome, $telefone ,$email, $cpf);
       
  }
   
   
    
     $this->loadTemplate('cadastrarclientes', $dados);
}
}