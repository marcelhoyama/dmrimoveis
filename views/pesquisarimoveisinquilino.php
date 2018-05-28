<title> Pesquisar Imóvel(is) onde o Inquilino esta </title>
<div class="container-fluid">
    <a class="btn btn-default" href="<?php BASE_URL; ?>menuprincipalinquilino?id=<?php foreach ($viewData['nome'] as $value): {
    echo $value['id'];?>
">Voltar p/Menu</a>

    <a class="btn btn-warning" href="<?php BASE_URL; ?>cadastrarimovel?id=<?php echo $value['id'];?>"> + Alugar Imóvel</a>
    <center><h2 class="h2 label-info">Imóvel(is) onde Inquilino esta: <?php echo $value['nome']; ?> </h2></center>
  
  <?php  }endforeach; ?>


        <div class="table-responsive">
            <table class="table">
                <thead>

                    <tr>
                        <th>Codigo</th>
                        <th>Tipo do Imóvel</th>
                        <th>Valor do Aluguel</th>
                        <th></th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if ($viewData['listImovel'] == '') {
                        
                    } else {

                        foreach ($viewData['listImovel'] as $imovel): {
                                ?>


                                <tr>
                                    <td>
                                        <?php echo $imovel['codigo']; ?>
                                    </td>
                                    <td>
                                        <?php echo $imovel['tipo_imovel']; ?>
                                    </td>
                                    <td>
                                        <?php echo $imovel['aluguel'];?>
                                  
                            </td>
                            <td>
                       
                            </td>

  
                                    <td>
                                       
                                        <a href="<?php BASE_URL; ?>editarimovel?id=<?php echo $imovel['id_imovel']; ?> "><button class="btn btn-warning">Editar</button></a>
                                       
      <?php   } endforeach; ?>

                        </td>
                    </tr>

                    <?php }?>


                </tbody>
            </table>
        </div>
   
</div>