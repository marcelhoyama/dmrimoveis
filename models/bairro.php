<?php


class bairro extends model {
    
    
        
        public function verificarBairro($id_cidade, $nome){
            try {
                   $array=array();
          $sql = "SELECT * FROM bairros  WHERE nome='".$nome."'";
       
         $sql= $this->db->query($sql);
        if($sql->rowCount()>0){
            $array=$sql->fetch();
            
           
        }else{
             $sql= "INSERT INTO bairros SET nome='".$nome."', id_cidade='".$id_cidade."' ";
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
        
     
        public function listBairro(){
            try{
                $array=array();
                 $sql = "SELECT * FROM bairros ";
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


