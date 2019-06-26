<?php

class cadastrarimovelfacebookController extends controller {

    public function __construct() {
        parent::__construct();
        $co = new corretor();
        $co->verificarLogin();
    }

    public function index() {
        $dados = array('erro' => '', 'ok' => '');
        $co = new corretor();
        $co->setLogado();
        $dados['usuario_nome'] = $co->getNome($_SESSION['dmrlogin']);
        $c = new cliente();
       
       
        $i = new imovel();
        $b = new bairro();
        $ci = new cidade();
        $es = new estado();
        $f = new foto();
        $d = new descricao();
        $ta = new tipoassuntos();
        $fotos = array();
        $id_imovel = '';
        
        
        $dados['listestados'] = $es->listEstado();
        $dados['listtiposimoveis'] = $i->listTiposImoveisCadastrar();
        $dados['listtiposassuntos'] = $ta->listTiposAssuntos();

        // recebe o valor do campo e verifica se valor existe no banco de dados : se sim retorna o id do valoe existente se nao cadastra no banco e retorna o ultimo id
        $id = 0;
        if (isset($_GET['id']) && !empty($_GET)) {
            $id_cliente = addslashes($_GET['id']);
            $dados['cliente'] = $c->getDados($id_cliente);


            if (isset($_POST['estado']) && !empty($_POST['estado'])) {

                $id_estado = addslashes($_POST['estado']);

                //$id_estado = $es->verificarEstado($estado);
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
                //$id_tipo_via = $tp->verificarTipovia($tipovia);
            }

            if (isset($_POST['endereco']) && !empty($_POST['endereco'])) {
                $endereco = addslashes($_POST['endereco']);
                $proximidades = addslashes($_POST['proximidades']);


                $id_endereco = $e->verificarEndereco($id_cliente, $id_bairro, $endereco, $id_tipo_via, $proximidades);
            }



            if (isset($_POST['numero']) && !empty($_POST['numero']) || isset($_POST['tipoimovel']) && !empty($_POST['tipoimovel'])) {

                $numero = addslashes($_POST['numero']);
                $complemento = addslashes($_POST['complemento']);
                $cep = addslashes($_POST['cep']);
                $id_tipoimovel = addslashes($_POST['tipoimovel']);
                if (isset($_POST['areaconstruida'])) {
                    $areaconstruida = addslashes($_POST['areaconstruida']);
                    $areaconstruida = str_replace(",", ".", $areaconstruida);
                } else {
                    $areaconstruida = 0;
                }
                if (isset($_POST['areatotal'])) {
                    $areatotal = addslashes($_POST['areatotal']);
                    $areatotal = str_replace(",", ".", $areatotal);
                } else {
                    $areatotal = 0;
                }
                if (isset($_POST['valorimovel'])) {
                    $venda = addslashes($_POST['valorimovel']);
                    
                    $venda = str_replace(".", "", $venda);
                    $venda = str_replace(",", ".", $venda);
                } else {
                    $venda = 0;
                }
                if (isset($_POST['valoraluguel'])) {
                    $aluguel = addslashes($_POST['valoraluguel']);
                    $aluguel = str_replace(".", "", $aluguel);
                    $aluguel = str_replace(",", ".", $aluguel);
                } else {
                    $aluguel = 0;
                }
                $documentacao = addslashes($_POST['documentacaoimovel']);
                $id_tipo_assunto = addslashes($_POST['id_tipo_assunto']);
                $brevedescricao = addslashes($_POST['brevedescricao']);
                $sobreimovel = addslashes($_POST['sobreimovel']);
                $nivel = addslashes($_POST['nivel']);
                $formapgtovenda = addslashes($_POST['formapagamentovenda']);
                $formapgtoaluguel = addslashes($_POST['formapagamentoaluguel']);
                $status= addslashes($_POST['status']);

                $id_imovel = $i->cadastrarImovel($id_cliente, $id_tipoimovel, $id_endereco, $numero, $complemento, $areaconstruida, $areatotal, $documentacao, $venda, $aluguel, $id_tipo_assunto, $brevedescricao, $sobreimovel, $nivel, $formapgtovenda, $formapgtoaluguel, $status);
            }

            //insert de descricoes---------------------------------------------
            if (isset($_POST['dormitorio']) && !empty($_POST['dormitorio']) || isset($_POST['suite']) && !empty($_POST['suite']) || isset($_POST['garagem']) && !empty($_POST['garagem']) || isset($_POST['banheiro']) && !empty($_POST['banheiro'])) {
                $dormitorio = addslashes($_POST['dormitorio']);
                $suite = addslashes($_POST['suite']);
                $garagem = addslashes($_POST['garagem']);
                $banheiro = addslashes($_POST['banheiro']);
                if (isset($_POST['piscina']) && !empty($_POST['piscina'])) {
                    $piscina = addslashes($_POST['piscina']);
                } else {
                    $piscina = '';
                }
                if (isset($_POST['churrasqueira']) && !empty($_POST['churrasqueira'])) {
                    $churrasqueira = addslashes($_POST['churrasqueira']);
                } else {
                    $churrasqueira = '';
                }
                if (isset($_POST['agua']) && !empty($_POST['agua'])) {
                    $agua = addslashes($_POST['agua']);
                } else {
                    $agua = '';
                }
                if (isset($_POST['luz']) && !empty($_POST['luz'])) {
                    $luz = addslashes($_POST['luz']);
                } else {
                    $luz = '';
                }
                if (isset($_POST['internet']) && !empty($_POST['internet'])) {
                    $internet = addslashes($_POST['internet']);
                } else {
                    $internet = '';
                }
                if (isset($_POST['gas']) && !empty($_POST['gas'])) {
                    $gas = addslashes($_POST['gas']);
                } else {
                    $gas = '';
                }
                if (isset($_POST['energiasolar']) && !empty($_POST['energiasolar'])) {
                    $energiasolar = addslashes($_POST['energiasolar']);
                } else {
                    $energiasolar = '';
                }
                   if (isset($_POST['lavanderia']) && !empty($_POST['lavandeira'])) {
                    $lavanderia = addslashes($_POST['lavandeira']);
                } else {
                    $lavanderia = '';
                }


                 $d->cadastrarDescricao($id_imovel, $dormitorio, $suite, $garagem, $banheiro, $piscina, $churrasqueira, $agua, $luz, $internet, $gas,$lavanderia);
            }

            //envio de imagem ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

            if (isset($_FILES['arquivo1']) && !empty($_FILES['arquivo1'])) {
                $foto = $_FILES['arquivo1'];
            } else {
                $foto = array();
            }


            $f->enviarUrlPrincipalImagem($id_imovel, $foto);


            //aqui eh tratar o nome das fotos enviados
            //se contagem as fotos for maior de 0 faça que o nome do arquivo seja mudado com o tempo(relogio) crie criptografia randomica
            // e salve no diretorio upload   com o comando especifico do PHP
            if (isset($_FILES['arquivos']) && !empty($_FILES['arquivos'])) {
                $fotos = $_FILES['arquivos'];
                $f->enviarUrlImagem($id_imovel, $fotos);
            } else {

                $fotos = array();
            }




// fim do envio de imagem;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
        } 






        $this->loadTemplate_1('cadastrarimovelfacebook', $dados);
    }

}
