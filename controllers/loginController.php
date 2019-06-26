<?php

class loginController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array('erro' => '');
       
               $c = new corretor();
               $c->verificarLogin2();
 // Verifica se esta apontando e nao esta vazios
        if (isset($_POST['email']) &&  empty($_POST['email'])==false) {
          

                 $email = trim(addslashes($_POST['email'])); //proteger de sql injection
                 $senha = md5(trim(addslashes($_POST['senha'])));

              
             $dados['erro']=$c->doLogin($email,$senha);
                         
                  }
                              $this->loadView('login',$dados);  
    }

public function sair(){
      unset($_SESSION['dmrlogin']);
      header("Location:".BASE_URL);

   }   


        
    }


