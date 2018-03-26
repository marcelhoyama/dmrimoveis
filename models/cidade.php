<?php


class cidade extends model {
    
    
        
        public function verificarCidade($id_estado,$nome){
            try {
                   $array=array();
          $sql = "SELECT * FROM cidades WHERE nome='".$nome."'";
       
         $sql= $this->db->query($sql);
        if($sql->rowCount()>0){
            $array=$sql->fetch();
            
           
        }else{
            $sql= "INSERT INTO cidades SET nome='".$nome."', id_estado='".$id_estado."' ";
             $sql= $this->db->query($sql);
             $id = $this->db->lastInsertId();
        if($sql->rowCount()>0){
            return $id;
        }
        }
         return $array;
            } catch (Exception $ex) {
                echo "Falhou:".$ex->getMessage();
            }
         
        }
        
        
        public function listCidade(){
            try{
                $array=array();
                 $sql = "SELECT * FROM cidades ";
            $sql = $this->db->query($sql);
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            return $array;
            } catch (Exception $ex) {
                echo 'Falhou:'.$ex->getMessage();
                        
            }
           
        
       
    }
       
}


