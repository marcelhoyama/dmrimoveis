
<title>Menu Principal do Inquilino</title>

<div class="container-fluid">
     <a class="btn btn-default" href="<?php BASE_URL; ?>pesquisarinquilino">Ver Outro Cliente</a>
   
   <?php  $value = $viewData['inquilino'];  ?>
        
    <h1 class="h1 label-info">Informações do Inquilino:<?php echo $value['nome']; ?></h1>

<div class="row" >
  
    <div class="col-sm-2">
        <div class="thumbnail">
           <a href="<?php BASE_URL; ?>editarinquilino?id=<?php echo $value['id']; ?>">
        <img class="img-responsive" src="<?php BASE_URL; ?>assets/images/editarinquilino.png" alt="editar inquilino imoveis em cabreuva" width="128" height="128">
    </a>
        </div>
    </div>
  <!--  <div class="col-sm-2">
        <div class="thumbnail">
       <a href="<?php BASE_URL;?>pesquisarimoveisinquilino?id=<?php echo $value['id']; ?>">
        <img class="img-responsive" src="<?php BASE_URL; ?>assets/images/verimovelinquilino.png" alt="ver imoveis do inquilino" width="128" height="128">
    </a>
        </div>
        </div>
    
    <div class="col-sm-2">
        <div class="thumbnail">
         <a href="<?php  BASE_URL; ?>cadastrarimovel?id=<?php echo $value['id']; ?>">
        <img class="img-responsive" src="<?php BASE_URL; ?>assets/images/incluirimovelinquilino.png" alt="Incluir mais imovel para inquilino" width="128" height="128">
    </a>
        </div>  -->
    </div>
</div>
    
    </div> 

