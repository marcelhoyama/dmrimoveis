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

   

}
