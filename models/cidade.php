<?php

class cidade extends model {

    public function verificarCidade($id_estado, $cidade) {
        try {


            $sql2 = "SELECT c.id as id FROM cidades c JOIN estados e ON c.id_estado = e.id WHERE c.nome= :cidade AND c.id_estado= :id_estado";

            $sql2=$this->db->prepare($sql2);
             $sql2->bindValue(':cidade',$cidade);
             $sql2->bindValue(':id_estado',$id_estado);
             $sql2->execute();
            if ($sql2->rowCount() > 0) {
                $sql2 = $sql2->fetch();
              return $id=$sql2['id'];
 
                
            } else {
               $sql3 = "INSERT INTO cidades SET nome='$cidade', id_estado='$id_estado' ";
                $sql3=$this->db->prepare($sql3);
             $sql3->bindValue(':cidade',$cidade);
             $sql3->bindValue(':id_estado',$id_estado);
             $sql3->execute();
                $id_cidade = $this->db->lastInsertId();
                if ($sql3->rowCount() > 0) {

               return $id_cidade;
                }
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function updateCidade($id_estado,$id_cidade, $cidade) {
        try {

          
                $sql3 = "UPDATE cidades SET nome= :cidade, id_estado= :id_estado WHERE id= :id_cidade ";
                $sql3=$this->db->prepare($sql3);
             $sql3->bindValue(':cidade',$cidade);
             $sql3->bindValue(':id_estado',$id_estado);
             $sql3->bindValue(':id_cidade',$id_cidade);
             $sql3->execute();

           
                
                if ($sql3->rowCount() > 0) {

                }
            
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }
    
    public function listCidade() {
        try {
            $array = array();
            $sql = "SELECT * FROM cidades OrDER by nome";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

}
