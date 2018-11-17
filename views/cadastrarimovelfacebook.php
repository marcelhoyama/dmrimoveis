
<title>Cadastrar Imóvel</title>


<div class="container">
    <div class="form-group">
<a class="btn btn-default" href="<?php BASE_URL ?>menuprincipal"> Voltar p/Menu Principal</a>
</div>
    <form id="cadastrarimovel" method="POST" enctype="multipart/form-data">

  <div class="well">
                     <div class="control-group">
                         <label for="status">Anunciar no site:</label> <label class="text-danger">obrigatorio*</label></br>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="status" id="status" value="Livre"  >Liberar</label> 
                    </div>

                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="status" id="status" value="Bloquear" checked="checked">Bloquear</label>
                    </div>
              </div>
            </div>

        <div class="row">
            <div class="form-group col-sm-3">
                <label for="id_tipo_assunto">Tipo de Assunto:</label><label class="text-danger">Campo Obrigatorio*</label>
                <select name="id_tipo_assunto" class="form-control" id="id_tipo_assunto">
                    <option></option>
                    <?php foreach ($viewData['listtiposassuntos'] as $value) : { ?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>

                        <?php } endforeach; ?>
                </select>
            </div>

            <div class="form-group col-sm-3">
                <label for="tipoimovel">Tipo de Imóvel:</label>  <label class="text-danger">campo obrigatorio*</label>
                <select name="tipoimovel" class="form-control" id="tipoimovel">

                    <option></option>
                    <?php foreach ($viewData['listtiposimoveis'] as $value): { ?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>        
                        <?php }endforeach; ?>


                </select> 
            </div>
            <div class="form-group col-sm-5">
                <label for="nivel">Classificação do Nivel:</label><label class="text-danger">Campo Obrigatorio*</label>
                <select name="nivel" class="form-control" id="nivel">
                    <option></option>
                    <option value="Simples">Simples</option> 
                    <option value="Intermediário">Intermediário</option>
                  <option value="Alto Padrão">Alto Padrão</option>
                </select>
            </div>
        </div>     
 <div class="row">
            <div class="form-group col-sm-3">
                <label for="bairro">Bairro:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="bairro" type="text" class="form-control" id="bairro" placeholder="" />
            </div>

        
            <div class="form-group col-sm-3">
                <label for="cidade">Cidade:</label>  <label class="text-danger">campo obrigatorio*</label>
                <input name="cidade" type="text" class="form-control" id="cidade" placeholder=""/>
            </div>
          
         

        </div>

       
       

        <div class="form-group">
            <label for="brevedescricao">Breve descrição do imovel:</label> 

            <textarea class="form-control" name="brevedescricao" type="text" id="brevedescricao" rows="20"></textarea>
        </div>

       <div class="well">
            <div class="form-group">
                <label for="arquivo1">OPCIONAL - Adicionar uma Foto Principal do Imóvel:</label>
                <input name="arquivo1" type="file" />
            </div>

        </div>
    
<div class="well">
        <div class="form-group">
            <label for="arquivos">OPCIONAL - Adicionar Fotos do Imóvel:</label>
            <input name="arquivos[]" type="file"  multiple=""/>

        </div>
</div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Cadastrar"/>


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