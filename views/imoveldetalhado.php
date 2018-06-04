<?php $listimovel = $viewData['listimovel']; ?>
<title>Detalhes do Imovel-<?php echo $listimovel['tipo_imovel']; ?> </title>
<div class="container-fluid">

    <div class="jumbotron">
        <a href="<?php BASE_URL;?>home" ><button class="btn btn-primary"  >Voltar Home</button></a>
        <h2 class="text-info">Detalhes do Imóvel <?php echo $listimovel['tipo_imovel']; ?></h2>

    </div>


    <div class="row">

        <div class="col-sm-5">
            <div class="thumbnail ">

                <div class="carousel slide" data-ride="carousel" id='meuCarousel'>
                    <div class="carousel-inner" role='listbox'>
                        <?php foreach ($viewData['listfotos'] as $key => $foto): ?>
                            <div class="item <?php echo ($key == '0') ? 'active' : ''; ?>">
                                <?php if (!empty($foto['url_imagem'])): { ?>
                                        <img src="<?php BASE_URL; ?>upload/<?php echo $foto['url_imagem']; ?>" class=" img-rounded img-fluid">
                                    <?php } else: ?>
                                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
                                <?php endif; ?>

                            </div>

                        <?php endforeach; ?>
                    </div>
                    <a class="left carousel-control" href="#meuCarousel" role="button" data-slide="prev"><span><</span></a>
                    <a class="right carousel-control" href="#meuCarousel" role="button" data-slide="next"><span>></span></a>

                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="caption">

                <h3>Area Total :<?php echo $listimovel['area_total']; ?></h3>

                <p><h3><?php
                    if ($listimovel['aluguel'] == '') {
                        echo 'Venda';
                    } elseif (!$listimovel['venda'] == '' && !$listimovel['aluguel'] == '') {
                        echo 'Venda/Aluga ';
                    } elseif ($listimovel['venda'] == '' && $listimovel['aluguel'] == '') {
                        echo ' ';
                    } else {
                        echo 'Aluga';
                    }
                    ?></h3> </p>
                <ul>
                    <li>Area Total :<?php echo $listimovel['area_total']; ?> </li>
                    <li>Banheiro :<?php echo $listimovel['banheiro']; ?></li>
                    <li>Garagem :<?php echo $listimovel['garagem']; ?></li>
                    <li>Suite :<?php echo $listimovel['suite']; ?></li>
                    <li>Dormitorio :<?php echo $listimovel['dormitorio']; ?></li>
                    <li><?php echo $listimovel['agua']; ?></li>
                    <li><?php echo $listimovel['luz']; ?></li>
                    <li><?php echo $listimovel['gas']; ?></li> 
                    <li><?php echo $listimovel['piscina']; ?></li>
                    <li><?php echo $listimovel['churrasqueira']; ?></li>
                    <li><?php echo $listimovel['internet']; ?></li>
                    <li><?php echo $listimovel['energia solar']; ?> </li>
                </ul>

                <button href="javascript;:" onclick="tenhointeresse('<?php echo $listimovel['id']; ?>')" type="button" class="btn btn-primary">Tenho Interesse</button>

            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-sm-2">
            <div class="thumbnail">
                <?php if (!empty($listimovel['url_foto_principal'])): { ?>
                        <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $listimovel['url_foto_principal']; ?>" class=" img-rounded img-fluid">
                    <?php } else: ?>
                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
                <?php endif; ?>
            </div>
        </div>

    </div><!-- row --> 
     <h2>Maiores Informações:</h2>
    <h3>Entre em contato conosco pelo telefone <?php echo $value=$viewData['telefone']; ?> ou venha nos fazer uma visita e 
        conhecer nosso escritório na  <?php echo $value=$viewData['endereco']; ?></h3>
    
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
</div>


