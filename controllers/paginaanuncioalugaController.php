<?php

class paginaanuncioalugaController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');
$t=new telefone();
        $i =new imovel();
        
        
         $f = new foto();
         
         $dados['celular']=$t->celular();
         $dados['fixo']=$t->fixo();
         $dados['email']=$t->email();
         
         
         if(isset($_GET['tipoimovel']) && !empty($_GET['tipoimovel'])){
             $tipoimovel= addslashes($_GET['tipoimovel']);
        if(empty( $dados['listimovel']=$i->listarImoveisLocacao($tipoimovel))){
        
            $dados['erro']="Ainda não temos! Desculpem...Deixe seu contato Aqui ->";
        }else{
        
            $dados['listimovel']=$i->listarImoveisLocacao($tipoimovel);
           
            
        }
         }
    

       
        $this->loadTemplate('paginaanuncioaluga', $dados);
    }
    
    
}
