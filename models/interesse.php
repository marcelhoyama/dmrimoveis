<?php

class interesse extends model {

    public function cadastrarInteresse($id_tipo_imovel, $nome, $telefone, $celular, $email, $id_imovel, $id_tipo_assunto) {




        echo $sql = "INSERT INTO interesses SET id_tipo_imovel='$id_tipo_imovel',"
        . "nome= :nome, "
        . "telefone= :telefone, "
        . "celular= :celular, "
        . "email= :email, "
        . "id_tipo_assunto= :id_tipo_assunto, "
        . "status='Livre', "
        . "id_tipo_negociacao='1', "
        . "data_interesse=NOW()";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':celular', $celular);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id_tipo_assunto', $id_tipo_assunto);

        $sql->execute();
        $id_interesse = $this->db->lastInsertId();

        if ($sql->rowCount() > 0) {

            $sql = "INSERT INTO imoveis_interesses SET id_interesse= :id_interesse, id_imovel= :id_imovel";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_interesse', $id_interesse);
            $sql->bindValue(':id_imovel', $id_imovel);

            $sql->execute();
            if ($sql->rowCount() > 0) {
                
            }
        } else {
            return "Preencha todos os campos!";
        }
    }

    public function pesquisarInteressados($pesquisa) {
        try {
            $array = array();

            if (!empty($pesquisa)) {
                $sql = "SELECT *,a.id as id_assunto ,a.nome as nomeassunto,i.nome as nomeinteressado,i.id as id_interessado, tn.nome as nome_tipo_negociacao FROM interesses i "
                        . "JOIN tipos_assuntos a ON i.id_tipo_assunto=a.id "
                        . "JOIN tipos_negociacoes tn ON tn.id=i.id_tipo_negociacao "
                        . "WHERE i.id_tipo_assunto = :pesquisa";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':pesquisa', $pesquisa);

                $sql->execute();
                $sql = $this->db->query($sql);
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }

                return $array;
            } else {
                return "nada encontrado!";
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function getListInteressados() {
        try {
            $array = Array();
            $sql = "SELECT * FROM tipos_assuntos ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function excluirInteressado($id_interessado) {
        try {


            $sql = "SELECT * FROM imoveis_interesses WHERE id_interesse= :id_interessado";

            $sql = $this->db->prepare($sql);

            $sql->bindValue(':id_interessado', $id_interessado);

            $sql->execute();
            if ($sql->rowCount() > 0) {
                $row = $sql->fetch();
                $id = $row['id'];
            }
            $sql = "DELETE FROM imoveis_interesses WHERE id= :id";
            $sql = $this->db->prepare($sql);

            $sql->bindValue(':id', $id);

            $sql->execute();
            if ($sql->rowCount() > 0) {
                $sql = "DELETE FROM interesses WHERE id= :id_interessado ";
                $sql = $this->db->prepare($sql);

                $sql->bindValue(':id_interessado', $id_interessado);

                $sql->execute();
            } else {
                return " Nao foi possivel excluir!";
            }
        } catch (Exception $ex) {
            echo"Falhou:" . $ex->getMessage();
        }
    }

    public function getInteressados($id_interessado) {
        try {
            $array = array();
            $sql = "SELECT *,im.id as id_imovel,ti.nome as tipo_imovel,a.id as id_assunto ,a.nome as nomeassunto,i.nome as nomeinteressado,i.id as id_interessado, tn.nome as nome_tipo_negociacao FROM interesses i "
                    . "LEFT JOIN tipos_assuntos a ON i.id_tipo_assunto=a.id "
                    . "LEFT JOIN tipos_negociacoes tn ON tn.id=i.id_tipo_negociacao "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN imoveis_interesses ii ON ii.id_interesse=i.id "
                    . "LEFT JOIN imoveis im ON im.id=ii.id_imovel "
                    . "WHERE i.id= :id_interessado";
            $sql = $this->db->prepare($sql);

            $sql->bindValue(':id_interessado', $id_interessado);

            $sql->execute();
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function getListnegociacao() {
        try {
            $array = array();
            $sql = "SELECT * FROM tipos_negociacoes";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function getListAssunto() {
        try {
            $array = array();
            $sql = "SELECT * FROM tipos_assuntos";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function editarInteressado($id_interessado, $nome, $id_tipo_assunto, $telefone, $celular, $email, $id_tipo_imovel, $id_tipo_negociacao, $status) {
        try {
            $sql = "UPDATE interesses SET nome= :nome, "
                    . "id_tipo_assunto= :id_tipo_assunto, "
                    . "telefone= :telefone, "
                    . "celular= :celular, "
                    . "email= :email, "
                    . "id_tipo_imovel= :id_tipo_imovel, "
                    . "status= :status, "
                    . "id_tipo_negociacao= :id_tipo_negociacao "
                    . "WHERE id= :id_interessado";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':id_tipo_assunto', $id_tipo_assunto);
            $sql->bindValue(':telefone', $telefone);
            $sql->bindValue(':celular', $celular);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':id_tipo_imovel', $id_tipo_imovel);
            $sql->bindValue(':status', $status);
            $sql->bindValue(':id_tipo_negociacao', $id_tipo_negociacao);
            $sql->bindValue(':id_interessado', $id_interessado);


            $sql->execute();
            if ($sql->rowCount() > 0) {
                header("Location:" . BASE_URL . "pesquisarinteressados");
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function cadastrarContato($id_tipo_imovel, $nome, $telefone, $celular, $email, $id_tipo_assunto, $mensagem) {

        echo $sql = "INSERT INTO interesses SET id_tipo_imovel= :id_tipo_imovel,"
        . "nome= :nome, "
        . "telefone= :telefone, "
        . "celular= :celular, "
        . "email= :email, "
        . "id_tipo_assunto= :id_tipo_assunto,"
        . "mensagem= :mensagem, "
        . "data_interesse=NOW()";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_tipo_imovel', $id_tipo_imovel);
        $sql->bindValue(':nome', $nome);

        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':celular', $celular);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id_tipo_assunto', $id_tipo_assunto);
        $sql->bindValue(':mensagem', $mensagem);

        $sql->execute();

        

        if ($sql->rowCount() > 0) {
            
        }
    }

}
