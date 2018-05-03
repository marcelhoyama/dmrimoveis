<?php

class descricao extends model {

    public function listDescricao() {
        try {
            $array = array();
            $sql = "SELECT * FROM descricoes";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function cadastrarDescricao($id_imovel, $dormitorio, $suite, $garagem, $banheiro) {
        try {

            $sql = "INSERT INTO descricoes SET garagem='$garagem', dormitorio='$dormitorio', banheiro='$banheiro', suite='$suite'";
            $sql = $this->db->query($sql);
            $id_descricoes = $this->db->lastInsertId();
            if ($sql->rowCount() > 0) {
                $sql1 = "INSERT INTO imoveis_descricoes SET id_imovel='$id_imovel', id_descricao='$id_descricoes'";
                $sql1 = $this->db->query($sql1);
                if ($sql1->rowCount() > 0) {
                    
                }
                
            }
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

}
