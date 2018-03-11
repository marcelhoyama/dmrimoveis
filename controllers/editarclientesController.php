<?php

class editarclientesController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
      
           
          $dados = array('erro'=> '','ok'=>'');
         
           
          
  if(isset($_POST['nome']) && !empty($_POST['nome'])){
      
       $c = new cliente();
       
              $nome= addslashes($_POST['nome']);
             $telefone= addslashes($_POST['telefone']);
            $email= addslashes($_POST['email']);
            
                   
          
     
     $dados['ok']=  $c->editarCliente($nome, $telefone ,$email, $cpf);
       
  }
   
   
    
     $this->loadTemplate('editarclientes', $dados);
}
}