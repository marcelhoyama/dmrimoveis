<?php

class aluguel extends model {

public function getDadosAluguel( $id_aluguel){
try{
    $array=array();

$sql = "SELECT * FROM aluguel WHERE id = :id_aluguel ";
 $sql=$this->db->prepare($sql);
             $sql->bindValue(':id_aluguel',$id_aluguel);
          
             $sql->execute();

$sql = $this->db->query($sql);
if($sql->rowCount()>0){

$array = $sql->fetchAll();
return $array;
}else{
return " ";
}

exit;

} catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
}

}

    }


