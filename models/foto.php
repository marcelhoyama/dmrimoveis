<?php

class foto extends model {

    public function listFotos($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT url_imagem FROM fotos WHERE id_imovel='$id_imovel'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listFotosImovel($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT * FROM fotos WHERE id_imovel='$id_imovel' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }
  public function listFotoPrincipal($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT url_foto_principal FROM imoveis WHERE id='$id_imovel' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }
      
    
     public function listFotosPrincipalVendas() {
        try {
            $array = array();
            $sql = "SELECT f.id_imovel,f.url_principal,i.id_venda,i.id_aluguel,i.tipo_imovel,i.area_total FROM fotos f "
                ."join imoveis i ON i.id=f.id_imovel  WHERE url_principal AND id_venda IS NOT NULL  ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }
    public function getTotal($id_imovel) {
        try {

            $sql = "SELECT COUNT(fotos.url_imagem) as c FROM fotos WHERE id_imovel='$id_imovel'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $sql = $sql->fetch();
            }
            return $sql['c'];
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function enviarUrlImagem($id_imovel, $fotos) {
        try {
          
        
            if (!empty($fotos['tmp_name'][0])) {
               
                
                  for ($q = 0; $q < count($fotos['tmp_name']); $q++) {
            $tipo = $fotos['type'][$q];
                    if (in_array($tipo, array('image/jpeg', 'image/png'))) {
                        $tmpname = md5(time() . rand(0, 999)) . '.jpg';
                        $diretorio = "upload/";
                        move_uploaded_file($fotos['tmp_name'][$q], $diretorio . $tmpname);
                        $sql = "INSERT INTO fotos SET id_imovel='$id_imovel', url_imagem='$tmpname'";

                        $sql = $this->db->query($sql);
                        if ($sql->rowCount() > 0) {
                            return "Enviado com Sucesso!";
                        } else {

                            return false;
                        }
                    }
                }
             }
         
        }
         catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
}


    public function enviarUrlPrincipalImagem($id_imovel, $foto) {
        try {

            //aqui eh tratar o nome das fotos enviados
            //se contagem as fotos for maior de 0 faça que o nome do arquivo seja mudado com o tempo(relogio) crie criptografia randomica
            // e salve no diretorio upload   com o comando especifico do PHP




            if (!empty($foto['tmp_name'][0])) {
               

                {
               
                    $tipo = $foto['type'];
                   
                    if (in_array($tipo, array('image/jpeg', 'image/png'))) {
                       $tmpname = md5(time() . rand(0, 999)) . '.jpg';
                       $diretorio = "upload/fotos_principais/";
                     
                        move_uploaded_file($foto['tmp_name'], $diretorio . $tmpname);
                        $sql = "UPDATE imoveis SET id='$id_imovel', url_foto_principal='$tmpname'";

                        $sql = $this->db->query($sql);
                        if ($sql->rowCount() > 0) {
                            return "Enviado com Sucesso!";
                        } else {

                            return false;
                        }
                    }
                }
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

}
