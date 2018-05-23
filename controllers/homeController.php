<?php

class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array('erro' => '');
        $filtros=array(
            'valorimovel'=>'',
            'cidade'=>'',
            'bairro'=>'',
            'areaconstruida'=>'',
            'dormitorio'=>'',
            'suite'=>'',
            'tipoimovel'=>'',
            'banheiro'=>'',
            'garagem'=>'',
            'areatotal'=>'',
            'valoraluguel'=>''
        );
        $i = new imovel();
        if (isset($_GET['filtros'])) {
          $filtros= $_GET['filtros'];
          
         

          //  $dados['buscaimovel']=$i->buscarImovel($filtros);
        }
       

        $c = new cidade();
        $dados['listCidade'] = $c->listCidade();

        $b = new bairro();
        $dados['listBairro'] = $b->listBairro();



        $dados['listDormitorio'] = $i->listDormitorio();
        $dados['listSuite'] = $i->listSuite();
        $dados['listBanheiro'] = $i->listBanheiro();
        $dados['listGaragem'] = $i->listGaragem();
        $dados['listAreaConstruida'] = $i->listAreaconstruida();
        $dados['listTotal'] = $i->listTotal();
        $dados['listAluguel'] = $i->listAluguel();
        $dados['listValorimovel'] = $i->listValorimovel();

$dados['listdadosimovel']=$i->ListDadosImovel();
        $f = new foto();
        $dados['listfotoprincipal'] = $f->listFotosImovel();


        


        $value = $dados['listfotoprincipal'];

        for ($x = 0; $x < sizeof($value); $x++) {

           print_r($dados['listImovel'] = $i->getDadosImovel($value[$x]['id_imovel']));
        }

if(isset($_POST['nome'])){
    echo $nome= addslashes($_POST['nome']);
exit;
    
}



        $this->loadTemplate('home', $dados);
    }

}
