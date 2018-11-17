
<title>Menu Principal</title>

<div class="container-fluid">
    
   
<div class="row" >
    <div class="col-sm-2">
        <div class="thumbnail ">
       <a href="<?php BASE_URL;?>cadastrarimovel">
        <img class="img-responsive" src="<?php BASE_URL; ?>assets/images/cadastrarimovel.png" alt="cadastrar imoveis" width="128" height="128">
    </a>  
           
    </div>
        </div>
   
  
   
   
    
    
    <div class="row">
    
    <div class="col-sm-2">
        <div class="thumbnail" >
       <a href="<?php BASE_URL;?>pesquisarimoveis"  >
        <img class="img-responsive" src="<?php BASE_URL; ?>assets/images/pesquisarimovel.png" alt="pesquisar imoveis" width="110" height="110">
    </a>
        </div>
        </div>
    <!--       <div class="col-sm-2">
        <div class="thumbnail">
       <a href="<?php BASE_URL;?>pesquisarinteressados">
        <img class="img-responsive" src="<?php BASE_URL; ?>assets/images/pesquisarinteressados.png" alt="pesquisar interessados" width="128" height="128">
    </a>
        </div>
        </div>  -->
    </div>
   
    
</div>
    <hr class="divider">
    <div class="row">
  
        <ul class="list-group">
            <li class="list-group-item">
   <?php $totalimovel=$viewData['totalimovel']; ?>
        <label>Total de Imovel: </label><span class="badge"> <?php echo $totalimovel['total'];?></span>
        </li>
     
        <li class="list-group-item">
        <?php $totalimovel=$viewData['totalvenda']; ?>
            <label>Total de Venda: </label><span class="badge"> <?php echo $totalvenda['total'];?></span>
        </li>
        <div class="col-sm-2">
 <?php $totalimovel=$viewData['totalaluga']; ?>

            <label>Total de Aluga: </label><span class="badge "> <?php echo $totalaluga['total'];?></span>
            </div>
       
        <div class="col-sm-2">
            <?php $totalstatuslivre=$viewData['totallivre'];?> 
            <label>Total Anúnciado: </label><span class="badge"> <?php echo $totalstatuslivre['total'];?></span>
        </div>
        <div class="col-sm-2">
            <?php $totalstatusbloqueado=$viewData['totalbloqueado'];?> 
            <label>Total Bloqueado: </label><span class="badge"> <?php echo $totalstatusbloqueado['total'];?></span>
        </div>
        </ul>
    </div>
</div>
  

