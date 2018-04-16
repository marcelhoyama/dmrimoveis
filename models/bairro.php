<?php

class bairro extends model {

    public function verificarBairro($id_bairro_cidade, $nome) {
        try {

            $sql = "SELECT b.id FROM bairros b "
                    . "JOIN bairro_tem_cidade a "
                    . "ON b.id=a.id_bairro "
                    . "JOIN cidades c "
                    . "ON a.id_cidade=c.id "
                    . "WHERE b.nome='$nome' AND a.id_cidade='$id_bairro_cidade'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {

                $sql = $sql->fetch();
                return $sql['id'];
            } else {
                $sql6 = "INSERT INTO bairros SET nome='" . $nome . "' ";
                $sql6 = $this->db->query($sql6);
                $id_bairro = $this->db->lastInsertId();
                if ($sql6->rowCount() > 0) {

                    $sql7 = "UPDATE bairro_tem_cidade SET id_bairro='" . $id_bairro . "' WHERE id_cidade='" . $id_bairro_cidade . "' ";
                    $sql7 = $this->db->query($sql7);

                    if ($sql7->rowCount() > 0) {
                        
                    }
                    return $id_bairro;
                }
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listBairro() {
        try {
            $array = array();
            $sql = "SELECT nome FROM bairros ";
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
