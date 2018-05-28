<?php

class pesquisarimoveisinquilinoController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
         $dados = array('erro'=>'');
         $i = new imovel();
       $c = new cliente();
       $iq=new inquilino();
         if(isset($_GET['id']) && !empty($_GET['id'])){
            $id= addslashes($_GET['id']);
          $dados['nome']=$iq->getNome($id);
            $dados['id_imovel'] =$iq->listImovelInquilino($id);
            
        $value = $dados['id_imovel'];
// ate aqui esta ok
        
        $dados['listImovel'] = $i->getDadosImovelInquilino($value);
        //faz a contagem de quantidade que tem no array
    //    for ($x = 0; $x < sizeof($value); $x++) {

    //       print_r($dados['listImovel'] = $i->getDadosImovel($value[$x]['id_imovel']));
     //   }
             
             
           
            
         }
     
       

    
         
           
        $this->loadTemplate('pesquisarimoveisinquilino', $dados);
    }
    
    
}

