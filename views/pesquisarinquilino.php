<title> Pesquisar Inquilino </title>
<div class="container-fluid">
    <a class="btn btn-default" href="<?php BASE_URL ?>menuprincipal"> Voltar p/Menu Principal</a>
    <center><h2>Procurar Inquilino para suas Ações:</h2></center>
    
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
                <th>Nome do Inquilino</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Total de Imóvel</th>
                <th>Seu Fiador</th>
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
                <td><?php echo $value['telefone'] ?> / <?php echo $value['telefone2'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><span class="badge"><?php echo $value['total_imovel'] ?></span></td>
                <td><span class="badge"><?php echo $value['seufiador'] ?></span></td>
                <td><a href="<?php BASE_URL;?>editarinquilino?id=<?php echo $value['id'];?> "><button class="btn btn-warning">Editar</button></a>
                    <a href="<?php BASE_URL; ?>menuprincipalinquilino?id=<?php echo $value['id'];?>"><button class="btn btn-primary">Menu do Inquilino</button></a>
               <a href="<?php BASE_URL; ?>cadastrarimovel?id=<?php echo $value['id'];?>"><button class="btn btn-primary">+ Imóvel</button></a>
              
                </td>
            </tr>
         
      
               <?php }
         
         endforeach;
         } ?>
       
        </tbody>
    </table>
         <div class="danger">
            <?php if (isset($erro) && !empty($erro)): ?>
                <div class="alert alert-danger"><?php echo $erro; ?></div> 
            <?php endif; ?>
        </div>
    </div>
</div>