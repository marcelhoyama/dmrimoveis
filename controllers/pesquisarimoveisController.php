<?php

class pesquisarimoveisController extends controller {

    public function __construct() {
        parent::__construct();
        $co = new corretor();
        $co->verificarLogin();
    }

    public function index() {
         $dados = array('erro' => '');
          $filtros=array(
            'codigo'=>'',
            'cidade'=>'',
            'bairro'=>'',
            'assunto'=>'',
            'tipoimovel'=>'',
         
        );
          
        $dados['buscaimovel']='';
         $dados['listimovel'] = '';
         
        $co = new corretor();
        $co->setLogado();
        $dados['usuario_nome'] = $co->getNome($_SESSION['dmrlogin']);

       
         
        $i = new imovel();
    $dados['totalimovel']=$i->totalImovel();
     $dados['totalvenda']=$i->totalvenda();
      $dados['totalaluga']=$i->totalaluga();
       $dados['totallivre']=$i->totalstatuslivre();
      $dados['totalbloqueado']=$i->totalstatusbloqueado();
      $dados['datas']=$i->datas();
      $dados['liststatus']=$i->listStatus();
        
$c = new cidade();
        $dados['listCidade'] = $c->listCidade();

        $b = new bairro();
        $dados['listBairro'] = $b->listBairro();

           
        
  
        
        if (isset($_GET['filtros']) && !empty($_GET['filtros'])) {
        $filtros= $_GET['filtros'];
          
       

          if($i->buscarImovelfull($filtros) ==0){
                 $dados['buscaimovel']='' ;
                 $dados['erro']='Nada Encontrado!';
        }else{
           $dados['buscaimovel']=$i->buscarImovelfull($filtros);
        }

        }else{
            $dados['listimovel']=$i->listimoveis();
        }
        
        
      
      
            
       
        $this->loadTemplate_1('pesquisarimoveis', $dados);
    }

}
