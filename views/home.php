

<img class="mt-5" src="<?php BASE_URL; ?>assets/images/banner8.png" width="100%" alt="dmr-imoveis-em-cabreuva " height="100%" id="banner"/>

<div class="container">
    <!-- <figcaption id="texto1">Imóveis em Cabreúva com :Danilo-Marcel-Rony </figcaption> -->
    <div class="h2 text-center mt-3" >Imóveis em Cabreúva e Região busca aqui! </div>
    <!-- <figcaption id="texto3">Rony</figcaption>-->
    <!--    <figcaption id="texto4">  </figcaption>-->
    <form method="GET">


        <div id="busca">
            <div class="row ">

                <div class="col-sm-4">
                    <label for="assunto" class="">O que Procura?</label>
                    <select id="assunto" class="form-control" name="filtros[assunto]">
                        <option></option>
                        <option value="Aluga">Para Alugar</option>
                        <option value="Venda" >Para Comprar</option>
                    </select>
                </div>


                <div class="col-sm-4">
                    <label for="tipoimovel" class=''>Modelo que prefere?</label>
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
            </div>





            <br>

            <div class="row">

                <div class="col-sm-4">

                    <label for="cidade" class="">Em qual Cidade?</label>
                    <select id="cidade" class="form-control" name="filtros[cidade]">
                        <option></option>
                        <?php $filtros = $viewData['filtros']; ?>
                        <?php foreach ($viewData['listCidade'] as $value): ?>
                            <option value="<?php echo $value['nome']; ?>" <?php echo($value['nome'] == $filtros['cidade']) ? 'selected="selected"' : ''; ?>> <?php echo $value['nome']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>




                <div class="col-sm-4">
                    <label for="bairro" class = "">Em qual Bairro?</label>
                    <select  id="bairro" class="form-control" name="filtros[bairro]">
                        <option></option>
                        <?php foreach ($viewData['listBairro'] as $value): ?>
                            <option value="<?php echo $value['nome']; ?>" <?php echo ($value['nome'] == $filtros['bairro']) ? 'selected="selected"' : ''; ?>> <?php echo $value['nome']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>







                <div class="col-sm-4">
                    <!--    <label for="valorimovel" class="label label-info" >
                            Qual Valor do Imovel?
                        </label>
                        <select id="valorimovel" class="form-control" name="filtros[valorimovel]">
                            <option> </option>
                            <option value="0-1000">até R$1.000,00</option>
                            <option value="10001-1500">R$ 1.001,00 - 1.500,00</option>
                            <option value="1501-2000">R$ 1.501,00 - 2.000,00</option>
                            <option value="2001-2001">acima R$ 2.001,00</option>
                        </select> -->
                </div>
            </div>
            <div class="row my-3">




                <input type="submit" class="btn btn-primary form-control" value="Buscar">

            </div>

        </div>

    </form>



    <br>
    <div class="danger">
        <?php if (isset($erro) && !empty($erro)): ?>
            <div class="alert alert-danger"><?php echo $erro; ?></div> 
        <?php endif; ?>
    </div>

    <!-- resultado da busca -->
    <div class='row'>

        <?php
        if ($viewData['buscaimovel'] == '') {
            
        } else {
            ?>
            <?php foreach ($viewData['buscaimovel'] as $buscaimovel) :
                ?>

                <div class="col-sm-3 ">

                    <div class="border border-warning p-1" >
                        <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $buscaimovel['id_imovel'] ?>">

                            <?php if (!empty($buscaimovel['url_foto_principal'])): { ?>
                                    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $buscaimovel['url_foto_principal']; ?>" class="img-fluid" id="anunciovenda">
                                <?php } else: ?>
                                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid" id="anunciovenda">
                            <?php endif; ?>

                        </a>
                        <div class="caption">
                            <div class="texto-card ">
                                <p> <?php echo mb_strcut($buscaimovel['breve_descricao'], 0, 100) ?>... 
                                <div class="font-italic">
                                    Valor R$ <?php echo $buscaimovel['venda']; ?><br>
                                    <?php //echo $buscaimovel['cidade']; ?><?php echo $buscaimovel['bairro']; ?>

                                </div>
                                </p>
                            </div>
                            <a class="btn btn-primary btn-block mt-3" href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $buscaimovel['id_imovel']; ?>">

                                Ver Mais </a>
        <!--                <button  type="button" class=" btn btn-primary btn-lg " href="javascript:;"  onclick="tenhointeresse(<?php echo $buscaimovel['id_imovel']; ?>)">Ver Mais</button>-->
                        </div>

                    </div>
                    <br>
                </div>


                <?php
            endforeach;
        }
        ?>

    </div>  <!-- fim do resultado da busca -->


    <div class="h2 text-center"> Destaques dos Imóveis</div> 

    <br>
    <div class="row" >

        <div class="col-sm-4">
            <div  id="my-pics" class="carousel slide  carousel-fade" data-ride="carousel">
                <div class="">
                    <div class="carousel-inner">



                        <?php
                        foreach ($viewData['listimovelvenda'] as $key => $value): {
                                ?>

                                <div class="carousel-item <?php echo ($key == '0') ? 'active' : ''; ?>">






                                    <picture>
                                        <div align="center">


                                            <?php if (!empty($value['url_foto_principal'])): { ?>
                                                    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" class="d-block w-100" alt="DMR Imóveis <?php echo $value['tipo_imovel']; ?>">
                                                <?php } else: ?>
                                                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class="d-block w-100">
                                            <?php endif; ?>


                                        </div>

                                        <div class="caption">
                                            <div class="texto-card">
                                                <p><?php echo $value['tipo_imovel']; ?> -


                                                    <?php
                                                    echo $value['assunto_nome'];
                                                    ?> </p>

                                                <h5><?php echo mb_strcut($value['breve_descricao'], 0, 100); ?>... </h5>

                                                Valor R$ <?php echo $value['venda']; ?>

                                            </div>
                                            <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>" >       <button  type="button" class=" btn btn-primary btn-lg " >Veja Mais</button>  </a>

                                        </div>

                                    </picture>

                                </div>
                                <?php
                            } endforeach;
                        //   } else {
                        ?>

                    </div>


                </div>



                <a class="carousel-control-prev" href="#my-pics" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#my-pics" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>  <!-- fim slide um-->


        <!-- Modal  venda-->
        <div class="modal fade" id="Modalvenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><p class="text-danger text-center">Deixe que entraremos em Contato com Você</p></h4>
                    </div>

                    <div class="modal-body">




                    </div>


                    <div class="modal-footer">


                    </div>
                </div>

            </div>



        </div>  <!--  fim modal venda-->











        <div class="col-sm-4">
            <div  id="my-pics2" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="">
                    <div class="carousel-inner" role="listbox">



                        <?php
//if (!$viewData['buscaimovel'] == '') {
                        foreach ($viewData['listimovelaluguel'] as $key => $value): {
                                ?>

                                <div class="carousel-item <?php echo ($key == '0') ? 'active' : ''; ?>">






                                    <picture>
                                        <div align="center">


                                            <?php if (!empty($value['url_foto_principal'])): { ?>
                                                    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" class="d-block w-100">
                                                <?php } else: ?>
                                                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class="d-block w-100">
                                            <?php endif; ?>


                                        </div>
                                        <div class="caption">
                                            <div class="texto-card">
                                                <p><?php echo $value['tipo_imovel']; ?> -  <?php
                                                    echo $value['assunto_nome'];
                                                    ?> </p>

                                                <h5><?php echo mb_strcut($value['breve_descricao'], 0, 100); ?>...</h5>


                                                Valor R$ <?php $value['venda']; ?>
                                            </div>
                                            <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>" >       <button  type="button" class=" btn btn-primary btn-lg" >Veja Mais</button>  </a>

                                        </div>

                                    </picture>

                                </div>
                                <?php
                            } endforeach;
//   } else {
                        ?>

                    </div>


                </div>



                <a class="carousel-control-prev" href="#my-pics2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#my-pics2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>   <!-- fim slide 2 -->


        <div class="col-sm-4">
            <div  id="my-pics3" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="">
                    <div class="carousel-inner" role="listbox">



                        <?php
//if (!$viewData['buscaimovel'] == '') {
                        foreach ($viewData['listimovelmisto'] as $key => $value): {
                                ?>

                                <div class="carousel-item <?php echo ($key == '0') ? 'active' : ''; ?>">






                                    <picture>
                                        <div align="center">
                                            <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>" >

                                                <?php if (!empty($value['url_foto_principal'])): { ?>
                                                        <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" class="d-block w-100">
                                                    <?php } else: ?>
                                                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class="d-block w-100">
                                                <?php endif; ?>

                                            </a>
                                        </div>
                                        <div class="caption">
                                            <div class="texto-card">
                                                <p><?php echo $value['tipo_imovel']; ?> -
                                                    <?php
                                                    echo $value['assunto_nome'];
                                                    ?> </p>

                                                <h5><?php echo mb_strcut($value['breve_descricao'], 0, 100); ?> ...</h5>


                                                <?php if (empty($value['aluguel'])) { ?>Valor R$<?php echo $value['venda'];
                                    } elseif (empty($value['venda'])) { ?>Valor R$<?php echo $value['aluguel'];
                                    } else { ?>Venda R$ <?php echo $value['venda']; ?> / Aluga R$<?php echo $value['aluguel'];
                                    } ?>
                                            </div>
                                            <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>" >       <button  type="button" class=" btn btn-primary btn-lg " >Veja Mais</button>  </a>

                                        </div>

                                    </picture>

                                </div>
                                <?php
                            } endforeach;
//   } else {
                        ?>

                    </div>


                </div>

                <a class="carousel-control-prev" href="#my-pics3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#my-pics3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>


            </div>

        </div>  <!-- fim slide 3 -->
    </div>

</div>