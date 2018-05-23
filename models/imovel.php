<?php

class imovel extends model {

    public function cadastrarImovel($id_cliente, $tipo_imovel, $id_endereco, $numero, $complemento, $areaconstruida, $areatotal, $documentacao) {


        $sql = "SELECT * FROM clientes WHERE id='" . $id_cliente . "'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {


            $sql = "INSERT INTO imoveis SET tipo_imovel='" . $tipo_imovel . "',"
                    . "id_cliente='$id_cliente',"
                    . "id_endereco='" . $id_endereco . "',"
                    . "numero='" . $numero . "',"
                    . "complemento='" . $complemento . "',"
                    . "area_construida='" . $areaconstruida . "',"
                    . "area_total='" . $areatotal . "',"
                    . "documentacao='".$documentacao."'";

            $sql = $this->db->query($sql);
            $id = $this->db->lastInsertId();

            if ($sql->rowCount() > 0) {

                return $id;
            } else {
                return "Preencha todos os campos!";
            }
        }
    }
 
 public function updateImovel($id_imovel, $tipo_imovel, $numero, $complemento, $areaconstruida, $areatotal, $documentacao) {


       

            $sql = "UPDATE imoveis SET tipo_imovel='$tipo_imovel',"
                    . "numero='$numero',"
                    . "complemento='$complemento',"
                    . "area_construida='$areaconstruida',"
                    . "area_total='$areatotal',"
                    . "documentacao='$documentacao'"
                    . "WHERE id ='$id_imovel'";

            $sql = $this->db->query($sql);
            

            if ($sql->rowCount() > 0) {
  
             
                
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
    
    public function getDescricaoImovelCliente($cliente){
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
    public function getDadosImovel($id_imovel){
      try{
          $array=array();
          $sql="SELECT *,i.id_cliente cliente ,a.valor aluguel, v.valor venda FROM imoveis i "
                  . "LEFT JOIN venda v ON i.id_venda=v.id "
                  . "LEFT JOIN aluguel a ON i.id_aluguel=a.id "
                  . "LEFT JOIN enderecos e ON e.id_cliente=i.id_endereco "
                  . "left join imoveis_descricoes b on b.id_imovel=i.id "
                  . "left join descricoes d on d.id=b.id_descricao "
                  . "WHERE i.id='$id_imovel' ";
          $sql= $this->db->query($sql);
          if($sql->rowCount() >0){
              $array=$sql->fetch(PDO::FETCH_ASSOC);
            
                       
          }
           return $array;
      } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
      }  
    }

   public function ListDadosImovel() {
        try {
            $array = array();
            $sql = "SELECT * FROM imoveis   ";
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

    
    // busca publica do site-----------------
     public function buscarImovel($filtros) {
        try {
            $array=array();
            
            $filtrostring=array('1=1');
            if(!empty($filtros['cidade'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            if(!empty($filtros['bairro'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            if(!empty($filtros['dormitorio'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            if(!empty($filtros['suite'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            if(!empty($filtros['tipoimovel'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            if(!empty($filtros['banheiro'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            if(!empty($filtros['garagem'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            if(!empty($filtros['areaconstruida'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            if(!empty($filtros['areatotal'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            if(!empty($filtros['valoraluguel'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            if(!empty($filtros['valorimovel'])){
                $filtrostring[]='c.nome=i.cidade';
            }
            $sql = "SELECT * FROM imoveis i"
                    . "JOIN enderecos e ON i.id_endereco=e.id"
                    . "JOIN bairro WHERE ". implode('AND',$filtrostring)."";
       $sql= $this->db->query($sql);
       if($sql->rowCount()>0){
           $array=$sql->fetchAll();
       }else{
           return "Nada encontrado!";
       }
            } catch (Exception $ex) {
            echo "Falhou:".$ex->getMessage();
        }
     }
       
        public function listDormitorio(){
            try{
                $array=array();
                $sql="SELECT dormitorio FROM descricoes";
                $sql = $this->db->query($sql);
                if($sql->rowCount() >0){
                    $array =$sql->fetchAll();
                }
                return $array;
            } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
            }
        }
                
    
    public function listSuite(){
            try{
                $array=array();
                $sql="SELECT suite FROM descricoes";
                $sql = $this->db->query($sql);
                if($sql->rowCount() >0){
                    $array =$sql->fetchAll();
                    
                }
                return $array;
            } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
            }
        }
          public function listBanheiro(){
            try{
                $array=array();
                $sql="SELECT banheiro FROM descricoes";
                $sql = $this->db->query($sql);
                if($sql->rowCount() >0){
                    $array =$sql->fetchAll();
                }
                return $array;
            } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
            }
        }
    
     public function listGaragem(){
            try{
                $array=array();
                $sql="SELECT garagem FROM descricoes";
                $sql = $this->db->query($sql);
                if($sql->rowCount() >0){
                    $array =$sql->fetchAll();
                }
                return $array;
            } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
            }
        }
   
         public function listTotal(){
            try{
                $array=array();
                $sql="SELECT area_total FROM imoveis";
                $sql = $this->db->query($sql);
                if($sql->rowCount() >0){
                    $array =$sql->fetchAll();
                }
                return $array;
            } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
            }
        }
         public function listAreaconstruida(){
            try{
                $array=array();
                $sql="SELECT area_construida FROM imoveis";
                $sql = $this->db->query($sql);
                if($sql->rowCount() >0){
                    $array =$sql->fetchAll();
                }
                return $array;
            } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
            }
        }
         public function listValorimovel(){
            try{
                $array=array();
                $sql="SELECT valor FROM venda";
                $sql = $this->db->query($sql);
                if($sql->rowCount() >0){
                    $array =$sql->fetchAll();
                }
                return $array;
            } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
            }
        }
        
         public function listAluguel(){
            try{
                $array=array();
                $sql="SELECT valor FROM aluguel";
                $sql = $this->db->query($sql);
                if($sql->rowCount() >0){
                    $array =$sql->fetchAll();
                }
                return $array;
            } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
            }
        }
        
        
        public function listTipoImovel($id_imovel){
            try{
                $array=array();
                $sql="SELECT * FROM imoveis WHERE id = '$id_imovel'";
                $sql= $this->db->query($sql);
                if($sql->rowCount() >0){
                   return $array = $sql->fetch();
                }
            } catch (Exception $ex) {
                echo "Falhou:".$ex->getMessage();
            }
            
        }
        public function listUrlPrincipal($id_imovel){
            try{
                $array=array();
                $sql="SELECT url_foto_principais FROM imoveis WHERE id = '$id_imovel'";
                $sql= $this->db->query($sql);
                if($sql->rowCount() >0){
                   return $array = $sql->fetchAll();
                }
            } catch (Exception $ex) {
                echo "Falhou:".$ex->getMessage();
            }
            
        }
            
           
}
