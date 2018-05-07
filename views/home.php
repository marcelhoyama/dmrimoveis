
<title>Imóveis em Cabreúva</title>
<meta property="og:url" content="http://www.dmrimoveisemcabreuva.com.br" />
<meta property="og:type" content="website"/>
<meta property="og:title" content="DaniloMarcelRony Imoveis em Cabreúva"/>
<meta property="og:description" content="Corretores de Imóveis ! Venda, Compra, Troca e Administra!  Nas Regiões de: Cabreúva, Jacaré, Salto, Itu, Jundiaí"/>
<META NAME="Robots" CONTENT="INDEX,FOLLOW">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="revisit-after" content="2">
<meta name="classification" content="imobiliaria , imoveis">

<meta name="description" content="Imóveis em Cabreúva - Procurando por um imóvel em Cabreúva? Encontre ótimas oportunidades de imóveis para venda ou locação em nosso site. Clique e confira!">
<meta name="keywords" content="Imóveis, Imobiliária, Cabreúva, Compra, Venda, Aluguel, Locacao, Apartamento, Casas, Casas em Condomínio, Terrenos, Comerciais, Chácara, Sítios, Fazendas, galpão, area industrial, areas, terreno, areas">
<meta name="author" content="Marcel Hoyama">
<meta name="google-site-verification" content="http://www.dmrimoveisemcabreuva.com.br" />


<meta property="og:description" content="Imóveis em Cabreúva - Procurando por um imóvel em Cabreúva? Encontre ótimas oportunidades de imóveis para venda ou Locação em nosso site. Confira!" />
<meta property="og:image" content="" />
<div class="container-fluid">

    <img src="<?php BASE_URL; ?>assets/images/banner.png" width="100%" alt="dmr-imoveis-em-cabreuva " height="100%"/>
    <figcaption id="texto1">Danilo </figcaption>
    <figcaption id="texto2">Marcel </figcaption>
    <figcaption id="texto3">Rony </figcaption>
    <figcaption id="texto4"> 
        <div id="busca">
            <div class="row">
                <div class="col-sm-4">



                    <label class="label label-info">Cidade</label>

                    <select class="form-control" name="cidade">
                        <option></option>
                     <?php foreach ($viewData['listCidade'] as $value): { ?>
                             <option value="<?php echo $value['nome']?>"> <?php echo $value['nome'] ?></option>
                        
                      <?php  } endforeach;?>
                       


                    </select>




                </div>




                <div class="col-sm-4">


                    <label class = "label label-info">Bairro</label>

                    <select class="form-control" name="bairro">
                        <option value="#"></option>
                        <?php foreach ($viewData['listBairro'] as $value): { ?>
                             <option value="<?php echo $value['nome']?>"> <?php echo $value['nome'] ?></option>
                        
                      <?php  } endforeach;?>
                    </select>


                </div>




                <div class="col-sm-4">



                    <label class="label label-info">Dormitório</label>
                    <select class="form-control" name="dormitorio">
                        <option></option>
                      <?php foreach ($viewData['listDormitorio'] as $value): { ?>
                             <option value="<?php echo $value['dormitorio']?>"> <?php echo $value['dormitorio'] ?></option>
                        
                      <?php  } endforeach;?>
                    </select>




                </div>

                <div class="col-sm-4">



                    <label class='label label-info'>Suite</label>
                    <select class="form-control" name="suite">
                        <option></option>
                         <?php foreach ($viewData['listSuite'] as $value): { ?>
                             <option value="<?php echo $value['suite']?>"> <?php echo $value['suite'] ?></option>
                        
                      <?php  } endforeach;?>
                    </select>




                </div>


            </div>
            <br>

            <div class="row">
                <div class="col-sm-4">



                    <label class='label label-info'>Banheiro</label>
                    <select class="form-control" name="banheiro">
                        <option></option>
              <?php foreach ($viewData['listBanheiro'] as  $value): { ?>
                             <option value="<?php echo $value['banheiro']?>"> <?php echo $value['banheiro'] ?></option>
                        
                      <?php  } endforeach;?>   </select>




                </div>
                <div class="col-sm-4">



                    <label class="label label-info">Garagem</label>
                    <select class="form-control" name="garagem">
                        <option></option>
               <?php foreach ($viewData['listGaragem'] as  $value): { ?>
                             <option value="<?php echo $value['garagem']?>"> <?php echo $value['garagem'] ?></option>
                        
                      <?php  } endforeach;?> 
                    </select>


                </div>




                <div class="col-sm-4">






                    <label class="label label-info">Area Construida</label>
                    <select class="form-control" name="area_construida">
                        <option></option>
                        <?php foreach ($viewData['listAreaConstruida'] as  $value): { ?>
                             <option value="<?php echo $value['area_construida']?>"> <?php echo $value['area_construida'].'m²' ?></option>
                        
                      <?php  } endforeach;?> 

                    </select>

                </div>




                <div class="col-sm-4">



                    <label class="label label-info" >
                        Area Total

                    </label>


                    <select class="form-control" name="areatotal">
                        <option ></option>
                         <?php foreach ($viewData['listTotal'] as  $value): { ?>
                             <option value="<?php echo $value['area_total']?>"> <?php echo $value['area_total'].' m²' ?></option>
                        
                      <?php  } endforeach;?> 

                    </select>

                </div>

 <div class="col-sm-4">



                    <label class="label label-info" >
                        Valor de Aluguel

                    </label>


                    <select class="form-control" name="valor">
                        <option> </option>
                        <?php foreach ($viewData['listAluguel'] as  $value): { ?>
                             <option value="<?php echo $value['valor_aluguel']?>"> <?php echo 'R$'.$value['valor_aluguel'] ?></option>
                        
                      <?php  } endforeach;?> 
                    </select>

                </div>

                <div class="col-sm-4">



                    <label class="label label-info" >
                        Valor do Imovel

                    </label>


                    <select class="form-control" name="valor">
                        <option> </option>
                        <?php foreach ($viewData['listValorimovel'] as  $value): { ?>
                             <option value="<?php echo $value['valor_imovel']?>"> <?php echo 'R$'.$value['valor_imovel'] ?></option>
                        
                      <?php  } endforeach;?> 
                    </select>

                </div>

            </div>
            </div>
            
            <br>
            <div class="col-sm-3">

 <input type="submit" class="btn btn-primary" value="Buscar">

             



            </div>

    </figcaption>
</div>
</div>


<br>

<div  id="my-pics" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="my-pics" data-slide-to="0" class="active"></li>
        <li data-target="my-pics" data-slide-to="1"></li>
        <li data-target="my-pics" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="row" >
              <?php foreach ($viewData['listfotoprincipal'] as $value): {  ?>
                    
             
                <div class="col-xs-12 col-sm-3">
                    <div class="thumbnail ">
                        <a  href="<?php BASE_URL; ?>todos">    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_principal'];?>" class=" img-rounded img-fluid"></a>
                        <div class="caption">
                            <h3><?php $value=$viewData['listImovel']; echo $value['tipo_imovel']; ?></h3>
                            <p><h3><?php echo $value['v.valor'];//if( $value['valor'] == ''){echo 'Aluga'; }else{     echo 'Venda';}?></h3> </p>
                            <p><a  href="<?php BASE_URL; ?>todos?id=<?php echo $value['id_imovel']?>" class="btn btn-default" role="button"> Ver mais...</a></p>
                        </div>

                    </div>
                </div>
                <?php   } endforeach;?>
               <!--<div class="col-xs-12 col-sm-3">
                    <div class="thumbnail">
                        <a href="<?php BASE_URL; ?>todos">  <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class="img-rounded img-fluid"></a>
                        <div class="caption">
                            <h3>Apartamento</h3>
                            <p><h3>Venda</h3> </p>
                            <p><a href="<?php BASE_URL; ?>todos" class="btn btn-default" role="button">Ver mais...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="thumbnail">
                        <a href="<?php BASE_URL; ?>todos">     <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class="img-rounded img-fluid"> </a>
                        <div class="caption">
                            <h3>Casa no Condominio</h3>
                            <p><h3>Aluguel</h3> </p>
                            <p> <a href="<?php BASE_URL; ?>todos" class="btn btn-default" role="button">Ver mais...</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <div class="thumbnail">
                        <a href="<?php BASE_URL; ?>minipasteis"><img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif"class="img-rounded img-fluid"></a>
                        <div class="caption">
                            <h3>Casa</h3>
                            <p><h3>Venda</h3> </p>
                            <p><a href="<?php BASE_URL; ?>minipasteis" class="btn btn-default" role="button">Ver mais...</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="item ">

            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail ">
                    <a  href="<?php BASE_URL; ?>todos">    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid"></a>
                    <div class="caption">
                        <h3>Galpão</h3>
                        <p><h3>Aluga</h3> </p>
                        <p><a  href="<?php BASE_URL; ?>todos" class="btn btn-default" role="button"> Ver mais...</a></p>
                    </div>

                </div>
            </div>  -->
        </div>
    </div>


    <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="row" >
    <div class="col-sm-1">
        <div class="thumbnail ">
            <a  href="<?php BASE_URL; ?>todos">    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid"></a>
            <div class="caption">
                <h3>Galpão</h3>
                <p><h3>Aluga</h3> </p>
                <p><a  href="<?php BASE_URL; ?>todos" class="btn btn-default" role="button"> Ver mais...</a></p>
            </div>

        </div>
    </div>
</div> 
<div class="row" id="celular" >
    <div class="col-xs-12 col-sm-3">
        <div class="thumbnail ">
            <a  href="<?php BASE_URL; ?>todos">    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid"></a>
            <div class="caption">
                <h3>Galpão</h3>
                <p><h3>Aluga</h3> </p>
                <p><a  href="<?php BASE_URL; ?>todos" class="btn btn-default" role="button"> Ver mais...</a></p>
            </div>

        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="thumbnail">
            <a href="<?php BASE_URL; ?>todos">  <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class="img-rounded img-fluid"></a>
            <div class="caption">
                <h3>Apartamento</h3>
                <p><h3>Venda</h3> </p>
                <p><a href="<?php BASE_URL; ?>todos" class="btn btn-default" role="button">Ver mais...</a></p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="thumbnail">
            <a href="<?php BASE_URL; ?>todos">     <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class="img-rounded img-fluid"> </a>
            <div class="caption">
                <h3>Casa no Condominio</h3>
                <p><h3>Aluguel</h3> </p>
                <p> <a href="<?php BASE_URL; ?>todos" class="btn btn-default" role="button">Ver mais...</a></p>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-3">
        <div class="thumbnail">
            <a href="<?php BASE_URL; ?>minipasteis"><img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif"class="img-rounded img-fluid"></a>
            <div class="caption">
                <h3>Casa</h3>
                <p><h3>Venda</h3> </p>
                <p><a href="<?php BASE_URL; ?>minipasteis" class="btn btn-default" role="button">Ver mais...</a></p>
            </div>
        </div>
    </div>

</div>

