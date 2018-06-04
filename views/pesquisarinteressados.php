<title> Pesquisar Interessados </title>
<div class="container-fluid">
    <a class="btn btn-default" href="<?php BASE_URL ?>menuprincipal"> Voltar p/Menu Principal</a>
    <center><h2>Pesquisar Interessados para suas Ações:</h2></center>
    
    <form method="GET" >
         <div class="row">
           
    
        <div class="form-group col-md-8">
        <select class="form-control" name="pesquisar" id="pesquisar">
            <option></option>
            <?php foreach ($viewData['listInteressados'] as $value) :{
                
             ?>
            <option value="<?php echo $value['assunto']; ?>" > <?php echo $value['assunto']; ?></option>
                         
                               <?php     }endforeach; ?>
        </select>
      </div>
        <div class="form-group col-md-4">
        <button class="btn btn-default" type="submit">Pesquisar</button>
        </div>
    
        </div>
         
  
        </form>
    <br>
    <div class="table-responsive">
    <table class="table">
        <thead>

            <tr>
                <th>Nome do Interessado</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Assunto</th>
                <th>Data do Interesse</th>
                 <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
             <?php
             
              
         if($viewData['pesquisarInteressados'] == ''){ 
             
         }else{
         
               foreach ($viewData['pesquisarInteressados'] as $value): {
        
   ?>
                
            
            <tr>
                <td>
             <?php echo $value['nome'];?>
                    </td>
                <td><?php echo $value['telefone']; ?> / <?php echo $value['celular']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><span class="badge"><?php echo $value['assunto'];?></span></td>
                <td><span class="badge"><?php echo $value['data_interesse']; ?></span></td>
                <td><!--<a href="<?php BASE_URL;?>editarinquilino?id=<?php echo $value['id'];?> "><button class="btn btn-warning">Editar Negociação</button></a>
                    <a href="<?php BASE_URL; ?>menuprincipalinquilino?id=<?php echo $value['id'];?>"><button class="btn btn-primary">Menu do Inquilino</button></a>
               <a href="<?php BASE_URL; ?>cadastrarimovel?id=<?php echo $value['id'];?>"><button class="btn btn-primary">+ Imóvel</button></a>
              -->
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