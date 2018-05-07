<?php

class cadastrarimovelController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $c = new cliente();
        $e = new endereco();
        $tp = new tipovia();
        $i = new imovel();
        $b = new bairro();
        $ci = new cidade();
        $es = new estado();
        $f = new foto();
         $d = new descricao();
        $dados = array('erro' => '', 'ok' => '');

        $dados['enderecos'] = $e->listEndereco();

        // recebe o valor do campo e verifica se valor existe no banco de dados : se sim retorna o id do valoe existente se nao cadastra no banco e retorna o ultimo id
        $id = 0;
        if (isset($_GET['id']) && !empty($_GET)) {
            $id_cliente = addslashes($_GET['id']);
            $dados['cliente'] = $c->getDados($id_cliente);


            if (isset($_POST['estado']) && !empty($_POST['estado'])) {

                $estado = addslashes($_POST['estado']);

               $id_estado = $es->verificarEstado($estado);
            }


            if (isset($_POST['cidade']) && !empty($_POST['cidade'])) {

                $cidade = addslashes($_POST['cidade']);

                $id_cidade = $ci->verificarCidade($id_estado, $cidade);
            }


            if (isset($_POST['bairro']) && !empty($_POST['bairro'])) {

                $bairro = addslashes($_POST['bairro']);
                $id_bairro = $b->verificarBairro($id_cidade, $bairro);
            }


              if (isset($_POST['tipovia']) && !empty($_POST['tipovia'])) {
                $id_tipo_via = addslashes($_POST['tipovia']);
                $id_tipo_via = $tp->verificarTipovia($tipovia);
            }
            if (isset($_POST['endereco']) && !empty($_POST['endereco'])) {
                $endereco = addslashes($_POST['endereco']);
                
                $id_endereco = $e->verificarEndereco($id_cliente, $id_bairro, $endereco, $id_tipo_via);
            }
          


            if (isset($_POST['numero']) && !empty($_POST['numero'])) {

                $numero = addslashes($_POST['numero']);
                $complemento = addslashes($_POST['complemento']);
                $cep = addslashes($_POST['cep']);
                $tipoimovel = addslashes($_POST['tipoimovel']);
                $areaconstruida = addslashes($_POST['areaconstruida']);
                $areatotal = addslashes($_POST['areatotal']);
                $valorimovel = addslashes($_POST['valorimovel']);
                $valoraluguel = addslashes($_POST['valoraluguel']);
                $documentacao = addslashes($_POST['documentacaoimovel']);

               $id_imovel = $i->cadastrarImovel($id_cliente, $tipoimovel, $id_endereco, $numero, $complemento, $areaconstruida, $areatotal, $documentacao);
         
                   //aqui eh tratar o nome das fotos enviados
            //se contagem as fotos for maior de 0 faça que o nome do arquivo seja mudado com o tempo(relogio) crie criptografia randomica
            // e salve no diretorio upload   com o comando especifico do PHP
                // tem proteçao de permiçao de extensao de imagens 
               if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {
                
              
                if (count($_FILES['arquivo']['tmp_name']) > 0) {
                    for ($q = 0; $q < count($_FILES['arquivo']['tmp_name']); $q++) {
                          $permitidos=array('image/jpeg', 'image/jpg', 'image/png');
                        if(in_array($_FILES['arquivo']['type'].$permitidos)){
                        $novo_nome = md5($_FILES['arquivo']['name'][$q] . time() . rand(0, 999)) . '.jpg';
                        $diretorio = "upload/";
                       move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], $diretorio . $novo_nome);
                        }
                        $f->enviarUrlImagem($id_imovel, $novo_nome);
                       
                    }
                }
            }
                }

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
                
                    
                
               



                $dados['ok'] = $d->cadastrarDescricao($id_imovel, $dormitorio, $suite, $garagem, $banheiro,$piscina,$churrasqueira,$agua,$luz,$internet,$gas);
            }

            //aqui eh tratar o nome das fotos enviados
            //se contagem as fotos for maior de 0 faça que o nome do arquivo seja mudado com o tempo(relogio) crie criptografia randomica
            // e salve no diretorio upload   com o comando especifico do PHP
            if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])) {
                if (count($_FILES['arquivo']['tmp_name']) > 0) {
                    for ($q = 0; $q < count($_FILES['arquivo']['tmp_name']); $q++) {
                        $novo_nome = md5($_FILES['arquivo']['name'][$q] . time() . rand(0, 999)) . '.jpg';
                        $diretorio = "upload/";
                        move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], $diretorio . $novo_nome);

                       $f->enviarUrlImagem($id_imovel, $novo_nome);
                       
                    }
                }
            } else {
              //  header("Location:" . BASE_URL . "menuprincipal");
            }
        }



$dados['listvia']=$tp->listTipovia();


        $this->loadTemplate('cadastrarimovel', $dados);
    }

}
