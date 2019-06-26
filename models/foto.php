<?php

class foto extends model {

    public function excluirFoto($id) {
        $id_imovel = 0;
        $url_imagem = 0;
        try {
            $sql = "SELECT * FROM fotos WHERE id='$id'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $row = $sql->fetch();
                $id_imovel = $row['id_imovel'];
                $url_imagem = $row['url_imagem'];
            }


            $sql = "DELETE FROM fotos WHERE id='$id'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                
            }
            if (is_file("upload/" . $url_imagem)) {

                unlink("upload/" . $url_imagem);
            }

            return $id_imovel;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function excluirFotoPrincipal($id) {
        $id_imovel = 0;
        $url_imagem = 0;
        try {
            $sql = "SELECT * FROM imoveis WHERE id='$id'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $row = $sql->fetch();
                $id_imovel = $row['id'];
                $url_principal = $row['url_foto_principal'];
            }


            $sql = "UPDATE imoveis SET url_foto_principal=NULL WHERE id='$id'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                
            }
            if (is_file("upload/fotos_principais/" . $url_principal)) {

                unlink("upload/fotos_principais/" . $url_principal);
            }

            return $id_imovel;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listFotos($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT * FROM fotos WHERE id_imovel='$id_imovel' ORDER BY id ASC";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listFotosImovel($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT COUNT(url_imagem) as total FROM fotos WHERE id_imovel='$id_imovel' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }

    public function listFotoPrincipal($id_imovel) {
        try {
            $array = array();
            $sql = "SELECT id,url_foto_principal FROM imoveis WHERE id='$id_imovel' ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch(PDO::FETCH_ASSOC);
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }

    public function listFotosPrincipalVendas() {
        try {
            $array = array();
            $sql = "SELECT f.id_imovel,f.url_principal,i.id_venda,i.id_aluguel,i.tipo_imovel,i.area_total FROM fotos f "
                    . "join imoveis i ON i.id=f.id_imovel  WHERE url_principal AND id_venda IS NOT NULL  ";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            return $array;
        } catch (Exception $e) {
            echo "Falhou:" . $e->getMessage();
        }
    }

    public function getTotal($id_imovel) {
        try {

            $sql = "SELECT COUNT(fotos.url_imagem) as c FROM fotos WHERE id_imovel='$id_imovel'";

            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $sql = $sql->fetch();
            }
            return $sql['c'];
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }



    public function enviarUrlPrincipalImagem($id_imovel, $foto) {
        try {

            //aqui eh tratar o nome das fotos enviados
            //se contagem as fotos for maior de 0 faça que o nome do arquivo seja mudado com o tempo(relogio) crie criptografia randomica
            // e salve no diretorio upload   com o comando especifico do PHP

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
                    $sql = "UPDATE imoveis SET url_foto_principal='$tmpname' WHERE id='$id_imovel'";

                    $sql = $this->db->query($sql);
                    if ($sql->rowCount() > 0) {
                        return "Enviado com Sucesso!";
                    } else {

                        return false;
                    }
                }
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

}
