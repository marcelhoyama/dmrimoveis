
 
<form  method="POST">
  
                <div class="row">
          <div class="col-sm-3">
          <?php $imovel= $viewData['dadosImovel'];?>
               
               
                      <div class="form-group">
                          <label for="assunto">  Assunto: </label>
                          <input class="form-control" type="text" name="assunto" value="<?php if ($imovel['aluguel'] == 0) {
                                                    echo 'Venda';
                                                } elseif ($imovel['venda'] > 0 && $imovel['aluguel'] > 0) {
                                                    echo "Venda/Aluga";
                                                } elseif ($imovel['venda'] == 0) {
                                                    echo 'Aluga';
                                                }
                                                ?>" disabled />
                    </div>
          </div>
         <div class="col-sm-4">
     <div class="form-group">
         <label for="id_imovel">Codigo do imovel :</label>
         <input class="form-control" type="text" name="id_imovel" value="<?php echo $imovel['id_imovel']?>" disabled=""/>
     </div>
             </div>
         <div class="col-sm-3">
     <div class="form-group">
         <label for="tipo_imovel">Tipo do imovel :</label>
     <input class="form-control" type="text" name="tipo_imovel" value="<?php echo $imovel['tipo_imovel']?>" disabled=""/>
     </div>
         </div>
         </div>
     
                    <div class="form-group">
                        <label class="" for="nome"> Nome Completo:</label><label class="text-danger">*Obrigatório</label> 
                        <input class="form-control" type="text" name="nome" id="nome" value="" placeholder="seu nome completo" required=""/>
                    </div>
     <div class="row">
         <div class="col-sm-4">
                    <div class="form-group">
                         <label for="telefone">Telefone Fixo:</label> 
                         <input class="form-control" type="tel" name="telefone" id="fonefixo" value="" placeholder="seu telefone" />
                    </div>
         </div>
         <div class="col-sm-4">
                    <div class="form-group">
                        <label for="fone">Celular:</label><label class="text-danger">*Obrigatório</label> 
                        <input class="form-control" type="tel" name="fone" id="fone" value="" placeholder=" seu celular" required="" />
                    </div>
         </div>
     </div>
                    <div class="form-group">
                        <label for="email">Email:</label> 
                        <input class="form-control" type="email" name="email" id="email" value="" placeholder="seu e-mail"/>
                    </div>
    
     <input type="submit" value="enviar" class="btn btn-success"/>
    
  
   
   </form>
