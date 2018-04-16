<?php

class cadastrarimovelController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $c = new cliente();
        $e = new endereco();
        $i = new imovel();
        $b = new bairro();
        $ci = new cidade();
        $es = new estado();
        $dados = array('erro' => '', 'ok' => '');

        $dados['enderecos'] = $e->listEndereco();
        $dados['bairros'] = $b->listBairro();
        $dados['cidades'] = $ci->listCidade();
        $dados['estados'] = $es->listEstado();
        $id = 0;
        if (isset($_GET['id']) && !empty($_GET)) {
            $id_cliente = addslashes($_GET['id']);
            $dados['cliente'] = $c->getDados($id_cliente);
        }else{
            header("Location:".BASE_URL."menuprincipallogado");
        }

        if (isset($_POST['estado']) && !empty($_POST['estado'])) {

            $estado = addslashes($_POST['estado']);

            $id_estado = $es->verificarEstado($estado);
        }


        if (isset($_POST['cidade']) && !empty($_POST['cidade'])) {

            $cidade = addslashes($_POST['cidade']);

            $id_bairro_cidade = $ci->verificarCidade($id_estado, $cidade);
        }


        if (isset($_POST['bairro']) && !empty($_POST['bairro'])) {

            $bairro = addslashes($_POST['bairro']);
            $id_bairro = $b->verificarBairro($id_bairro_cidade, $bairro);
        }


        if (isset($_POST['endereco']) && !empty($_POST['endereco'])) {
            $endereco = addslashes($_POST['endereco']);
            $id_endereco = $e->verificarEndereco($id_cliente, $id_bairro, $endereco);
        }


        if (isset($_POST['numero']) && !empty($_POST['numero'])) {

            $numero = addslashes($_POST['numero']);
            $complemento = addslashes($_POST['complemento']);
            $cep = addslashes($_POST['cep']);
            $dormitorio = addslashes($_POST['dormitorio']);
            $suite = addslashes($_POST['suite']);
            $garagem = addslashes($_POST['garagem']);

            $banheiro = addslashes($_POST['banheiro']);
            $tipoimovel = addslashes($_POST['tipoimovel']);
            $areaconstruida = addslashes($_POST['areaconstruida']);
            $areatotal = addslashes($_POST['areatotal']);
            $valorimovel = addslashes($_POST['valorimovel']);
            $valoraluguel = addslashes($_POST['valoraluguel']);
            $documentacao = addslashes($_POST['documentacaoimovel']);

            $id_imovel = $i->cadastrarImovel($id_cliente, $tipoimovel, $dormitorio, $suite, $garagem, $id_endereco, $numero, $complemento, $cep, $valoraluguel, $areaconstruida, $banheiro, $areatotal, $valorimovel, $documentacao);
        }

        if (isset($_POST['descricao']) && !empty($_POST['descricao'])) {
            $d = new descricao();
            $descricao = array();
            $descricao = $_POST['descricao'];

            $dados['ok'] = $d->cadastrarDescricao($id_imovel, $descricao);
        }

        if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])) {
            if (count($_FILES['arquivo']['tmp_name']) > 0) {
                for ($q = 0; $q < count($_FILES['arquivo']['tmp_name']); $q++) {
                    $novo_nome = md5($_FILES['arquivo']['name'][$q] . time() . rand(0, 999)) . '.jpg';
                    $diretorio = "upload/";
                    move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], $diretorio . $novo_nome);
                    
                     $i->enviarUrlImagem($id_imovel, $novo_nome);
                }
               
            }
           
        }
            
        




        $this->loadTemplate('cadastrarimovel', $dados);
    }

}
