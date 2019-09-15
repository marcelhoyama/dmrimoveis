<title> Pesquisar Imóveis </title>
<div class="container-fluid mt-5">

    <div class="col">

      


        <h2 class="text-center mt-5">Pesquisar Imóveis por filtros </h2>
        <form method="GET" >
            <div class="row">

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

                            <option value="<?php echo $value['data_cadastro']; ?>" <?php echo ($value['data_cadastro'] == $filtros['data']) ? 'selected="selected"' : ''; ?>> <?php $nova_data = explode("-", $value['data_cadastro']);
                        echo $nova_data[2] . "/" . $nova_data[1] . "/" . $nova_data[0];
                            ?></option>
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
                <div class="col-sm-3 mt-4">

                    <input id="botao-pesquisa-imovel" type="submit" class="btn btn-primary " value="Pesquisar / Todos">
                </div>
            </div>  

        </form>
    </div>

    <div class="row my-5">

        <div class="col">
            <div class="btn-group" role="group" aria-label="Exemplo básico">
                <button type="button" class="btn btn-secondary"><?php $totalimovel = $viewData['totalimovel']; ?>
                    Total de Imovel <span class="badge badge-light"> <?php echo $totalimovel['total']; ?></span></button>
            
                <button type="button" class="btn btn-secondary"> <?php $totalimovel = $viewData['totalvenda']; ?>
                    Total de Venda <span class="badge badge-light"> <?php echo $totalvenda['total']; ?></span></button>
                <button type="button" class="btn btn-secondary"><?php $totalimovel = $viewData['totalaluga']; ?>

                    Total de Aluga <span class="badge badge-light"> <?php echo $totalaluga['total']; ?></span></button>
                <button type="button" class="btn btn-secondary"><?php $totalstatuslivre = $viewData['totallivre']; ?> 
                    Total Anúnciado <span class="badge badge-light"> <?php echo $totalstatuslivre['total']; ?></span></button>
                <button type="button" class="btn btn-secondary"><?php $totalstatusbloqueado = $viewData['totalbloqueado']; ?> 
                    Total Bloqueado <span class="badge badge-light"> <?php echo $totalstatusbloqueado['total']; ?></span></button>

            </div>




        </div>       






    </div>
  

    <hr>

    <div class="danger">
        <?php if (isset($erro) && !empty($erro)): ?>
            <div class="alert alert-danger"><?php echo $erro; ?></div> 
<?php endif; ?>
    </div>
    
    <div class="h3 text-center">Resultados</div>
         
    <div class="table-responsive table-bordered">
        <?php
        if ($viewData['buscaimovel'] == '') {
            
        } else {
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
            <?php foreach ($viewData['buscaimovel'] as $value) :
                ?>

              
                    <tbody>



                        <tr>
                            <td>
        <?php echo $value['codigo']; ?>
                            </td>
                            <td class="text-center">

                                <?php if (!empty($value['url_foto_principal'])): ?>      
                                <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" style="width:80px; height: 80px;">
        <?php else: ?>
                                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif"  height="70" width="80" class="img-rounded ">

                                <?php endif;
                                ?>

                            </td>
                            <td><?php echo $value['tipoimovel'] ?> - <?php echo $value['nivel']; ?></td>
                            <td>
        <?php echo $value['bairro']; ?>
                                - <?php echo $value['cidade']; ?>
                            </td>
                            <td>
                                <?php $nova_data = explode("-", $value['data_cadastro']);
                                echo $nova_data[2] . "/" . $nova_data[1] . "/" . $nova_data[0];
                                ?>

                            </td>
                            <td><?php echo $value['status']; ?> </td>

                            <td>
                                <div class="btn-group-vertical">
                                <a href="<?php BASE_URL; ?>meuanuncio?id=<?php echo $value['id_imovel']; ?> "><button class="btn btn-warning btn-sm">Ver anúncio</button></a>
                                <a href="<?php BASE_URL; ?>editarimovel?id=<?php echo $value['id_imovel']; ?>"><button class="btn btn-primary btn-sm">Editar</button></a>
                                <button href="javascript;:" onclick="excluiranuncio('<?php echo $value['id_imovel'] ?>', '<?php echo $value['url_foto_principal']; ?>', '<?php echo $value['codigo']; ?>')" type="button" class="btn btn-danger btn-sm">Excluir</button>

                                </div>
                            </td>
                        </tr>




                    </tbody>
             
                <?php
            endforeach;
        }
        ?>
                       </table>
        <?php
        if (empty($viewData['listimovel'])) {
            
        } else {
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
            <?php
            foreach ($viewData['listimovel'] as $value1) :
                ?>

              
                    <tbody>



                        <tr>
                            <td>
        <?php echo $value1['codigo']; ?>
                            </td>
                            <td class="text-center">

                                <?php if (!empty($value1['url_foto_principal'])): ?>      
                                <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value1['url_foto_principal']; ?>"  style="width: 80px;height:80px;">
                                <?php else: ?>
                                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif"  style="width: 80px;height:80px;">

        <?php endif;
        ?>

                            </td>
                            <td><?php echo $value1['tipoimovel'] ?> - <?php echo $value1['nivel'] ?></td>
                            <td>
        <?php echo $value1['bairro']; ?>
                                -<?php echo $value1['cidade']; ?>
                            </td>
                            <td>
        <?php $nova_data = explode("-", $value1['data_cadastro']);
        echo $nova_data[2] . "/" . $nova_data[1] . "/" . $nova_data[0];
        ?>

                            </td>
                            <td>
        <?php echo $value1['status']; ?>

                            </td>

                            <td>
                                <div class="btn-group-vertical">
                                <a href="<?php BASE_URL; ?>meuanuncio?id=<?php echo $value1['id_imovel']; ?> "><button class="btn btn-warning btn-sm">Ver anúncio</button></a>
                                <a href="<?php BASE_URL; ?>editarimovel?id=<?php echo $value1['id_imovel']; ?>"><button class="btn btn-primary btn-sm">Editar</button></a>
                                <button href="javascript;:" onclick="excluiranuncio('<?php echo $value1['id_imovel'] ?>', '<?php echo $value1['url_foto_principal'] ?>', '<?php echo $value1['codigo']; ?>');" type="button" class="btn btn-danger btn-sm">Excluir</button>

</div>
                            </td>

                        </tr>




                    </tbody>
               
                <?php
            endforeach;
        }
        ?>
 </table>
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