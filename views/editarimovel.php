
<title>Editar Imóvel</title>



<div class="container-fluid mt-5">
    

    <h2 class="text-center label-info">Editar Imóvel </h2></br>

    <form id="editarimovel" method="POST" enctype="multipart/form-data">


        <div class="danger">
            <?php if (isset($erro) && !empty($erro)): ?>
                <div class="alert alert-danger"><?php echo $erro; ?></div> 
            <?php endif; ?>
        </div>
        <div class="danger">
            <?php if (isset($ok) && !empty($ok)): ?>
                <div class="alert alert-success"><?php echo $ok; ?></div> 
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="control-group">

                <div class="form-check form-check-inline">
                    <label class="form-check-label m-3" >
                        Anunciar no site?
                    </label>
                    <input type="radio" name="status" value="Liberado" <?php echo($status = $viewData['status'] == 'Liberado') ? 'checked="checked"' : ''; ?>
                           <label class="form-check-label" for="status">Liberar</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="status" value="Bloqueado"  <?php echo($status = $viewData['status'] == 'Bloqueado') ? 'checked="checked"' : ''; ?>>
                    <label class="form-check-label" for="status">Bloquear</label>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-3">
                <label for="id_tipo_assunto">Tipo de Assunto:</label><label class="text-danger">*</label>
                <select name="id_tipo_assunto" class="form-control" id="tipoassunto">
                    <?php $value1 = $viewData['listimovel']; ?>
                    <?php foreach ($viewData['listtiposassuntos'] as $value) : ?>
                        <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $value1['id_tipo_assunto']) ? 'selected="selected"' : ''; ?>><?php echo $value['nome']; ?></option>

                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group col-sm-3">
                <label for="tipoimovel">Tipo de Imóvel:</label>  <label class="text-danger">*</label>
                <select name="id_tipo_imovel" id="id_tipo_imovel" class="form-control" required="">

                    <?php
                    $tipoimovel = $viewData['listtiposimoveiscadastrados'];
                    ?>
                    <?php foreach ($viewData['listtiposimoveis'] as $value): ?>

                        <option value="<?php echo $value['id']; ?>" 
                                <?php echo( $value['id'] == $tipoimovel['id_tipo_imovel']) ? 'selected="selected"' : ' '; ?>><?php echo $value['nome']; ?></option> 

                    <?php endforeach;
                    ?>


                </select> 
            </div>
            <div class="form-group col-sm-5">
                <label for="nivel">Classificação do Nivel:</label><label class="text-danger">*</label>
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
                <label for="bairro">Bairro:</label>  <label class="text-danger">*</label>
                <input name="bairro" type="text" class="form-control" id="bairro" placeholder="" value="<?php echo $value1['bairro'] ?>" required="">
            </div>


            <div class="form-group col-sm-3">
                <label for="cidade">Cidade:</label>  <label class="text-danger">*</label>
                <input name="cidade" type="text" class="form-control" id="cidade" placeholder="" value="<?php echo $value1['cidade'] ?>" required="">
            </div>

            <!-- <div class="form-group col-sm-3">
                 <label for="estado">Estado:</label>  <label class="text-danger">campo obrigatorio*</label>
                 <select name="estado" id="estado" class="form-control" required="">
 
            <?php
            //  $estado = $viewData['listendereco'];
            ?>
            <?php // foreach ($viewData['listestados'] as $value):  ?>
 
                             <option value="<?php //echo $value['id'];  ?>" 
            <?php //echo( $value['id'] == $estado['id_estado']) ? 'selected="selected"' : ' '; ?>><?php //echo $value['nome']; ?></option> 
 
            <?php // endforeach;
            ?>
 
                 </select>
             </div>  -->


        </div>

        <div class="container row">
            <div class="form-row align-items-center" id="valorImovel">
                <div class="form-group col-auto">
                    <label class="" for="valorimovel">Valor do Imóvel:</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">

                            <div class="input-group-text">R$</div>

                        </div>
                        <input name="valorimovel" type="text" class="form-control" id="valor" value="<?php echo $value1['venda'] ?>" />
                    </div>
                </div>
                <div class="form-group col-auto">
                    <div id="valorAluguel">
                        <label class="" for="valoraluguel">Valor do Aluguel:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">R$</div>
                            </div>
                            <input name="valoraluguel" type="text" class="form-control" id="valor2" value="<?php echo $value1['aluguel'] ?>" />
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <div class="form-group col-md-8">
            <label for="brevedescricao">Breve descrição do imovel:</label> 

            <textarea class="form-control" name="brevedescricao" type="text" id="brevedescricao" wrap="on" cols="30" rows="30"><?php echo $value1['breve_descricao']; ?></textarea>
        </div>


        <div class="card card-body bg-light my-3">
            <div class="form-group">
                <label for="arquivo1">Adicionar uma Foto PRINCIPAL do Imóvel:</label>
                <input name="arquivo1" type="file" >

            </div>

            <div class="row">
                <div class="col-sm-3">


                    <div class="card" style="width: 18rem;">   
                        <?php $valuefoto = $viewData['fotoprincipal']; ?> 
                        <?php if (!empty($valuefoto['url_foto_principal'])): ?>




                            <img class="card-img-top"src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $valuefoto['url_foto_principal']; ?>" >

                            <div class="card-body">                                                                                                           
                                <a  href="<?php BASE_URL; ?>deletarfotoprincipal?id=<?php echo $valuefoto['id']; ?>" class="btn btn-danger">Excluir Imagem</a>
                            </div>


                        <?php else: ?>



                            <img class="card-img-top" src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" >


                        <?php
                        endif;
                        ?>
                    </div>
                </div>  

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

                    <div class=" col">

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
            <?php if (isset($erro) && !empty($erro)): ?>
                <div class="alert alert-danger"><?php echo $erro; ?></div> 
            <?php endif; ?>
        </div>
        <div class="danger">
            <?php if (isset($ok) && !empty($ok)): ?>
                <div class="alert alert-success"><?php echo $ok; ?></div> 
            <?php endif; ?>
        </div>


    </form>

</div>