<?php

class interesse extends model {

    public function cadastrarInteresse($tipoimovel, $nome,$telefone,$celular, $email, $id_imovel, $assunto) {


    


      echo"query".      $sql = "INSERT INTO interesses SET tipoimovel='" . $tipoimovel . "',"
                    . "nome='" . $nome . "',"
                    . "telefone='$telefone', "
                    . "celular='$celular', "
                    . "email='" . $email . "',"
                    . "codigo_imovel='" . $id_imovel . "',"
                    . "assunto='" . $assunto . "',"
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
            $sql = "SELECT * FROM interesses WHERE assunto LIKE'$pesquisa%'";

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

   

}
