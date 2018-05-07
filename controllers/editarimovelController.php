<?php

class editarimovelController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {


        $i = new imovel();
        $e = new endereco();
        $f = new foto();
        $c = new cliente();
        $es = new estado();
        $ci = new cidade();
        $b = new bairro();
        $tv = new tipovia();
        $d = new descricao();
        $dados = array('erro' => '');



        // recebe o valor do campo e verifica se valor existe no banco de dados : se sim retorna o id do valoe existente se nao cadastra no banco e retorna o ultimo id

        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id_imovel = addslashes($_GET['id']);
            $dados['listimovel'] = $i->getDadosImovel($id_imovel);

            $value = $dados['listimovel'];
            $id_cliente = $value['cliente'];
            $id_endereco = $value['id_endereco'];



            $dados['listendereco'] = $e->getEndereco($id_endereco);
            $value = $dados['listendereco'];
            $id_estado = $value['id_estado'];
            $id_cidade = $value['id_cidade'];
            $id_bairro = $value['id_bairro'];
            $dados['listcliente'] = $c->getDados($id_cliente);
            $dados['listvia'] = $tv->listTipovia();
            $offset = 0; //pagina começa
            $limit = 4;  // por pagina
            $dados['listfotos'] = $f->listFotos($id_imovel, $offset, $limit); // faz limitacao por pagina pela query
            $total = $f->getTotal($id_imovel);  //ver o total de items
            $dados['paginas'] = ceil($total / $limit);  // ceil = arredonda o valor para cima
            $dados['paginaAtual'] = 1;
            if (isset($_GET['p']) && !empty($_GET['p'])) {
                $dados['paginaAtual'] = intval($_GET['p']); //intval  todo valor do p  transformar em inteiros
            }
            $offset = ($dados['paginaAtual'] * $limit) - $limit;






            if (isset($_POST['estado']) && !empty($_POST['estado'])) {

                $estado = addslashes($_POST['estado']);

                $es->updateEstado($id_estado, $estado);
            }


            if (isset($_POST['cidade']) && !empty($_POST['cidade'])) {

                $cidade = addslashes($_POST['cidade']);

                $id_cidade = $ci->updateCidade($id_cidade, $cidade);
            }


            if (isset($_POST['bairro']) && !empty($_POST['bairro'])) {

                $bairro = addslashes($_POST['bairro']);
                $id_bairro = $b->updateBairro($id_bairro, $bairro);
            }
//update endereco...................
            if (isset($_POST['cep']) && !empty($_POST['cep']) || isset($_POST['endereco']) && !empty($_POST['endereco']) || isset($_POST['proximidades']) && !empty($_POST['proximidades'])) {

                $endereco = addslashes($_POST['endereco']);
                $cep = addslashes($_POST['cep']);
                $e->updaterEndereco($endereco, $cep, proximidades, $id_endereco);
            }
//fim update endereco............................
            
            //update imovel==============================================
            if (isset($_POST['numero']) && !empty($_POST['numero']) || isset($_POST['complemento']) && !empty($_POST['complemento']) || isset($_POST['numero']) && !empty($_POST['numero']) || isset($_POST['complemento']) && !empty($_POST['complemento'])) {

                $numero = addslashes($_POST['numero']);
                $complemento = addslashes($_POST['complemento']);

                $tipoimovel = addslashes($_POST['tipoimovel']);
                $areaconstruida = addslashes($_POST['areaconstruida']);
                $areatotal = addslashes($_POST['areatotal']);
                $valorimovel = addslashes($_POST['valorimovel']);
                $valoraluguel = addslashes($_POST['valoraluguel']);
                $documentacao = addslashes($_POST['documentacaoimovel']);


                $id_imovel = $i->updateImovel($id_imovel, $id_cliente, $tipoimovel, $id_endereco, $numero, $complemento, $areaconstruida, $areatotal, $documentacao);
//fim update imovel=============================================================
//
                //aqui eh tratar o nome das fotos enviados
                //se contagem as fotos for maior de 0 faça que o nome do arquivo seja mudado com o tempo(relogio) crie criptografia randomica
                // e salve no diretorio upload   com o comando especifico do PHP
                if (isset($_FILES['arquivo1']) && !empty($_FILES['arquivo1'])) {
                    if (count($_FILES['arquivo1']['tmp_name']) > 0) {
                        for ($q = 0; $q < count($_FILES['arquivo1']['tmp_name']); $q++) {
                            $novo_nome = md5($_FILES['arquivo1']['name'][$q] . time() . rand(0, 999)) . '.jpg';
                            $diretorio = "upload/fotos_principais/";
                            move_uploaded_file($_FILES['arquivo1']['tmp_name'][$q], $diretorio . $novo_nome);

                            $f->enviarUrlPrincipalImagem($id_imovel, $novo_nome);
                        }
                    }
                }
            }
//update de descricoes---------------------------------------------
           if (isset($_POST['dormitorio']) && !empty($_POST['dormitorio']) || isset($_POST['suite']) && !empty($_POST['suite']) || isset($_POST['garagem']) && !empty($_POST['garagem']) || isset($_POST['banheiro']) && !empty($_POST['banheiro'])|| isset($_POST['piscina']) && !empty($_POST['piscina'])|| isset($_POST['churrasqueira']) && !empty($_POST['churrasqueira'])|| isset($_POST['agua']) && !empty($_POST['agua'])|| isset($_POST['luz']) && !empty($_POST['luz'])|| isset($_POST['energiasolar']) && !empty($_POST['energiasolar'])|| isset($_POST['gas']) && !empty($_POST['gas'])|| isset($_POST['internet']) && !empty($_POST['internet'])) {
                $dormitorio = addslashes($_POST['dormitorio']);
                $suite = addslashes($_POST['suite']);
                $garagem = addslashes($_POST['garagem']);
                $banheiro = addslashes($_POST['banheiro']);
                
                $piscina= addslashes($_POST['piscina']);
                $churrasqueira= addslashes($_POST['churrasqueira']);
                $agua= addslashes($_POST['agua']);
                $luz= addslashes($_POST['luz']);
                $internet= addslashes($_POST['internet']);
                $gas= addslashes($_POST['gas']);









                    $dados['ok'] = $d->updateDescricao($id_imovel, $dormitorio, $suite, $garagem, $banheiro,$piscina,$churrasqueira,$agua,$luz,$internet,$gas);
           
            }

            //aqui eh tratar o nome das fotos enviados
            //se contagem as fotos for maior de 0 faça que o nome do arquivo seja mudado com o tempo(relogio) crie criptografia randomica
            // e salve no diretorio upload   com o comando especifico do PHP
            if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {


                if (count($_FILES['arquivo']['tmp_name']) > 0) {
                    for ($q = 0; $q < count($_FILES['arquivo']['tmp_name']); $q++) {
                        $permitidos = array('image/jpeg', 'image/jpg', 'image/png');
                        if (in_array($_FILES['arquivo']['type'] . $permitidos)) {
                            $novo_nome = md5($_FILES['arquivo']['name'][$q] . time() . rand(0, 999)) . '.jpg';
                            $diretorio = "upload/";
                            move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], $diretorio . $novo_nome);
                        }
                        $f->enviarUrlImagem($id_imovel, $novo_nome);
                    }
                }
            }
        }

        $this->loadTemplate('editarimovel', $dados);
    }

}
