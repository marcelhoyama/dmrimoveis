<?php

class homeController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');
$i = new imovel();
        if(isset($_POST['cidade']) && !empty($_POST['cidade'])){
           $dormitorio= addslashes($_POST['dormitorio']);
          echo  $cidade= addslashes($_POST['cidade']);
        exit;
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
        
         
         $f=new foto();
         $dados['listfotoprincipal']=$f->listFotosPrincipal();
  $id_imovel['id_imovel']=$dados['listfotoprincipal'];
    
         $dados['tipo_imovel']=$i->listTipoImovel($id_imovel);
       echo 'id-venda'. $id_venda['id_venda']=$dados['tipo_imovel'];
         
         $dados['listvenda']=$i->listTipoVenda($id_venda);
         
        $this->loadTemplate('home', $dados);
    }
    
    
}


