
<title>Imóveis em Cabreúva</title>
<meta property="og:url" content="https://www.dmrimoveiscabreuva.com.br" />
<meta property="og:type" content="website"/>
<meta property="og:title" content="DMR Imoveis em Cabreúva"/>
<meta property="og:description" content="Corretores de Imóveis ! Venda, Compra, Troca e Administra!  Nas Regiões de: Cabreúva, Jacaré, Salto, Itu, Jundiaí"/>
<META NAME="Robots" CONTENT="INDEX,FOLLOW">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="revisit-after" content="2">
<meta name="classification" content="imobiliaria , imoveis">

<meta name="description" content="Imóveis em Cabreúva - Procurando por um imóvel em Cabreúva? Encontre ótimas oportunidades de imóveis para venda ou locação em nosso site. Clique e confira!">
<meta name="keywords" content="Imóveis, Imobiliária, Cabreúva, Compra, Venda, Aluguel, Locacao, Apartamento, Casas, Casas em Condomínio, Terrenos, Comerciais, Chácara, Sítios, Fazendas, galpão, area industrial, areas, terreno, areas">
<meta name="author" content="Marcel Hoyama">
<meta name="google-site-verification" content="https://www.dmrimoveiscabreuva.com.br" />


<meta property="og:description" content="Imóveis em Cabreúva - Procurando por um imóvel em Cabreúva? Encontre ótimas oportunidades de imóveis para venda ou Locação em nosso site. Confira!" />
<meta property="og:image" content="" />


<img src="<?php BASE_URL; ?>assets/images/banner5.png" width="100%" alt="dmr-imoveis-em-cabreuva " height="100%" id="banner"/>

<div class="container">
    <!-- <figcaption id="texto1">Imóveis em Cabreúva com :Danilo-Marcel-Rony </figcaption> -->
    <figcaption id="texto2"><center><label ><h1>Imóveis em Cabreúva e Região busca aqui!</h1></label></center>  </figcaption>
    <!-- <figcaption id="texto3">Rony</figcaption>-->
    <figcaption id="texto4"> 
        <form method="GET">


            <div id="busca">
                <div class="row">

                    <div class="col-sm-4">
                        <label for="assunto" class="label label-info">O que Procura?</label>
                        <select id="assunto" class="form-control" name="filtros[assunto]">
                            <option></option>
                            <option value="Aluga">Para Alugar</option>
                            <option value="Venda" >Para Comprar</option>
                        </select>
                    </div>


                    <div class="col-sm-4">
                        <label for="tipoimovel" class='label label-info'>Modelo que prefere?</label>
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

                        <label for="cidade" class="label label-info">Em qual Cidade?</label>
                        <select id="cidade" class="form-control" name="filtros[cidade]">
                            <option></option>
                            <?php $filtros = $viewData['filtros']; ?>
                            <?php foreach ($viewData['listCidade'] as $value): ?>
                                <option value="<?php echo $value['nome']; ?>" <?php echo($value['nome'] == $filtros['cidade']) ? 'selected="selected"' : ''; ?>> <?php echo $value['nome']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>




                    <div class="col-sm-4">
                        <label for="bairro" class = "label label-info">Em qual Bairro?</label>
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
                <div class="row">
                    <br>



                    <input type="submit" class="btn btn-primary form-control" value="Buscar">

                </div>

            </div>

        </form>
    </figcaption>


    <br>
    <div class="danger">
        <?php if (isset($erro) && !empty($erro)): ?>
            <div class="alert alert-danger"><?php echo $erro; ?></div> 
        <?php endif; ?>
    </div>
    <div class="row">
        <?php
    
    if ($viewData['buscaimovel'] == '') {
        
    } else {
        ?>
        <?php foreach ($viewData['buscaimovel'] as $buscaimovel) :
            ?>
    
        <div class="col-sm-3">

        <div class="thumbnail ">
            <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $buscaimovel['id_imovel'] ?>">

                <?php if (!empty($buscaimovel['url_foto_principal'])): { ?>
                <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $buscaimovel['url_foto_principal']; ?>" class=" img-rounded img-fluid" id="anunciovenda">
                <?php } else: ?>
                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid" id="anunciovenda">
                <?php endif; ?>

            </a>
            <div class="caption">
                <div class="texto-card">
                     <h5><p>
                         <?php echo mb_strcut($buscaimovel['breve_descricao'],0,200)?>... 
                             <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $buscaimovel['id_imovel']; ?>">
                                 Veja mais... 
                             </a></p></h5>
                                           

                <p><h6>
                 
                    Localização: <?php echo $buscaimovel['estado'];?>/<?php echo $buscaimovel['cidade'];?>/<?php echo $buscaimovel['bairro'];?>


                </h6> </p>
                </div>
                <button  type="button" class=" btn btn-default btn-lg btn-block" href="javascript:;"  onclick="tenhointeresse(<?php echo $buscaimovel['id_imovel']; ?>)">Tenho Interesse</button>
            </div>

        </div>
            <br>
 </div>
             
       
        <?php
        endforeach;
    }
    ?>
        </div>
    <br>
    <div class="row">
        <div id="linha" class="h3 text-center bg-primary"> Destaques dos Imóveis</div> 
    </div>
<br>
    <div class="row" >

        <div class="col-sm-4">
            <div  id="my-pics" class="carousel slide" data-ride="carousel">
                <div class="control-form">
                    <div class="carousel-inner">



                        <?php
                        foreach ($viewData['listimovelvenda'] as $key => $value): {
                                ?>

                                <div class="item <?php echo ($key == '0') ? 'active' : ''; ?>">






                                    <picture>
                                        <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>" >  

                                            <?php if (!empty($value['url_foto_principal'])): { ?>
                                            <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" class=" img-rounded img-fluid" >
                                                <?php } else: ?>
                                            <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
        <?php endif; ?>
                                        </a>


                                        <div class="caption">
                                            <h3><?php echo $value['tipo_imovel']; ?> -


                                                <?php
                                                if ($value['aluguel'] == 0) {
                                                    echo 'Venda  ' .$value['venda'];
                                                } elseif (!$value['venda'] == 0 && !$value['aluguel'] == 0) {
                                                    echo 'Venda  ' . $value['venda'] . '/Aluga ' . $value['aluguel'];
                                                } elseif ($value['venda'] == '' && $value['aluguel'] == '') {
                                                    echo ' ';
                                                } else {
                                                    echo 'Aluga  ' . $value['aluguel'];
                                                }
                                                ?> </h3>
                                            <div class="texto-card">
                                            <h5><p><?php echo mb_strcut($value['breve_descricao'],0,200)."...Veja mais...clique no botão."; ?> </p></h5>
                                           
                                            </div>


                                            <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>" >       <button  type="button" class=" btn btn-default btn-lg btn-block" >Tenho Interesse</button>  </a>

                                        </div>

                                    
                                </picture>
                                    </div>

                                <?php
                            } endforeach;
                        //   } else {
                        ?>

                    </div>


                </div>



                <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">

                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">

                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


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
            <div  id="my-pics2" class="carousel slide" data-ride="carousel">
                <div class="control-form">
                    <div class="carousel-inner" role="listbox">



                        <?php
//if (!$viewData['buscaimovel'] == '') {
                        foreach ($viewData['listimovelaluguel'] as $key => $value): {
                                ?>

                                <div class="item <?php echo ($key == '0') ? 'active' : ''; ?>">






                                    <picture>
                                        <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>" >

                                            <?php if (!empty($value['url_foto_principal'])): { ?>
                                            <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" class=" img-rounded img-fluid">
                                                <?php } else: ?>
                                            <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
        <?php endif; ?>

                                        </a>
                                        <div class="caption">

                                            <h3><?php echo $value['tipo_imovel']; ?> -  <?php
                                                if ($value['aluguel'] == 0) {
                                                    echo 'Venda  ' . $value['venda'];
                                                } elseif (!$value['venda'] == 0 && !$value['aluguel'] == 0) {
                                                    echo 'Venda  ' . $value['venda'] . '/Aluga ' . $value['aluguel'];
                                                } elseif ($value['venda'] == '' && $value['aluguel'] == '') {
                                                    echo ' ';
                                                } else {
                                                    echo 'Aluga  ' . $value['aluguel'];
                                                }
                                                ?> </h3>
                                            <div class="texto-card">
                                            <h5><p><?php echo mb_strcut($value['breve_descricao'],0,200)."...Veja mais...clique no botão."; ?> </p></h5>
                                          
                                            </div>


                                            <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>" >       <button  type="button" class=" btn btn-default btn-lg btn-block" >Tenho Interesse</button>  </a>

                                        </div>

                                    </picture>

                                </div>
                                <?php
                            } endforeach;
//   } else {
                        ?>

                    </div>


                </div>



                <a class="left carousel-control" href="#my-pics2" role="button" data-slide="prev">

                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#my-pics2" role="button" data-slide="next">

                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>   


        <div class="col-sm-4">
            <div  id="my-pics3" class="carousel slide" data-ride="carousel">
                <div class="control-form">
                    <div class="carousel-inner" role="listbox">



                        <?php
//if (!$viewData['buscaimovel'] == '') {
                        foreach ($viewData['listimovelmisto'] as $key => $value): {
                                ?>

                                <div class="item <?php echo ($key == '0') ? 'active' : ''; ?>">






                                    <picture>
                                        <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>" >

                                            <?php if (!empty($value['url_foto_principal'])): { ?>
                                            <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" class=" img-rounded img-fluid">
                                                <?php } else: ?>
                                            <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
        <?php endif; ?>

                                        </a>
                                        <div class="caption">
                                            <h3><?php echo $value['tipo_imovel']; ?> -
                                                <?php
                                                if ($value['aluguel'] == 0) {
                                                    echo 'Venda  ' . $value['venda'];
                                                } elseif (!$value['venda'] == 0 && !$value['aluguel'] == 0) {
                                                    echo 'Venda  ' . $value['venda'] . '/Aluga ' . $value['aluguel'];
                                                } elseif ($value['venda'] == '' && $value['aluguel'] == '') {
                                                    echo ' ';
                                                } else {
                                                    echo 'Aluga  ' . $value['aluguel'];
                                                }
                                                ?> </h3>
                                            <div class="texto-card">
                                            <h5><p><?php echo mb_strcut($value['breve_descricao'],0,200)."...Veja mais...clique no botão."; ?> </p></h5>
                                           
                                            </div>


                                            <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>" >       <button  type="button" class=" btn btn-default btn-lg btn-block" >Tenho Interesse</button>  </a>

                                        </div>

                                    </picture>

                                </div>
                                <?php
                            } endforeach;
//   } else {
                        ?>

                    </div>


                </div>



                <a class="left carousel-control" href="#my-pics3" role="button" data-slide="prev">

                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#my-pics3" role="button" data-slide="next">

                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>



</div>
