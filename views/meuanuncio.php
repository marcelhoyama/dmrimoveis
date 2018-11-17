




<?php $listimovel = $viewData['listimovel']; ?>
<title>Detalhes do Imovel-<?php echo $listimovel['tipo_imovel']; ?> </title>
<div class="container-fluid">

    <div class="jumbotron">
        <a href="<?php BASE_URL; ?>pesquisarimoveis" ><button class="btn btn-primary"  >Voltar Pesquisa</button></a>
         <a href="<?php BASE_URL; ?>editarimovel?id=<?php echo $listimovel['id_imovel']; ?>"><button class="btn btn-primary">Editar</button></a>
         <button href="javascript;:" onclick="excluiranuncio('<?php echo $listimovel['id_imovel'] ?>','<?php echo $listimovel['url_foto_principal']?>','<?php echo $listimovel['codigo']; ?>');" type="button" class="btn btn-danger">Excluir</button>
                     
        <h2 class="text-info">Detalhes do Imóvel <?php echo $listimovel['tipo_imovel']; ?>-[<?php
                    echo strtoupper($listimovel['tipo_assunto']);
                    ?>] - Codigo: <?php echo $listimovel['codigo']; ?></h2>

    </div>


    <div class="row">

        <div class="col-sm-4">
            <div class="thumbnail" data-toggle="modal" data-target="#Modalslidefotos">

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
            
               <div class="col-sm-8">
            <div class="thumbnail">
                <?php if (!empty($listimovel['url_foto_principal'])): { ?>
                        <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $listimovel['url_foto_principal']; ?>" class=" img-rounded img-fluid">
                    <?php } else: ?>
                    <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
                <?php endif; ?>
            </div>
        </div>
             <div class="col-sm-8">
           <a href="<?php BASE_URL; ?>contato" class="btn btn-primary">  
               <p> Entre em contato conosco pelo telefone <?php echo $value = $viewData['telefone']; ?></br>
                   WhatsApp <?php echo $value =$viewData['celular']; ?> <br>
                   Ou Clique Aqui!</p>
            </a>
        </div>
        </div>
        <br>
        <div class="col-sm-8">
            <div class="caption">



              
                <div class="form-group" >
                    <?php echo "<pre>".$listimovel['breve_descricao']."</pre>" ?>
                </div>
              
                <ul>

                   
               </ul>

                <button href="javascript;:" onclick="tenhointeresse('<?php echo $listimovel['id_imovel']; ?>')" type="button" class="btn btn-primary">Tenho Interesse</button>
         </div>
        </div>

    </div>


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


