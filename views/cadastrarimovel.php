
<title>Cadastrar Imóvel</title>
<?php $value = $viewData['cliente']; ?>
<a class="btn btn-default" href="<?php BASE_URL ?>menuprincipalcliente?id=<?php echo $value['id']; ?>"> Voltar p/Menu Principal</a>

<div class="container-fluid">
    <h2 class="text-center label-info">Cadastrar Imóvel de : 
        <?php echo $value['nome'];
        ?></h2></br>

    <form  method="POST" enctype="multipart/form-data">



        <div class="row">
            <div class="form-group col-sm-4">
                <label for="endereco">Tipo de Via:(Exemplo: Rua,Avenida)</label> <label class="text-danger">campo obrigatorio*</label>
                <input class="form-control" name="tipovia" id="valor" required="">
                
            </div>
            <div class="form-group col-lg-8" >

                <label for="endereco">Endereço do Imóvel*:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="endereco" class="form-control" type="text" value="" required="">
            </div>

           
        </div>




        <div class="row">
            <div class="form-group col-sm-3">
                <label for="numero">Numero:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="numero" type="number" class="form-control" id="endereco" placeholder="" required="">
            </div>
            <div class="form-group col-sm-6">
                <label for="complemento">Complemento:</label>
                <input name="complemento" type="text" class="form-control" id="endereco" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label for="bairro">Bairro:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="bairro" type="text" class="form-control" id="endereco" placeholder="" required="">
            </div>
         
        </div>
        <div class="row">
            <div class="form-group col-sm-3">
                <label for="cidade">Cidade:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="cidade" type="text" class="form-control" id="endereco" placeholder="" required="">
            </div>
            <div class="form-group col-sm-3">
                <label for="estado">Estado: (Exemplo: SP)</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="estado" type="text" class="form-control" id="endereco" placeholder="" required="">
            </div>
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
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>

            </div>

            <div class="form-group col-sm-3">
                <label for="fone">Quantidade de Suites:</label>
                <select name="suite" class="form-control">
                    <option></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select> </div>



            <div class="form-group col-sm-3">
                <label for="email">Quantidade de Garagem:</label>
                <select name="garagem" class="form-control">
                    <option></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></div>


            <div class="form-group col-sm-3">
                <label for="email">Quantidade de Banheiros:</label>
                <select name="banheiro" class="form-control">
                    <option></option>
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
                    <label><input type="checkbox" name="descricao[]" value="Piscina" disabled="">Piscina</label>
                </div>

                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[]" value="Churrasqueira" disabled="">Churrasqueira</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[] "value="Energia Solar" disabled="">Energia Solar</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[] "value="Luz" disabled="">Luz</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[]" value="Água"disabled="">Água</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="descricao[] "value="Internet" disabled="">Internet</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-4">
                <label for="tipoimovel">Tipo de Imóvel:</label>  <label class="text-danger">campo obrigatorio*</label>
                <select name="tipoimovel" class="form-control" required="">
                    <option></option>
                    <option value="Casa">Casa</option>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Germinada">Germinada</option>
                    <option value="Kitnet">Kitnet</option>
                    <option value="Galpão">Galpão</option>
                    <option value="Terreno">Terreno</option>

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
                <input name="valoraluguel" type="text" class="form-control" id="endereco" placeholder="">
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
                <textarea class="form-control" type="text" name="documentacaoimovel"></textarea>
            </div>
        </div>


        <div class="form-group">
            <label for="arquivo">OPCIONAL - Adicionar Fotos do Imóvel:</label>
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