<?php

class cadastrarimovelController extends controller {

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


        $i = new imovel();
        $b = new bairro();
        $ci = new cidade();
        $es = new estado();
        $f = new foto();
        $d = new descricao();
        $ta = new tipoassuntos();

        $fotos = array();
        $valorimovel = '';
        $valoraluguel='';

        $dados['listestados'] = $es->listEstado();
        $dados['listtiposimoveis'] = $i->listTiposImoveisCadastrar();
        $dados['listtiposassuntos'] = $ta->listTiposAssuntos();

//id do nome da tabela estado sao paulo 
        $id_estado = '1';

        if (isset($_POST['cidade']) && !empty($_POST['cidade'])) {

            $cidade = trim(addslashes($_POST['cidade']));

            $id_cidade = $ci->verificarCidade($id_estado, $cidade);
        }

        if (isset($_POST['bairro']) && !empty($_POST['bairro'])) {

            $bairro = trim(addslashes($_POST['bairro']));
            $id_bairro = $b->verificarBairro($id_cidade, $bairro);
        }


//if(isset($_POST['valorimovel']) && !empty($_POST['valorimovel'])){
//    $valorimovel=trim(addslashes($_POST['valorimovel']));
//    
//}
//
//if(isset($_POST['valoraluguel']) && !empty($_POST['valoraluguel'])){
//    $valoraluguel=trim(addslashes($_POST['valoraluguel']));
//    
//}
       if (isset($_POST['tipoimovel']) && !empty($_POST['tipoimovel']) && (isset($_POST['id_tipo_assunto']) && !empty($_POST['id_tipo_assunto'])) && (isset($_POST['nivel']) && !empty($_POST['nivel']))) {


            $id_tipoimovel = addslashes($_POST['tipoimovel']);
            $id_tipo_assunto = addslashes($_POST['id_tipo_assunto']);
            $brevedescricao = trim(addslashes($_POST['brevedescricao']));
            $nivel = trim(addslashes($_POST['nivel']));
           $venda = addslashes($_POST['valorimovel']);
            $aluguel = addslashes($_POST['valoraluguel']);
            $status = trim(addslashes($_POST['status']));
   //envio de imagem foto principal do imovel;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

                if (isset($_FILES['arquivo1'])) {
            $foto = $_FILES['arquivo1'];
        } else {
            $foto = array();
        }
        
        //envio fotos dos imovel
        if (isset($_FILES['arquivos'])) {
            
            $fotos = $_FILES['arquivos'];
           
               
            }else{

            $fotos = array();
            }
// fim do envio de imagem;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

           if($i->cadastrarImovel($id_bairro, $id_tipoimovel, $id_tipo_assunto,$venda, $aluguel, $brevedescricao, $nivel, $foto, $fotos,$status)== true){
                 
                  $dados['ok'] ="Cadastrado com Sucesso! Pode cadastrar mais um novo.";
               //  header("Location:".BASE_URL."pesquisarimoveis");
           }else{
               $dados['erro'] ="Confira todos os campos!";
           }
               
            
           
    


        }

     
        $this->loadTemplate_1('cadastrarimovel', $dados);
    }

}
