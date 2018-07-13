<?php

// CONTROLLER ONDE VAI TODOS OS METODOS E VALIDAÇÃO
class perfilController extends controller{
   
             //construct é executado logo que é acessado 
            public function __construct (){
             //parent pegas os outros construct da classe pai
                parent::__construct();

              // estanciando objeto usuarios(classe)
               $c = new corretor();
              //chamando um dos metodo do objeto usuarios(classe) 
                $c->verificarLogin();
            }
        // PAGINA INDEX SEMPRE É O PRIMEIRO A SER LIDO E ENVIADO OS DADOS PELA BARRA DE ENDEREÇO
            public function index() {
                $dados = array('usuario_nome'=>'');
                $c = new corretor();
$dados['usuario_nome']=$c->getNome($_SESSION['dmrlogin']);
$dados['listcorretor']=$c->getDados($_SESSION['dmrlogin']);
        //SEMPRE VERIFCAR SE FOI SETADO,  SE EXISTE O DADO INFORMADO, ANTES DE CONTINUAR
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            //SEMPRE PROTEGER O SISTEMA DAS INFORMAÇÕES QUE O USUARIO INFORMA (COM ADDSLASHES)
             $nome = addslashes($_POST['nome']);
            $email= addslashes($_POST['email']);
             $telefone = addslashes($_POST['telefone']);
             $creci= addslashes($_POST['creci']);

           
          //CHAMANDO METODO DE UPDATE DO PERFIL DO OBJETO USUARIO(CLASSE) e informando as propriedades(dados)
             $c->updatePerfil($nome,$email,$telefone,$creci);

          // aqui caso mude a senha verifica as existencia da informação e criptografa e salva 
             if (isset($_POST['senha']) && !empty($_POST['senha'])) {
                 $senha=md5(addslashes($_POST['senha']));
                  // como metodo recebe propriedade como array ,informa o dado como array
                 $c->updatePerfil($senha);

             }
        }
                
               // $dados['usuario_nome']=$c->getNome($_SESSION['nutricaolug']);
               // $dados['info'] = $c->getDados($_SESSION['nutricaolg']);
               //carregar os dados desse controller na view (formulario)

                 
                $this->loadTemplate_1('perfil', $dados);
            }


}
