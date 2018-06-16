<title> Pesquisar Interessados </title>
<div class="container-fluid">
    <a class="btn btn-default" href="<?php BASE_URL ?>menuprincipal"> Voltar p/Menu Principal</a>
    <center><h2>Pesquisar por Assunto dos Interessados para suas Ações:</h2></center>
    
    <form method="GET" >
         <div class="row">
           
    
        <div class="form-group col-md-8">
        <select class="form-control" name="pesquisar" id="pesquisar">
            <option></option>
            <?php foreach ($viewData['listInteressados'] as $value) :{
                
             ?>
            <option value="<?php echo $value['id_assunto']; ?>" ><?php echo $value['nomeassunto']; ?></option>
                         
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
                <th>Status</th>
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
             <?php echo $value['nomeinteressado'];?>
                    </td>
                <td><?php echo $value['telefone']; ?> / <?php echo $value['celular']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><span class="badge"><?php echo $value['nomeassunto'];?></span></td>
                <td><span class="badge"><?php echo $value['data_interesse']; ?></span></td>
                <td><?php echo $value['nomestatus'];?></td>
                <td><button href="javascript:;" class="btn btn-warning" onclick="tenhointeresseeditar(<?php echo $value['id_interessado']; ?>) ">Editar Status</button>
                    <a href="<?php BASE_URL; ?>excluirinteressado?id=<?php echo $value['id_interessado'];?>" ><button class="btn btn-danger disabled">Excluir</button></a>
                
              
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
    
    
    
       <!-- Modal  venda-->
        <div class="modal fade" id="Modalvenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><p class="text-danger text-center">Alterar Interessados</p></h4>
                    </div>
                    <div class="modal-body">

                    </div>

                    <div class="modal-footer">


                    </div>
                </div>
            </div>



        </div>  <!--  fim modal venda-->
</div>