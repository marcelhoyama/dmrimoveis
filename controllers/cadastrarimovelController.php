<?php

class cadastrarimovelController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
     
      $c = new cliente();
           
          $dados = array('erro'=> '','ok'=>'');
         
           $id=0;
           if(isset($_GET['id'])&& !empty($_GET)){
               $id = addslashes($_GET['id']);
               
           }
          
  if(isset($_POST['email']) && !empty($_POST['email'])){
              $nome= addslashes($_POST['nome']);
             $telefone= addslashes($_POST['telefone']);
            $email= addslashes($_POST['email']);
          
       
    
       
  }
  
  if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])){
     
                    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
                    $novo_nome = md5(time()).$extensao;
                    $diretorio = "upload/";
                    move_uploaded_file($_FILES['arquivo']['tmp_nome'], $diretorio.$novo_nome);
      $i->enviarArquivo($id,$id_imovel, $proximidade);
  }
   
   $dados['cliente']=$c->getDados($id);
  
  $i = new imovel();
    $dados['listaendereco']=$i->endereco($id);
     $this->loadTemplate('cadastrarimovel', $dados);
}
}