<?php

class foto extends model {

    public function listFotos($id_imovel,$offset,$limit) {
        try {
            $array = array();
           $sql = "SELECT fotos.url_imagem FROM fotos WHERE id_imovel='$id_imovel' LIMIT $offset, $limit";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
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
    
    

   public function enviarUrlImagem($id_imovel, $url_imagem) {
        try {


            $sql = "INSERT INTO fotos SET id_imovel='$id_imovel', url_imagem='$url_imagem'";
     
         $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                return "Enviado com Sucesso!";
  
          } else {

                return false;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    
   }
        public function enviarUrlPrincipalImagem($id_imovel, $url_principal){
            try {


            $sql = "INSERT INTO fotos SET id_imovel='$id_imovel', url_principal='$url_principal'";
     
         $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                return "Enviado com Sucesso!";
  
          } else {

                return false;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        } 
        }
    

}
