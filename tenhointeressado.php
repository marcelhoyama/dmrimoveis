
<form id="tenhointeressado" method="POST">

    <div class="row">
        <div class="col-sm-3">
            <?php $imovel = $viewData['listinteressado']; ?>

            <div class="form-group">
                <label for="id_tipo_negociacao">  Status: </label>
                <select id="id_tipo_negociacao" class="form-control" name="id_tipo_negociacao" required="">
                   
                    <?php foreach ($viewData['listnegociacao'] as $value): { ?>
                            <option value="<?php echo $value['id']; ?>" <?php echo($value['nome'] == $imovel['nome_tipo_negociacao']) ? 'selected="selected"' : ''; ?>> <?php echo $value['nome']; ?></option>
                        <?php }endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_tipo_assunto">  Assunto: </label>
                <select id="id_tipo_assunto" class="form-control" name="id_tipo_assunto" required="">
                    <option></option>
                    <?php foreach ($viewData['listassunto'] as $value): { ?>
                            <option value="<?php echo $value['id']; ?>" <?php echo $value['nome'] == $imovel['nomeassunto'] ? 'selected="selected"' : ''; ?>><?php echo $value['nome']; ?> </option>

                        <?php } endforeach; ?>
                    }</select>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="id_tipo_imovel">Codigo do imovel :</label>
                <input class="form-control" type="text" name="id_tipo_imovel" value="<?php echo $imovel['id_tipo_imovel']; ?>" disabled=""/>
                <input class="form-control" type="hidden" name="status" value="<?php echo $imovel['status']; ?>" disabled=""/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="tipo_imovel">Tipo do imovel :</label>
                <input class="form-control" type="text" id="tipoimovel" name="tipoimovel" value="<?php echo $imovel['tipo_imovel']; ?>" disabled=""  />
                <input class="form-control" type="hidden" id="id_tipo_imovel" name="id_tipo_imovel" value="<?php echo $imovel['id_tipo_imovel']; ?>" disabled=""  />
                
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="" for="nome"> Nome Completo:</label><label class="text-danger">*Obrigatório</label>  
        <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $imovel['nomeinteressado']; ?>" required="true" pattern="[A-Za-zÀ-ú]+$" title="O campo nome não pode conter numeros e/ou caracteres especiais!" />
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                Telefone:  <input class="form-control" type="text" id="fonefixo" name="telefone" value="<?php echo $imovel['telefone']; ?>"  />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="celular">Celular:</label><label class="text-danger">*Obrigatório</label> 
                <input class="form-control" type="text" name="celular"  id="fone"  value="<?php echo $imovel['celular']; ?>" required="true"/>
                
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email:</label> <input class="form-control" id="email" type="email" name="email" value="<?php echo $imovel['email']; ?>"  />
    </div>
    <div class="form-group">
        <label for="id_interessado">Codigo do Interessado:</label>
        <input class="form-control" type="text" name="id_interessado" value="<?php echo $imovel['id_interessado']; ?>" disabled="" />
    </div>

    <input type="submit" value="Editar" class="btn btn-success"/>

   <script> 
                    $(function () {
    
    $('#fone').mask('(00) 00000-0000');
    $('#fonefixo').mask('(00) 0000-0000');
   
    
   
});

                </script>

</form>


