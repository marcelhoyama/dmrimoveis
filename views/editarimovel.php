
<title>Editar Imóvel</title>
<?php $cliente = $viewData['listcliente']; ?>
 
<a class="btn btn-default" href="<?php BASE_URL ?>menuprincipalcliente?id=<?php echo $cliente['id']; ?>"> Voltar p/Menu Principal</a>

<div class="container-fluid">
    <h2 class="text-center label-info">Editar Imóvel de : 
        <?php echo $cliente['nome'];
        ?></h2></br>

    <form  method="POST" enctype="multipart/form-data">



        <div class="row">
            <div class="form-group col-sm-4">
                <label for="endereco">Tipo de Via:(Exemplo: Rua,Avenida)</label> <label class="text-danger">campo obrigatorio*</label>

                <select name="tipovia" class="form-control" required="">

                           
<?php foreach ($viewData['listvia'] as $value): {
     $via = $viewData['listendereco']; 
                    if ($via['id_tipo_via'] ==$value['id']){  ?>
                    <option value="<?php echo $via['id_tipo_via'] ?>" selected=""><?php echo $via['via'] ?></option>
               <?php     } else{ ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['nome'] ?></option>
               <?php  } }endforeach;?>

                </select>
            </div>
            <div class="form-group col-lg-8" >
 <?php $value = $viewData['listendereco']; ?>
                <label for="endereco">Endereço do Imóvel*:</label>  <label class="text-danger">campo obrigatorio*</label>

                <input name="endereco" class="form-control" type="text" value="<?php echo $value['endereco'] ?>" required="">
            </div>


        </div>




        <div class="row">
            <div class="form-group col-sm-3">
                <?php $value1 = $viewData['listimovel']; ?>
                <label for="numero">Numero:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="numero" type="number" class="form-control" id="endereco" placeholder="" value="<?php echo $value1['numero'] ?>" required="">
            </div>
            <div class="form-group col-sm-6">
                <label for="complemento">Complemento:</label>
                <input name="complemento" type="text" class="form-control" id="endereco" value="<?php echo $value1['complemento'] ?>" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label for="bairro">Bairro:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="bairro" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $value['bairro'] ?>" required="">
            </div>

        </div>
        <div class="row">
            <div class="form-group col-sm-3">
                <label for="cidade">Cidade:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="cidade" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $value['cidade'] ?>" required="">
            </div>
            <div class="form-group col-sm-3">
                <label for="estado">Estado: (Exemplo: SP)</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="estado" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $value['estado'] ?>" required="">
            </div>
            <div class="form-group col-sm-3">
                <label for="cep">CEP:</label>
                <input name="cep" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $value['cep'] ?>">
            </div>

        </div>
        <div class="well">




            <div class="form-group">
                <fieldset>                <label for="arquivo1">OPCIONAL - Adicionar uma Foto Principal do Imóvel:</label>
                <input name="arquivo1" type="file" >

            </div>
                      <?php $valuefoto = $viewData['listfotos']; ?>

            <div class="col-sm-3">
                <div class="form-group">




<?php if(empty($valuefoto['url_principal']) == null){?>  
                    <div class="thumbnail" >   
                        <a  href="<?php BASE_URL; ?>todos">    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $valuefoto['url_principal']; ?>" ></a>

                    </div>
<?php } else {
    
}?>


                </div>
            </div>
            </fieldset>
            
  



        </div>
        <div class="row">
            <div class=' form-group col-sm-3'>

                <label for="nome">Quantidade de Dormitórios:</label>
                <select name="dormitorio" class="form-control">
                    <option value="<?php echo $value['dormitorio'] ?>"><?php echo $value1['dormitorio'] ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>

            </div>

            <div class="form-group col-sm-3">
                <label for="fone">Quantidade de Suites:</label>
                <select name="suite" class="form-control">
                    <option value="<?php echo $value['suite'] ?>"><?php echo $value1['suite'] ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select> </div>



            <div class="form-group col-sm-3">
                <label for="email">Quantidade de Garagem:</label>
                <select name="garagem" class="form-control">
                    <option value="<?php echo $value['garagem'] ?>"><?php echo $value1['garagem'] ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></div>


            <div class="form-group col-sm-3">
                <label for="email">Quantidade de Banheiros:</label>
                <select name="banheiro" class="form-control">
                    <option value="<?php echo $value['banheiro'] ?>"><?php echo $value1['banheiro'] ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select> </div>

        </div>



        <div class="well">
            <div class="form-group">
                <label for="opcoes">Outras Opções: </label><br>
            </div>
            <div class="form-group">
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="piscina" value="Piscina">Piscina</label>
                </div>

                <div class="checkbox-inline">
                    <label><input type="checkbox" name="churrasqueira" value="Churrasqueira">Churrasqueira</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="energiasolar" value="Energia Solar">Energia Solar</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="luz"value="Luz" >Luz</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="agua" value="Água">Água</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="internet" value="Internet">Internet</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-4">
                <label for="tipoimovel">Tipo de Imóvel:</label>  <label class="text-danger">campo obrigatorio*</label>
                <select name="tipoimovel" class="form-control" required="">
                    <option value="<?php echo $value['tipo_imovel'] ?>"><?php echo $value1['tipo_imovel'] ?></option>
                    <option value="Casa">Casa</option>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Germinada">Germinada</option>
                    <option value="Kitnet">Kitnet</option>
                    <option value="Chacara">Chacara</option>
                    <option value="Galpão">Galpão</option>
                    <option value="Terreno">Terreno</option>
                    <option value="Sitio">Sitio</option>
                    <option value="Condominio">Condominio</option>

                </select> 
            </div>
            <div class="form-group col-sm-4">
                <label for="areaconstruida">Area Construida:</label>
                <input name="areaconstruida" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $value1['area_construida'] ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="areatotal">Area Total:</label>
                <input name="areatotal" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $value1['area_total'] ?>">
            </div>
        </div>

        <div class="well well-sm">
            <label class=""for="valorimovel">Valor do Imóvel:</label>
            <div class="form-group col-sm-4 input-group">

                <span class="input-group-addon">R$</span>
                <input name="valorimovel" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $value1['venda']; ?>">
            </div>


            <div class="control-group">
                <label class="control-label" for="formapgto">Forma de Pagamento:</label>
                <div class="checkbox">
                    <label><input type="checkbox" value="1" disabled="">À vista</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="2" disabled="">Financiamento Banco</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="3" disabled="">Financiamento Particular</label>
                </div>

            </div>
        </div>


        <div class="well well-sm">
            <label for="valoraluguel">Valor do Aluguel:</label>
            <div class="form-group col-sm-4 input-group">

                <span class="input-group-addon">R$</span>
                <input name="valoraluguel" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $value1['aluguel']; ?>">
            </div>


            <div class="control-group">
                <label class="control-label" for="formapgto">Forma de Pagamento:</label>
                <div class="checkbox">
                    <label><input type="checkbox" value="1" disabled="">Deposito</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="2" disabled="">Pessoalmente</label>
                </div>

            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading"> <h1 class="panel-title text-center">Documentação do Imóvel</h1></div>

            <div class="panel-body">
                <textarea class="form-control" type="text" name="documentacaoimovel" value="<?php echo $value1['documentacao'] ?>"></textarea>
            </div>
        </div>


        <div class="form-group">
            <label for="arquivo">OPCIONAL - Adicionar Fotos do Imóvel:</label>
            <input name="arquivo[]" type="file"  multiple="">
        </div>
        <hr>
        <div class="row">
            
        <?php if(!empty($viewData['listfotos'])){?>
       
        <?php foreach ($viewData['listfotos'] as $value): {  ?>
                
<div class="col-xs-6 col-md-3">
 




                        <div class="thumbnail" >     
                            <a  href="<?php BASE_URL; ?>todos">    <img src="<?php BASE_URL; ?>upload/<?php echo $value['url_imagem']; ?>" ></a>

                        </div>

 </div>
           
        <?php } endforeach; ?>
       

      
        </div>       
      <?php        for($q=1;$q<=$paginas;$q++){ ?> 
             <div class="pagination">
  <ul>
      <li><a href="<?php BASE_URL;?>?p=<?php echo $q -1?>">voltar</a></li>
    <li><a href="<?php BASE_URL; ?>?p=<?php echo $q?>">1</a></li>
    <li><a href="<?php BASE_URL;?>?p=<?php echo $q +1?>">avançar</a></li>
  </ul>
</div>
        <?php }
        
        }else{} ?>
        
 
        <hr>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Editar">


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