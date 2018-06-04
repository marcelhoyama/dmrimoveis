<?php

class cadastrarimovelController extends controller {

    public function __construct() {
        parent::__construct();
        $c=new corretor();
      //  $c->verificarLogin();
    }

    public function index() {
$c=new corretor();
//$c->setLogado();
//$dados['usuario_nome']=$u->getNome($_SESSION['dmrlogin']);
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
$id_imovel='';
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
                $tipovia = addslashes($_POST['tipovia']);
                $id_tipo_via = $tp->verificarTipovia($tipovia);
            }
            if (isset($_POST['endereco']) && !empty($_POST['endereco'])) {
                $endereco = addslashes($_POST['endereco']);
                $proximidades= addslashes($_POST['proximidades']);
                
                $id_endereco = $e->verificarEndereco($id_cliente, $id_bairro, $endereco, $id_tipo_via, $proximidades);
            }
          


            if (isset($_POST['numero']) && !empty($_POST['numero']) || isset($_POST['tipoimovel']) && !empty($_POST['tipoimovel'])) {

                $numero = addslashes($_POST['numero']);
                $complemento = addslashes($_POST['complemento']);
                $cep = addslashes($_POST['cep']);
                $tipoimovel = addslashes($_POST['tipoimovel']);
                $areaconstruida = addslashes($_POST['areaconstruida']);
                $areatotal = addslashes($_POST['areatotal']);
                 $venda= addslashes($_POST['valorimovel']);
                $aluguel= addslashes($_POST['valoraluguel']);
                $documentacao = addslashes($_POST['documentacaoimovel']);
                
              

               $id_imovel = $i->cadastrarImovel($id_cliente, $tipoimovel, $id_endereco, $numero, $complemento, $areaconstruida, $areatotal, $documentacao, $venda, $aluguel);
         
         
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
                
          
                $dados['ok'] = $d->cadastrarDescricao($id_imovel, $dormitorio, $suite, $garagem, $banheiro,$piscina,$churrasqueira,$agua,$luz,$internet,$gas);
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
        if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {
            $fotos = $_FILES['arquivo'];
        } else {

            $fotos = array();
        }
       
        
        $f->enviarUrlImagem($id_imovel, $fotos);

// fim do envio de imagem;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
        
        }



$dados['listvia']=$tp->listTipovia();


        $this->loadTemplate('cadastrarimovel', $dados);
    }

}
