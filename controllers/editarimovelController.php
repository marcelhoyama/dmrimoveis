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

        $f = new foto();

        $es = new estado();
        $ci = new cidade();
        $b = new bairro();

        $d = new descricao();
        $ta = new tipoassuntos();




       



            $id_estado = '1';



            if (isset($_POST['cidade']) && !empty($_POST['cidade'])) {

                $cidade = addslashes($_POST['cidade']);

                $id_cidade=$ci->verificarCidade($id_estado, $cidade);
            }


            if (isset($_POST['bairro']) && !empty($_POST['bairro'])) {

                $bairro = addslashes($_POST['bairro']);
                $id_bairro=$b->verificarBairro($id_cidade, $bairro);
            }



            // echo $id = addslashes($_POST['id_tipo_imovel']);
            //update imovel==============================================
           if (isset($_POST['id_tipo_imovel']) && !empty($_POST['id_tipo_imovel']) || (isset($_POST['id_tipo_assunto']) && !empty($_POST['id_tipo_assunto'])) || (isset($_POST['nivel']) && !empty($_POST['nivel'])) || (isset($_POST['status']) && !empty($_POST['status']))|| (isset($_POST['id_tipo_assunto']) && !empty($_POST['id_tipo_assunto']))|| (isset($_POST['brevedescricao']) && !empty($_POST['brevedescricao']))) {
    $id_tipo_imovel = addslashes($_POST['id_tipo_imovel']);

                $status = addslashes($_POST['status']);
                $id_tipo_assunto = addslashes($_POST['id_tipo_assunto']);
                $brevedescricao = addslashes($_POST['brevedescricao']);

                $nivel = addslashes($_POST['nivel']);
$valorimovel= addslashes(trim($_POST['valorimovel']));
$valoraluguel= addslashes(trim($_POST['valoraluguel']));
                //aqui eh tratar o nome das fotos enviados
                //se contagem as fotos for maior de 0 faça que o nome do arquivo seja mudado com o tempo(relogio) crie criptografia randomica
                // e salve no diretorio upload   com o comando especifico do PHP
                // $fotos = array();
//envio de imagem ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

                  if (isset($_FILES['arquivo1']) && !empty($_FILES['arquivo1'])) {
                $foto = $_FILES['arquivo1'];
            } else {
                $foto = array();
            }
            
                if (isset($_FILES['arquivos']) && !empty($_FILES['arquivos'])) {
                    $fotos = $_FILES['arquivos'];
                } else {
                    //$f->enviarUrlImagem($id_imovel, $fotos);
                    $fotos = array();
                }

// fim do envio de imagem;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

                $dados=$i->updateImovel($_GET['id'], $id_tipo_imovel, $status, $id_tipo_assunto,$valorimovel, $valoraluguel, $brevedescricao,$foto, $fotos, $nivel, $id_bairro);

          //     header("Location:".BASE_URL."editarimovel?id=".$dado['id']);
$dados['ok'] = 'Alterado com Sucesso';
            }



//fim update imovel=============================================================
            
            
             // recebe o valor do campo e verifica se valor existe no banco de dados : se sim retorna o id do valoe existente se nao cadastra no banco e retorna o ultimo id
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id_imovel = addslashes($_GET['id']);
            $dados['listimovel'] = $i->getDadosImovel($id_imovel);

            $valueimovel = $dados['listimovel'];

            $dados['status'] = $valueimovel['status'];


            $dados['listtiposassuntos'] = $ta->listTiposAssuntos();

            // $id_estado = $valueimovel['id_estado'];
            $id_cidade = $valueimovel['id_cidade'];
            $id_bairro = $valueimovel['id_bairro'];

            $dados['listestados'] = $es->listEstado();
            $dados['listtiposimoveiscadastrados'] = $i->listTiposImoveis($id_imovel);
            $dados['listtiposimoveis'] = $i->listTiposImoveisCadastrar();

            $dados['fotoprincipal'] = $f->listFotoPrincipal($id_imovel);
            
$dados['totalfotos']=$f->getTotal($id_imovel);
            $dados['listfotos'] = $f ->listFotos($id_imovel);

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

            $this->loadTemplate_1('editarimovel', $dados);
        }
    }

}
