<?php

class interesse extends model {

    public function cadastrarInteresse($tipoimovel, $nome,$telefone,$celular, $email, $id_imovel, $assunto) {



       echo  $sql = "INSERT INTO interesses SET tipoimovel='$tipoimovel',"
                    . "nome='$nome',"
                    . "telefone='$telefone', "
                    . "celular='$celular', "
                    . "email='$email',"
                    . "codigo_imovel='$id_imovel',"
                    . "assunto='$assunto',"
                    ."id_status='1',"              
                    . "data_interesse=NOW()";

            $sql = $this->db->query($sql);
            

            if ($sql->rowCount() > 0) {
               
               
            } else {
                return "Preencha todos os campos!";
            }
        
    }
    
    public function pesquisarInteressados($pesquisa){
       try{
            $array = array();

        if (!empty($pesquisa)) {
            $sql = "SELECT *,i.id as id_interessado,i.nome as nomeinteressado,s.nome as nomestatus,i.id as id_interessado, s.id as id_status FROM interesses i JOIN tipos_status s ON s.id=i.id_status WHERE assunto ='$pesquisa'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }

            return $array;
        } else {
            return "nada encontrado!";
        }
       } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
       }
       
    }
    
    public function getListInteressados() {  
        try{
            $array=Array();
            $sql="SELECT DISTINCT assunto FROM interesses";
            $sql= $this->db->query($sql);
            if($sql->rowCount() >0){
              $array=$sql->fetchAll();
            }
            return $array;  
        } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
        }
    }

    public function excluirInteressado($id_interessado) {
        try{
            $sql="DELETE FROM interesse WHERE id='$id_interessado' ";
            $sql= $this->db->query($sql);
            if($sql->rowCount()>0){
                return "Excluido com Sucesso!";
            }else{
                return " Nao foi possivel excluir!";
            }
        } catch (Exception $ex) {
echo"Falhou:".$ex->getMessage();
        }
        
    }
     public function getInteressados($id_interessado) {  
        try{
            $array=Array();
            $sql="SELECT *,i.id as id_interessado ,i.nome as nomeinteressado,s.nome as nomestatus,i.id as id_interessado, s.id as id_status FROM interesses i JOIN tipos_status s ON s.id=i.id_status  WHERE i.id='$id_interessado'";
            $sql= $this->db->query($sql);
            if($sql->rowCount() >0){
              $array=$sql->fetch();
            }
            return $array;  
        } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
        }
    }
        public function getListstatus() {  
        try{
            $array=Array();
            $sql="SELECT * FROM tipos_status";
            $sql= $this->db->query($sql);
            if($sql->rowCount() >0){
              $array=$sql->fetchAll();
            }
            return $array;  
        } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
        }
    }
    public function editarInteressado($id_interessado,$nome,$id_imovel,$assunto,$telefone,$celular,$email,$tipo_imovel,$id_status) {
        try{
         $sql="UPDATE interesses SET nome='$nome', "
                  . "codigo_imovel='$id_imovel', "
                  . "assunto='$assunto', "
                  . "telefone='$telefone', "
                  . "celular='$celular', "
                  . "email='$email', "
                  . "tipoimovel='$tipo_imovel', "
                  . "id_status='$id_status' "
                  . "WHERE id='$id_interessado'";
        
        $sql= $this->db->query($sql);
        if($sql->rowCount()>0){
          
        }
           header("Location:".BASE_URL."pesquisarinteressados?pesquisar=".$assunto);
        } catch (Exception $ex) {
echo "Falhou:".$ex->getMessage();
        }
        
    }

}
