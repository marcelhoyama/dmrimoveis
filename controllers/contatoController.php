<?php

class contatoController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {


        $dados = array('erro' => '', 'ok' => '');
        $i = new interesse();
        $t = new telefone();
        $im = new imovel();
        $dados['telefone'] = $t->fixo();
        $dados['celular'] = $t->celular();
        $dados['email'] = $t->email();
        $dados['endereco'] = $t->endereco();
        $dados['horario'] = $t->horario();
        $dados['listassunto'] = $i->getListAssunto();
        $dados['listatipoimovel'] = $im->listTiposImoveis2();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = trim(addslashes($_POST['nome']));
            $email = trim(addslashes($_POST['email']));
            $telefone = addslashes($_POST['telefone']);
            $celular = addslashes($_POST['celular']);

            $tipo_assunto = trim(addslashes($_POST['assunto']));
            $tipoimovel = addslashes($_POST['tipoimovel']);
            $mensagem = trim(addslashes($_POST['mensagem']));
            $para = "contato@dmrimoveiscabreuva.com.br";
            $assunto = " Duvida do Contato";
            $corpo = "Nome do interessado: " . $nome . "</br>"
                    . "- Telefone: " . $telefone . "</br>"
                    . "-Celular: " . $celular . "</br>"
                    . "- Email do interessado: " . $email . "</br>"
                    . "-Tipo de Assunto: " . $tipo_assunto . "</br>"
                    . "-Tipo do Imovel: " . $tipoimovel . "</br>"
                    . "-Mensagem: " . $mensagem;
            $cabecalho = "From:" . $email . "\r\n" .
                    "Reply-To:" . $email . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();
            mail($para, $assunto, $corpo, $cabecalho);
            //$i->cadastrarInteresse($tipoimovel, $nome,$telefone,$celular, $email, $assunto);
            $dados['ok'] = "Enviado com sucesso";
        }else{
            $dados['erro']="Conferir os campos se estão preenchidos corretos, por favor! E tente novamente!";
        }



        $this->loadTemplate('contato', $dados);
    }

}

