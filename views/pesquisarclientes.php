<title> Pesquisar Clientes </title>
<div class="container-fluid">
    <center><h2>Pesquisar Clientes</h2></center>
    <form method="GET" >
    <div class="input-group">
        <input type="search" class="form-control" name="pesquisar" >
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>Pesquisar
            </button>
        </span>
    </div>
        </form>
    <br>
    <div class="table-responsive">
    <table class="table">
        <thead>

            <tr>
                <th>Nome do Cliente</th>
                <th>Telefone</th>
                <th>E-mail</th>
                 <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
             <?php
             
              
         if($viewData['lista'] == ''){ 
             
         }else{
         
               foreach ($viewData['lista'] as $value): {
        
   ?>
                
            
            <tr>
                <td>
             <?php echo $value['nome'];?>
                    </td>
                <td><?php echo $value['telefone'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><a href="<?php BASE_URL;?>editarclientes?id=<?php echo $value['id'];?> "><button class="btn btn-warning">Editar</button></a>
                    <a href="<?php BASE_URL; ?>menuprincipal?id=<?php echo $value['id'];?>"><button class="btn btn-primary">Menu</button></a>
              
                </td>
            </tr>
         
      
               <?php }
         
         endforeach;
         } ?>
       
        </tbody>
    </table>
    </div>
</div>