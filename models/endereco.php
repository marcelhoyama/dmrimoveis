<?php


class endereco extends model {
    
    
        
        public function verificarEndereco($id, $endereco){
            try {
                   $array=array();
          $sql = "SELECT c.nome, e.* FROM enderecos e JOIN clientes c ON c.id=e.id_cliente WHERE id_cliente='".$id."' AND endereco='".$endereco."'";
       
         $sql= $this->db->query($sql);
        if($sql->rowCount()>0){
            $array=$sql->fetchAll();
            
           
        }else{
             $sql= "INSERT INTO enderecos SET nome='".$nome."', id_bairro='".$id_bairro."' ";
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
        
        public function listEndereco(){
            try{
                $array=array();
                 $sql = "SELECT * FROM enderecos ";
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


