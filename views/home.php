
<title>Imóveis em Cabreúva</title>
<meta property="og:url" content="http://www.dmrimoveiscabreuva.com.br" />
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
<meta name="google-site-verification" content="http://www.dmrimoveiscabreuva.com.br" />


<meta property="og:description" content="Imóveis em Cabreúva - Procurando por um imóvel em Cabreúva? Encontre ótimas oportunidades de imóveis para venda ou Locação em nosso site. Confira!" />
<meta property="og:image" content="" />


<img src="<?php BASE_URL; ?>assets/images/banner.png" width="100%" alt="dmr-imoveis-em-cabreuva " height="100%" id="banner"/>

<div class="container-fluid">
    <!-- <figcaption id="texto1">Imóveis em Cabreúva com :Danilo-Marcel-Rony </figcaption> -->
    <figcaption id="texto2"><center><label >Imóveis em Cabreúva e Região busca aqui!</label></center>  </figcaption>
    <!-- <figcaption id="texto3">Rony</figcaption>-->
    <figcaption id="texto4"> 
        <form method="GET">


            <div id="busca">
                <div class="row">
                    <div class="col-sm-3">
                        
                        <label for="cidade" class="label label-info">Cidade</label>
                        <select id="cidade" class="form-control" name="filtros[cidade]">
                            <option></option>
                            <?php $filtros = $viewData['filtros']; ?>
                            <?php foreach ($viewData['listCidade'] as $value): ?>
                                <option value="<?php echo $value['nome']; ?>" <?php echo($value['nome'] == $filtros['cidade']) ? 'selected="selected"' : ''; ?>> <?php echo $value['nome']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>




                    <div class="col-sm-3">
                        <label for="bairro" class = "label label-info">Bairro</label>
                        <select  id="bairro" class="form-control" name="filtros[bairro]">
                            <option></option>
                            <?php foreach ($viewData['listBairro'] as $value):  ?>
                                    <option value="<?php echo $value['nome']; ?>" <?php echo ($value['nome'] == $filtros['bairro']) ? 'selected="selected"' : ''; ?>> <?php echo $value['nome']; ?></option>
                                <?php  endforeach; ?>
                        </select>
                    </div>


                    <div class="col-sm-3">
                        <label for="dormitorio" class="label label-info">Dormitório</label>
                        <select id="dormitorio" class="form-control" name="filtros[dormitorio]">
                            <option></option>
                            <?php foreach ($viewData['listDormitorio'] as $value):  ?>
                                    <option value="<?php echo $value['dormitorio']; ?>" <?php echo ($value['dormitorio'] == $filtros['dormitorio']) ? 'selected="selected"' : ''; ?>> <?php echo $value['dormitorio']; ?></option>
                                <?php  endforeach; ?>
                        </select>
                    </div>


                    <div class="col-sm-3">
                        <label for="suite" class='label label-info'>Suite</label>
                        <select id="suite" class="form-control" name="filtros[suite]">
                            <option></option>
                            <?php foreach ($viewData['listSuite'] as $value): ?>
                                    <option value="<?php echo $value['suite']; ?>" <?php echo ($value['suite'] == $filtros['suite']) ? 'selected="selected"' : ''; ?>> <?php echo $value['suite']; ?></option>
                                <?php  endforeach; ?>
                        </select>
                    </div>


                    <div class="col-sm-3">
                        <label for="tipoimovel" class='label label-info'>Tipo de Imóvel</label>
                        <select id="tipoimovel" class="form-control" name="filtros[tipoimovel]">
                            <option></option>
                            <option value="Casa">Casa</option>
                            <option value="Apartamento">Apartamento</option>
                            <option value="Germinada">Germinada</option>
                            <option value="Kitnet">Kitnet</option>
                            <option value="Chacara">Chacara</option>
                            <option value="Galpão">Galpão</option>
                            <option value="Terreno">Terreno</option>
                            <option value="Chacara">Chacara</option>
                            <option value="Sitio">Sitio</option>
                             <option value="Condominio">Condominio</option>
                              <option value="Comercial">Comercial</option>
                            <!--  
                            <?php //foreach ($viewData['listTipoImovel'] as $value):  ?>
                                   <option value="<?php //echo $value['tipo_imovel'];  ?>" <?php// echo ($value['tipo_imovel'] == $filtros['tipoimovel']) ? 'selected="selected"' : ''; ?>> <?php // echo $value['tipo_imovel'];   ?></option>
                              
                            <?php // endforeach;?>-->
                        </select>
                    </div>



                    <div class="col-sm-3">
                        <label for="banheiro" class='label label-info'>Banheiro</label>
                        <select id="banheiro" class="form-control" name="filtros[banheiro]">
                            <option></option>
                            <?php foreach ($viewData['listBanheiro'] as $value):  ?>
                                    <option value="<?php echo $value['banheiro']; ?>" <?php echo ($value['banheiro'] == $filtros['banheiro']) ? 'selected="selected"' : ''; ?>> <?php echo $value['banheiro']; ?></option>
                                <?php  endforeach; ?>   </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-3">

                        <label for="garagem" class="label label-info">Garagem</label>
                        <select id="garagem" class="form-control" name="filtros[garagem]">
                            <option></option>
                            <?php foreach ($viewData['listGaragem'] as $value):  ?>
                                    <option value="<?php echo $value['garagem']; ?>" <?php echo ($value['garagem'] == $filtros['garagem']) ? 'selected="selected"' : ''; ?>> <?php echo $value['garagem']; ?></option>
                                <?php  endforeach; ?> 
                        </select>
                    </div>



                    <div class="col-sm-3">

                        <label for="areaconstruida" class="label label-info">Area Construida</label>
                        <select id="areaconstruida" class="form-control" name="filtros[areaconstruida]">
                            <option></option>
                            <?php foreach ($viewData['listAreaConstruida'] as $value):  ?>
                                    <option value="<?php echo $value['area_construida']; ?>" <?php echo ($value['area_construida'] == $filtros['areaconstruida']) ? 'selected="selected"' : ''; ?>> <?php echo $value['area_construida'] . 'm²' ?></option>
                                <?php  endforeach; ?> 
                        </select>
                    </div>



                    <div class="col-sm-3">
                        <label for="areatotal" class="label label-info" >
                            Area Total
                        </label>
                        <select id="areatotal" class="form-control" name="filtros[areatotal]">
                            <option ></option>
                            <?php foreach ($viewData['listTotal'] as $value):  ?>
                                    <option value="<?php echo $value['area_total']; ?>" <?php echo ($value['area_total'] == $filtros['areatotal']) ? 'selected="selected"' : ''; ?>> <?php echo $value['area_total'] . ' m²' ?></option>
                                <?php  endforeach; ?> 
                        </select>
                    </div>


                    <div class="col-sm-3">
                        <label class="label label-info" >
                            Valor de Aluguel
                        </label>
                        <select class="form-control" name="filtros[valoraluguel]">
                            <option> </option>
                            <?php foreach ($viewData['listAluguel'] as $value):  ?>
                                    <option value="<?php echo $value['aluguel']; ?>" <?php echo ($value['aluguel'] == $filtros['valoraluguel']) ? 'selected="selected"' : ''; ?>> <?php echo 'R$' . $value['aluguel']; ?></option>
                                <?php  endforeach; ?> 
                        </select>
                    </div>



                    <div class="col-sm-3">
                        <label for="valorimovel" class="label label-info" >
                            Valor do Imovel
                        </label>
                        <select id="valorimovel" class="form-control" name="filtros[valorimovel]">
                            <option> </option>
                            <?php foreach ($viewData['listVenda'] as $valorimovel): 
                                    ?>
                                    <option value="<?php echo $valorimovel['venda']; ?>" <?php echo ($valorimovel['venda'] == $filtros['valorimovel']) ? 'selected="selected"' : ''; ?>> <?php echo 'R$' . $valorimovel['venda']; ?></option>
                                <?php  endforeach; ?> 
                        </select>
                    </div>
                    <br> 
                    <br>


                    <div class="col-sm-3">
                        <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>
                </div>
            </div>

        </form>
    </figcaption>


    <br>

    
    
        <div class="row" >
            
             <div class="col-sm-4">
                 <div  id="my-pics" class="carousel slide" data-ride="carousel">
        <div class="control-form">
                     <div class="carousel-inner">
           


                   <?php
                        foreach ($viewData['listimovelvenda'] as $key =>$value): {
                                ?>

<div class="item <?php echo ($key == '0') ? 'active' : ''; ?>">
 
 
               


                               
                                    <div class="thumbnail ">
                                        <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id'] ?>" >

                                            <?php if (!empty($value['url_foto_principal'])): { ?>
                                                    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" class=" img-rounded img-fluid">
                                                <?php } else: ?>
                                                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
            <?php endif; ?>

                                        </a>
                                        <div class="caption">
                                            <h3><?php  echo $value['tipo_imovel'];   ?></h3>
                                            <h3>Area Total :<?php echo $value['area_total']; ?></h3>

                                            <p><h3><?php
                                                if ($value['aluguel'] == 0) {
                                                    echo 'Venda';
                                                } elseif (!$value['venda'] == 0 && !$value['aluguel'] == 0) {
                                                    echo 'Venda/Aluga ';
                                                } elseif ($value['venda'] == '' && $value['aluguel'] == '') {
                                                    echo ' ';
                                                } else {
                                                    echo 'Aluga';
                                                }
                                                ?></h3> </p>
                                            <a  type="button" class=" btn btn-default btn-lg btn-block" href="<?php BASE_URL; ?>tenhointeresse?id=<?php echo $value['id']?>">Tenho Interesse</a>
                                        </div>

                                    </div>
                              
     </div>
       <?php } endforeach;
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

            

    
     

   

   
    


    
     
             <div class="col-sm-4">
                 <div  id="my-pics2" class="carousel slide" data-ride="carousel">
       <div class="control-form">
                     <div class="carousel-inner" role="listbox">
           
 

                    <?php //if (!$viewData['buscaimovel'] == '') {
                        foreach ($viewData['listimovelaluguel'] as $key =>$value): {
                                ?>

<div class="item <?php echo ($key == '0') ? 'active' : ''; ?>">
 
 
               


                               
                                    <div class="thumbnail ">
                                        <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id'] ?>" >

                                            <?php if (!empty($value['url_foto_principal'])): { ?>
                                                    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" class=" img-rounded img-fluid">
                                                <?php } else: ?>
                                                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
            <?php endif; ?>

                                        </a>
                                        <div class="caption">
                                           <h3> <p><?php  echo $value['tipo_imovel'];   ?> - <?php
                                                if ($value['aluguel'] == 0) {
                                                    echo 'Venda';
                                                } elseif (!$value['venda'] == 0 && !$value['aluguel'] == 0) {
                                                    echo 'Venda/Aluga ';
                                                } elseif ($value['venda'] == '' && $value['aluguel'] == '') {
                                                    echo ' ';
                                                } else {
                                                    echo 'Aluga';
                                                }
                                                ?> </p></h3>
                                            <h4><p>Area Total :<?php echo $value['area_total']; ?> </p></h4>
                                            <h4><p>Banheiro :<?php echo $value['banheiro']; ?> - Garagem :<?php echo $value['garagem']; ?></p></h4>
                                            <h4><p>Suite :<?php echo $value['suite']; ?> - Dormitorio :<?php echo $value['dormitorio']; ?></p></h4>


                                           
                                            <a  type="button" class=" btn btn-default btn-lg btn-block" href="<?php BASE_URL; ?>tenhointeresse?id=<?php echo $value['id']?>">Tenho Interesse</a>
                                        </div>

                                    </div>
                              
     </div>
       <?php } endforeach;
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
           
 

                    <?php //if (!$viewData['buscaimovel'] == '') {
                        foreach ($viewData['listimovelcomercial'] as $key =>$value): {
                                ?>

<div class="item <?php echo ($key == '0') ? 'active' : ''; ?>">
 
 
               


                               
                                    <div class="thumbnail ">
                                        <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id'] ?>" >

                                            <?php if (!empty($value['url_foto_principal'])): { ?>
                                                    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" class=" img-rounded img-fluid">
                                                <?php } else: ?>
                                                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
            <?php endif; ?>

                                        </a>
                                        <div class="caption">
                                            <h3><?php  echo $value['tipo_imovel'];   ?></h3>
                                            <h3>Area Total :<?php echo $value['area_total']; ?></h3>

                                            <p><h3><?php
                                                if ($value['aluguel'] == 0) {
                                                    echo 'Venda';
                                                } elseif (!$value['venda'] == 0 && !$value['aluguel'] == 0) {
                                                    echo 'Venda/Aluga ';
                                                } elseif ($value['venda'] == '' && $value['aluguel'] == '') {
                                                    echo ' ';
                                                } else {
                                                    echo 'Aluga';
                                                }
                                                ?></h3> </p>
                                            <a  type="button" class=" btn btn-default btn-lg btn-block" href="<?php BASE_URL; ?>tenhointeresse?id=<?php echo $value['id']?>">Tenho Interesse</a>
                                        </div>

                                    </div>
                              
     </div>
       <?php } endforeach;
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