<title> DMR Imóveis em Cabreúva</title>
<div class="container-fluid">
    <div class="jumbotron">
        
  
    
        <h2 class="text-info"><?php ?></h2>
        
        <hr>
        <h3>Maiores Informações:<?php echo $fixo = $viewData['fixo']; ?> / <?php echo $celular = $viewData['celular']; ?> / <?php echo $email = $viewData['email']; ?></h3>
    </div> 
  
<?php foreach ($viewData['listimovel'] as $value): { ?>

    <div class="col-sm-3">

        <div class="thumbnail ">
            <a href="<?php BASE_URL; ?>imoveldetalhado?id=<?php echo $value['id_imovel'] ?>">

                <?php if (!empty($value['url_principal'])): { ?>
                <img src="<?php BASE_URL; ?>upload/fotos_principais/<?php echo $value['url_principal']; ?>" class=" img-rounded img-fluid">
                <?php } else: ?>
                <img src="<?php BASE_URL; ?>assets/images/sem-imagem.gif" class=" img-rounded img-fluid">
                <?php endif; ?>

            </a>
            <div class="caption">

                <h6>Area Total :<?php echo $value['area_total']; ?>
                    Area Construida :<?php echo $value['area_construida']; ?></h6>

                <p><h6>
                    Garagem:<?php echo $value['garagem']; ?>
                    Dormitorio:<?php echo $value['dormitorio']; ?>
                    Suite: <?php echo $value['suite']; ?>
                    Banheiro:<?php echo $value['banheiro']; ?>
                    Localização: <?php echo $value['estado'];?>/<?php echo $value['cidade'];?>/<?php echo $value['bairro'];?>


                </h6> </p>
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
