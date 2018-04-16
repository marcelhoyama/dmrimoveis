<?php

class homeController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');
$i = new imovel();
        if(isset($_POST['cidade']) && !empty($_POST['cidade'])){
           
        $i->buscarImovel($tipo_imovel, $dormitorio, $suite, $garagem, $valor, $area_construida, $areatotal, $bairro, $cidade);
            
        }
        
        $c = new cidade();
        $dados['listCidade']=$c->listCidade();
        
        $b=new bairro();
        $dados['listBairro']=$b->listBairro();
        
   
        
        $dados['listDormitorio']=$i->listDormitorio();
        $dados['listSuite']=$i->listSuite();
        $dados['listBanheiro']=$i->listBanheiro();
        $dados['listGaragem']=$i->listGaragem();
          $dados['listAreaConstruida']=$i->listAreaconstruida();
            $dados['listTotal']=$i->listTotal();
         $dados['listAluguel']=$i->listAluguel(); 
         $dados['listValorimovel']=$i->listValorimovel();
        
        $this->loadTemplate('home', $dados);
    }
    
    
}


