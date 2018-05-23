<?php

class editarinquilinoController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {


        $dados = array('erro' => '', 'ok' => '');
$id = 0;

    $i = new inquilino();
            
        if (isset($_GET['id']) && !empty($_GET['id'])) {
          $id = addslashes($_GET['id']);
         
                       
        }
         
        $dados['dadosInquilino'] = $i->getDados($id);
        
        if (isset($_POST['nome']) && !empty($_POST['nome'])|| isset($_POST['telefone']) && !empty($_POST['telefone'])) {

               
                $rg= addslashes($_POST['rg']);             
                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $telefone2 = addslashes($_POST['telefone2']);
                $email = addslashes($_POST['email']);

                $dados['erro'] = $i->editarInquilino($rg, $nome, $telefone, $telefone2, $email, $id);
           
        } 
        if (empty($_POST['nome'])|| empty($_POST['telefone'])) {
            
      
            $dados['erro']="Prencher Todos os campos obrigatórios! Por favor!";
        }else{
            $dados['erro']='';
        }
        
     
        
        
        
        $this->loadTemplate('editarinquilino', $dados);
    

}
}
