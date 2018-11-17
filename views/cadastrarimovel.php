
<title>Cadastrar Imóvel</title>


<div class="container-fluid">
     <div class="form-group">
    <a class="btn btn-default" href="<?php BASE_URL ?>menuprincipal"> Voltar p/Menu Principal</a>
</div>
    <div class="text-center h3">Cadastrar Imóvel</div>
   
    <form id="cadastrarimovel" method="POST" enctype="multipart/form-data">

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
  <div class="well">
                     <div class="control-group">
                         <label for="status">Anunciar no site:</label> <label class="text-danger">obrigatorio*</label></br>
                <div class="checkbox-inline">
                    <label><input type="radio" name="status" id="status" value="Liberado"  >Liberar</label> 
                    </div>

                    <div class="checkbox-inline">
                        <label><input type="radio" name="status" id="status" value="Bloqueado" checked="checked">Bloquear</label>
                    </div>
              </div>
            </div>

        <div class="row">
            <div class="form-group col-sm-3">
                <label for="id_tipo_assunto">Tipo de Assunto:</label><label class="text-danger">Campo Obrigatorio*</label>
                <select name="id_tipo_assunto" class="form-control" id="id_tipo_assunto">
                    <option></option>
                    <option value="1">Venda</option>
                    <option value="2">Aluga</option>
                 <!--   <?php //foreach ($viewData['listtiposassuntos'] as $value) : { ?>
                            <option value="<?php //echo $value['id']; ?>"><?php //echo $value['nome']; ?></option>

                        <?php // } endforeach; ?>  -->
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
     <!--       <div class="row">
            <div class=' form-group col-sm-3'>

                <label for="nome">Quantidade de Dormitórios:</label>
                <select name="dormitorio" id="dormitorio" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>

            </div>

            <div class="form-group col-sm-3">
                <label for="fone">Quantidade de Suites:</label>
                <select name="suite" id="suite" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select> </div>



            <div class="form-group col-sm-3">
                <label for="email">Quantidade de Garagem:</label>
                <select name="garagem" id="garagem" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></div>


            <div class="form-group col-sm-3">
                <label for="email">Quantidade de Banheiros:</label>
                <select name="banheiro" id="banheiro" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select> </div>

        </div>
          <div class="well">
            <label for="valorimovel">Valor do Imóvel:</label>
            <div class="form-group col-sm-4 input-group">

                <span class="input-group-addon">R$</span>
                <input name="valorimovel" type="text" class="form-control" id="valor" placeholder=""/>
            </div>


            <label for="valoraluguel">Valor do Aluguel:</label>
            <div class="form-group col-sm-4 input-group">

                <span class="input-group-addon">R$</span>
                <input name="valoraluguel" type="text" class="form-control" id="valor2" placeholder=""/> 
            </div>
         </div> -->
          <div class="form-group">
            <label for="brevedescricao">Breve descrição do imovel:</label> 

            <textarea class="form-control" name="brevedescricao" type="text" id="brevedescricao" rows="30"></textarea>
        </div>

       
        <div class="well">
            <div class="form-group">
                <label for="arquivo1">Adicionar UMA Foto Principal do Imóvel:</label>
                <input name="arquivo1" type="file" />
            </div>

        </div>
       

       
<div class="well">

        <div class="form-group">
            <label for="arquivos">Adicionar no MAXIMO 35 Fotos do Imóvel:</label>
            <input id="fotos" name="arquivos[]" type="file"  multiple=""/>

        </div>
</div>
     <div class="progress progress-striped active">
         <div class="progress-bar"  style="width: 0%">
             
         
         </div>
        
             
     </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary upload" >Cadastrar</button> 


        </div>
     <script type="text/javascript">
          $(function(){
              
          
            $('.cadastrarimovel').on('submit',function(e){
                 e.preventDefault();
                 var form =$('.cadastrarimovel')[0];
                 var data = new FormData(form);
                 
                 
                 
                 
                     $.ajax({
                        type:'POST',
                        url:'cadastrarimovelController',
                        data:data,
                        contentType:false,
                        processData:false,
                        success:function(msg){
                            alert(msg);
                        }
                        
                     });
              
                 
           
                  
             });
             });
             </script>
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