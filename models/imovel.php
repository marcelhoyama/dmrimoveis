<?php

class imovel extends model {

    public function cadastrarImovel($id_cliente, $tipoimovel, $id_endereco,$venda,$aluguel, $numero, $complemento, $areaconstruida, $areatotal, $documentacao) {


        $sql = "SELECT * FROM clientes WHERE id='" . $id_cliente . "'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {


            $sql = "INSERT INTO imoveis SET tipo_imovel='" . $tipo_imovel . "',"
                    . "id_cliente='$id_cliente',"
                    . "id_endereco='" . $id_endereco . "',"
                    . "venda='$venda', "
                    . "aluguel='$aluguel', "
                    . "numero='" . $numero . "',"
                    . "complemento='" . $complemento . "',"
                    . "area_construida='" . $areaconstruida . "',"
                    . "area_total='" . $areatotal . "',"
                    . "documentacao='" . $documentacao . "',"
                    . "data='NOW()'";

            $sql = $this->db->query($sql);
            $id = $this->db->lastInsertId();

            if ($sql->rowCount() > 0) {
               
                return $id;
            } else {
                return "Preencha todos os campos!";
            }
        }
    }

    public function updateImovel($id_imovel, $tipo_imovel, $numero, $complemento, $areaconstruida, $areatotal, $documentacao, $venda, $aluguel) {




        $sql = "UPDATE imoveis SET tipo_imovel='$tipo_imovel',"
                . "numero='$numero',"
                . "complemento='$complemento',"
                . "area_construida='$areaconstruida',"
                . "area_total='$areatotal',"
                . "documentacao='$documentacao',"
                . "venda='$venda', "
                . "aluguel='$aluguel', "
                . "WHERE id ='$id_imovel'";

        $sql = $this->db->query($sql);



        if ($sql->rowCount() >= 0) {
          
            
         

       
        } else {
            return "Preencha todos os campos!";
        }
    }

    // busca interna (proprietarios).............................

    public function pesquisarImovelCliente($id) {
        try {
            $array = array();
            if (isset($id)) {
                $sql = " SELECT c.nome,c.id,c.telefone,c.telefone2,i.tipo_imovel,i.id as id_imovel,d.id as id_descricao, d.* FROM imoveis i"
                        . " JOIN clientes c "
                        . "ON c.id = i.id_cliente "
                        . "JOIN imoveis_descricoes im "
                        . "ON im.id_imovel= i.id "
                        . "JOIN descricoes d "
                        . "ON d.id = im.id_descricao WHERE c.id='$id' ";
                $sql = $this->db->query($sql);
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }
                return $array;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    /* public function itemImovel($id) {

      $array = array();
      $sql = "SELECT DISTINCT d.item FROM clientes c "
      . "JOIN imoveis i "
      . "ON c.id = i.id_cliente "
      . "RIGHT JOIN descricoes d "
      . "ON i.id = d.id_imovel WHERE i.id_cliente = '" . $id . "'"
      . "GROUP BY d.item ";
      $sql = $this->db->query($sql);
      if ($sql->rowCount() > 0) {
      $array = $sql->fetchAll();
      }
      return $array;
      }
     */

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

    public function getDescricaoImovelCliente($cliente) {
        $array = array();
        $sql = " SELECT * FROM descricoes d "
                . "JOIN clientes c "
                . "ON c.id = i.id_cliente "
                . "JOIN clientes d "
                . "ON i.id = d.id_imovel WHERE c.nome LIKE '%$cliente%' ";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            return $array = $sql->fetchAll();
        }
    }

    public function getDadosImovelInquilino($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT *,i.id_cliente cliente ,a.valor aluguel, v.valor venda FROM imoveis i "
                    . "LEFT JOIN venda v ON i.id_venda=v.id "
                    . "LEFT JOIN aluguel a ON i.id_aluguel=a.id "
                    . "LEFT JOIN enderecos e ON e.id_cliente=i.id_endereco "
                    . "left join imoveis_descricoes b on b.id_imovel=i.id "
                    . "left join descricoes d on d.id=b.id_descricao "
                    . "WHERE i.id='$id_imovel' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll(PDO::FETCH_ASSOC);
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }
       public function getDadosImovel($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT *,i.id_cliente cliente  FROM imoveis i "
                    . "LEFT JOIN enderecos e ON e.id_cliente=i.id_endereco "
                    . "left join imoveis_descricoes b on b.id_imovel=i.id "
                    . "left join descricoes d on d.id=b.id_descricao "
                    . "WHERE i.id='$id_imovel' ";
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
            $sql = "SELECT * FROM imoveis WHERE venda > 0  ";
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
            $sql = "SELECT * FROM imoveis i JOIN imoveis_descricoes ide ON i.id=ide.id_imovel "
                    . "JOIN descricoes d ON ide.id_descricao=d.id WHERE aluguel > 0   ";
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
            $sql = "SELECT * FROM imoveis WHERE tipo_imovel='comercial' ";
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

            $sql = "SELECT * FROM imoveis WHERE tipo_imovel='" . $tipo . "'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            } else {
                return $array = 'Deu errado pesquisa imovel';
            }
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

    // busca publica do site-----------------
    public function buscarImovel($filtros) {
        try {
            $array = array();
$q=1;
if(empty($filtros['cidade']) && empty($filtros['bairro']) && empty($filtros['dormitorio']) && empty($filtros['suite']) && empty($filtros['tipoimovel']) && empty($filtros['banheiro']) && 
        empty($filtros['garagem']) && empty($filtros['areaconstruida']) && empty($filtros['areatotal']) && empty($filtros['valoraluguel']) && empty($filtros['valorimovel'])) {
           
    $filtrostring = array("1='".$q."");
}else{
       $filtrostring = array("1=1");
}
            if (!empty($filtros['cidade'])) {
                $filtrostring[] = "c.nome='".$filtros['cidade']."";
            }
            if (!empty($filtros['bairro'])) {
                $filtrostring[] = "b.nome='".$filtros['bairro']."";
            }
            if (!empty($filtros['dormitorio'])) {
                $filtrostring[] = "d.dormitorio='".$filtros['dormitorio']."";
            }
            if (!empty($filtros['suite'])) {
                $filtrostring[] = "d.suite='".$filtros['suite']."";
            }
            if (!empty($filtros['tipoimovel'])) {
                $filtrostring[] = "i.tipo_imovel='".$filtros['tipoimovel']."";
            }
            if (!empty($filtros['banheiro'])) {
                $filtrostring[] = "d.banheiro='".$filtros['banheiro']."";
            }
            if (!empty($filtros['garagem'])) {
                $filtrostring[] = "d.garagem='".$filtros['garagem']."";
            }
            if (!empty($filtros['areaconstruida'])) {
                $filtrostring[] = "i.area_construida='".$filtros['areaconstruida']."";
            }
            if (!empty($filtros['areatotal'])) {
                $filtrostring[] = "i.area_total='".$filtros['areatotal']."";
            }
            if (!empty($filtros['valoraluguel'])) {
                $filtrostring[] = "i.aluguel='".$filtros['valoraluguel']."";
            }
            if (!empty($filtros['valorimovel'])) {
                $filtrostring[] = "i.venda='".$filtros['valorimovel']."";
            }
            
           $sql = "SELECT * FROM imoveis i "
                    . "JOIN enderecos e ON i.id_endereco=e.id "
                    . "JOIN bairros b ON b.id=e.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "JOIN imoveis_descricoes id ON id.id_imovel=i.id "
                    . "JOIN descricoes d ON d.id=id.id_descricao WHERE " . implode(' AND ', $filtrostring)."'";
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
            $sql = "SELECT * FROM imoveis WHERE id = '$id_imovel'";
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

}
