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
        $dados['listVenda']= $i->listVenda();
        $dados['listAluguel']=$i->listAluguel();
       
$dados['listimovelvenda']=$i->listImovelVenda();
$dados['listimovelaluguel']=$i->listImovelAluguel();
      $dados['listimovelcomercial']=$i->listImovelComercial();
        
    if (isset($_GET['filtros'])) {
         $filtros= $_GET['filtros'];
          
         

           $dados['buscaimovel']=$i->buscarImovel($filtros);
        }




        $this->loadTemplate('home', $dados);
    }

}
