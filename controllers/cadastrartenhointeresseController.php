<?php

class cadastrartenhointeresseController extends controller {

    public function __construct() {
        parent::__construct();
        $c = new corretor();
        $c->verificarLogin();
    }

    public function index() {
        $c = new corretor();
        $c->setLogado();
        $dados['usuario_nome'] = $c->getNome($_SESSION['dmrlogin']);

        $dados = array('erro' => '');

        $t = new interesse();


        if (isset($_POST['nome']) && !empty($_POST['nome'])) {

            $nome = trim(addslashes($_POST['nome']));
            $email = trim(addslashes($_POST['email']));
            $telefone = addslashes($_POST['telefone']);
            $celular = addslashes($_POST['celular']);
            $id_imovel = addslashes($_POST['id_imovel']);

            $id_tipo_imovel = addslashes($_POST['id_tipo_imovel']);
            $id_tipo_assunto = addslashes($_POST['id_tipo_assunto']);


            $dados['erro'] = $t->cadastrarInteresse($id_tipo_imovel, $nome, $telefone, $celular, $email, $id_imovel, $id_tipo_assunto);


            $tipo_assunto = trim(addslashes($_POST['tipo_assunto']));
            $tipoimovel = trim(addslashes($_POST['tipo_imovel']));

            $para = "contato@dmrimoveiscabreuva.com.br";
            $assunto = " Duvida do Contato";
            $corpo = "Nome do interessado:" . $nome . "</br>"
                    . "- Telefone:" . $telefone . "</br>"
                    . "-Celular:" . $celular . "</br>"
                    . "- Email do interessado:" . $email . "</br>"
                    . "-Tipo de Assunto:" . $tipo_assunto . "</br>"
                    . "-Tipo do Imovel:" . $tipoimovel;
            $cabecalho = "From:" . $email . "\r\n" .
                    "Reply-To:" . $email . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();
            mail($para, $assunto, $corpo, $cabecalho);
        }
        $this->loadView('cadastrartenhointeresse', $dados);
    }

}
