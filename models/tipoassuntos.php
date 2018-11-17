<?php

class tipoassuntos extends model {

    
    public function listTiposAssuntos() {
         try{
                $array=array();
                 $sql = "SELECT * FROM tipos_assuntos ";
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

?>
    
