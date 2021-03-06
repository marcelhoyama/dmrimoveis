<?php

class imovel extends model {

    public function cadastrarImovel($id_bairro, $id_tipoimovel, $id_tipo_assunto, $brevedescricao, $nivel, $venda, $aluguel, $status) {

        try {
            $nome = '';
            $ultimoid='';
            $sql = "SELECT nome FROM tipos_imoveis WHERE id='$id_tipoimovel'";
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0) {
                $nome = $sql->fetch();
                $nome = $nome['nome'];
                $nome = strtoupper(substr($nome, 0, 3));



                $sql = "SELECT id FROM imoveis order by id DESC limit 1";
                $sql = $this->db->query($sql);

                if ($sql->rowCount() > 0) {
                    $ultimoid = $sql->fetch();
                    $ultimoid = $ultimoid['id'];
                    $ultimoid = $ultimoid+1;
                 $codigo = $nome . $ultimoid;
                }else{
                    $codigo = $nome .'1';
                }
                   
                   $sql = "INSERT INTO imoveis SET id_bairro='$id_bairro' ,"
                    . "id_tipo_imovel='$id_tipoimovel' ,"
                    . "venda='$venda', "
                    . "aluguel='$aluguel', "
                    . "id_tipo_assunto='$id_tipo_assunto' ,"
                    . "breve_descricao='$brevedescricao' ,"
                    . "nivel='$nivel' ,"
                    . "status='$status' ,"
                    . "codigo='$codigo' ,"
                    . "data=curdate() ";

            $sql = $this->db->query($sql);
            $id = $this->db->lastInsertId();

            if ($sql->rowCount() > 0) {

                return $id;
            } else {
                return "Preencha todos os campos!";
            }
            }
         
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function updateImovel($id_imovel, $id_tipo_imovel, $venda, $aluguel, $status, $id_tipo_assunto, $brevedescricao, $nivel) {
        try {


            $sql = "UPDATE imoveis SET id_tipo_imovel='$id_tipo_imovel', "
                    . "venda='$venda', "
                    . "aluguel='$aluguel', "
                    . "id_tipo_assunto='" . $id_tipo_assunto . "', "
                    . "breve_descricao='$brevedescricao' ,"
                    . "nivel='$nivel' ,"
                    . "status='$status' "
                    . "WHERE id ='$id_imovel'";

            $sql = $this->db->query($sql);



            if ($sql->rowCount() >= 0) {
                
            } else {
                return "Preencha todos os campos!";
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function pesquisarImovelClienteNome($cliente) {
        $array = array();
        $sql = " SELECT c.nome,c.id,c.telefone,c.telefone2,i.tipo_imovel,i.id as id_imovel, COUNT(i.id_cliente) as totalimovel,d.item FROM imoveis i "
                . "JOIN clientes c "
                . "ON c.id = i.id_cliente "
                . "JOIN descricoes d "
                . "ON i.id = d.id_imovel WHERE c.nome LIKE '%$cliente%' ";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            return $array = $sql->fetchAll();
        }
    }

    public function getDadosImovel($codigo) {
        try {
            $array = array();
            $sql = "SELECT d.id as id_desccricao,id.id as id_imovel_descricao,ta.id as id_tipo_assunto,ti.id as id_tipo_imovel,es.id as id_estado,c.id as id_cidade,b.id as id_bairro ,b.nome as bairro, c.nome as cidade, ti.nome as tipo_imovel, i.id as id_imovel, ta.nome as assunto, venda.valor as venda  FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "JOIN imoveis_descricoes id ON id.id_imovel=i.id "
                    . "JOIN vendas idvendas venda ON id.id_vendas=i.id "
                    . "JOIN descricoes d ON d.id=id.id_descricao WHERE i.id='$codigo' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch(PDO::FETCH_ASSOC);
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listImovelVenda() {
        try {
            $array = array();
            $sql = "SELECT *,i.id as id_imovel,ti.nome as tipo_imovel FROM imoveis i "
                    . "JOIN imoveis_descricoes ide ON i.id=ide.id_imovel "
                    . "JOIN descricoes d ON ide.id_descricao=d.id "
                    . "JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "WHERE ta.nome ='Venda' AND i.status = 'Liberado'  ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }

    public function listImovelaluguel() {
        try {
            $array = array();
            $sql = "SELECT *,i.id as id_imovel,ti.nome as tipo_imovel FROM imoveis i "
                    . "JOIN imoveis_descricoes ide ON i.id=ide.id_imovel "
                    . "JOIN descricoes d ON ide.id_descricao=d.id "
                    . "JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "WHERE ti.nome='Comercial' AND ta.nome ='Aluga' AND i.status = 'Liberado'  ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }

    public function listImovelComercial() {
        try {
            $array = array();
            $sql = "SELECT *,i.id as id_imovel,ti.nome as tipo_imovel FROM imoveis i "
                    . "JOIN tipos_imoveis ti "
                    . "ON i.id_tipo_imovel=ti.id "
                    . "WHERE ti.nome='Comercial' and i.status = 'Liberado' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }

    public function listImovelMisto() {
        try {
            $array = array();
            $sql = "SELECT *,i.id as id_imovel, ti.id as id_tipo_imovel,ti.nome as tipo_imovel FROM imoveis i "
                    . "JOIN imoveis_descricoes ide ON i.id=ide.id_imovel "
                    . "JOIN descricoes d ON ide.id_descricao=d.id "
                    . "JOIN tipos_imoveis ti "
                    . "ON i.id_tipo_imovel=ti.id "
                    . "JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "WHERE i.id_tipo_imovel <> 1 AND i.id_tipo_imovel <> 2 AND i.status='Liberado' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }

//fim busca interna.........................
    // busca externa (usuario)-------------------------
    public function imovelBuscaTipo($tipo) {
        try {
            $array = array();
            $sql = "SELECT * FROM imoveis WHERE tipo_imovel='$tipo' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fettchAll();
            }
        } catch (Exception $ex) {
            echo 'Falhou' . $ex->getMessage();
        }
    }

    public function listarImoveis($tipo) {
        try {
            $array = array();

            $sql = "SELECT *,es.nome as estado,d.id as id_desccricao,id.id as id_imovel_descricao,ta.id as id_tipo_assunto,ti.id as id_tipo_imovel,es.id as id_estado,c.id as id_cidade,b.id as id_bairro ,b.nome as bairro, c.nome as cidade, ti.nome as tipo_imovel, i.id as id_imovel, ta.nome as assunto  FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "JOIN imoveis_descricoes id ON id.id_imovel=i.id "
                    . "JOIN descricoes d ON d.id=id.id_descricao WHERE ti.nome='$tipo' and i.status = 'Liberado' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

    public function listarImoveisVenda($tipo) {
        try {
            $array = array();

            $sql = "SELECT *,es.nome as estado,d.id as id_desccricao,id.id as id_imovel_descricao,ta.id as id_tipo_assunto,ti.id as id_tipo_imovel,es.id as id_estado,c.id as id_cidade ,b.nome as bairro, c.nome as cidade, ti.nome as tipo_imovel, i.id as id_imovel, ta.nome as assunto  FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "JOIN imoveis_descricoes id ON id.id_imovel=i.id "
                    . "JOIN descricoes d ON d.id=id.id_descricao WHERE ti.nome='$tipo' and ta.nome='Venda' and i.status = 'Liberado' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

    public function listarImoveisLocacao($tipo) {
        try {
            $array = array();

            $sql = "SELECT *,es.nome as estado,d.id as id_desccricao,id.id as id_imovel_descricao,ta.id as id_tipo_assunto,ti.id as id_tipo_imovel,es.id as id_estado,c.id as id_cidade,b.id as id_bairro ,b.nome as bairro, c.nome as cidade, ti.nome as tipo_imovel, i.id as id_imovel, ta.nome as assunto  FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "JOIN imoveis_descricoes id ON id.id_imovel=i.id "
                    . "JOIN descricoes d ON d.id=id.id_descricao WHERE ti.nome='$tipo' and ta.nome='Aluga' and i.status = 'Liberado' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

    public function listTiposImoveis($id_imovel) {
        try {
            $array = array();

            $sql = "SELECT i.id_tipo_imovel as id_tipo_imovel,ti.nome as tipo_imovel FROM tipos_imoveis ti JOIN imoveis i ON i.id_tipo_imovel=ti.id "
                    . "WHERE i.id='$id_imovel'  ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

    public function listTiposImoveisCadastrar() {
        try {
            $array = array();

            $sql = "SELECT * FROM tipos_imoveis ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

    // busca publica do site-----------------
    public function buscarImovel($filtros) {
        try {
            $array = array();


            $filtrostring = array("1=1");

            if (!empty($filtros['cidade'])) {
                $filtrostring[] = "c.nome='" . $filtros['cidade'] . "'";
            }
            if (!empty($filtros['bairro'])) {
                $filtrostring[] = "b.nome='" . $filtros['bairro'] . "'";
            }

            if (!empty($filtros['tipoimovel'])) {
                $tipoimovel = explode("-", $filtros['tipoimovel']);
                $tipoimovel1 = $tipoimovel[0];
                $tipoimovel2 = $tipoimovel[1];
                $filtrostring[] = "ti.nome='$tipoimovel1' AND i.nivel='$tipoimovel2'";
            }

            if (!empty($filtros['assunto'])) {

                $filtrostring[] = "ta.nome='" . $filtros['assunto'] . "'";
            }
            if (!empty($filtros['valorimovel'])) {
                $preco = explode("-", $filtros['valorimovel']);
                $preco1 = $preco[0];
                $preco2 = $preco[1];
                if ($preco2 == '2001') {
                    $filtrostring[] = "i.venda > '$preco1'";
                } else {
                    $filtrostring[] = "i.venda BETWEEN '$preco1' AND '$preco2'";
                }
            }

            $sql = "SELECT *,i.id as id_imovel,ti.nome as tipoimovel,b.nome as bairro, c.nome as cidade FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "JOIN imoveis_descricoes id ON id.id_imovel=i.id "
                    . "JOIN descricoes d ON d.id=id.id_descricao "
                    . "JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel WHERE " . implode(' AND ', $filtrostring) . "";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return "Nada encontrado!";
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listDormitorio() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT dormitorio FROM descricoes";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listSuite() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT suite FROM descricoes";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listBanheiro() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT banheiro FROM descricoes";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listGaragem() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT garagem FROM descricoes";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listTotal() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT area_total FROM imoveis";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listAreaconstruida() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT area_construida FROM imoveis";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listAluguel() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT aluguel FROM imoveis";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listVenda() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT venda FROM imoveis";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listTipoImovel($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT *,i.id as id_imovel,ti.nome as tipo_imovel,b.nome as bairro, c.nome as cidade,ta.nome as tipo_assunto FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "JOIN imoveis_descricoes id ON id.id_imovel=i.id "
                    . "JOIN descricoes d ON d.id=id.id_descricao "
                    . " WHERE i.id = '$id_imovel'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                return $array = $sql->fetch();
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listUrlPrincipal($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT url_foto_principais FROM imoveis WHERE id = '$id_imovel'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                return $array = $sql->fetchAll();
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listTiposImoveis2() {
        try {
            $array = array();
            $sql = "SELECT * FROM tipos_imoveis ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                return $array = $sql->fetchAll();
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

}
