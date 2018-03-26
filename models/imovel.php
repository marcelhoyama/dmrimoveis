<?php


class imovel extends model {
    
    public function cadastrarImovel ($tipo_imovel, $dormitorio, $suite, $garagem,$id_endereco, $id){
      
        
        $sql = "SELECT * FROM clientes WHERE id'".$id."'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount()>0){
          $dados = $sql->fetch();  
        $id=$dados['id'];
        
        
       $sql = "INSERT INTO imoveis SET tipo_imovel='".$tipo_imovel."', dormitorio='".$dormitorio."',suite='".$suite."',"
               . "garagem='".$garagem."',id_endereco='".$id_endereco."' ";
       
       $sql = $this->db->query($sql);
        $id = $this->db->lastInsertId();
       
          if ($sql->rowCount() > 0) {
            
              return $id;
                        
          }else{
              return "Preencha todos os campos!";
          }
    }
        }
        
        public function endereco($id){
            try {
                   $array=array();
          $sql = "SELECT * FROM enderecos WHERE id_cliente='".$id."'";
       
         $sql= $this->db->query($sql);
        if($sql->rowCount()>0){
            $array=$sql->fetchAll();
            
           
        }else{
            return $array ='nao foi';
        }
         return $array;
            } catch (Exception $ex) {
                echo "Falhou:".$ex->getMessage();
            }
         
        }
        
        public function listarImoveis($tipo) {
            try{
                $array = array();
                
                $sql = "SELECT * FROM imoveis WHERE tipo_imovel='".$tipo."'";
                $sql = $this->db->query($sql);
                if($sql->rowCount()>0){
                    $array = $sql->fetchAll();
                }else{
                    return $array='Deu errado pesquisa imovel';
                }
            } catch (Exception $ex) {
                echo 'Falhou:'.$ex->getMessage();
            }
            
        }
        
        public function enviarUrlImagem ($id_imovel,$url_imagem ){
            try{
                
                
               $sql = "INSERT INTO fotos (id_imovel,url_imagem ) VALUES('".$id_imovel."', '".$url_imagem."' )";
               $sql = $this->db->query($sql);  
               if($sql->rowCount()>0){
                   return "Enviado com Sucesso!";
                   
               }else{
                   
                   return false ;
               }
               
                    
            } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
            }

        }
        
        public function buscarImovel($tipo_imovel, $dormitorio, $suite ,$garagem, $valor, $area_construida, $bairro, $cidade) {
            try{
                $sql = "SELECT * FROM imoveis endereco WHERE tipo_imovel and dormitorio and suite and garagem and valor and area_construida";
            } catch (Exception $ex) {

            }
        }
        
        public function pesquisarImovelCliente($id) {
            try{
                $array = array();
                if(isset($id)){
                   $sql = "SELECT c.nome, i.* FROM imoveis i  JOIN clientes c on c.id=i.id_cliente WHERE id_cliente = '".$id."' ";
                    $sql = $this->db->query($sql);
                    if($sql->rowCount()>0){
                        $array = $sql->fetchAll();
                 
                    
                    }
                    return $array;
                }
            } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
            }
            
        }
    }


