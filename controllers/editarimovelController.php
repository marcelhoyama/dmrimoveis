<?php

class editarimovelController extends controller {

    public function __construct() {
        parent::__construct();
        $co = new corretor();
        $co->verificarLogin();
    }

    public function index() {
        $dados = array('ok' => '');
        $co = new corretor();
        $co->setLogado();
        $dados['usuario_nome'] = $co->getNome($_SESSION['dmrlogin']);

        $i = new imovel();
        $e = new endereco();
        $f = new foto();
        $c = new cliente();
        $es = new estado();
        $ci = new cidade();
        $b = new bairro();
        $tv = new tipovia();
        $d = new descricao();
        $ta = new tipoassuntos();





        // recebe o valor do campo e verifica se valor existe no banco de dados : se sim retorna o id do valoe existente se nao cadastra no banco e retorna o ultimo id
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id_imovel = addslashes($_GET['id']);
            $dados['listimovel'] = $i->getDadosImovel($id_imovel);

            $valueimovel = $dados['listimovel'];
            
            $id_cliente = $valueimovel['id_cliente'];
            $venda = $valueimovel['venda'];
            $aluguel = $valueimovel['aluguel'];
            $dados['status']=$valueimovel['status'];
             $id_endereco = $valueimovel['id_endereco'];
             
            $dados['listcliente'] = $c->getDados($id_cliente);

           
$dados['listtiposassuntos']=$ta->listTiposAssuntos();


            ($dados['listendereco'] = $e->getEndereco($id_endereco));

            $value = $dados['listendereco'];
            // $id_estado = $value['id_estado'];
            $id_cidade = $value['id_cidade'];
            $id_bairro = $value['id_bairro'];
            $id_tipovia = $value['id_tipo_via'];
            $dados['listestados'] = $es->listEstado();
            $dados['listtiposimoveiscadastrados'] = $i->listTiposImoveis($id_imovel);
            $dados['listtiposimoveis'] = $i->listTiposImoveisCadastrar();
            $dados['listvia'] = $tv->listTipovia();
            $dados['fotoprincipal'] = $f->listFotoPrincipal($id_imovel);

            $dados['paginas'] = '';
            $dados['paginaAtual'] = 1;
            $offset = 0; //pagina começa
            $limit = 4;  // por pagina
            $dados['listfotos'] = $f->listFotos($id_imovel, $offset, $limit); // faz limitacao por pagina pela query
            if (isset($_GET['p']) && !empty($_GET['p'])) {
                $dados['paginaAtual'] = intval($_GET['p']); //intval  todo valor do p  transformar em inteiros

                $offset = ($dados['paginaAtual'] * $limit) - $limit;

                $total = $f->getTotal($id_imovel);  //ver o total de items
                $dados['paginas'] = ceil($total / $limit);  // ceil = arredonda o valor para cima
            }
        }


        if (!empty($_POST['tipovia'])) {

            if (isset($_POST['estado']) && !empty($_POST['estado'])) {

                $id_estado = addslashes($_POST['estado']);

                // $es->updateEstado($id_estado);
            }


            if (isset($_POST['cidade']) && !empty($_POST['cidade'])) {

                $cidade = addslashes($_POST['cidade']);

                $ci->updateCidade($id_estado, $id_cidade, $cidade);
            }


            if (isset($_POST['bairro']) && !empty($_POST['bairro'])) {

                $bairro = addslashes($_POST['bairro']);
                 $b->updateBairro($id_bairro, $bairro);
            }
//update endereco...................
            if (isset($_POST['cep']) && !empty($_POST['cep']) || isset($_POST['endereco']) && !empty($_POST['endereco']) || isset($_POST['proximidades']) && !empty($_POST['proximidades']) || isset($_POST['tipovia']) && !empty($_POST['tipovia'])) {

                $endereco = addslashes($_POST['endereco']);
                $cep = addslashes($_POST['cep']);
                $proximidades = addslashes($_POST['proximidades']);
                $id_tipovia = addslashes($_POST['tipovia']);
                $e->updateEndereco($endereco, $cep, $proximidades, $id_endereco, $id_bairro, $id_tipovia);
            }
//fim update endereco............................
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
          // $fotos = array();
       
            if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])) {
           
            
                $fotos = $_FILES['arquivo'];
                
            } else {

                $fotos = array();
            }

 
            $f->enviarUrlImagem($id_imovel, $fotos);

// fim do envio de imagem;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// 
// 
  echo $id= addslashes($_POST['id_tipo_imovel']);
            //update imovel==============================================
            if (isset($_POST['id_tipo_imovel']) && !empty($_POST['id_tipo_imovel']) || isset($_POST['numero']) && !empty($_POST['numero']) || isset($_POST['complemento']) && !empty($_POST['complemento'])) {

                $numero = addslashes($_POST['numero']);
                $complemento = addslashes($_POST['complemento']);

                $id_tipo_imovel = addslashes($_POST['id_tipo_imovel']);
                $areaconstruida = addslashes($_POST['areaconstruida']);
                $areatotal = addslashes($_POST['areatotal']);
                $venda = addslashes($_POST['valorimovel']);

                $aluguel = addslashes($_POST['valoraluguel']);
                $documentacao = addslashes($_POST['documentacaoimovel']);
                $status= addslashes($_POST['status']);



                $i->updateImovel($id_imovel, $id_tipo_imovel, $numero, $complemento, $areaconstruida, $areatotal, $documentacao, $venda, $aluguel,$status);
//fim update imovel=============================================================
            }


//update de descricoes---------------------------------------------
            if (isset($_POST['dormitorio']) && !empty($_POST['dormitorio']) || isset($_POST['suite']) && !empty($_POST['suite']) || isset($_POST['garagem']) && !empty($_POST['garagem']) || isset($_POST['banheiro']) && !empty($_POST['banheiro'])) {

                $dormitorio = addslashes($_POST['dormitorio']);
                $suite = addslashes($_POST['suite']);
                $garagem = addslashes($_POST['garagem']);
                $banheiro = addslashes($_POST['banheiro']);
                if (isset($_POST['piscina']) && !empty($_POST['piscina'])) {
                    $piscina = addslashes($_POST['piscina']);
                } else {
                    $piscina = ' ';
                }
                if (isset($_POST['churrasqueira']) && !empty($_POST['churrasqueira'])) {
                    $churrasqueira = addslashes($_POST['churrasqueira']);
                } else {
                    $churrasqueira = ' ';
                }
                if (isset($_POST['agua']) && !empty($_POST['agua'])) {
                    $agua = addslashes($_POST['agua']);
                } else {
                    $agua = ' ';
                }
                if (isset($_POST['luz']) && !empty($_POST['luz'])) {
                    $luz = addslashes($_POST['luz']);
                } else {
                    $luz = ' ';
                }
                if (isset($_POST['internet']) && !empty($_POST['internet'])) {
                    $internet = addslashes($_POST['internet']);
                } else {
                    $internet = ' ';
                }
                if (isset($_POST['gas']) && !empty($_POST['gas'])) {
                    $gas = addslashes($_POST['gas']);
                } else {
                    $gas = ' ';
                }
                if (isset($_POST['energiasolar']) && !empty($_POST['energiasolar'])) {
                    $energiasolar = addslashes($_POST['energiasolar']);
                } else {
                    $energiasolar = ' ';
                }

                $dados['ok'] = $d->updateDescricao($id_imovel, $dormitorio, $suite, $garagem, $banheiro, $piscina, $churrasqueira, $agua, $luz, $internet, $gas);
            }
            $dados['ok'] = 'Alterado com Sucesso';
            header("Location:" . BASE_URL . "editarimovel?id=" . $id_imovel);
        } else {
            
        }

        $this->loadTemplate_1('editarimovel', $dados);
    }

}
