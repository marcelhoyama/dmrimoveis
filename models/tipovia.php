<?php

class tipovia extends model {

    
    public function listTipovia() {
         try{
                $array=array();
                 $sql = "SELECT nome FROM tipos_vias ";
            $sql = $this->db->query($sql);
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            return $array;
            } catch (Exception $ex) {
                echo 'Falhou:'.$ex->getMessage();
                        
            }
        
    }
    
       public function verificarTipovia( $tipovia){
            try {
                
         $sql = "SELECT nome FROM tipos_vias WHERE  nome='$nome'";
       
         $sql= $this->db->query($sql);
        if($sql->rowCount()>0){
           $sql=$sql->fetch();
            
           return $sql['id'];
           
                     
        }else{
          $sql = "INSERT INTO tipos_vias SET nome='".$nome."' ";
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



}

?>
    
