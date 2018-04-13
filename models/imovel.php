<?php

class imovel extends model {

    public function cadastrarImovel($id_cliente, $tipo_imovel, $dormitorio, $suite, $garagem, $id_endereco, $numero, $complemento, $cep, $valoraluguel, $areaconstruida, $banheiro, $areatotal, $valorimovel) {


        $sql = "SELECT * FROM clientes WHERE id='" . $id_cliente . "'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {


            $sql = "INSERT INTO imoveis SET tipo_imovel='" . $tipo_imovel . "',"
                    . "dormitorio='" . $dormitorio . "',"
                    . "suite='" . $suite . "',"
                    . "garagem='" . $garagem . "',"
                    . "id_cliente='$id_cliente',"
                    . "id_endereco='" . $id_endereco . "',"
                    . "numero='" . $numero . "', "
                    . "complemento='" . $complemento . "',"
                    . "cep='" . $cep . "',"
                    . "valor_aluguel='" . $valoraluguel . "',"
                    . "area_construida='" . $areaconstruida . "',"
                    . "banheiro='" . $banheiro . "',"
                    . "area_total='" . $areatotal . "',"
                    . "valor_imovel='" . $valorimovel . "'";

            $sql = $this->db->query($sql);
            $id = $this->db->lastInsertId();

            if ($sql->rowCount() > 0) {

                return $id;
            } else {
                return "Preencha todos os campos!";
            }
        }
    }
    public function enviarUrlImagem($id_imovel, $url_imagem) {
        try {


            $sql = "INSERT INTO fotos (id_imovel,url_imagem ) VALUES('" . $id_imovel . "', '" . $url_imagem . "' )";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                return "Enviado com Sucesso!";
            } else {

                return false;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }


    public function endereco($id) {
        try {
            $array = array();
            $sql = "SELECT * FROM enderecos WHERE id_cliente='" . $id . "'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            } else {
                return $array = 'nao foi';
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }
    // busca interna (proprietarios).............................

    public function pesquisarImovelCliente($id) {
        try {
            $array = array();
            if (isset($id)) {
               $sql = "SELECT c.nome, i.*, i.id as id_imovel FROM clientes c "
                        . "JOIN imoveis i "
                        . "ON c.id = i.id_cliente "
                        . "WHERE id_cliente = '" . $id . "'"
                        . "GROUP BY c.nome ";
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
    
    
    public function itemImovel($id) {
        
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
//fim busca interna.........................

 
    // busca externa (usuario)-------------------------
    public function imovelBuscaTipo($tipo) {
        try{
            $array=array();
            $sql="SELECT * FROM imoveis WHERE tipo_imovel='$tipo' ";
            $sql= $this->db->query($sql);
            if ($sql->rowCount() >0){
                $array=$sql->fettchAll();
            }
        } catch (Exception $ex) {
            echo 'Falhou'.$ex->getMessage();
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

     public function buscarImovel($tipo_imovel, $dormitorio, $suite, $garagem, $valor, $area_construida, $bairro, $cidade) {
        try {
            $sql = "SELECT * FROM imoveis endereco WHERE tipo_imovel and dormitorio and suite and garagem and valor and area_construida";
        } catch (Exception $ex) {
            
        }
    }
    
    
   
}
