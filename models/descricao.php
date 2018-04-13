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

    public function cadastrarDescricao($id_imovel, $descricao) {
        try {
            foreach ($descricao as $key => $value) {


                $value;

                $sql = "INSERT INTO descricoes SET id_imovel='" . $id_imovel . "', item='" . $value . "'";
                $sql = $this->db->query($sql);
            }
            if ($sql->rowCount() > 0) {

                return "Cadastrado com sucesso!";
            }
           
                
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

}
