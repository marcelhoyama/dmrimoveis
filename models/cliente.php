<?php


class cliente extends model {
    
    public function cadastroCliente ($nome, $email, $telefone, $cpf){
        
       $sql = "INSERT INTO clientes SET nome='".$nome."', email='".$email."',telefone='".$telefone."',cpf='".$cpf."' ";
       
       $sql = $this->db->query($sql);
        $id = $this->db->lastInsertId();
       
          if ($sql->rowCount() > 0) {
            
              return "Cadastrado com sucesso!";
                        
          }else{
              return "Preencha todos os campos!";
          }
        }
          public function editarCliente ($id,$nome, $email, $telefone){
        
       $sql = "UPDATE FROM clientes SET nome='".$nome."', email='".$email."',telefone='".$telefone."' WHERE id='".$id."'";
       
       $sql = $this->db->query($sql);
        
       
          if ($sql->rowCount() > 0) {
            
              return "Alterado com sucesso!";
                        
          }else{
              return "Preencha todos os campos!";
          }
        }
        
        public function verificarExistente ($cpf){
            $sql ="SELECT * FROM clientes WHERE cpf == '".$cpf."' ";
            $sql = $this->db->query($sql);
            if($sql->rowCount()>0){
                return "Cliente Já existe!!";
            }else{
                  $sql = "INSERT INTO clientes SET nome='".$nome."', email='".$email."',telefone='".$telefone."',cpf='".$cpf."' ";
       
       $sql = $this->db->query($sql);
        $id = $this->db->lastInsertId();
       
          if ($sql->rowCount() > 0) {
            
              return "Cadastrado com sucesso!";
                        
          }
           header("Location:" .BASE_URL. "menu");
             exit;
                
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
    }


