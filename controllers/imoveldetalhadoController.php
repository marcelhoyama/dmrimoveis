<?php

class imoveldetalhadoController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');
$t=new telefone();
       $f =new foto();
       $i=new imovel();
       $offset='';
       $limit='';
       
       if(isset($_GET['id'])){
          $id_imovel= trim(addslashes($_GET['id']));
       
          
          $dados['telefone']=$t->fixo();
          $dados['endereco']=$t->endereco();
          $dados['celular']=$t->celular();
          
         $dados['listfotoimovel']=$f->listFotosImovel($id_imovel);
        $dados['listimovel']=$i->listTipoImovel($id_imovel);
         $dados['listfotos']=$f->listFotos($id_imovel);
       
       }
        $this->loadTemplate('imoveldetalhado', $dados);
    }
    
    
}
