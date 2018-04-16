
<title>Menu Principal do Cliente</title>

<div class="container-fluid">
     <a class="btn btn-default" href="<?php BASE_URL; ?>pesquisarclientes">Ver Outro Cliente</a>
   
   <?php  $value = $viewData['cliente'];  ?>
        
    <h1 class="h1 label-info">Informações do Cliente:<?php echo $value['nome']; ?></h1>

<div class="row" >
  
    <div class="col-sm-2">
        <div class="thumbnail">
           <a href="<?php BASE_URL; ?>editarclientes?id=<?php echo $value['id']; ?>">
        <img class="img-responsive" src="<?php BASE_URL; ?>assets/images/editarusuario.png" alt="editar cliente imoveis em cabreuva" width="128" height="128">
    </a>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="thumbnail">
       <a href="<?php BASE_URL;?>pesquisarimoveiscliente?id=<?php echo $value['id']; ?>">
        <img class="img-responsive" src="<?php BASE_URL; ?>assets/images/verimovel.png" alt="ver imoveis em cabreuva" width="128" height="128">
    </a>
        </div>
        </div>
    
    <div class="col-sm-2">
        <div class="thumbnail">
         <a href="<?php  BASE_URL; ?>cadastrarimovel?id=<?php echo $value['id']; ?>">
        <img class="img-responsive" src="<?php BASE_URL; ?>assets/images/cadastrarimovel.png" alt="cadastrar imoveis em cabreuva" width="128" height="128">
    </a>
        </div>
    </div>
</div>
    
    </div> 

