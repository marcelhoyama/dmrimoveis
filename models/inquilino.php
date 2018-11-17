<?php

class inquilino extends model {

    public function cadastroInquilino($nome, $telefone, $telefone2, $email, $cpf, $rg) {
        try {
            $sql = "SELECT * FROM inquilinos WHERE cpf = '" . $cpf . "' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {

                $dados = $sql->fetch();
                $_SESSION['id'] = $dados['id'];
                $_SESSION['nome'] = $dados['nome'];
                return "Inquilino " . $_SESSION['nome'] . " Já existe!!";
                exit;
            } else {
                $sql = "INSERT INTO inquilinos SET nome='" . $nome . "', email='" . $email . "',telefone='" . $telefone . "',telefone2='" . $telefone2 . "',cpf='" . $cpf . "',rg='$rg',status='Ativo',data=NOW() ";

                $sql = $this->db->query($sql);
                $_SESSION['id'] = $this->db->lastInsertId();
                $id_inquilino = $_SESSION['id'];
                if ($sql->rowCount() > 0) {

                    $sql = "INSERT INTO inquilino_fiadores SET id_inquilino='$id_inquilino' ";

                    $sql = $this->db->query($sql);


                    if ($sql->rowCount() > 0) {
                        
                    }

                    header("Location:" . BASE_URL . "menuprincipalinquilino?id=" . $id_inquilino);
//return "Cadastrado com sucesso!";
                } else {
                    return "Não foi possivel fazer o cadastro! Veja se todos os campos estão Preenchidos corretamente!";
                }

                exit;
            }
        } catch (Exception $ex) {
            echo "Falhou" . $e->getMessage();
        }
    }

    public function editarInquilino($rg, $nome, $telefone, $telefone2, $email, $id) {
        try {
            $sql = "UPDATE inquilinos SET rg= '" . $rg . "', nome='" . $nome . "', email='" . $email . "',telefone='" . $telefone . "', telefone2='" . $telefone2 . "' WHERE id='" . $id . "'";

            $sql = $this->db->query($sql);


            if ($sql->rowCount() > 0) {


                header("Location:" . BASE_URL . "menuprincipalinquilino?id=" . $id);
            }
        } catch (Exception $e) {
            echo "Falhou" . $e->getMessage();
        }
    }

    public function verificarExistente($cpf) {
        try {
            $sql = "SELECT * FROM inquilinos WHERE cpf = '" . $cpf . "' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {

                $dados = $sql->fetch();
                $_SESSION['id'] = $dados['id'];
                $_SESSION['nome'] = $dados['nome'];
                return "Cliente " . $_SESSION['nome'] . " Já existe!!";
            } else {
                return "Preencha todos os campos!";
            }

            exit;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function inquilinoEstanoImovel($id) {

        $row = array();
        if (!empty($id)) {
            $sql = "SELECT * FROM inquilinos_imoveis WHERE id_inquilino='" . $id . "'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $row = $sql->fetchAll();
            }

            return $row;
        }
    }

    public function estanoImovel($id) {

        $row = array();
        if (!empty($id)) {
            $sql = "SELECT COUNT(id_imovel)as total FROM inquilinos_imoveis WHERE id_inquilino='" . $id . "'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $row = $sql->fetch(PDO::FETCH_ASSOC);
            } else {
                return "Nao tem nada no nome dele";
            }

            return $row;
        }
    }

    public function getListInquilino($pesquisa) {
        $array = array();

        if (!empty($pesquisa)) {
            $sql = "SELECT * FROM inquilinos WHERE nome LIKE'$pesquisa%'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }

            return $array;
        } else {
            return "nada encontrado!";
        }
    }

    public function getNome($id) {
        $nome = array();
        if (!empty($id)) {
            $sql = "SELECT * FROM inquilinos WHERE id ='" . $id . "'";
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
            $sql = "SELECT * FROM inquilinos WHERE id ='" . $id . "'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->FETCH();
            } else {
                header("Location:" . BASE_URL . "menuprincipalinquilino");
            }

            return $array;
        }
    }

    public function getFiador($id) {
        $array = array();
        if (!empty($id)) {
            $sql = "SELECT f.nome FROM inquilinos i JOIN fiadores f ON i.id_fiador=f.id  WHERE i.id='$id'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            } else {
                return "Não tem fiador";
            }
            return $array;
        }
    }

    public function listImovelInquilino($id_inquilino) {
        try {
            $array = array();
            if (!empty($id_inquilino)) {
                $sql = "SELECT * FROM inquilinos_imoveis WHERE id_inquilino='$id_inquilino' ";

                $sql = $this->db->query($sql);
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetch();
                    $id_imovel = $array['id_imovel'];
                } else {
                    return 'nada encontrado';
                }
                return $id_imovel;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listCodigo() {
        try {
            $array = array();

            $sql = "SELECT * FROM imoveis WHERE codigo is not null";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            } else {
                return 'nada encontrado';
            }
            return $array;
        } catch (Exception $ex) {
            
        }
    }

}
