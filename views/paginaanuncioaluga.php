<title> DMR Imóveis em Cabreúva</title>
<div class="container-fluid">
    <div class="jumbotron">
        
  
    
        <center><h2 class="text-info "><?php echo $viewData['tipoassunto']; ?> - <?php echo $viewData['tipoimovel']; ?></h2></center>
        
        <hr>
        <h3>Maiores Informações:<?php echo $fixo = $viewData['fixo']; ?> / <?php echo $celular = $viewData['celular']; ?><span><img src="<?php BASE_URL; ?>assets/images/whatsapp.png" height="27" width="27" id="icone-whatsapp" /></span> / <?php echo $email = $viewData['email']; ?></h3>
    </div> 
  
<?php foreach ($viewData['listimovel'] as $value): { ?>

    <div class="col-sm-3">

        <div class="thumbnail ">
            <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>">

                <?php if (!empty($value['url_foto_principal'])): { ?>
                <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_foto_principal']; ?>" class=" img-rounded img-fluid" height="200">
                <?php } else: ?>
                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid" height="200">
                <?php endif; ?>

            </a>
            <div class="caption" >
                <div class="texto-card">
                     <h5><p>
                         <?php echo mb_strcut($value['breve_descricao'],0,200)?>... 
                             <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel']; ?>">
                                 Veja mais... 
                             </a></p></h5>
                                           

                <p><h6>
                 
                    Localização: <?php echo $value['estado'];?>/<?php echo $value['cidade'];?>/<?php echo $value['bairro'];?>


                </h6> </p>
                </div>
                <button  type="button" class=" btn btn-default btn-lg btn-block" href="javascript:;"  onclick="tenhointeresse(<?php echo $value['id_imovel']; ?>)">Tenho Interesse</button>
            </div>

        </div>
 </div>
        <?php } endforeach; ?>

 <div class="danger">
            <?php if (isset($erro) && !empty($erro)): ?>
     <div class="alert alert-danger "><?php echo $erro; ?>
         <div class="col-sm-offset-4"> 
             <a href="<?php BASE_URL;?>contato" ><button type="button" class="btn btn-default" >
 Clica Aqui
             </button></a>
         </div>
          </div> 
            <?php endif; ?>
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
   



</div>

