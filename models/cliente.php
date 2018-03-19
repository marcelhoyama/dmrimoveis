<?php


class cliente extends model {
    
    public function cadastroCliente($cpf, $nome, $email, $telefone){
         $sql = "INSERT INTO clientes SET nome='".$nome."', email='".$email."',telefone='".$telefone."',cpf='".$cpf."' ";
       
       $sql = $this->db->query($sql);
        $_SESSION['id'] = $this->db->lastInsertId();
       
          if ($sql->rowCount()>0) {
            
             
                    header("Location:" .BASE_URL. "menuprincipal"); 
               return "Cadastrado com sucesso!";
          }else{
              return "Não foi possivel fazer o cadastro! Veja se todos os campos estão Preenchidos corretamente!";
          }
           
             exit;
    }


    public function editarCliente ($nome, $telefone, $email, $id){
       try{
             $sql = "UPDATE clientes SET nome='".$nome."', email='".$email."',telefone='".$telefone."' WHERE id='".$id."'";
       
       $sql = $this->db->query($sql);
        
       
          if ($sql->rowCount() > 0) {
            
              header("Location:".BASE_URL."pesquisarclientes");
                        
          }else{
              return "Preencha todos os campos!";
          }
       } catch (Exception $ex) {
echo "Falhou".$ex->getMessage();
       }
        
    
        }
        
        public function verificarExistente ($cpf){
           try{
                  $sql ="SELECT * FROM clientes WHERE cpf = '".$cpf."' ";
            $sql = $this->db->query($sql);
            if($sql->rowCount()>0){
               
               $dados = $sql->fetch();
               $_SESSION['id'] = $dados['id'];
               $_SESSION['nome'] = $dados['nome'];
                return "Cliente ".$_SESSION['nome']." Já existe!!";
            }else{
                return "Preencha todos os campos!";
            }
                 
               exit; 
            
           } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
           }
        
        }
        
         public function getListCliente ($pesquisa){
        $array=array();
        if(!empty($pesquisa)){
            $sql = "SELECT * FROM clientes WHERE nome LIKE'%".$pesquisa."%' OR email LIKE'%".$pesquisa."%' ";
            $sql = $this->db->query($sql);
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
               
            }
             return $array;
        }
    }
    
    public function getDados($id){
        $array = array();
        if(!empty($id)){
            $sql = "SELECT * FROM clientes WHERE id ='".$id."'";
            $sql = $this->db->query($sql);
            if($sql->rowCount() >0){
                $array = $sql->FETCH();
                
            }else{
                header("Location:".BASE_URL."pesquisarclientes");
            }
            
            return $array;
        }
    }
    }


