<?php


class estado extends model {
    
    
        
        public function verificarEstado( $nome){
            try {
                
         $sql = "SELECT * FROM estados WHERE  nome='$nome'";
       
         $sql= $this->db->query($sql);
        if($sql->rowCount()>0){
           $sql=$sql->fetch();
            
           return $sql['id'];
           
                     
        }else{
          $sql = "INSERT INTO estados SET nome='".$nome."' ";
            $sql= $this->db->query($sql);
            $id = $this->db->lastInsertId();
        if($sql->rowCount()>0){
            return $id;
        }
        }
         
            } catch (Exception $ex) {
                echo "Falhou:".$ex->getMessage();
            }
         
        }
        
        
         public function updateEstado( $id,$nome){
            try {
                
         
          $sql = "UPDATE estados SET nome='".$nome."' WHERE id='$id' ";
            $sql= $this->db->query($sql);
            
        if($sql->rowCount()>0){
          //  $sql=$sql->fetch();
          //  return $sql=$sql['id'];
            
        }
        
         
            } catch (Exception $ex) {
                echo "Falhou:".$ex->getMessage();
            }
         
        }
        
        
        public function listEstado(){
            try{
                $array=array();
                 $sql = "SELECT * FROM estados ORDER BY nome ";
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


