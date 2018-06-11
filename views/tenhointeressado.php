
<form method="POST">

    <div class="row">
        <div class="col-sm-3">
            <?php $imovel = $viewData['listinteressado']; ?>

            <div class="form-group">
                <label for="status">  Status: </label>
              
           
                        <select id="status" class="form-control" name="status">
                            <option></option>
                            
                            <?php foreach ($viewData['liststatus'] as $value):{ ?>
                                <option value="<?php echo $value['id']; ?>" <?php echo($value['nome'] == $imovel['nomestatus']) ? 'selected="selected"' : ''; ?>> <?php echo $value['nome']; ?></option>
                            <?php }endforeach; ?>
                        </select>
            </div>
            <div class="form-group">
                <label for="assunto">  Assunto: </label>
                <input class="form-control" type="text" name="assunto" value="<?php echo $imovel['assunto']; ?>"  />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="id_imovel">Codigo do imovel :</label>
                <input class="form-control" type="text" name="codigo_imovel" value="<?php echo $imovel['codigo_imovel']; ?>" disabled=""/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="tipo_imovel">Tipo do imovel :</label>
                <input class="form-control" type="text" name="tipoimovel" value="<?php echo $imovel['tipoimovel']; ?>" disabled="" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="" for="nome"> Nome Completo:</label><label class="text-danger">*Obrigatório</label>  <input class="form-control" type="text" name="nome" value="<?php echo $imovel['nomeinteressado']; ?>"  required="" />
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                Telefone:  <input class="form-control" type="tel" name="telefone" value="<?php echo $imovel['telefone']; ?>"  />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="celular">Celular:</label><label class="text-danger">*Obrigatório</label> <input class="form-control" type="tel" name="celular" value="<?php echo $imovel['celular']; ?>" required=""/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email:</label> <input class="form-control" type="email" name="email" value="<?php echo $imovel['email']; ?>" />
    </div>
    <input class="form-control" type="text" name="id" value="<?php echo $imovel['id_interessado']; ?>" disabled="" />
    

    <input type="submit" value="Editar" class="btn btn-success"/>





</form>


