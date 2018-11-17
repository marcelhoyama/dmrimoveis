<?php

class rotateController extends controller {

    public function __construct() {
        parent::__construct();
        $co = new corretor();
        $co->verificarLogin();
    }

    public function index() {
        $dados = array('ok' => '');

        $co = new corretor();
        $co->setLogado();
        $dados['usuario_nome'] = $co->getNome($_SESSION['dmrlogin']);

        $i = new imovel();
 if (isset($_GET['url']) && !empty($_GET['url'])) {
      
     $url= addslashes($GET_['url']);

     $f= new foto();
     $contador=array();
    $contador=$f->corrigeOrientacao($url);
    
    

 switch ($contador['contador'])
        {
            case 2:
                $rotation = 180;
                 
                break;

            case 3:
                $rotation = -90;
                break;

            case 1:
                $rotation = 90;
                break;
        
                case 4:
                    $rotation= -180;
                    break;
        }
        $contar=$contador['contador']+1;
        
        echo $rotation;
    if ($rotation != 0) {
           echo $rotation;
        $target = imagecreatefromjpeg("assets/images/".$url);
        $target = imagerotate($target, $rotation, 0);

        //Salva por cima da imagem original
        imagejpeg($target, "assets/images/".$url);

        //libera da memória
        imagedestroy($target);
        $target = null;
        
        $f->updatefoto($contador['id'], $contar, $url);
        
    }

 }

            $this->loadView('rotate', $dados);
        
    }

}
