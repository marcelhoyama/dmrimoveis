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
            'assunto'=>'',
            'tipoimovel'=>'',
         
        );
       
        $dados['titulo']='DMR Imóveis em Cabreúva';
        $dados['buscaimovel']='';
        $i = new imovel();
     
        $c = new cidade();
        $dados['listCidade'] = $c->listCidade();

        $b = new bairro();
        $dados['listBairro'] = $b->listBairro();

     
        $dados['listVenda']= $i->listVenda();
        $dados['listAluguel']=$i->listAluguel();
       
$dados['listimovelvenda']=$i->listImovelVenda();
$dados['listimovelaluguel']=$i->listImovelaluguel();
      $dados['listimovelmisto']=$i->listImovelMisto();
      //$dados['listtiposimoveis']=listTiposImoveis();
        
    if (isset($_GET['filtros'])) {
        $filtros= $_GET['filtros'];
          
         

          if($dados['buscaimovel']=$i->buscarImovel($filtros) ==0){
                 $dados['buscaimovel']='' ;
                 $dados['erro']='Nada Encontrado!';
        }else{
            $dados['buscaimovel']=$i->buscarImovel($filtros);
        }

    }


        $this->loadTemplate('home', $dados);
    }

}
