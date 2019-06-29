<title> Pesquisar Imóveis </title>
<div class="container-fluid">
    
    <div class="col-sm-9">
        
        <a class="btn btn-default" href="<?php BASE_URL ?>menuprincipal"> Voltar p/Menu Principal</a>
    
        
   
        <center><h2>Pesquisar Imóveis por filtros </h2></center>
    <form method="GET" >
       
            <div class="col-sm-3">
                <label for="codigo" class="label label-info">Codigo do imovel:</label>
                <input type="text" id="codigo" class="form-control" name="filtros[codigo]" placeholder="codigo do imovel" >


            </div>


            <div class="col-sm-3">
                <label for="assunto" class="label label-info">Tipo de Assunto:</label>
                <select id="assunto" class="form-control" name="filtros[assunto]">
                    <option></option>
                    <option value="Aluga">Para Alugar</option>
                    <option value="Venda" >Para Comprar</option>

                </select>
            </div>


            <div class="col-sm-3">
                <label for="tipoimovel" class='label label-info'>Qual padrão do imovel?</label>
                <select id="tipoimovel" class="form-control" name="filtros[tipoimovel]">
                    <option></option>
                    <option value="Residencial-Simples"> Residencial Simples</option>
                    <option value="Residencial-Intermediário">Residencial Intermediário</option>
                    <option value="Residencial-Alto">Residencial Alto Padrão</option>

                    <option value="Comercial-Simples"> Comercial Simples</option>
                    <option value="Comercial-Intermediário">Comercial Intermediário</option>
                    <option value="Comercial-Alto">Comercial Alto Padrão</option>
                </select>
            </div>
              
 <div class="col-sm-3">

                <label for="cidade" class="label label-info">Em qual Cidade?</label>
                <select id="cidade" class="form-control" name="filtros[cidade]">
                    <option></option>
                    <?php $filtros = $viewData['filtros']; ?>
                    <?php foreach ($viewData['listCidade'] as $value): ?>
                        <option value="<?php echo $value['nome']; ?>" <?php echo($value['nome'] == $filtros['cidade']) ? 'selected="selected"' : ''; ?>> <?php echo $value['nome']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        
            <div class="col-sm-3">
                <br>
        
                <label for="bairro" class = "label label-info">Em qual Bairro?</label>
                <select  id="bairro" class="form-control" name="filtros[bairro]">
                    <option></option>
                    <?php foreach ($viewData['listBairro'] as $value): ?>
                        <option value="<?php echo $value['nome']; ?>" <?php echo ($value['nome'] == $filtros['bairro']) ? 'selected="selected"' : ''; ?>> <?php echo $value['nome']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

         <div class="col-sm-3">
                <br>
        
                <label for="data" class = "label label-info">por data:</label>
                <select  id="data" class="form-control" name="filtros[data]">
                    <option></option>
                    <?php foreach ($viewData['datas'] as $value): ?>
                     
                        <option value="<?php echo $value['data_cadastro']; ?>" <?php echo ($value['data_cadastro'] == $filtros['data']) ? 'selected="selected"' : ''; ?>> <?php  $nova_data= explode("-", $value['data_cadastro']); 
        echo $nova_data[2]."/".$nova_data[1]."/".$nova_data[0];?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        
          <div class="col-sm-3">
                <br>
        
                <label for="status" class = "label label-info">Por Status</label>
                <select  id="status" class="form-control" name="filtros[status]">
                    <option></option>
                    <?php foreach ($viewData['liststatus'] as $value): ?>
                        <option value="<?php echo $value['status']; ?>" <?php echo ($value['status'] == $filtros['status']) ? 'selected="selected"' : ''; ?>> <?php echo $value['status']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-sm-3">
                
                <input id="botao-pesquisa-imovel" type="submit" class="btn btn-primary " value="Pesquisar / Todos">
            </div>

    
    </form>
    </div>
    
    <div class="col-lg-offset-10">

        <div class="col-sm">
           
                <?php $totalimovel = $viewData['totalimovel']; ?>
                <label>Total de Imovel: </label><span class="badge"> <?php echo $totalimovel['total']; ?></span>
         
                <?php $totalimovel = $viewData['totalvenda']; ?>
                <label>Total de Venda: </label><span class="badge"> <?php echo $totalvenda['total']; ?></span>
          
                <?php $totalimovel = $viewData['totalaluga']; ?>

                <label>Total de Aluga: </label><span class="badge"> <?php echo $totalaluga['total']; ?></span>
           
                <?php $totalstatuslivre = $viewData['totallivre']; ?> 
                <label>Total Anúnciado: </label><span class="badge"> <?php echo $totalstatuslivre['total']; ?></span>
            
                <?php $totalstatusbloqueado = $viewData['totalbloqueado']; ?> 
                <label>Total Bloqueado: </label><span class="badge"> <?php echo $totalstatusbloqueado['total']; ?></span>
           
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <hr>
   
    <div class="danger">
        <?php if (isset($erro) && !empty($erro)): ?>
            <div class="alert alert-danger"><?php echo $erro; ?></div> 
        <?php endif; ?>
    </div>
    <div class="table-responsive">
        <?php
        if ($viewData['buscaimovel'] == '') {
            
        } else {
            ?>
            <?php foreach ($viewData['buscaimovel'] as $value) :
                ?>

                <table class="table table-hover">
                    <thead>

                        <tr>
                            <th>Código</th>
                            <th>Foto</th>
                            <th>Tipo do Imóvel</th>
                            <th>Localização</th>
                            <th>Data do cadastro</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>



                        <tr>
                            <td>
                                <?php echo $value['codigo']; ?>
                            </td>
                            <td>

                                <?php if (!empty($value['url_foto_principal'])): ?>      
                                <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>"  height="70" width="80" class="img-rounded ">
                                <?php else: ?>
                                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif"  height="70" width="80" class="img-rounded ">

                                <?php endif;
                                ?>

                            </td>
                            <td><?php echo $value['tipoimovel'] ?> - <?php echo $value['nivel'];?></td>
                            <td>
                                <?php echo $value['bairro']; ?>
                                - <?php echo $value['cidade']; ?>
                            </td>
                            <td>
                                   <?php  $nova_data= explode("-", $value['data_cadastro']); 
        echo $nova_data[2]."/".$nova_data[1]."/".$nova_data[0];?>

                            </td>
                            <td><?php echo $value['status']; ?> </td>

                            <td><a href="<?php BASE_URL; ?>meuanuncio?id=<?php echo $value['id_imovel']; ?> "><button class="btn btn-warning">Ver anúncio</button></a>
                                <a href="<?php BASE_URL; ?>editarimovel?id=<?php echo $value['id_imovel']; ?>"><button class="btn btn-primary">Editar</button></a>
                                <button href="javascript;:" onclick="excluiranuncio('<?php echo $value['id_imovel'] ?>','<?php echo $value['url_foto_principal']; ?>','<?php echo $value['codigo']; ?>')" type="button" class="btn btn-danger">Excluir</button>

                   
                            </td>
                        </tr>




                    </tbody>
                </table>
            <?php
            endforeach;
        }
        ?>
        <?php
        if (empty($viewData['listimovel'])) {
            
        } else {
            ?>
            <?php
            foreach ($viewData['listimovel'] as $value1) :
                ?>

                <table class="table table-hover">
                    <thead>

                        <tr>
                            <th>Código</th>
                            <th>Foto</th>
                            <th>Tipo do Imóvel</th>
                            <th>Localização</th>
                            <th>Data do Cadastro</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>



                        <tr>
                            <td>
        <?php echo $value1['codigo']; ?>
                            </td>
                            <td>

                                <?php if (!empty($value1['url_foto_principal'])): ?>      
                                    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value1['url_foto_principal']; ?>"  height="70" class="img-rounded ">
                                <?php else: ?>
                                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif"  height="70" class="img-rounded ">

        <?php endif;
        ?>

                            </td>
                            <td><?php echo $value1['tipoimovel'] ?> - <?php echo $value1['nivel'] ?></td>
                            <td>
        <?php echo $value1['bairro']; ?>
                                -<?php echo $value1['cidade']; ?>
                            </td>
                            <td>
        <?php  $nova_data= explode("-", $value1['data_cadastro']); 
        echo $nova_data[2]."/".$nova_data[1]."/".$nova_data[0];?>

                            </td>
                            <td>
        <?php echo $value1['status']; ?>

                            </td>

                            <td><a href="<?php BASE_URL; ?>meuanuncio?id=<?php echo $value1['id_imovel']; ?> "><button class="btn btn-warning">Ver anúncio</button></a>
                                <a href="<?php BASE_URL; ?>editarimovel?id=<?php echo $value1['id_imovel']; ?>"><button class="btn btn-primary">Editar</button></a>
                                           <button href="javascript;:" onclick="excluiranuncio('<?php echo $value1['id_imovel'] ?>','<?php echo $value1['url_foto_principal']?>','<?php echo $value1['codigo']; ?>');" type="button" class="btn btn-danger">Excluir</button>


                            </td>
                    
                        </tr>

 


                    </tbody>
                </table>
                <?php
            endforeach;
        }
        ?>

<!-- Modal  excluir-->
        <div class="modal fade" id="Modalexcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><p class="text-danger text-center">Tem certeza que deseja excluir?</p></h4>
                    </div>

                    <div class="modal-body">




                    </div>


                    <div class="modal-footer">


                    </div>
                </div>

            </div>



        </div>  <!--  fim modal excluir--> 


    </div>
    
    

    </div>