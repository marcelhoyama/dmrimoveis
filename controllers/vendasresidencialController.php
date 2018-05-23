<?php

class vendasresidencialController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');

        
        
         $f = new foto();
        $dados['listfotoprincipal'] = $f->listFotosPrincipalVendas();

       
        $this->loadTemplate('vendasresidencial', $dados);
    }
    
    
}
