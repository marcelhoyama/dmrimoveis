<?php

class nossosservicosController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');

       $t=new telefone();
           $dados['telefone']=$t->fixo();
           $dados['celular']=$t->celular();
           $dados['email']=$t->email();
           $dados['endereco']=$t->endereco();
        $this->loadTemplate('nossosservicos', $dados);
    }
    
    
}
