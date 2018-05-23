<?php

class tenhointeresseController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');
 
        if (isset($_GET['id'])){
            echo $id_imovel= addslashes($_GET['id']);
        }
        $this->loadTemplate('tenhointeresse', $dados);
    }
    
    
}
