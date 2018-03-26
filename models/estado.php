<?php


class estado extends model {
    
    
        
        public function verificarEstado( $nome){
            try {
                   $array=array();
          $sql = "SELECT * FROM estados WHERE  nome='".$nome."'";
       
         $sql= $this->db->query($sql);
        if($sql->rowCount()>0){
            $array=$sql->fetch();
            
           
        }else{
           $sql = "INSERT INTO estados SET nome='".$nome."' ";
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
        
        public function listEstado(){
            try{
                $array=array();
                 $sql = "SELECT * FROM estados ";
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


