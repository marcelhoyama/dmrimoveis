<?php

class bairro extends model {

    public function verificarBairro($id_cidade, $nome) {
        try {

            $sql = "SELECT id FROM bairros WHERE nome= :nome";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', $nome);

            $sql->execute();
            if ($sql->rowCount() > 0) {

                $sql = $sql->fetch();
                $id_bairro = $sql['id'];

                $sql7 = "INSERT INTO cidades_bairros SET id_bairro= :id_bairro, id_cidade= :id_cidade ";
                $sql7 = $this->db->prepare($sql7);
                $sql7->bindValue(':id_bairro', $id_bairro);
                $sql7->bindValue(':id_cidade', $id_cidade);
                $sql7->execute();

                if ($sql7->rowCount() > 0) {
                    
                }
                return $id_bairro;
            } else {
                $sql6 = "INSERT INTO bairros SET nome='" . $nome . "' ";
                $sql6 = $this->db->prepare($sql6);
                $sql6->bindValue(':nome', $nome);

                $sql6->execute();
                $id_bairro = $this->db->lastInsertId();
                if ($sql6->rowCount() > 0) {

                    $sql7 = "INSERT INTO cidades_bairros SET id_bairro= :id_bairro, id_cidade= :id_cidade ";
                    $sql7 = $this->db->prepare($sql7);
                    $sql7->bindValue(':id_bairro', $id_bairro);
                    $sql7->bindValue(':id_cidade', $id_cidade);
                    $sql7->execute();

                    if ($sql7->rowCount() > 0) {
                        
                    }
                    return $id_bairro;
                }
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function updateBairro($id_bairro, $nome) {
        try {


            $sql = "UPDATE bairros SET nome= :nome WHERE id= :id_bairro ";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':id_bairro', $id_bairro);

            $sql->execute();

            if ($sql->rowCount() > 0) {
                
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
