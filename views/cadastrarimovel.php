
<title>Cadastrar Imóvel</title>


<div class="container mt-5">
    <br>
    
    <div class="text-center h3">Cadastrar Imóvel</div>
   
    <form id="cadastrarimovel" method="POST" enctype="multipart/form-data">

          <div class="danger">
            <?php if (isset($erro) && !empty($erro)): ?>
                <div class="alert alert-danger" role="alert"><?php echo $erro; ?></div> 
            <?php endif; ?>
        </div>
        <div class="danger">
            <?php if (isset($ok) && !empty($ok)): ?>
                <div class="alert alert-success" role="alert"><?php echo $ok; ?></div> 
            <?php endif; ?>
        </div>
  <div class="row">
                     <div class="control-group">
                      
                         <div class="form-check form-check-inline">
                             <label class="form-check-label m-3" >
    Publicar no site?
  </label>
  <input class="form-check-input" type="radio" name="status" id="status" value="Liberado">
  <label class="form-check-label" for="status">Liberar</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="status" id="status" value="Bloqueado" checked>
  <label class="form-check-label" for="status">Bloquear</label>
</div>
               
              </div>
            </div>

        <div class="row">
            <div class="form-group col-sm-3">
                <label for="id_tipo_assunto">Tipo de Assunto:</label><label class="text-danger">*</label>
                <select name="id_tipo_assunto" class="form-control" id="id_tipo_assunto" onchange="mudouAssunto(this)">
                    <option></option>
                    <option value="1">Venda</option>
                    <option value="2">Aluga</option>
                     <option value="3">Venda/Aluga</option>
                 <!--   <?php //foreach ($viewData['listtiposassuntos'] as $value) : { ?>
                            <option value="<?php //echo $value['id']; ?>"><?php //echo $value['nome']; ?></option>

                        <?php // } endforeach; ?>  -->
                 </select>
            </div>

            <div class="form-group col-sm-3">
                <label for="tipoimovel">Tipo de Imóvel:</label>  <label class="text-danger">*</label>
                <select name="tipoimovel" class="form-control" id="tipoimovel">

                    <option></option>
                    <?php foreach ($viewData['listtiposimoveis'] as $value): { ?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>        
                        <?php }endforeach; ?>


                </select> 
            </div>
            <div class="form-group col-sm-5">
                <label for="nivel">Classificação do Nivel:</label><label class="text-danger">*</label>
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
                <label for="bairro">Bairro:</label>  <label class="text-danger">*</label>
                <input name="bairro" type="text" class="form-control" id="bairro" placeholder="" />
            </div>

       
            <div class="form-group col-sm-3">
                <label for="cidade">Cidade:</label>  <label class="text-danger">*</label>
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

        </div>-->
          <div class="container row">
              <div class="form-row align-items-center" id="valorImovel">
                      <div class="form-group col-auto">
            <label class="" for="valorimovel">Valor do Imóvel:</label>
            <div class="input-group mb-2">
        <div class="input-group-prepend">

                <div class="input-group-text">R$</div>
               
            </div>
                 <input name="valorimovel" type="text" class="form-control" id="valor" placeholder=""/>
              </div>
                      </div>
                  <div class="form-group col-auto">
              <div id="valorAluguel">
            <label class="" for="valoraluguel">Valor do Aluguel:</label>
           <div class="input-group mb-2">
<div class="input-group-prepend">
    <div class="input-group-text">R$</div>
</div>
                <input name="valoraluguel" type="text" class="form-control" id="valor2" placeholder=""/> 
            </div>
         </div> 
          </div>
              </div>
          </div>
     <div class="row">
          <div class="form-group col-md-8">
            <label for="brevedescricao">Breve descrição do imovel:</label> 

            <textarea class="form-control" name="brevedescricao" type="text" id="brevedescricao" wrap="on" cols="30" rows="30"></textarea>
        </div>
         <div class="col-sm-4">
             <div class=" text-danger">
            Não ultrapasse dessa coluna, para facilitar a leitura do usuario vizualizar melhor!
             </div>
     </div>
     </div>
     <br>
       
        <div class="card card-body bg-light my-3">
            <div class="form-group">
                <label for="arquivo1">Adicionar UMA Foto Principal do Imóvel:</label>
                <input name="arquivo1" type="file" />
            </div>

        </div>
       

       
<div class="card card-body bg-light my-3">

        <div class="form-group">
            <label class="text-danger"for="arquivos">Adicionar no MAXIMO 35 Fotos do Imóvel, sendo que, redimensionamento IDEAL 960x720 e tamanho total de imagens não ultrapassar 128 MB :</label>
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