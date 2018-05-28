<?php

class venda extends model {

public function getDadosVenda( $id_venda){
try{
    $array=array();
$sql = "SELECT * FROM venda WHERE id = '$id_venda' ";
$sql = $this->db->query($sql);
if($sql->rowCount()>0){

$array = $sql->fetchAll();
return $array;
}else{
return "Preencha todos os campos!";
}

exit;

} catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
}

}

    }


