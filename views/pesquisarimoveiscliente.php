<title> Pesquisar Imóvel(is) do Cliente </title>
<div class="container-fluid">
    <a class="btn btn-default" href="<?php BASE_URL; ?>menuprincipallogado?id=<?php foreach ($viewData['nome'] as $value){ echo $value['id'];};?>">Voltar p/Menu</a>
    
    <a class="btn btn-warning" href="<?php BASE_URL; ?>cadastrarimovel?id=<?php foreach ($viewData['nome'] as $value){ echo $value['id'];};?>">Cadastrar Imóvel</a>
    <center><h2 class="h2 label-info">Imóvel(is) do Cliente: <?php foreach ( $viewData['nome'] as $value){echo $value['nome'];};?> </h2></center>
    <form method="GET" >
   
    
    <div class="table-responsive">
    <table class="table">
        <thead>

            <tr>
                <th>Dono do Imóvel</th>
                <th>Tipo do Imóvel</th>
                <th>Valor</th>
                <th>Descrição</th>
                 <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
             <?php
             
              
         if($viewData['imoveis'] == ''){ 
             
         }else{
         
               foreach ($viewData['imoveis'] as $value): {
        
   ?>
                
            
            <tr>
                <td><?php echo $value['nome'];?></td>
                <td>
             <?php echo $value['tipo_imovel'];?>
                    </td>
                <td><?php echo $value['valor'] ?></td>
                <td><?php echo $value['descricao'] ?></td>
                <td><a href="<?php BASE_URL;?>editarimovel?id=<?php echo $value['id'];?> "><button class="btn btn-warning">Editar</button></a>
                    <a href="<?php BASE_URL; ?>#?id=<?php echo $value['id'];?>"><button class="btn btn-primary">+ Fotos</button></a>
              
                </td>
            </tr>
         
      
               <?php }
         
         endforeach;
         } ?>
       
        </tbody>
    </table>
    </div>
    </form>
</div>