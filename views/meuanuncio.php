




<?php $listimovel = $viewData['listimovel']; ?>
<title>Detalhes do Imovel-<?php echo $listimovel['tipo_imovel']; ?> </title>
<div class="container-fluid">

    <div class="jumbotron mt-5 text-center">
        <a href="<?php BASE_URL; ?>pesquisarimoveis" ><button class="btn btn-primary"  >Voltar Pesquisa</button></a>
         <a href="<?php BASE_URL; ?>editarimovel?id=<?php echo $listimovel['id_imovel']; ?>"><button class="btn btn-primary">Editar</button></a>
       <button href="javascript;:" onclick="excluiranuncio('<?php echo $listimovel['id_imovel'] ?>','<?php echo $listimovel['url_foto_principal']?>','<?php echo $listimovel['codigo']; ?>');" type="button" class="btn btn-danger">Excluir</button>
                     
      
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
                            <a href="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $listimovel['url_foto_principal']; ?>"  data-lightbox="folheta" data-title="Imovel"><img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $listimovel['url_foto_principal']; ?>" style="width: 400px;height: 400px;" ></a>
                            
                    <?php } else: ?>
                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
                <?php endif; ?>
                    </div>
                        <?php foreach ($viewData['listfotos'] as $key => $foto): ?>
                            <div class="carousel-item <?php echo ($key == '0') ? '' : ''; ?>">
                                <?php if (!empty($foto['url_imagem'])): { ?>
                                <a href="<?php BASE_URL; ?>upload/<?php echo $foto['url_imagem']; ?>" data-lightbox="folheta" data-title="Imovel">
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
              
                <ul>

                   
               </ul>

                <button href="javascript;:" onclick="tenhointeresse('<?php echo $listimovel['id_imovel']; ?>')" type="button" class="btn btn-primary">Tenho Interesse</button>
         </div>
    
</div>
    </div>


   <!-- <div class="row">
        <div class="col-sm-2">
            <div class="thumbnail">
             
            </div>
        </div>

    </div> row --> 
   <h2>Maiores Informações:</h2>
    <h5>Entre em contato conosco pelo telefone <?php echo $value=$viewData['telefone']; ?> / <?php echo $value=$viewData['celular']; ?> </h5> <h5>Email: <?php echo $value=$viewData['email']; ?></h5>
    <h5>Venha nos fazer uma visita e 
        conhecer nosso escritório na  <?php echo $value=$viewData['endereco']; ?></h5>


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

              
            </div>
        </div>



    </div>  <!--  fim modal excluir-->
    
     <!-- Modal  slidefotos-->
    <div class="modal fade" id="Modalslidefotos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                <div class="modal-body">
<div class="col-lg">
             <div class="carousel slide" data-ride="carousel" id='meuCarousel2'>
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
                    <a class="left carousel-control" href="#meuCarousel2" role="button" data-slide="prev"><span>Voltar</span></a>
                    <a class="right carousel-control" href="#meuCarousel2" role="button" data-slide="next"><span>Proximo</span></a>

                </div>
            </div>


                </div>
            </div>
        </div>



    </div>  <!--  fim modal slidefotos-->
</div>


