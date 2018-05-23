<?php

class inquilino extends model {

public function cadastroInquilino( $nome, $telefone, $telefone2, $email, $cpf, $rg){
$sql = "INSERT INTO inquilinos SET nome='".$nome."', email='".$email."',telefone='".$telefone."',telefone2='".$telefone2."',cpf='".$cpf."',rg='$rg' ";

$sql = $this->db->query($sql);
$_SESSION['id'] = $this->db->lastInsertId();

if ($sql->rowCount()>0) {


header("Location:" .BASE_URL. "menuprincipalinquilino?id=".$_SESSION['id']);
//return "Cadastrado com sucesso!";
}else{
return "Não foi possivel fazer o cadastro! Veja se todos os campos estão Preenchidos corretamente!";
}

exit;
}


public function editarInquilino ($rg, $nome, $telefone, $telefone2, $email, $id){
try{
$sql = "UPDATE inquilinos SET rg= '".$rg."', nome='".$nome."', email='".$email."',telefone='".$telefone."', telefone2='".$telefone2."' WHERE id='".$id."'";

$sql = $this->db->query($sql);


if ($sql->rowCount() > 0) {

header("Location:" .BASE_URL. "menuprincipalinquilino?id=".$id);

}else{
return "Preencha todos os campos!";
}
exit;
} catch (Exception $ex) {
echo "Falhou".$ex->getMessage();
}


}






public function verificarExistente ($cpf){
try{
$sql = "SELECT * FROM inquilinos WHERE cpf = '".$cpf."' ";
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
// nao resolvido a contagem
public function estanoImovel($id){

$row = array();
$sql = "SELECT COUNT(id_imovel)as total FROM inquilinos_imoveis WHERE id_inquilino='".$id."'";

$sql = $this->db->query($sql);
if($sql->rowCount() > 0){

$row = ["total"];


return $row;
}



}
public function getListInquilino ($pesquisa){
$array = array();

if(!empty($pesquisa)){
$sql = "SELECT * FROM inquilinos WHERE nome LIKE'$pesquisa%'";
       
            $sql = $this->db->query($sql);
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
        
            
                  
            }
            
             return $array;
        }
        else{
            return false;
        }
         }
    
         public function getNome($id){
           $nome=array();
             if(!empty($id)){
            $sql = "SELECT * FROM inquilinos WHERE id ='".$id."'";
            $sql = $this->db->query($sql);
            if($sql->rowCount() > 0){
               $nome = $sql->fetchAll();
               
              
            }   
            return $nome;
         }
         }

         public function getDados($id){
        $array = array();
        if(!empty($id)){
            $sql = "SELECT * FROM inquilinos WHERE id ='".$id."'";
            $sql = $this->db->query($sql);
            if($sql->rowCount() >0){
                $array = $sql->FETCH();
                
            }else{
                header("Location:".BASE_URL."menuprincipalinquilino");
            }
            
            return $array;
        }
    }
    
    
    public function getFiador($id) {
        $array=array();
        if(!empty($id)){
            $sql= "SELECT f.nome FROM inquilinos i JOIN fiadores f ON f.id=f.fiador  WHERE i.id='$id'";
        $sql=$this->db->query($sql);
        if ($sql->rowCount() >0){
            $array=$sql->fetchAll();
        }else{
            return "Não tem fiador";
        }
            
        }
        
        
    }
    }


