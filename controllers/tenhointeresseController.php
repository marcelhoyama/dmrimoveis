<?php

class tenhointeresseController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');
 $i=new imovel();
        if (isset($_POST['id'])){
             $id_imovel= addslashes($_POST['id']);
             
             $dados['dadosImovel']=$i->getDadosImovel($id_imovel);
        }
        
        
        
       
    

        $this->loadView('tenhointeresse', $dados);
    }
    
    
}
