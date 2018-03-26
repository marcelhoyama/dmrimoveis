
<title>Cadastrar Imóvel</title>
<div class="container-fluid">
    <h2 class="text-center label-info">Cadastrar Imóvel de : <?php
        $value = $viewData['cliente'];
        echo $value['nome'];
        ?></h2></br>

    <form  method="POST" enctype="multipart/form-data">



        <div class="row">
        <div class="form-group col-lg-6" >
            <label for="endereco">Endereço do Imóvel se não houver*:</label>
            <input name="endereco" class="form-control" type="text" value="">
        </div>
        
            <div class="form-group col-sm-6">
                <label for="endereco">Verifique Endereço se Existe*:</label>
            <select class="form-control" name="endereco" id="valor">
            <option value="" ></option>
            <?php foreach ($viewData['enderecos'] as $value) { ?>
                <option value='<?php echo $value['endereco']; ?>'><?php echo $value['endereco']; ?></option>
<?php } ?>

        </select>
                </div>
</div>

                
      

        <div class="row">
            <div class="form-group col-sm-3">
                <label for="numero">Numero:</label>
                <input name="numero" type="text" class="form-control" id="endereco" placeholder="">
            </div>
            <div class="form-group col-sm-6">
                <label for="complemento">Complemento:</label>
                <input name="complemento" type="text" class="form-control" id="endereco" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label for="bairro">Bairro:</label>
                <input name="bairro" type="text" class="form-control" id="endereco" placeholder="">
            </div>
                <div class="form-group col-sm-6">
                <label for="bairro">Verifique se Bairro Existe*:</label>
            <select class="form-control" name="endereco" id="valor">
            <option value="" ></option>
            <?php foreach ($viewData['bairros'] as $value) { ?>
                <option value='<?php echo $value['nome']; ?>'><?php echo $value['nome']; ?></option>
<?php } ?>

        </select>
                </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="cidade">Cidade:</label>
                <input name="cidade" type="text" class="form-control" id="endereco" placeholder="">
            </div>
                <div class="form-group col-sm-6">
                <label for="endereco">Verifique se Cidade Existe*:</label>
            <select class="form-control" name="cidade" id="valor">
            <option value="" ></option>
            <?php foreach ($viewData['cidades'] as $value) { ?>
                <option value='<?php echo $value['nome']; ?>'><?php echo $value['nome']; ?></option>
<?php } ?>

        </select>
                </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label for="estado">Estado:</label>
                <input name="estado" type="text" class="form-control" id="endereco" placeholder="">
            </div>
    <div class="form-group col-sm-6">
                <label for="estado">Verifique se Estado Existe*:</label>
            <select class="form-control" name="estado" id="valor">
            <option value="" ></option>
            <?php foreach ($viewData['estados'] as $value) { ?>
                <option value='<?php echo $value['nome']; ?>'><?php echo $value['nome']; ?></option>
<?php } ?>

        </select>
                </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-3">
                <label for="cep">CEP:</label>
                <input name="cep" type="text" class="form-control" id="endereco" placeholder="somente numeros">
            </div>
        </div>
        
        <div class="row">
            <div class=' form-group col-sm-3'>

                <label for="nome">Quantidade de Dormitórios:</label>
                <select name="dormitorio" class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>

            </div>

            <div class="form-group col-sm-3">
                <label for="fone">Quantidade de Suites:</label>
                <select name="suite" class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select> </div>



            <div class="form-group col-sm-3">
                <label for="email">Quantidade de Garagem:</label>
                <select name="garagem" class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select></div>


            <div class="form-group col-sm-3">
                <label for="email">Quantidade de Banheiros:</label>
                <select name="banheiro" class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select> </div>

        </div>



        <div class="well">
            <div class="form-group">
                <label for="opcoes">Outras Opções: </label><br>
            </div>
            <div class="form-group">
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[]" value="Piscina">Piscina</label>
                </div>

                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[]" value="Churrasqueira">Churrasqueira</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[] "value="Energia Solar">Energia Solar</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[] "value="Luz">Luz</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[]" value="Água">Água</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[] "value="Internet">Internet</label>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="form-group col-sm-4">
            <label for="tipoimovel">Tipo de Imóvel:</label>
            <select name="tipoimovel" class="form-control">
                <option></option>
                <option>Casa</option>
                <option>Apartamento</option>
                <option>Germinada</option>
                <option>Kitnet</option>
                <option>Galpão</option>
                <option>Terreno</option>
            </select> 
        </div>
        <div class="form-group col-sm-4">
            <label for="areaconstruida">Area Construida:</label>
            <input name="areaconstruida" type="text" class="form-control" id="endereco" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label for="areatotal">Area Total:</label>
            <input name="areatotal" type="text" class="form-control" id="endereco" placeholder="">
        </div>
        </div>

        <div class="well well-sm">
            <label class=""for="valorimovel">Valor do Imóvel:</label>
            <div class="form-group col-sm-4 input-group">

                <span class="input-group-addon">R$</span>
                <input name="valorimovel" type="text" class="form-control" id="endereco" placeholder="">
            </div>


            <div class="control-group">
                <label class="control-label" for="formapgto">Forma de Pagamento:</label>
                <div class="checkbox">
                    <label><input type="checkbox" value="1">À vista</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="2">Financiamento Caixa</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="3">Financiamento Particular</label>
                </div>

            </div>
        </div>


        <div class="well well-sm">
            <label for="valoraluguel">Valor do Aluguel:</label>
            <div class="form-group col-sm-4 input-group">

                <span class="input-group-addon">R$</span>
                <input name="valoraluguel" type="text" class="form-control" id="endereco" placeholder="">
            </div>


            <div class="control-group">
                <label class="control-label" for="formapgto">Forma de Pagamento:</label>
                <div class="checkbox">
                    <label><input type="checkbox" value="1">Deposito</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="2">Pessoalmente</label>
                </div>

            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading"> <h1 class="panel-title text-center">Documentação do Imóvel</h1></div>
            <div class="panel-body">
                
            </div>
        </div>


        <div class="form-group">
            <label for="arquivo">Adicionar Fotos do Imóvel:</label>
            <input name="arquivo[]" type="file"  multiple="">

        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Cadastrar">


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