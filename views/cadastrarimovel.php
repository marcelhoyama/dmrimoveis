
<title>Cadastrar Imóvel</title>
<div class="container-fluid">
    <h2 class="text-center">Cadastrar Imóvel de : <?php $value = $viewData['cliente'];
echo $value['nome']; ?></h2></br>

    <form  method="POST" enctype="multipart/form-data">

        <div class='col-sm-3'>
            <div class="form-group">
                <label for="nome">Quantidade de Dormitórios:</label>
                <select name="qtddormitorio" class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="fone">Quantidade de Suites:</label>
                <select name="qtddormitorio" class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select> </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label for="email">Quantidade de Garagem:</label>
                <select name="qtddormitorio" class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select></div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="email">Quantidade de Banheiros:</label>
                <select name="qtddormitorio" class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select> </div>
        </div>

        <div class="form-group">

            <label for="endereco">Endereço do Imóvel:</label>
            <input name="endereco" type="text" class="form-control" id="endereco">
            <select class="form-control">
                <?php foreach ($listaendereco as $value) { ?>
                    <option value=''><?php echo $value['endereco']; ?></option>
<?php } ?>

            </select>
        </div>
        
            <div class="form-group">
                <label for="numero">Numero:</label>
                <input name="numero" type="text" class="form-control" id="endereco" placeholder="">
            </div>
            <div class="form-group">
                <label for="complemento">Complemento:</label>
                <input name="complemento" type="text" class="form-control" id="endereco" placeholder="">
            </div>
        <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input name="bairro" type="text" class="form-control" id="endereco" placeholder="">
        </div>
        <div class="col-sm-4">
        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input name="cidade" type="text" class="form-control" id="endereco" placeholder="">
        </div>
        </div>
        <div class="col-sm-4">
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input name="estado" type="text" class="form-control" id="endereco" placeholder="">
        </div>
        </div>
        <div class="col-sm-4">
        <div class="form-group">
            <label for="cep">CEP:</label>
            <input name="cep" type="text" class="form-control" id="endereco" placeholder="somente numeros">
        </div>
        </div>
        <div class="form-group">
            <label for="opcoes">Outras Opções: </label><br>
        </div>
        <div class="form-group">
            <div class="checkbox-inline">
                <label><input type="checkbox" value="">Piscina</label>
            </div>
            
            <div class="checkbox-inline">
                <label><input type="checkbox" value="">Churrasqueira</label>
            </div>
            <div class="checkbox-inline">
                <label><input type="checkbox" value="">Energia Solar</label>
            </div>
            <div class="checkbox-inline">
                <label><input type="checkbox" value="">Luz</label>
            </div>
            <div class="checkbox-inline">
                <label><input type="checkbox" value="">Água</label>
            </div>
            <div class="checkbox-inline">
                <label><input type="checkbox" value="">Internet</label>
            </div>
        </div>
        <div class="form-group">
            <label for="tipoimovel">Tipo de Imóvel:</label>
            <select name="tipoimovel" class="form-control">
                <option></option>
                <option>Casa</option>
                <option>Apartamento</option>
                <option>Germinada</option>
                <option>Kitnet</option>
                <option>Galpão</option>
                <option>Terreno</option>
            </select> </div>
        <div class="form-group">
            <label for="areaconstruida">Area Construida:</label>
            <input name="areaconstruida" type="text" class="form-control" id="endereco" placeholder="">
        </div>
        <div class="form-group">
            <label for="areatotal">Area Total:</label>
            <input name="areatotal" type="text" class="form-control" id="endereco" placeholder="">
        </div>
        <div class="form-group">
            <label for="valorimovel">Valor do Imóvel:</label>
            <input name="valorimovel" type="text" class="form-control" id="endereco" placeholder="">
        </div>
        <div class="form-group">
            <label for="formapgto">Forma de Pagamento:</label>
            <div class="checkbox">
                <label><input type="checkbox" value="">Mensal</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="">Financiamento</label>
            </div>
            <div class="checkbox disabled">
                <label><input type="checkbox" value="" disabled></label>
            </div>


        </div>
        <div class="form-group">
            <label for="arquivo">Adicionar Fotos do Imóvel:</label>
            Escolher arquivo<input name="arquivo[]" type="file"  multiple="">
            
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