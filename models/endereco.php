<?php

class endereco extends model {

    public function verificarEndereco($id_cliente, $id_bairro, $endereco, $id_tipo_via) {
        try {

            $sql = "SELECT c.nome, e.* FROM enderecos e "
                    . "JOIN clientes c "
                    . "ON c.id=e.id_cliente "
                    . "JOIN bairros b "
                    . "ON b.id=e.id_bairro "
                    . "WHERE e.id_cliente='" . $id_cliente . "' AND e.endereco='" . $endereco . "' AND e.id_bairro='" . $id_bairro . "' ";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $sql = $sql->fetch();

                return $sql['id'];
            } else {
                $sql1 = "INSERT INTO enderecos SET endereco='" . $endereco . "', id_bairro='" . $id_bairro . "', id_cliente='" . $id_cliente . "', id_tipo_via='$id_tipo_via' ";
                $sql1 = $this->db->query($sql1);
                $id = $this->db->lastInsertId();

                if ($sql1->rowCount() > 0) {
                    return $id;
                }
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

     public function updateEndereco($endereco,$cep, $proximidades, $id_endereco) {
        try {

                $sql1 = "UPDATE enderecos SET endereco='$endereco', cep='$cep', proximidades='$proximidades',"
                                         . "WHERE id='$id_endereco' ";
                $sql1 = $this->db->query($sql1);
                $id = $this->db->lastInsertId();

                if ($sql1->rowCount() > 0) {
                    return $id;
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

    public function getEndereco($id_endereco) {
        try {
            $array = array();
            $sql = "SELECT * ,b.nome bairro, c.nome cidade,c.id id_cidade, es.nome estado, es.id id_estado, t.nome via FROM enderecos e "
                    . "JOIN tipos_vias t ON e.id_tipo_via= t.id "
                    . "JOIN bairros b ON e.id_bairro=b.id "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON cb.id_cidade=c.id "
                    . "JOIN estados es ON c.id_estado=es.id "
                    . "WHERE e.id='$id_endereco' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

}
