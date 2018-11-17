<?php

class imovel extends model {

    public function cadastrarImovel($id_bairro, $id_tipoimovel, $id_tipo_assunto, $brevedescricao, $nivel, $foto, $fotos, $status) {

        try {
            $nome = '';
            $ultimoid = '';
            $sql = "SELECT nome FROM tipos_imoveis WHERE id='$id_tipoimovel'";
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0) {
                $nome = $sql->fetch();
                $nome = $nome['nome'];
                $nome = strtoupper(substr($nome, 0, 3));



                $sql = "SELECT id FROM imoveis order by id DESC limit 1";
                $sql = $this->db->query($sql);

                if ($sql->rowCount() > 0) {
                    $ultimoid = $sql->fetch();
                    $ultimoid = $ultimoid['id'];
                    $ultimoid = $ultimoid + 1;
                    $codigo = $nome . $ultimoid;
                } else {
                    $codigo = $nome . '1';
                }

                if (!empty($foto['tmp_name'][0])) {

                    $tipo = $foto['type'];
$foto_original=$foto['tmp_name'];
                    if (in_array($tipo, array('image/jpeg', 'image/png'))) {
                        $tmpname = md5(time() . rand(0, 999)) . '.jpg';
                        $diretorio = "upload/fotos_principais/";


                        move_uploaded_file($foto_original, $diretorio . $tmpname);


                        list($width_orig, $height_orig) = getimagesize($diretorio . $tmpname);
                        $ratio = $width_orig / $height_orig;
                        $width = 500;
                        $height = 500;
                        if ($width / $height > $ratio) {
                            $width = $height + $ratio;
                        } else {
                            $height = $width / $ratio;
                        }

                        $img = imagecreatetruecolor($width, $height);
                        if ($tipo == 'image/jpeg') {
                            $origi = imagecreatefromjpeg($diretorio . $tmpname);
                        } elseif ($tipo == 'image/png') {
                            $origi = imagecreatefrompng($diretorio . $tmpname);
                        }

                        imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
                        imagejpeg($img, $diretorio . $tmpname, 80);
                    }
                }
                $sql = "INSERT INTO imoveis SET id_bairro='$id_bairro' ,"
                        . "id_tipo_imovel='$id_tipoimovel' ,"
                        . "id_tipo_assunto='$id_tipo_assunto' ,"
                        . "breve_descricao='$brevedescricao' ,"
                        . "url_foto_principal='$tmpname' ,"
                        . "nivel='$nivel' ,"
                        . "status='$status' ,"
                        . "codigo='$codigo' ,"
                        . "data=curdate() ";

                $sql = $this->db->query($sql);
                $id = $this->db->lastInsertId();

                if ($sql->rowCount() > 0) {
                    if (count($fotos) > 0) {

                        for ($q = 0; $q < count($fotos['tmp_name']); $q++) {

                            $tipo2 = $fotos['type'][$q];


                            if (in_array($tipo2, array('image/jpeg', 'image/png'))) {

                                $tmpname = md5(time() . rand(0, 999)) . '.jpg';
                                $diretorio = "upload/";

                                
                                
                                move_uploaded_file($fotos['tmp_name'][$q], $diretorio . $tmpname);

                                list($width_orig, $height_orig) = getimagesize($diretorio . $tmpname);
                                $ratio = $width_orig / $height_orig;
//limite permitido proporcional
                                $width = 960;
                                $height = 720;
                                if ($width / $height > $ratio) {
                                    $width = $height + $ratio;
                                } else {
                                    $height = $width / $ratio;
                                }

                                $img = imagecreatetruecolor($width, $height);
                                if ($fotos['type'][$q] == 'image/jpeg') {
                                    $origi = imagecreatefromjpeg($diretorio . $tmpname);
                                } elseif ($tipo == 'image/png') {
                                    $origi = imagecreatefrompng($diretorio . $tmpname);
                                }

                                imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
                                imagejpeg($img, $diretorio . $tmpname, 80);

                                $sql = "INSERT INTO fotos SET id_imovel='$id', url_imagem='$tmpname'";

                                $sql = $this->db->query($sql);
                                if ($sql->rowCount() > 0) {
                                    //return true;
                                } else {
                                    //return FALSE;
                                }
                            }
                        }
                    }
                    return true;
                } else {
                    return false;
                }
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function corrigeOrientacao($url)
{
 $filename=$url;   
    $rotation = 0;

   for($i=0;$i<$rotation;$i++){
       
      echo $rotation=90+$rotation;
   }
exit;
    if ($rotation !== null) {
        $target = imagecreatefromjpeg($filename);
        $target = imagerotate($target, $rotation, 0);

        //Salva por cima da imagem original
        imagejpeg($target, $filename);

        //libera da memória
        imagedestroy($target);
        $target = null;
    }
}
    public function updateImovel($id_imovel, $id_tipo_imovel, $status, $id_tipo_assunto, $brevedescricao, $foto, $fotos, $nivel, $id_bairro) {
        try {
            $array = array();
            if (!empty($foto['tmp_name'][0])) {

                
                $tipo = $foto['type'];

                if (in_array($tipo, array('image/jpeg', 'image/png'))) {
                    $tmpname = md5(time() . rand(0, 999)) . '.jpg';
                    $diretorio = "upload/fotos_principais/";

                    
                    move_uploaded_file($foto['tmp_name'], $diretorio . $tmpname);


                    list($width_orig, $height_orig) = getimagesize($diretorio . $tmpname);
                    $ratio = $width_orig / $height_orig;
                    $width = 500;
                    $height = 500;
                    if ($width / $height > $ratio) {
                        $width = $height + $ratio;
                    } else {
                        $height = $width / $ratio;
                    }

                    $img = imagecreatetruecolor($width, $height);
                    if ($tipo == 'image/jpeg') {
                        $origi = imagecreatefromjpeg($diretorio . $tmpname);
                    } elseif ($tipo == 'image/png') {
                        $origi = imagecreatefrompng($diretorio . $tmpname);
                    }

                    imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
                    imagejpeg($img, $diretorio . $tmpname, 80);
                }
                $sql = "UPDATE imoveis SET id_tipo_imovel='$id_tipo_imovel', "
                        . "id_tipo_assunto='" . $id_tipo_assunto . "', "
                        . "breve_descricao='$brevedescricao' ,"
                        . "url_foto_principal='$tmpname' ,"
                        . "nivel='$nivel' ,"
                        . "status='$status' ,"
                        . "id_bairro='$id_bairro'"
                        . "WHERE id ='$id_imovel'";
            } else {
                $sql = "UPDATE imoveis SET id_tipo_imovel='$id_tipo_imovel', "
                        . "id_tipo_assunto='" . $id_tipo_assunto . "', "
                        . "breve_descricao='$brevedescricao' ,"
                        . "nivel='$nivel' ,"
                        . "status='$status' ,"
                        . "id_bairro='$id_bairro'"
                        . "WHERE id ='$id_imovel'";
            }


            $sql = $this->db->query($sql);



            if ($sql->rowCount() >= 0) {

                if (count($fotos) > 0) {

                    for ($q = 0; $q < count($fotos['tmp_name']); $q++) {

                        $tipo = $fotos['type'][$q];


                        if (in_array($tipo, array('image/jpeg', 'image/png'))) {

                            $tmpname = md5(time() . rand(0, 999)) . '.jpg';
                            $diretorio = "upload/";

                         
                            move_uploaded_file(corrigeOrientacao($fotos['tmp_name'][$q], $diretorio . $tmpname));

                            list($width_orig, $height_orig) = getimagesize($diretorio . $tmpname);
                            $ratio = $width_orig / $height_orig;
//limite permitido proporcional
                            $width = 960;
                            $height = 720;
                            if ($width / $height > $ratio) {
                                $width = $height + $ratio;
                            } else {
                                $height = $width / $ratio;
                            }

                            $img = imagecreatetruecolor($width, $height);
                            if ($fotos['type'][$q] == 'image/jpeg') {
                                $origi = imagecreatefromjpeg($diretorio . $tmpname);
                            } elseif ($tipo == 'image/png') {
                                $origi = imagecreatefrompng($diretorio . $tmpname);
                            }

                            imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
                            imagejpeg($img, $diretorio . $tmpname, 80);

                            $sql1 = "INSERT INTO fotos SET id_imovel='$id_imovel', url_imagem='$tmpname'";

                            $sql1 = $this->db->query($sql1);
                            if ($sql1->rowCount() > 0) {
                                
                            } else {
                                
                            }
                        }
                    }
                }

                $array = $sql->fetch();
                return $array;
            } else {
                
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
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

    public function getDadosImovel($codigo) {
        try {
            $array = array();
            $sql = "SELECT *,ti.nome as tipo_imovel,c.nome as cidade,i.status as status,i.codigo as id_imovel,b.nome as bairro FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "WHERE i.id='$codigo' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch(PDO::FETCH_ASSOC);
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listImovelVenda() {
        try {
            $array = array();
            $sql = "SELECT *,i.id as id_imovel,ti.nome as tipo_imovel FROM imoveis i "
                    . "JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "WHERE ta.nome ='Venda' AND ti.nome='Residencial' AND i.status = 'Liberado'  ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }

    public function listImovelaluguel() {
        try {
            $array = array();
            $sql = "SELECT *,i.id as id_imovel,ti.nome as tipo_imovel FROM imoveis i "
                    . "JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "WHERE ta.nome ='Aluga' AND i.status = 'Liberado'  ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }

    public function listImovelComercial() {
        try {
            $array = array();
            $sql = "SELECT *,i.id as id_imovel,ti.nome as tipo_imovel FROM imoveis i "
                    . "JOIN tipos_imoveis ti "
                    . "ON i.id_tipo_imovel=ti.id "
                    . "WHERE ti.nome='Comercial' and i.status = 'Liberado' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }

    public function listImovelMisto() {
        try {
            $array = array();
            $sql = "SELECT *,i.id as id_imovel, ti.id as id_tipo_imovel,ti.nome as tipo_imovel FROM imoveis i "
                    . "JOIN tipos_imoveis ti "
                    . "ON i.id_tipo_imovel=ti.id "
                    . "JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "WHERE i.status='Liberado' ";
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
        try {
            $array = array();
            $sql = "SELECT * FROM imoveis WHERE tipo_imovel='$tipo' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fettchAll();
            }
        } catch (Exception $ex) {
            echo 'Falhou' . $ex->getMessage();
        }
    }

    public function listarImoveis($tipo) {
        try {
            $array = array();

            $sql = "SELECT *,es.nome as estado,ta.id as id_tipo_assunto,ti.id as id_tipo_imovel,es.id as id_estado,c.id as id_cidade,b.id as id_bairro ,b.nome as bairro, c.nome as cidade, ti.nome as tipo_imovel, i.id as id_imovel, ta.nome as assunto  FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "WHERE ti.nome='$tipo' and i.status = 'Liberado' GROUP BY i.id ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

    public function listarImoveisVenda($tipo) {
        try {
            $array = array();

            $sql = "SELECT *,es.nome as estado,ta.id as id_tipo_assunto,ti.id as id_tipo_imovel,es.id as id_estado,c.id as id_cidade ,b.nome as bairro, c.nome as cidade, ti.nome as tipo_imovel, i.id as id_imovel, ta.nome as assunto  FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "WHERE ti.nome='$tipo' and ta.nome='Venda' and i.status = 'Liberado' GROUP BY i.id ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

    public function listarImoveisLocacao($tipo) {
        try {
            $array = array();

            $sql = "SELECT *,es.nome as estado,ta.id as id_tipo_assunto,ti.id as id_tipo_imovel,es.id as id_estado,c.id as id_cidade,b.id as id_bairro ,b.nome as bairro, c.nome as cidade, ti.nome as tipo_imovel, i.id as id_imovel, ta.nome as assunto  FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "LEFT JOIN fotos f ON f.id_imovel=i.id "
                    . "WHERE ti.nome='$tipo' and ta.nome='Aluga' and i.status = 'Liberado' GROUP BY i.id ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

    public function listTiposImoveis($id_imovel) {
        try {
            $array = array();

            $sql = "SELECT i.id_tipo_imovel as id_tipo_imovel,ti.nome as tipo_imovel FROM tipos_imoveis ti JOIN imoveis i ON i.id_tipo_imovel=ti.id "
                    . "WHERE i.id='$id_imovel'  ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

    public function listTiposImoveisCadastrar() {
        try {
            $array = array();

            $sql = "SELECT * FROM tipos_imoveis ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo 'Falhou:' . $ex->getMessage();
        }
    }

// busca publica do site-----------------
    public function buscarImovel($filtros) {
        try {
            $array = array();


            $filtrostring = array("1=1");

            if (!empty($filtros['codigo'])) {
                $filtrostring[] = "i.codigo='" . $filtros['codigo'] . "'";
            }
            if (!empty($filtros['cidade'])) {
                $filtrostring[] = "c.nome='" . $filtros['cidade'] . "'";
            }
            if (!empty($filtros['bairro'])) {
                $filtrostring[] = "b.nome='" . $filtros['bairro'] . "'";
            }

            if (!empty($filtros['tipoimovel'])) {
                $tipoimovel = explode("-", $filtros['tipoimovel']);
                $tipoimovel1 = $tipoimovel[0];
                $tipoimovel2 = $tipoimovel[1];
                $filtrostring[] = "ti.nome='$tipoimovel1' AND i.nivel='$tipoimovel2'";
            }

            if (!empty($filtros['assunto'])) {

                $filtrostring[] = "ta.nome='" . $filtros['assunto'] . "'";
            }
            if (!empty($filtros['valorimovel'])) {
                $preco = explode("-", $filtros['valorimovel']);
                $preco1 = $preco[0];
                $preco2 = $preco[1];
                if ($preco2 == '2001') {
                    $filtrostring[] = "i.venda > '$preco1'";
                } else {
                    $filtrostring[] = "i.venda BETWEEN '$preco1' AND '$preco2'";
                }
            }
            if (!empty($filtros['todos'])) {
                $filtrostring[] = "";
            }

            $sql = "SELECT *,i.id as id_imovel,i.codigo as codigo,i.id as id_imovel,ti.nome as tipoimovel,b.nome as bairro, c.nome as cidade,es.nome as estado FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel WHERE " . implode(' AND ', $filtrostring) . " AND i.status = 'Liberado' GROUP BY i.id ";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return "Nada encontrado!";
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function buscarImovelfull($filtros) {
        try {
            $array = array();


            $filtrostring = array("1=1");

            if (!empty($filtros['codigo'])) {
                $filtrostring[] = "i.codigo='" . $filtros['codigo'] . "'";
            }
            if (!empty($filtros['cidade'])) {
                $filtrostring[] = "c.nome='" . $filtros['cidade'] . "'";
            }
            if (!empty($filtros['bairro'])) {
                $filtrostring[] = "b.nome='" . $filtros['bairro'] . "'";
            }

            if (!empty($filtros['tipoimovel'])) {
                $tipoimovel = explode("-", $filtros['tipoimovel']);
                $tipoimovel1 = $tipoimovel[0];
                $tipoimovel2 = $tipoimovel[1];
                $filtrostring[] = "ti.nome='$tipoimovel1' AND i.nivel='$tipoimovel2'";
            }

            if (!empty($filtros['assunto'])) {
                if ($filtros['assunto'] == 'Todos') {
                    $filtrostring[] = "1=1";
                } else {
                    $filtrostring[] = "ta.nome='" . $filtros['assunto'] . "'";
                }
            }
            /*   if (!empty($filtros['valorimovel'])) {
              $preco = explode("-", $filtros['valorimovel']);
              $preco1 = $preco[0];
              $preco2 = $preco[1];
              if ($preco2 == '2001') {
              $filtrostring[] = "i.venda > '$preco1'";
              } else {
              $filtrostring[] = "i.venda BETWEEN '$preco1' AND '$preco2'";
              }
              } */
            if (!empty($filtros['data'])) {
                // $data = explode("-", $filtros['datas']);

                $filtrostring[] = "i.data = '" . $filtros['data'] . "'";
            }

            if (!empty($filtros['status'])) {
                // $data = explode("-", $filtros['datas']);

                $filtrostring[] = "i.status = '" . $filtros['status'] . "'";
            }



            $sql = "SELECT *,i.id as id_imovel,i.codigo as codigo,i.id as id_imovel,ti.nome as tipoimovel,b.nome as bairro, c.nome as cidade FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel WHERE " . implode(' AND ', $filtrostring) . " GROUP BY i.id ";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return "Nada encontrado!";
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listDormitorio() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT dormitorio FROM descricoes";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listimoveis() {
        try {
            $array = array();
            $sql = "SELECT *,i.codigo as codigo,i.id as id_imovel,ti.nome as tipoimovel,b.nome as bairro, c.nome as cidade FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . "JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel WHERE 1=1 GROUP BY i.id";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listBanheiro() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT banheiro FROM descricoes";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listGaragem() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT garagem FROM descricoes";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listTotal() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT area_total FROM imoveis";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listAluguel() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT aluguel FROM imoveis";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listVenda() {
        try {
            $array = array();
            $sql = "SELECT DISTINCT venda FROM imoveis";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listTipoImovel($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT *,i.id as id_imovel,ti.nome as tipo_imovel,b.nome as bairro, c.nome as cidade,ta.nome as tipo_assunto FROM imoveis i "
                    . "JOIN bairros b ON b.id=i.id_bairro "
                    . "JOIN cidades_bairros cb ON b.id=cb.id_bairro "
                    . "JOIN cidades c ON c.id=cb.id_cidade "
                    . "JOIN estados es ON es.id=c.id_estado "
                    . "LEFT JOIN tipos_imoveis ti ON ti.id=i.id_tipo_imovel "
                    . "LEFT JOIN tipos_assuntos ta ON ta.id=i.id_tipo_assunto "
                    . " WHERE i.id = '$id_imovel'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                return $array = $sql->fetch();
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listUrlPrincipal($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT url_foto_principais FROM imoveis WHERE id = '$id_imovel'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                return $array = $sql->fetchAll();
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function totalImovel() {
        try {
            $array = array();
            $sql = "SELECT COUNT(id)as total FROM imoveis ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();

                return $array;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function totalvenda() {
        try {
            $array = array();
            $sql = "SELECT COUNT(id_tipo_assunto)as total FROM imoveis where id_tipo_assunto=1";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();

                return $array;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function totalaluga() {
        try {
            $array = array();
            $sql = "SELECT COUNT(id_tipo_assunto)as total FROM imoveis where id_tipo_assunto=2";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();

                return $array;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function totalstatuslivre() {
        try {
            $array = array();
            $sql = "SELECT COUNT(status)as total FROM imoveis where status='Liberado'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();

                return $array;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function totalstatusbloqueado() {
        try {
            $array = array();
            $sql = "SELECT COUNT(status)as total FROM imoveis where status='Bloqueado'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();

                return $array;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listTiposImoveis2() {
        try {
            $array = array();
            $sql = "SELECT * FROM tipos_imoveis";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();

                return $array;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    
    public function excluirImovel($id_imovel) {

       try {
            $row = array();
            $sql = "SELECT * FROM fotos WHERE id_imovel='$id_imovel'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $row = $sql->fetchAll();

                $sql = "DELETE FROM fotos WHERE id_imovel='$id_imovel'";

                $sql = $this->db->query($sql);
                if ($sql->rowCount() > 0) {

                    foreach ($row as $url_imagem) {
                        if (is_file("upload/" . $url_imagem['url_imagem'])) {

                            unlink("upload/" . $url_imagem['url_imagem']);
                        }
                    }
                     $sql = "SELECT * FROM imoveis WHERE id='$id_imovel'";
                $sql = $this->db->query($sql);
                if ($sql->rowCount() > 0) {
                    $row = $sql->fetch();
                    $url_foto_principal = $row['url_foto_principal'];
                    if (is_file("upload/fotos_principais/" . $url_foto_principal)) {

                        unlink("upload/fotos_principais/" . $url_foto_principal);
                    }
                
                     $sql = "DELETE FROM imoveis WHERE id ='$id_imovel'";
                $sql = $this->db->query($sql);
                if ($sql->rowCount() > 0) {

                    return TRUE;
                } else {
                    return FALSE;
                }
                    }
                }
               

               
            } else {
                 $sql = "SELECT * FROM imoveis WHERE id='$id_imovel'";
                $sql = $this->db->query($sql);
                if ($sql->rowCount() > 0) {
                    $row = $sql->fetch();
                    $url_foto_principal = $row['url_foto_principal'];
                    if (is_file("upload/fotos_principais/" . $url_foto_principal)) {

                        unlink("upload/fotos_principais/" . $url_foto_principal);
                    }
                     $sql = "DELETE FROM imoveis WHERE id ='$id_imovel'";

                $sql = $this->db->query($sql);

                if ($sql->rowCount() > 0) {

                    return TRUE;
                } else {
                    return FALSE;
                }
                }

               
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function datas() {
        try {
            $array = array();
            $sql = "SELECT * FROM imoveis WHERE data IS NOT NULL GROUP BY data";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
                return $array;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listStatus() {
        try {
            $array = array();
            $sql = "SELECT status FROM imoveis GROUP BY status";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
                return $array;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

}
