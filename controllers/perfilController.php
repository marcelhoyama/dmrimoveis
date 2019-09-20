<?php

// CONTROLLER ONDE VAI TODOS OS METODOS E VALIDAÇÃO
class perfilController extends controller {

    //construct é executado logo que é acessado 
    public function __construct() {
        //parent pegas os outros construct da classe pai
        parent::__construct();

        // estanciando objeto usuarios(classe)
        $c = new corretor();
        //chamando um dos metodo do objeto usuarios(classe) 
        $c->verificarLogin();
    }

    // PAGINA INDEX SEMPRE É O PRIMEIRO A SER LIDO E ENVIADO OS DADOS PELA BARRA DE ENDEREÇO
    public function index() {
        $dados = array('usuario_nome' => '','erro'=>'');
        $c = new corretor();
        $dados['usuario_nome'] = $c->getNome($_SESSION['dmrlogin']);
        $dados['listcorretor'] = $c->getDados($_SESSION['dmrlogin']);


        //SEMPRE VERIFCAR SE FOI SETADO,  SE EXISTE O DADO INFORMADO, ANTES DE CONTINUAR
        if (isset($_POST['nome']) && !empty($_POST['nome']) || isset($_POST['email']) && !empty($_POST['email']) ) {
            //SEMPRE PROTEGER O SISTEMA DAS INFORMAÇÕES QUE O USUARIO INFORMA (COM ADDSLASHES)
            $nome = trim(addslashes($_POST['nome']));
            $email = trim(addslashes($_POST['email']));
            $telefone = addslashes($_POST['telefone']);
            $creci = trim(addslashes($_POST['creci']));
            $senha = md5(trim(addslashes($_POST['senha'])));
            
            //CHAMANDO METODO DE UPDATE DO PERFIL DO OBJETO USUARIO(CLASSE) e informando as propriedades(dados)
            if ($c->updatePerfil($nome, $email, $telefone, $creci, $senha) == TRUE) {

                header("Location:" . BASE_URL . "perfil");
              
            } else {
                $dados['erro'] = "Conferir se todos os campos estão preenchidos corretamente!";
            }
              $dados['ok']="Alterado com Sucesso!";
        } 

        // $dados['usuario_nome']=$c->getNome($_SESSION['nutricaolug']);
        // $dados['info'] = $c->getDados($_SESSION['nutricaolg']);
        //carregar os dados desse controller na view (formulario)


        $this->loadTemplate_1('perfil', $dados);
    }

}
