<?php

class cidade extends model {

    public function verificarCidade($id_estado, $cidade) {
        try {

            $sql2 = "SELECT c.id FROM cidades c JOIN estados e ON c.id_estado = e.id WHERE c.nome='$cidade' AND c.id_estado='$id_estado'";

            $sql2 = $this->db->query($sql2);
            if ($sql2->rowCount() > 0) {
                $sql2 = $sql2->fetch();
              return $id=$sql2['id'];
 
                
            } else {
                $sql3 = "INSERT INTO cidades SET nome='$cidade', id_estado='$id_estado' ";
                $sql3 = $this->db->query($sql3);
                $id_cidade = $this->db->lastInsertId();
                if ($sql3->rowCount() > 0) {

                 $sql4 = "INSERT INTO cidades_bairros SET id_cidade='" . $id_cidade . "'";
                    $sql4 = $this->db->query($sql4);
                    $id = $this->db->lastInsertId();
                    if ($sql4->rowCount() > 0) {
                        return $id;
                    }
                }
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function updateCidade($id_cidade, $cidade) {
        try {

          
                $sql3 = "UPDATE cidades SET nome='$cidade' WHERE id_cidade='$id_cidade' ";
                $sql3 = $this->db->query($sql3);
                $id_cidade = $this->db->lastInsertId();
                if ($sql3->rowCount() > 0) {

                }
            
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }
    
    public function listCidade() {
        try {
            $array = array();
            $sql = "SELECT * FROM cidades ";
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
