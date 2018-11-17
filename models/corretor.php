<?php

class corretor extends model {

    private $userInfo;

//metodo ver se usuario esta logado ou se nao direciona para logar 
    public function verificarLogin() {
        // verifica se nao existir session ou se existir e esta vazio  a session
        if (!isset($_SESSION['dmrlogin']) || (isset($_SESSION['dmrlogin']) && empty($_SESSION['dmrlogin']))) {
            header("Location:" . BASE_URL . "login");
            exit;
        }
    }
       public function getNome($id) {

        $sql = "SELECT nome FROM corretores WHERE id = :id ";
         $sql=$this->db->prepare($sql);
             $sql->bindValue(':id',$id);
             
             $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            return $sql['nome'];
        } else {
            return '';
        }
    }
    
      //metodo para saber nome de quem esta logado
    public function setlogado() {
        if (isset($_SESSION['dmrlogin']) && (!empty($_SESSION['dmrlogin']))) {
            $id = $_SESSION['dmrlogin'];
            $sql = "SELECT * FROM corretores WHERE id = :id ";
             $sql=$this->db->prepare($sql);
             $sql->bindValue(':id',$id);
           
             $sql->execute();
                    if ($sql->rowCount() > 0) {
                    $this->userInfo = $sql->fetch();
                     }
        }
    }
    
      //metodo para validar o usuario para o sitema
    public function doLogin($email, $senha) {
        try {// tratar erro do sistema
            // Valida no banco o registro/senha
             $sql = "SELECT * FROM corretores WHERE email = :email AND senha = :senha "; //limit 1 pega somente um registro
             $sql=$this->db->prepare($sql);
             $sql->bindValue(':email',$email);
             $sql->bindValue(':senha',$senha);
             $sql->execute();
             if ($sql->rowCount() > 0) {
                $dado = $sql->fetch(); //pega o primeiro resultado da lista
                $_SESSION['dmrlogin'] = $dado['id'];
                $_SESSION['nome_usuario'] = $dado['nome'];
                $status=$dado['status'];
                 if(!empty($status)){
                    if($status=='Ativo'){
                         header("Location:" . BASE_URL . "menuprincipal");
                          exit;
                    }else{
                        return "Bloqueado! Verificar com a Administração!";
                    }
                }
               
            } else {
                return "Email e/ou senha errados!";
            }
        } catch (PDOException $e) {

            echo "Falhou:" . $e->getMessage();
        }
    }
    
    
    public function esquecisenha($email) {



        $sql = "SELECT * FROM corretores WHERE email = :email ";
         $sql=$this->db->prepare($sql);
             $sql->bindValue(':email',$email);
                      $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $id = $sql['id'];
            $token = md5(time() . rand(0, 9999) . rand(0, 9999));
            $expirado = date('Y-m-d H:i', strtotime('+1 months'));
            $sql = "INSERT INTO usuarios_token (id_usuario, hash, expirado_em) VALUES (:id_usuario,:hash, :expirado_em)";
            $sql= $this->db->prepare($sql);
            $sql->bindValue(":id_usuario",$id);
            $sql->bindValue(":hash",$token);
            $sql->bindValue(":expirado_em", $expirado);

            $sql->execute();


            $link = BASE_URL . "redefinir?token=" . $token;
            $mensagem = "Clique no link para redefinir a senha:<br>" . $link;
            $assunto = "Redefinição de Senha";
        
            $headers = "From: marecrisbr@gmail.com" . "\r\n" .
                    "Reply-To:marecrisbr@gmail.com \r\n".
                    "X-Mailer: PHP/" . phpversion();

            mail($email, $assunto, $mensagem, $headers);
            echo $mensagem;
            exit;
        }
    }

    public function redefinirSenha($token, $senha) {


        $sql = "SELECT * FROM usuarios_token WHERE hash = :hash AND used = 0 AND expirado_em > NOW()";

         $sql=$this->db->prepare($sql);
             $sql->bindValue(":hash",$token);
             
             $sql->execute();


        if ($sql->rowCount() > 0) {


            $sql = $sql->fetch();
            $id = $sql['id_usuario'];

            $sql = "UPDATE corretores SET senha = :senha WHERE id = :id ";

             $sql=$this->db->prepare($sql);
             $sql->bindValue(":id",$id);
             $sql->bindValue(":senha",$senha);
             $sql->execute();
            if ($sql->rowCount() > 0) {

                $sql = "UPDATE usuarios_token SET used = 1  WHERE hash = :hash ";

                 $sql=$this->db->prepare($sql);
             
             $sql->bindValue(":hash",$token);
             $sql->execute();
                if ($sql->rowCount() > 0) {
                    echo "Senha Alterado com sucesso!";
                    exit;
                }
            }
        } else {
            echo "token usado ou invalido!";
            exit;
        }
    }
// nao esta sendo usado esse metodo
     public function editarUsuario (  $id,$nome, $email) {
      //verificar comando sql principalmente now data 
        $sql = "UPDATE corretores SET nome= :nome, email= :email, celular= :celular WHERE id = :id ";
         $sql=$this->db->prepare($sql);
             $sql->bindValue(':nome',$nome);
             $sql->bindValue(':email',$email);
             $sql->binValue(':celular',$celular);
             $sql->bindValue(':id',$id);
          
             
             $sql->execute();
        $id = $this->db->lastInsertId();
        $_SESSION['nutricaolg'] = $id;

        if ($sql->rowCount() > 0) {
           
            
            return true;
        }
    }
    
     public function getDados($id) {

        $array = array();
        $sql = "SELECT * FROM corretores WHERE id = '" . $id . "'";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch(PDO::FETCH_ASSOC);

        }
         return $array;
          
    }

    public function updatePerfil($nome,$email,$telefone,$creci,$senha) {
        

            $sql = "UPDATE corretores SET nome= :nome, email= :email, telefone= :telefone, creci= :creci, senha= :senha WHERE id = '". ($_SESSION['dmrlogin']) . "'";

              $sql=$this->db->prepare($sql);
             $sql->bindValue(':nome',$nome);
             $sql->bindValue(':email',$email);
             $sql->bindValue(':telefone',$telefone);
             $sql->bindValue(':creci', $creci);
             $sql->bindValue(':senha', $senha);
           
          
             
             $sql->execute();
            if($sql->rowCount()>0){
                
            return true;
        }else{
            return false;
            
        }
    }
    }


