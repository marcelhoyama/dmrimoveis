<?php $listimovel = $viewData['listimovel']; ?>
<title>Detalhes do Imovel-<?php echo $listimovel['tipo_imovel']; ?> </title>
<div class="container-fluid">

    <div class="jumbotron">

        <h2 class="text-info">Detalhes do Imóvel <?php echo $listimovel['tipo_imovel']; ?></h2>

        <hr/>


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

                <h3><?php
                    echo $listimovel['tipo_imovel'];
                    ?></h3>
                <h3>Area Total :<?php echo $listimovel['area_total']; ?></h3>

                <p><h3><?php
                    if ($listimovel['id_aluguel'] == '') {
                        echo 'Venda';
                    } elseif (!$listimovel['id_venda'] == '' && !$listimovel['id_aluguel'] == '') {
                        echo 'Venda/Aluga ';
                    } elseif ($listimovel['id_venda'] == '' && $listimovel['id_aluguel'] == '') {
                        echo ' ';
                    } else {
                        echo 'Aluga';
                    }
                    ?></h3> </p>
      <a href="javascript:;" onclick="pedido()"> <button type="button" class="btn btn-primary">Tenho Interesse</button></a>
              
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


<script>
        function pedido() {

            $('#myModalpedido').modal('show');
            $('#myModal').modal('hide');

        }

    </script>


    <!-- Modal -->
    <div class="modal fade" id="myModalpedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><p class="text-danger text-center">Deixe que entraremos em Contatos</p></h4>
                </div>
                <div class="modal-body">
                      <div class="form-group">
                        Assunto:  <input class="form-control" type="text" name="assunto" />
                    </div>
                    <div class="form-group">
                        Nome Completo:  <input class="form-control" type="text" name="nome" />
                    </div>
                    <div class="form-group">
                        Telefone:  <input class="form-control" type="tel" name="telefone" />
                    </div>
                    <div class="form-group">
                        Celular: <input class="form-control" type="tel" name="telefone2"/>
                    </div>
                    <div class="form-group">
                        Email: <input class="form-control" type="email" name="email"/>
                    </div>
                </div>
                <p>Codigo do imovel : <?php echo $listimovel['id']?>/ <?php echo $listimovel['tipo_imovel'] ?></p>
                 <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Enviar</button>

    </div>
            </div>
        </div>
  
   

  </div>

