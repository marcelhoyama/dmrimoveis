<?php

class bairro extends model {

    public function verificarBairro($id_bairro_cidade, $nome) {
        try {

            $sql5 = "SELECT b.id FROM bairros b "
                    . "JOIN bairro_tem_cidades a "
                    . "ON b.id=a.id_bairro "
                    . "JOIN cidades c "
                    . "ON a.id=c.id_cidade "
                    . "WHERE b.nome='" . $nome . "' AND a.id_cidade='" . $id_bairro_cidade . "'";

            $sql5 = $this->db->query($sql5);
            if ($sql5->rowCount() > 0) {

                $id = ['id'];
                return $id;
            } else {
                $sql6 = "INSERT INTO bairros SET nome='" . $nome . "' ";
                $sql6 = $this->db->query($sql6);
                $id_bairro = $this->db->lastInsertId();
                if ($sql6->rowCount() > 0) {
                    
                    $sql7 = "UPDATE bairro_tem_cidade SET id_bairro='" . $id_bairro . "' WHERE id='" . $id_bairro_cidade . "' ";
                    $sql7 = $this->db->query($sql7);

                    if ($sql7->rowCount() > 0) {
                        
                    }
                }
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listBairro() {
        try {
            $array = array();
            $sql = "SELECT * FROM bairros ";
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
