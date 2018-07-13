
<title>Editar Imóvel</title>
<?php $cliente = $viewData['listcliente']; ?>

<a class="btn btn-default" href="<?php BASE_URL ?>menuprincipalcliente?id=<?php echo $cliente['id']; ?>"> Voltar p/Menu Principal</a>

<div class="container-fluid">
    <h2 class="text-center label-info">Editar Imóvel de : 
        <?php echo $cliente['nome'];
        ?></h2></br>

        <form id="editarimovel" method="POST" enctype="multipart/form-data">

            <div class="well">
                     <div class="control-group">
                         <label for="status">Anunciar no site:</label> <label class="text-danger">obrigatorio*</label></br>
                <div class="checkbox-inline">
                        <label><input type="checkbox" name="status" value="Livre" <?php echo($status = $viewData['status']== 'Livre') ? 'checked="checked"' : ''; ?> >Liberar</label> 
                    </div>

                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="status" value="Bloquear"  <?php echo($status = $viewData['status'] == 'Bloquear') ? 'checked="checked"' : ''; ?>>Bloquear</label>
                    </div>
              </div>
            </div>

        <div class="row">
              <div class="form-group col-sm-3">
                <label for="id_tipo_assunto">Tipo de Assunto:</label><label class="text-danger">Campo Obrigatorio*</label>
                <select name="id_tipo_assunto" class="form-control" id="tipoassunto">
                    <?php $value1 = $viewData['listimovel']; ?>
                    <?php foreach ($viewData['listtiposassuntos'] as $value) :{ ?>
                    <option value="<?php echo $value['id']; ?>" <?php echo ($value['id']==$value1['id_tipo_assunto'])? 'selected="selected"':''; ?>><?php echo $value['nome'];?></option>
                                
                           <?php } endforeach; ?>
                </select>
            </div>
         
                 <div class="form-group col-sm-3">
                    <label for="id_tipo_imovel">Tipo de Imóvel:</label>  <label class="text-danger">campo obrigatorio*</label>
                    <select name="id_tipo_imovel" id="id_tipo_imovel" class="form-control" required="">
                     
                        <?php
                    $tipoimovel = $viewData['listtiposimoveiscadastrados'];
                    ?>
                    <?php foreach ($viewData['listtiposimoveis'] as $value): { ?>

                               <option value="<?php echo $value['id']; ?>" 
                                    <?php echo( $value['id'] == $tipoimovel['id_tipo_imovel']) ? 'selected="selected"' : ' '; ?>><?php echo $value['nome']; ?></option> 

                          <?php }endforeach;
                    ?>


                    </select> 
                </div>
               <div class="form-group col-sm-3">
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
          
        <div class="form-group col-md">
            <label for="brevedescricao">Breve descrição do imovel:</label> 

            <textarea class="form-control" name="brevedescricao" type="text" id="brevedescricao" ><?php echo $value1['breve_descricao'];?></textarea>
        </div>
  <div class="row">
            <div class="form-group col-sm-3">
                <label for="endereco">Tipo de Via:</label> <label class="text-danger">campo obrigatorio*</label>

                <select name="tipovia" id="tipovia" class="form-control" required="">

                    <?php
                    $via = $viewData['listendereco'];
                    ?>
                    <?php foreach ($viewData['listvia'] as $value): { ?>

                            <option value="<?php echo $value['id']; ?>" 
                                    <?php echo( $value['id'] == $via['id_tipo_via']) ? 'selected="selected"' : ' '; ?>><?php echo $value['nome']; ?></option> 

                        <?php }endforeach;
                    ?>

                </select>
            </div>
            <div class="form-group col-sm-8" >
                <?php $value = $viewData['listendereco']; ?>
                <label for="endereco">Endereço do Imóvel*:</label>  <label class="text-danger">campo obrigatorio*</label>

                <input name="endereco" class="form-control" id="endereco" type="text" value="<?php echo $value['endereco'] ?>" required="">
            </div>


        </div>




        <div class="row">
            <div class="form-group col-sm-3">
                
                <label for="numero">Numero:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="numero" type="text" class="form-control" id="numero" placeholder="" value="<?php echo $value1['numero'] ?>" required="">
            </div>
            <div class="form-group col-sm-8">
                <label for="complemento">Complemento:</label>
                <input name="complemento" type="text" class="form-control" id="complemento" value="<?php echo $value1['complemento'] ?>" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label for="bairro">Bairro:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="bairro" type="text" class="form-control" id="bairro" placeholder="" value="<?php echo $value['bairro'] ?>" required="">
            </div>

     
            <div class="form-group col-sm-3">
                <label for="cidade">Cidade:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="cidade" type="text" class="form-control" id="cidade" placeholder="" value="<?php echo $value['cidade'] ?>" required="">
            </div>
            <div class="form-group col-sm-3">
                <label for="estado">Estado:</label>  <label class="text-danger">campo obrigatorio*</label>
                <select name="estado" id="estado" class="form-control" required="">

                    <?php
                    $estado = $viewData['listendereco'];
                    ?>
                    <?php foreach ($viewData['listestados'] as $value): { ?>

                            <option value="<?php echo $value['id']; ?>" 
                                    <?php echo( $value['id'] == $estado['id_estado']) ? 'selected="selected"' : ' '; ?>><?php echo $value['nome']; ?></option> 

                        <?php }endforeach;
                    ?>

                </select>
            </div>
            <div class="form-group col-sm-3">
                <label for="cep">CEP:</label>
                <input name="cep" type="text" class="form-control" id="cep" placeholder="" value="<?php echo $value['cep'] ?>">
            </div>

        </div>

     


    <div class="form-group">
            <label for="sobreimovel">Sobre o Imóvel</label>
            <textarea name="sobreimovel" type="text" id="sobreimovel" class="form-control" placeholder="" ><?php echo $value1['sobre_imovel']; ?></textarea>
        </div>
        <div class="well">




            <div class="form-group">
                                <label for="arquivo1">OPCIONAL - Adicionar uma Foto Principal do Imóvel:</label>
                    <input name="arquivo1" type="file" >

                    </div>
                    
            <div class="row">
                    
  <?php $valuefoto=$viewData['fotoprincipal']; ?> 
<?php if(!empty($valuefoto['url_foto_principal'])): ?>
 
                            
                        <div class="col-sm-3">
                        <div class="form-group">
      
                            <div class="thumbnail" >   
                                                                      
                                    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $valuefoto['url_foto_principal']; ?>" >
                                    
                                                                                                           
<a  href="<?php BASE_URL; ?>deletarfotoprincipal?id=<?php echo $valuefoto['id'];?>" class="btn btn-default">Excluir Imagem</a>
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
            <div class="row">
                <div class=' form-group col-sm-3'>

                    <label for="nome">Quantidade de Dormitórios:</label>
                    <select name="dormitorio" class="form-control">

                        <option value="0" <?php echo($value1['dormitorio'] == '0') ? 'selected="selected"' : ''; ?>>0</option>
                        <option value="1" <?php echo($value1['dormitorio'] == '1') ? 'selected="selected"' : ''; ?>>1</option>
                        <option value="2"<?php echo($value1['dormitorio'] == '2') ? 'selected="selected"' : ''; ?>>2</option>
                        <option value="3"<?php echo($value1['dormitorio'] == '3') ? 'selected="selected"' : ''; ?>>3</option>
                        <option value="4"><?php echo($value1['dormitorio'] == '4') ? 'selected="selected"' : ''; ?>4</option>

                    </select>

                </div>

                <div class="form-group col-sm-3">
                    <label for="fone">Quantidade de Suites:</label>
                    <select name="suite" class="form-control">
                        <option value="0" <?php echo($value1['suite'] == '0') ? 'selected="selected"' : ''; ?>>0</option>
                        <option value="1" <?php echo($value1['suite'] == '1') ? 'selected="selected"' : ''; ?>>1</option>
                        <option value="2"<?php echo($value1['suite'] == '2') ? 'selected="selected"' : ''; ?>>2</option>
                        <option value="3"<?php echo($value1['suite'] == '3') ? 'selected="selected"' : ''; ?>>3</option>
                        <option value="4"><?php echo($value1['suite'] == '4') ? 'selected="selected"' : ''; ?>4</option>
                    </select> </div>



                <div class="form-group col-sm-3">
                    <label for="email">Quantidade de Garagem:</label>
                    <select name="garagem" class="form-control">
                        <option value="0" <?php echo($value1['garagem'] == '0') ? 'selected="selected"' : ''; ?>>0</option>
                        <option value="1" <?php echo($value1['garagem'] == '1') ? 'selected="selected"' : ''; ?>>1</option>
                        <option value="2"<?php echo($value1['garagem'] == '2') ? 'selected="selected"' : ''; ?>>2</option>
                        <option value="3"<?php echo($value1['garagem'] == '3') ? 'selected="selected"' : ''; ?>>3</option>
                        <option value="4"><?php echo($value1['garagem'] == '4') ? 'selected="selected"' : ''; ?>4</option>
                    </select></div>


                <div class="form-group col-sm-3">
                    <label for="email">Quantidade de Banheiros:</label>
                    <select name="banheiro" class="form-control">
                        <option value="0" <?php echo($value1['banheiro'] == '0') ? 'selected="selected"' : ''; ?>>0</option>
                        <option value="1" <?php echo($value1['banheiro'] == '1') ? 'selected="selected"' : ''; ?>>1</option>
                        <option value="2"<?php echo($value1['banheiro'] == '2') ? 'selected="selected"' : ''; ?>>2</option>
                        <option value="3"<?php echo($value1['banheiro'] == '3') ? 'selected="selected"' : ''; ?>>3</option>
                        <option value="4"><?php echo($value1['banheiro'] == '4') ? 'selected="selected"' : ''; ?>4</option>
                    </select> </div>

            </div>



            <div class="well">
                <div class="form-group">
                    <label for="opcoes">Outras Opções: </label><br>
                </div>


                <div class="form-group">
                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="piscina" value="Piscina" <?php echo($value1['piscina'] == 'Piscina') ? 'checked="checked"' : ''; ?> >Piscina</label> 
                    </div>

                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="churrasqueira" value="Churrasqueira"  <?php echo($value1['churrasqueira'] == 'Churrasqueira') ? 'checked="checked"' : ''; ?>>Churrasqueira</label>
                    </div>
                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="energiasolar" value="Energia Solar"  <?php echo($value1['energia solar'] == 'Energia Solar') ? 'checked="checked"' : ''; ?>>Energia Solar</label>
                    </div>
                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="luz"value="Luz" <?php echo($value1['luz'] == 'Luz') ? 'checked="checked"' : ''; ?> >Luz</label>
                    </div>
                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="agua" value="Água" <?php echo($value1['agua'] == 'Água') ? 'checked="checked"' : ''; ?>>Água</label>
                    </div>
                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="internet" value="Internet"  <?php echo($value1['internet'] == 'Internet') ? 'checked="checked"' : ''; ?>>Internet</label>
                    </div>
                      <div class="checkbox-inline">
                        <label><input type="checkbox" name="gas" value="Gás"  <?php echo($value1['gas'] == 'Gás') ? 'checked="checked"' : ''; ?>>Gás</label>
                    </div>
                         <div class="checkbox-inline">
                        <label><input type="checkbox" name="lavanderia" value="Lavanderia"  <?php echo($value1['lavanderia'] == 'Lavanderia') ? 'checked="checked"' : ''; ?>>Lavanderia</label>
                    </div>
                </div>
            </div>

   <div class="form-group">
            <label for="proximidades">Proximidades do Imóvel</label>
            <textarea name="proximidades" type="text" id="proximidades" class="form-control" placeholder="" ><?php echo $value1['proximidades'] ?></textarea>
        </div>

            <div class="row">
           
                <div class="form-group col-sm-4">
                    <label for="areaconstruida">Area Construida:</label>
                    <input name="areaconstruida" type="text" class="form-control" id="metro" placeholder="" value="<?php echo number_format($value1['area_construida'],2,',','.'); ?>">
                </div>
                <div class="form-group col-sm-4">
                    <label for="areatotal">Area Total:</label>
                    <input name="areatotal" type="text" class="form-control" id="metro2" placeholder="" value="<?php echo  number_format($value1['area_total'],2,',','.'); ?>">
                </div>
            </div>

            <div class="well well-sm">
                <label class=""for="valorimovel">Valor do Imóvel:</label>
                <div class="form-group col-sm-4 input-group">

                    <span class="input-group-addon">R$ <?php echo $value1['venda'];?></span>
                   
                    <input name="valorimovel" type="text" class="form-control" id="valor" placeholder="" value="<?php echo number_format($value1['venda'],2, '.', ','); ?>">
                </div>
              

                <div class="control-group">
                    <label class="control-label" for="formapgto">Forma de Pagamento:</label>
                 <!--   <div class="checkbox">
                        <label><input type="checkbox" value="1" disabled="">À vista</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="2" disabled="">Financiamento Banco</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="3" disabled="">Financiamento Particular</label>
                    </div>

                </div> -->
                  <textarea class="form-control" type="text" name="formapagamentovenda" value="<?php echo $value1['formapgtovenda'];?>"></textarea>
            </div>


            <div class="well well-sm">
                <label for="valoraluguel">Valor do Aluguel:</label>
                <div class="form-group col-sm-4 input-group">

                    <span class="input-group-addon">R$</span>
                    <input name="valoraluguel" type="text" class="form-control" id="valor2" placeholder="" value="<?php echo number_format($value1['aluguel'],2, ',', '.'); ?>">
                </div>


                <div class="control-group">
                    <label class="control-label" for="formapgto">Forma de Pagamento:</label>
                   <!-- <div class="checkbox">
                        <label><input type="checkbox" value="1" disabled="">Deposito</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="2" disabled="">Pessoalmente</label>
                    </div>
                   
                </div>-->
                   <textarea class="form-control" type="text" name="formapagamentoaluguel" ><?php echo $value1['formapgtoaluguel']; ?></textarea>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading"> <h1 class="panel-title text-center">Documentação do Imóvel</h1></div>

                <div class="panel-body">
                    <textarea class="form-control" type="text" name="documentacaoimovel"><?php echo $value1['documentacao'] ?></textarea>
                </div>
            </div>
    
       
            <div class="form-group">
                <label for="arquivo">OPCIONAL - Adicionar Fotos do Imóvel:</label>
                <input name="arquivo[]" type="file"  multiple="">
            </div>
            <hr>
            <div class="row">

                <?php if (!empty($viewData['listfotos'])) { ?>

    <?php foreach ($viewData['listfotos'] as $value): { ?>

                            <div class="col-xs-6 col-md-3">



                                <div class="thumbnail" >     
                                    <a  href="<?php BASE_URL; ?>todos">    <img src="<?php BASE_URL; ?>upload/<?php echo $value['url_imagem']; ?>" ></a>
<a  href="<?php BASE_URL; ?>deletarfoto?id=<?php echo $value['id'];?>" class="btn btn-default">Excluir Imagem</a>

                                </div>
                                
                            </div>

        <?php } endforeach; 

 
                ?>

                </div>       
    <?php for ($q = 1; $q <= $paginas=$viewData['paginas']; $q++) { ?> 
                    <div class="pagination">
                        <ul>
                            <li><a href="<?php BASE_URL ?>?p=<?php echo $q - 1 ?>">voltar</a></li>
                            <li><a href="<?php BASE_URL ?>?p=<?php echo $q ?>">[<?php echo($q)?>]</a></li>
                            <li><a href="<?php BASE_URL ?>?p=<?php echo $q + 1 ?>">avançar</a></li>
                        </ul>
                    </div>
               
          <?php  } 
          }
            ?>


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