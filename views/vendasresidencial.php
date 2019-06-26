<title>Venda Casas - DMR Imóveis em Cabreúva</title>
<div class="container-fluid">
   <div class="jumbotron">
               
       <h2 class="text-info">Vendas de Casas</h2>
                
                <hr>
 
       </div> 
<?php //if (!$viewData['buscaimovel'] == '') {?>
<?php foreach ($viewData['listfotoprincipal'] as $value): { ?>


<table class="table table-hover">
  
                                    <div class="thumbnail ">
                                        <a href="javascript:;" onclick="ver(<?php echo $value['id_imovel'] ?>)">

                                            <?php if (!empty($value['url_principal'])): { ?>
                                                    <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_principal']; ?>" class=" img-rounded img-fluid">
                <?php } else: ?>
                                                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
            <?php endif; ?>

                                        </a>
                                        <div class="caption">
                                            <h3><?php //$listimovel = $viewData['listImovel'];
            echo $value['tipo_imovel'];
            ?></h3>
                                            <h3>Area Total :<?php echo $value['area_total']; ?></h3>

                                            <p><h3><?php
                                                if ($value['id_aluguel'] == '') {
                                                    echo 'Venda';
                                                } elseif (!$value['id_venda'] == '' && !$value['id_aluguel'] == '') {
                                                    echo 'Venda/Aluga ';
                                                } elseif ($value['id_venda'] == '' && $value['id_aluguel'] == '') {
                                                    echo ' ';
                                                } else {
                                                    echo 'Aluga';
                                                }
                                                ?></h3> </p>
                                            <button  type="button" class=" btn btn-default btn-lg btn-block" onclick="pedido(<?php echo $value['id_imovel'] ?>)">Tenho Interesse</button>
                                        </div>

                                    </div>
                               
        <?php } endforeach;
//} ?>

                



      
</table>

      
         
                                





    </div>
    <script>
        function ver(<?php $id_imovel; ?>) {


            $('#myModal').modal('show');
            $('#myModalpedido').modal('hide');
        }

    </script>


    <!-- Modal --> 
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h1 class="modal-title" id="myModalLabel">  <p class="text-center text-danger"><?php echo $value['id_imovel']; ?></p></h1>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <div class="thumbnail">
                                <div class="carousel slide" data-ride="carousel" id='meuCarousel'>
                                    <div class="carousel-inner" role='listbox'>
                                        <?php foreach ($viewData['listfotos'] as $key => $foto): ?>
                                            <div class="item <?php echo ($key == '0') ? 'active' : ''; ?>">
                                                <img src="<?php BASE_URL; ?>upload/<?php echo $foto['url']; ?>"/>
                                            </div>

<?php endforeach; ?>
                                    </div>
                                    <a class="left carousel-control" href="#meuCarousel" role="button" data-slide="prev"><span><</span></a>
                                    <a class="right carousel-control" href="#meuCarousel" role="button" data-slide="next"><span>></span></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div class="thumbnail">
                                <div class="caption">
                                    <p>venda ou aluguel</p>
                                    <hr>
                                    <p>localizacao </p>
                                    <hr>
                                    <p>dormitorio</p>
                                    <p>banheiro</p>
                                    <p>suite</p>
                                    <p>garagem</p>

                                </div>
                            </div>
                        </div>
                    </div><!-- row --> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="javascript:;" onclick="pedido()"> <button type="button" class="btn btn-primary">Tenho Interesse</button></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function pedido(<?php echo $value['id_imovel'] ?>) {

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
                    <h4 class="modal-title" id="myModalLabel"><p class="text-danger text-center">Entraremos em Contatos</p></h4>
                </div>
                <div class="modal-body">
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
                <p>casa id: <?php echo $value['id_imovel'] ?></p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Enviar</button>

                </div>
            </div>
        </div>
    </div>
    
  

