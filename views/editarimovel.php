
<title>Editar Imóvel</title>



<div class="container-fluid">
    <a class="btn btn-default" href="<?php BASE_URL?>menuprincipal"> Voltar p/Menu Principal</a>
  
    <h2 class="text-center label-info">Editar Imóvel </h2></br>

    <form id="editarimovel" method="POST" enctype="multipart/form-data">
 

        <div class="danger">
            <?php if (isset($erro) &&!empty($erro)): ?>
            <div class="alert alert-danger"><?php echo $erro; ?></div> 
<?php endif; ?>
        </div>
        <div class="danger">
<?php if (isset($ok) &&!empty($ok)): ?>
            <div class="alert alert-success"><?php echo $ok; ?></div> 
<?php endif; ?>
        </div>
        <div class="well">
            <div class="control-group">
                <label for="status">Anunciar no site:</label> <label class="text-danger">obrigatorio*</label></br>
                <div class="checkbox-inline">
                    
                    <label><input type="radio" name="status" value="Liberado" <?php echo($status = $viewData['status'] == 'Liberado') ? 'checked="checked"' : ''; ?> >Liberar</label> 
                </div>
             
                <div class="checkbox-inline">
                    <label><input type="radio" name="status" value="Bloqueado"  <?php echo($status = $viewData['status'] == 'Bloqueado') ? 'checked="checked"' : ''; ?>>Bloquear</label>
                </div>
                
                    
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-3">
                <label for="id_tipo_assunto">Tipo de Assunto:</label><label class="text-danger">Campo Obrigatorio*</label>
                <select name="id_tipo_assunto" class="form-control" id="tipoassunto">
                    <?php $value1 = $viewData['listimovel']; ?>
                    <?php foreach ($viewData['listtiposassuntos'] as $value) : ?>
                    <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $value1['id_tipo_assunto'])? 'selected="selected"':''; ?>><?php echo $value['nome']; ?></option>

                    <?php  endforeach; ?>
                </select>
            </div>

            <div class="form-group col-sm-3">
                <label for="id_tipo_imovel">Tipo de Imóvel:</label>  <label class="text-danger">campo obrigatorio*</label>
                <select name="id_tipo_imovel" id="id_tipo_imovel" class="form-control" required="">

                    <?php
                    $tipoimovel = $viewData['listtiposimoveiscadastrados'];
                    ?>
                    <?php foreach ($viewData['listtiposimoveis'] as $value):  ?>

                    <option value="<?php echo $value['id']; ?>" 
                            <?php echo( $value['id'] == $tipoimovel['id_tipo_imovel']) ? 'selected="selected"' : ' '; ?>><?php echo $value['nome']; ?></option> 

                    <?php endforeach;
                    ?>


                </select> 
            </div>
            <div class="form-group col-sm-4">
                <label for="nivel">Classificação do Nivel:</label><label class="text-danger">Campo Obrigatorio*</label>
                <select name="nivel" class="form-control" id="tipoassunto">

                    <option value="Simples" 
                            <?php echo( "Simples" == $value1['nivel']) ? 'selected="selected"' : ' '; ?>>Simples</option> 
                    <option value="Intermediário" 
                            <?php echo( "Intermediário" == $value1['nivel']) ? 'selected="selected"' : ' '; ?>>Intermediário</option> 
                    <option value="Alto Padrão"
                            <?php echo( "Alto Padrão" == $value1['nivel']) ? 'selected="selected"' : ' '; ?>>Alto Padrão</option> 


                </select>
            </div>
        </div>     
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="bairro">Bairro:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="bairro" type="text" class="form-control" id="bairro" placeholder="" value="<?php echo $value1['bairro'] ?>" required="">
            </div>


            <div class="form-group col-sm-3">
                <label for="cidade">Cidade:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="cidade" type="text" class="form-control" id="cidade" placeholder="" value="<?php echo $value1['cidade'] ?>" required="">
            </div>
           
            <!-- <div class="form-group col-sm-3">
                 <label for="estado">Estado:</label>  <label class="text-danger">campo obrigatorio*</label>
                 <select name="estado" id="estado" class="form-control" required="">
 
            <?php
          //  $estado = $viewData['listendereco'];
            ?>
            <?php   // foreach ($viewData['listestados'] as $value):  ?>
 
                             <option value="<?php //echo $value['id']; ?>" 
            <?php //echo( $value['id'] == $estado['id_estado']) ? 'selected="selected"' : ' '; ?>><?php //echo $value['nome']; ?></option> 
 
            <?php  // endforeach;
            ?>
 
                 </select>
             </div>  -->


        </div>
          <div class="well">
              <div id="valorImovel">
            <label for="valorimovel">Valor do Imóvel:</label>
            <div class="form-group col-sm-4 input-group">

                <span class="input-group-addon">R$</span>
                <input name="valorimovel" type="text" class="form-control" id="valor" value="<?php echo $value1['venda'] ?>" />
            </div>
              </div>
              <div id="valorAluguel">
            <label for="valoraluguel">Valor do Aluguel:</label>
            <div class="form-group col-sm-4 input-group">

                <span class="input-group-addon">R$</span>
                <input name="valoraluguel" type="text" class="form-control" id="valor2" value="<?php echo $value1['aluguel'] ?>" /> 
            </div>
         </div> 
          </div>
        <div class="form-group col-md">
            <label for="brevedescricao">Breve descrição do imovel:</label> 

            <textarea class="form-control" name="brevedescricao" type="text" id="brevedescricao" rows="20" ><?php echo $value1['breve_descricao']; ?></textarea>
        </div>


        <div class="well">
            <div class="form-group">
                <label for="arquivo1">Adicionar uma Foto PRINCIPAL do Imóvel:</label>
                <input name="arquivo1" type="file" >

            </div>

            <div class="row">

                <?php $valuefoto = $viewData['fotoprincipal']; ?> 
                <?php if(!empty($valuefoto['url_foto_principal'])): ?>


                <div class="col-sm-3">
                    <div class="form-group">

                        <div class="thumbnail" >   

                            <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $valuefoto['url_foto_principal']; ?>" >

                            <div class="btn-group">                                                                                                           
                                <a  href="<?php BASE_URL; ?>deletarfotoprincipal?id=<?php echo $valuefoto['id']; ?>" class="btn btn-danger">Excluir Imagem</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php else: ?>
                <div class="thumbnail">

                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" >
                </div>
                <?php
                endif;
                ?>
            </div>

        </div>

        <div class="form-group row">
            <div class="col-md-6">
            <label for="arquivos">Adicionar no MAXIMO 35 Fotos do Imóvel, sendo que, redimensionamento IDEAL 960x720 e tamanho total de imagens não ultrapassar 128 MB :</label>
         
            <input name="arquivos[]" type="file"  multiple="">
        </div>
            <div class="col-md-6">
                
                <label for="totalfotos">Total de fotos: </label> <span class="badge"> <?php echo $viewData['totalfotos']; ?></span>
            </div>
        </div>
            
        <hr>
        <div class="row">

            <?php if (!empty($viewData['listfotos'])): ?>

            <?php foreach ($viewData['listfotos'] as $fotos): ?>

            <div class="col-xs-6 col-md-3">

                <div class="thumbnail" id="imagem-editar" >     
                    <img src="<?php BASE_URL; ?>upload/<?php echo $fotos['url_imagem']; ?>" id="imagem-editar">
                    <a href="<?php BASE_URL; ?>deletarfoto?id=<?php echo $fotos['id']; ?>" class="btn btn-danger">Excluir Imagem</a>

                </div>

            </div>

            <?php
            endforeach;
            endif;
            ?>


            <?php for ($q = 1; $q <= $paginas = $viewData['paginas']; $q++) { ?> 
            <div class="pagination">
                <ul>
                    <li><a href="<?php BASE_URL ?>?p=<?php echo $q - 1 ?>">voltar</a></li>
                    <li><a href="<?php BASE_URL ?>?p=<?php echo $q ?>"><?php echo($q) ?></a></li>
                    <li><a href="<?php BASE_URL ?>?p=<?php echo $q + 1 ?>">avançar</a></li>
                </ul>
            </div>

<?php } ?>

        </div> 
        <hr>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Salvar">
        </div>

        <div class="danger">
            <?php if (isset($erro) &&!empty($erro)): ?>
            <div class="alert alert-danger"><?php echo $erro; ?></div> 
<?php endif; ?>
        </div>
        <div class="danger">
<?php if (isset($ok) &&!empty($ok)): ?>
            <div class="alert alert-success"><?php echo $ok; ?></div> 
<?php endif; ?>
        </div>


    </form>

</div>