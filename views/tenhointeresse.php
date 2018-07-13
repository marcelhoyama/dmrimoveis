
<form id="tenhointeresse" method="POST" >


    <div class="row">
        <div class="col-sm-3">
            <?php $imovel = $viewData['dadosImovel']; ?>


            <div class="form-group">

                <?php foreach ($viewData['listtiposassuntos'] as $value) {
                    if ($value['id'] == $imovel['id_tipo_assunto']) {
                        ?>
                        <label for="assunto">  Assunto: </label><?php echo $value['nome']; ?>
                        <input type="hidden" value="<?php echo $value['id'] ?>" name="id_tipo_assunto" class="form-control" disabled=""/>
                        <input type="hidden" value="<?php echo $value['nome'] ?>" name="tipo_assunto" class="form-control" disabled=""/>

                    <?php }
                }
                ?>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="id_imovel">Codigo do imovel :</label><?php echo $imovel['id_imovel'] ?>
                <input class="form-control" type="hidden" name="id_imovel" value="<?php echo $imovel['id_imovel'] ?>" disabled=""/>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="tipo_imovel">Tipo do imovel :</label><?php echo $imovel['tipo_imovel'] ?>

                <input class="form-control" type="hidden" name="id_tipo_imovel" value="<?php echo $imovel['id_tipo_imovel'] ?>" disabled=""/>
                <input class="form-control" type="hidden" name="tipo_imovel" value="<?php echo $imovel['tipo_imovel'] ?>" disabled=""/>

            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="" for="nome"> Nome Completo:</label><label class="text-danger">*Obrigatório</label> 
        <input class="form-control" type="text" name="nome" id="nome" value="" placeholder="somente letras" required="true" pattern="[A-Za-zÀ-ú\s]+$" title="O campo nome não pode conter numeros e/ou caracteres especiais!"/>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="telefone">Telefone Fixo:</label> 
                <input class="form-control" type="text" name="fonefixo" id="fonefixo" value="" placeholder="seu telefone" />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="fone">Celular:</label><label class="text-danger">*Obrigatório</label> 
                <input class="form-control" type="text" name="fone" id="fone" value="" placeholder=" seu celular" required="true" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email:</label> 
        <input class="form-control" type="email" name="email" id="email" value="" placeholder="seu e-mail"/>
    </div>

    <input type="submit" value="enviar" class="btn btn-success"/>


    <script>
        $(function () {

            $('#fone').mask('(00) 00000-0000');
            $('#fonefixo').mask('(00) 0000-0000');



        });

    </script>


</form>
