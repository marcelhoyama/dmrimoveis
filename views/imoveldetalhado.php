<?php $listimovel = $viewData['listimovel']; ?>
<title>Detalhes do Imovel-<?php echo $listimovel['tipo_imovel']; ?> </title>
<div class="container-fluid">

    <div class="jumbotron">
        <a href="<?php BASE_URL; ?>home" ><button class="btn btn-primary"  >Voltar Home</button></a>
        <h2 class="text-info">Detalhes do Imóvel <?php echo $listimovel['tipo_imovel']; ?></h2>

    </div>


    <div class="row">

        <div class="col-sm-4">
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

        <div class="col-sm-8">
            <div class="caption">



                <h3>[<?php
                    echo strtoupper($listimovel['tipo_assunto']);
                    ?>]

                    Breve descrição :<?php echo $listimovel['breve_descricao']; ?> </h3>
                <ul>

                    <li>Localizado no Bairro <?php echo $listimovel['bairro']; ?>- Cidade de <?php echo $listimovel['cidade']; ?> </li>
                    <li>Sobre o Imovel :<?php echo $listimovel['sobre_imovel']; ?> </li>

                    <li>Banheiro :<?php echo $listimovel['banheiro']; ?></li>
                    <li>Garagem :<?php echo $listimovel['garagem']; ?></li>
                    <li>Suite :<?php echo $listimovel['suite']; ?></li>
                    <li>Dormitorio :<?php echo $listimovel['dormitorio']; ?></li>
                    <li>Area Total :<?php echo $listimovel['area_total']; ?> </li>
                    <?php if ($listimovel['agua'] == ''): else: ?>  <li><?php echo $listimovel['agua']; ?></li> <?php endif; ?>
                    <?php if ($listimovel['luz'] == ''): else: ?>  <li><?php echo $listimovel['luz']; ?></li> <?php endif; ?>
                    <?php if ($listimovel['gas'] == ''): else: ?>  <li><?php echo $listimovel['gas']; ?></li> <?php endif; ?>
                    <?php if ($listimovel['piscina'] == ''): else: ?>  <li><?php echo $listimovel['piscina']; ?></li> <?php endif; ?>
                    <?php if ($listimovel['churrasqueira'] == ''): else: ?>  <li><?php echo $listimovel['churrasqueira']; ?></li> <?php endif; ?>
                    <?php if ($listimovel['internet'] == ''): else: ?>  <li><?php echo $listimovel['internet']; ?></li> <?php endif; ?>
                    <?php if ($listimovel['energia solar'] == ''): else: ?>  <li><?php echo $listimovel['energia solar']; ?></li> <?php endif; ?>
                    <?php if ($listimovel['lavanderia'] == ''): else: ?>  <li><?php echo $listimovel['lavanderia']; ?></li> <?php endif; ?>






                    <li>Proximidades :<?php echo $listimovel['proximidades']; ?> </li>
                    <li>Valor :<?php echo number_format($listimovel['venda'], 2, '.', ','); ?><?php echo $listimovel['aluguel']; ?> </li>
                    <li> Forma de Pagamento:<?php echo $listimovel['formapgtovenda']; ?> <?php echo $listimovel['formapgtoaluguel']; ?></li>
                </ul>

                <button href="javascript;:" onclick="tenhointeresse('<?php echo $listimovel['id_imovel']; ?>')" type="button" class="btn btn-primary">Tenho Interesse</button>
<a class="fa fa-whatsapp" title="WhatsApp" href="whatsapp://send?text=Seu site aqui" target="_blank"></i>whast</a>
<a class="fa fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;">facebook</a>
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
    <h3>Entre em contato conosco pelo telefone <?php echo $value = $viewData['telefone']; ?> ou venha nos fazer uma visita e 
        conhecer nosso escritório na  <?php echo $value = $viewData['endereco']; ?></h3>

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


