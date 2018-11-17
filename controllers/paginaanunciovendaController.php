<?php

class paginaanunciovendaController extends controller{


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
         
         $dados['tipoassunto']='Venda';
         if(isset($_GET['tipoimovel']) && !empty($_GET['tipoimovel'])){
             $tipoimovel= addslashes($_GET['tipoimovel']);
              $dados['tipoimovel']=$tipoimovel;
        if(empty( $dados['listimovel']=$i->listarImoveisVenda($tipoimovel))){
        
            $dados['erro']="Ainda não temos! Desculpem...Deixe seu contato Aqui ->";
        }else{
         
            $dados['listimovel']=$i->listarImoveisVenda($tipoimovel);
      
        }
         }
    

       
        $this->loadTemplate('paginaanunciovenda', $dados);
    }
    
    
}
