








<?php $listimovel = $viewData['listimovel']; ?>
<title>Detalhes do Imovel-<?php echo $listimovel['tipo_imovel']; ?> </title>
<div class="container-fluid">

    <div class="jumbotron mt-5 text-center">
        
                     
      
        <h2 class="text-info">Detalhes do Imóvel <?php echo $listimovel['tipo_imovel']; ?>-[<?php
                    echo strtoupper($listimovel['tipo_assunto']);
                    ?>] - Codigo: <?php echo $listimovel['codigo']; ?></h2>

    </div>


    <div class="row">

        <div class="col-sm-4">
            

                <div class="carousel slide" data-ride="carousel" id='meuCarousel'>
                    <div class="carousel-inner" role='listbox'>
                        <div class="carousel-item active">
                         <?php if (!empty($listimovel['url_foto_principal'])): { ?>
                            <a href="javascript:; " class="galeria" data-lightbox="folheta" data-title="Imovel"><img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $listimovel['url_foto_principal']; ?>" style="width: 400px;height: 400px;" ></a>
                            
                    <?php } else: ?>
                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
                <?php endif; ?>
                    </div>
                        <?php foreach ($viewData['listfotos'] as $key => $foto): ?>
                            <div class="carousel-item <?php echo ($key == '0') ? '' : ''; ?>">
                                <?php if (!empty($foto['url_imagem'])): { ?>
                                <a href="javascript:;" class="galeria" data-lightbox="folheta" data-title="Imovel">
                                    <img src="<?php BASE_URL; ?>upload/<?php echo $foto['url_imagem']; ?>" style="width: 400px;height: 400px;" ></a>
                                    <?php } else: ?>
                                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-fluid">
                                <?php endif; ?>

                            </div>

                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#meuCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#meuCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>

                </div>
          
            <div class="col-sm-8 mt-3" style="width: 400px;">
                <a href="https://api.whatsapp.com/send?phone=55971714356&text=Ola!%20Fiquei%20interessado%20no%20seu%20Imovel!%20Codigo: <?php echo $listimovel['codigo']; ?>" class="btn btn-success">
                   Entre em contato conosco pelo:<br>
                 
                   WhatsApp <?php echo $value =$viewData['celular']; ?> 
                   <span><img src="<?php BASE_URL;?>assets/images/whatsapp.png " width="30" height="30"/></span><br>
                  Clique Aqui!
            </a>
            </div>
        </div>
    
        <div class="col-sm-8">
            <div class="caption">

                <div class="form-group" style="resize:horizontal;">
                    <?php echo "<pre wrap='on' cols='30' rows='30'>".$listimovel['breve_descricao']."</pre>" ?>
                </div>
              

                <button href="javascript;:" onclick="tenhointeresse('<?php echo $listimovel['id_imovel']; ?>')" type="button" class="btn btn-primary">Tenho Interesse</button>
         </div>
        </div>

    </div>

<div class="bgbox"> </div>
<div class="divbox">
<button> Fechar</button>
    <div class="row">

            <div class="col-lg">
                

                    <div class="carousel slide" data-ride="carousel" id='meuCarousel1'>
                                        <div class="carousel-inner">
                                        <?php if (empty($foto['url_imagem'])): { ?>
                                            <div class="carousel-item active">
                                           <a href="javascript:;"> <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-fluid"></a>
                                        </div>
                                            <?php } else: ?>
                                                                <?php foreach ($viewData['listfotos'] as $key => $foto): ?>
                                                            <div class="carousel-item <?php echo ($key == '0') ? 'active' : ''; ?>">
                                                                <?php if (!empty($foto['url_imagem'])): { ?>
                                                                <a href="javascript:;">
                                                                    <img src="<?php BASE_URL; ?>upload/<?php echo $foto['url_imagem']; ?>" ></a>
                                                                    <?php } else: ?>
                                                                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-fluid">
                                                                    <?php endif; ?>

                                                            </div>
                                                           
                                                                   

                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                        </div>
                                            <a class="carousel-control-prev" href="#meuCarousel1" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                            </a>
                                            <a class="carousel-control-next" href="#meuCarousel1" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Próximo</span>
                                            </a>

                    </div>
            </div>
    </div>    
                   
   
   
</div>

   
    <h2>Maiores Informações:</h2>
    <h5>Entre em contato conosco pelo telefone <?php echo $value=$viewData['telefone']; ?> / <?php echo $value=$viewData['celular']; ?> </h5> <h5>Email: <?php echo $value=$viewData['email']; ?></h5>
    <h5>Venha nos fazer uma visita e 
        conhecer nosso escritório na  <?php echo $value=$viewData['endereco']; ?></h5>

    <!-- Modal  venda-->
    <div class="modal" id="Modalvenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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


