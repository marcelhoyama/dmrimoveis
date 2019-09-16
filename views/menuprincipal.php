
<title>Menu Principal</title>






    <div class="container-fluid mt-5">	
   
<div class="row" >
<!--    <div class="col-sm-2">
        <div class="thumbnail ">
       <a href="<?php BASE_URL;?>cadastrarimovel">
        <img class="m-3" src="<?php BASE_URL; ?>assets/images/cadastrarimovel.png" alt="cadastrar imoveis" width="110" height="110">
    </a>  
           
    </div>
        </div>
   
  
   
   
    
    
    
    
    <div class="col-sm-2">
        <div class="thumbnail" >
       <a href="<?php BASE_URL;?>pesquisarimoveis"  >
        <img class="m-3" src="<?php BASE_URL; ?>assets/images/pesquisarimovel.png" alt="pesquisar imoveis" width="110" height="110">
    </a>
        </div>
        </div>-->
    <!--       <div class="col-sm-2">
        <div class="thumbnail">
       <a href="<?php BASE_URL;?>pesquisarinteressados">
        <img class="img-responsive" src="<?php BASE_URL; ?>assets/images/pesquisarinteressados.png" alt="pesquisar interessados" width="128" height="128">
    </a>
        </div>
        </div>  -->
    </div>
   
    

    <hr class="divider">
   <div class="row my-5">

        <div class="col">
            <div class="btn-group" role="group" aria-label="Exemplo básico">
                <button type="button" class="btn btn-secondary"><?php $totalimovel = $viewData['totalimovel']; ?>
                    Total de Imovel <span class="badge badge-light"> <?php echo $totalimovel['total']; ?></span></button>
            
                <button type="button" class="btn btn-secondary"> <?php $totalimovel = $viewData['totalvenda']; ?>
                    Total de Venda <span class="badge badge-light"> <?php echo $totalvenda['total']; ?></span></button>
                <button type="button" class="btn btn-secondary"><?php $totalimovel = $viewData['totalaluga']; ?>

                    Total de Aluga <span class="badge badge-light"> <?php echo $totalaluga['total']; ?></span></button>
                <button type="button" class="btn btn-secondary"><?php $totalstatuslivre = $viewData['totallivre']; ?> 
                    Total Anúnciado <span class="badge badge-light"> <?php echo $totalstatuslivre['total']; ?></span></button>
                <button type="button" class="btn btn-secondary"><?php $totalstatusbloqueado = $viewData['totalbloqueado']; ?> 
                    Total Bloqueado <span class="badge badge-light"> <?php echo $totalstatusbloqueado['total']; ?></span></button>

            </div>




        </div>       






    </div>
</div>
  

</div>