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
            $id_descricoes = $this->db->insertLastId();
            if ($sql->rowCount() > 0) {
                $sql = "INSERT INTO imoveis_decricoes id_imovel='$id_imovel', id_descricao='$id_descricoes'";
                $sql = $this->db->query($sql);
                if ($sql->rowCount() > 0) {
                    
                }
                
            }
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

}
