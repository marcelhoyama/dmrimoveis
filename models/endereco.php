<?php

class endereco extends model {

    public function verificarEndereco($id_cliente, $id_bairro, $endereco) {
        try {

            $sql = "SELECT c.nome, e.* FROM enderecos e "
                    . "JOIN clientes c "
                    . "ON c.id=e.id_cliente "
                    . "JOIN bairros b "
                    . "ON b.id=e.id_bairro "
                    . "WHERE e.id_cliente='" . $id_cliente . "' AND e.endereco='" . $endereco . "' AND e.id_bairro='" . $id_bairro . "'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $sql = $sql->fetch();

                return $sql['id'];
            } else {
                $sql = "INSERT INTO enderecos SET endereco='" . $endereco . "', id_bairro='" . $id_bairro . "', id_cliente='" . $id_cliente . "' ";
                $sql = $this->db->query($sql);
                $id = $this->db->lastInsertId();

                if ($sql->rowCount() > 0) {
                    return $id;
                }
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listEndereco() {
        try {
            $array = array();
            $sql = "SELECT * FROM enderecos ";
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
