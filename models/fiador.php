<?php

class fiador extends model {

    public function editarFiador($rg, $nome, $telefone, $telefone2, $email, $id) {
        try {
            $sql = "UPDATE fiadores SET nome='" . $nome . "', email='" . $email . "',telefone='" . $telefone . "', telefone2='" . $telefone2 . "', rg='" . $rg . "' WHERE id='" . $id . "'";

            $sql = $this->db->query($sql);


            if ($sql->rowCount() > 0) {

                header("Location:" . BASE_URL . "pesquisarfiador");
            } else {
                return "Preencha todos os campos!";
            }
        } catch (Exception $ex) {
            echo "Falhou" . $ex->getMessage();
        }
    }

    public function verificarExistente($nome, $telefone, $telefone2, $email, $cpf, $rg) {
        try {
           $sql = "SELECT * FROM fiadores WHERE cpf = '" . $cpf . "' ";
          
        $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {

                $dados = $sql->fetch();
                $_SESSION['id'] = $dados['id'];
                $_SESSION['nome'] = $dados['nome'];
                $_SESSION['status'] = $dados['status'];
                return "Fiador " . $_SESSION['nome'] . " Já existe!!";
            } else {
                $sql = "INSERT INTO fiadores SET nome='" . $nome . "', email='" . $email . "',telefone='" . $telefone . "',telefone2='" . $telefone2 . "',cpf='" . $cpf . "',rg='$rg', status='Ativo',data=curdate() ";

                $sql = $this->db->query($sql);
                $_SESSION['id'] = $this->db->lastInsertId();
$id_fiador=$_SESSION['id'];
                if ($sql->rowCount() > 0) {

  $sql = "INSERT INTO inquilino_fiadores SET id_fiador='$id_fiador' ";

                $sql = $this->db->query($sql);
                

                if ($sql->rowCount() > 0) {

                }
header("Location:" . BASE_URL . "menuprincipalfiador?id=" . $id_fiador);
                    return "Cadastrado com sucesso!";
                } else {
                    return "Não foi possivel fazer o cadastro! Veja se todos os campos estão Preenchidos corretamente!";
                }

                exit;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

// nao resolvido 
    public function qualInquilino($id) {

        $row = array();
        $sql = "SELECT COUNT(*)as total FROM inquilinos c JOIN imoveis i on c.id = i.id_inquilino WHERE id_inquilino='" . $id . "'";

        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {

            $row = ["total"];


            return $row;
        }
    }

    public function getListFiador($pesquisa) {
        try {

            $array = array();

            if (!empty($pesquisa)) {
                $sql = "SELECT *,i.nome as nome_inquilino FROM fiadores f "
                        . "JOIN inquilino_fiadores inf ON inf.id_fiador=f.id "
                        . "JOIN inquilinos i ON i.id=inf.id_inquilino "
                        . "WHERE f.nome LIKE'" . $pesquisa . "%'";

                $sql = $this->db->query($sql);
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }

                return $array;
            }
        } catch (Exception $ex) {
            echo 'Falhou' . $ex->getMessage();
        }
    }

    public function getNomeInquilino($id) {
        $nome = array();
        if (!empty($id)) {
            $sql = "SELECT i.nome FROM fiadores f "
                    . "JOIN inquilinos i "
                    . "ON f.id=i.id_fiador WHERE f.id ='" . $id . "'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $nome = $sql->fetchAll();
            }
            return $nome;
        }
    }

    public function getDados($id) {
        $array = array();
        if (!empty($id)) {
            $sql = "SELECT * FROM fiadores WHERE id ='" . $id . "'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->FETCH();
            } else {
                header("Location:" . BASE_URL . "pesquisarfiador");
            }

            return $array;
        }
    }

}
