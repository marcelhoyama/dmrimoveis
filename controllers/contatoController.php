<?php

class contatoController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
      
           
          $dados = array('erro'=> '','ok'=>'');
         $i=new interesse();
           $t=new telefone();
           $dados['telefone']=$t->fixo();
           $dados['celular']=$t->celular();
           $dados['email']=$t->email();
           $dados['endereco']=$t->endereco();
          $dados['listassunto']=$i->getListAssunto();
  if(isset($_POST['email']) && !empty($_POST['email'])){
             $nome= addslashes($_POST['nome']);
            $email= addslashes($_POST['email']);
            $telefone= addslashes($_POST['telefone']);
            $celular= addslashes($_POST['celular']);
           // $id_imovel= addslashes($_POST['id_imovel']);
            $assunto= 'Noticias';
            $tipoimovel= addslashes($_POST['tipoimovel']);
  
    $dados['erro']=$t->cadastrarInteresse($tipoimovel, $nome,$telefone,$celular, $email, $id_imovel, $assunto);
    
       
  }
   
   
    
     $this->loadTemplate('contato', $dados);
}
}