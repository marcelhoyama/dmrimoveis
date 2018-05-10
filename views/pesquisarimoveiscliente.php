<title> Pesquisar Imóvel(is) do Cliente </title>
<div class="container-fluid">


    <a class="btn btn-default" href="<?php BASE_URL; ?>menuprincipalcliente?id=<?php
    foreach ($viewData['nome'] as $nome): {
            echo $nome['id'];
        
    ?>">Voltar p/Menu</a>

    <a class="btn btn-warning" href="<?php BASE_URL; ?>cadastrarimovel?id=<?php
      
               echo $nome['id'];
           
    ?>">Cadastrar Imóvel</a>
    <center><h2 class="h2 label-info">Imóvel(is) do Cliente: <?php
           
                    echo $nome['nome'];
                } endforeach;
    ?> </h2></center>



    <div class="table-responsive">
        <table class="table">
            <thead>

                <tr>
                    <th>Dono do Imóvel</th>
                    <th>Tipo do Imóvel</th>
                    <th> Principais Descrição</th>
                    <th></th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

<?php {

    foreach ($viewData['imoveis'] as $value): {
            ?>


                            <tr>
                                <td>
                                    <?php echo $value['nome']; ?>
                                </td>
                                <td>
            <?php echo $value['tipo_imovel']; ?>
                                </td>
                                
                                <td>
            <li>  <span class="badge"><?php echo $value['garagem']; ?> Garagem </span></li>
                           <li>            <span class="badge"><?php echo $value['dormitorio']; ?> Dormitório </span></li>
                           <li>            <span class="badge"> <?php echo $value['banheiro']; ?> Banheiro</span></li>
                             <li>          <span class="badge"><?php echo $value['suite']; ?> Suite </span></li>
                                 
        </td>
   <?php 
                                    if( $value['piscina']=='Piscina' ){
                                        ?>  <td><li>  <span class="badge"><?php echo $value['piscina']; ?></span>  </li> 
                                     <?php   }
                                    ?>
 <?php 
                                    if( $value['churrasqueira']=='Churrasqueira' ){
                                       ?>  <li>  <span class="badge"><?php echo $value['churrasqueira']; ?></span></li>
                                     <?php   }
                                    ?>
                                        <?php 
                                    if( $value['agua']=='Agua' ){
                                       ?>   <li> <span class="badge"><?php echo $value['agua']; ?></span></li>
                                     <?php   }
                                    ?>
                                        <?php 
                                    if( $value['luz']=='Luz' ){
                                       ?>   <li> <span class="badge"><?php echo $value['luz']; ?></span></li>
                                     <?php   }
                                    ?>
 <?php 
                                    if( $value['gas']=='Gás' ){
                                       ?>   <li> <span class="badge"><?php echo $value['gas']; ?></span></li>
                                     <?php   }
                                    ?>
 <?php 
                                    if( $value['internet']=='Internet' ){
                                       ?>   <li> <span class="badge"><?php echo $value['internet']; ?></span></li>
                                     <?php   }
                                    ?>

                                </td>


                                <td>

                                    <a href="<?php BASE_URL; ?>editarimovel?id=<?php echo $value['id_imovel']; ?> "><button class="btn btn-warning">Editar</button></a>
                                    <a href="<?php BASE_URL; ?>adicionarfoto?id=<?php echo $value['id']; ?>"><button class="btn btn-primary" disabled="">+ Fotos</button></a>


                                </td>
                            </tr>

        <?php } endforeach;
}
?>


            </tbody>
        </table>
    </div>

</div>