<?php

class login_esqueciController extends controller
{
    public function __construct(){
     parent::__construct();
    }
  
    public function index()
    {  
            $dados = array('erro'=>'');
 // Verifica se esta apontando e nao esta vazios
        if (isset($_POST['email']) &&  empty($_POST['email'])==false) {
          

                  $email = trim(addslashes($_POST['email'])); //proteger de sql injection
          $c = new corretor();
          if($c->esquecisenha($email)==true){
           $dados['erro']="Enviado no seu email com sucesso! Verifique na pasta SPAM. ";   
          }else{
              $dados['erro']="Não possivel enviar no seu email! Verifique seu email.";
          }
        }
        $this->loadView('login_esqueci',$dados);
    }
     
}