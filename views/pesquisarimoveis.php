<title> Pesquisar Imóveis </title>
<div class="container-fluid">
    <a class="btn btn-default" href="<?php BASE_URL ?>menuprincipal"> Voltar p/Menu Principal</a>
    <center><h2>Pesquisar Imóveis </h2></center>
    <form method="GET" >
       
    <div class="input-group">
        <input type="search" class="form-control" name="pesquisar" >
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit">
                <span  aria-hidden="true"></span>Pesquisar
            </button>
        </span>
    </div>
        </form>
    <br>
    <div class="table-responsive">
    <table class="table">
        <thead>

            <tr>
                <th>ID</th>
                <th>Tipo do Imóvel</th>
                <th>Localização</th>
                <th>Descrição</th>
                 <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
             <?php
             
              
        
         
            
        $value=$viewData['lista'];
   ?>
                
            
            <tr>
                <td>
             <?php echo $value['id'];?>
                    </td>
                <td><?php echo $value['tipo_imovel'] ?></td>
                <td>
                    Bairro :<?php echo $value['bairro'];?>
                Cidade : <?php echo $value['cidade'];?>
                </td>
                <td>
                    <a href="#">Dormitório <span class="badge"><?php echo $value['dormitorio'] ?></span></a><br>
                    <a href="#">Suite <span class="badge"><?php echo $value['suite'] ?></span></a><br>
                    <a href="#">Banheiro <span class="badge"><?php echo $value['banheiro'] ?></span></a><br>
                    <a href="#">Garagem <span class="badge"><?php echo $value['garagem'] ?></span></a><br>
                </td>
                
                <td><a href="<?php BASE_URL;?>imoveldetalhado?id=<?php echo $value['id'];?> "><button class="btn btn-warning">Ver Detalhes</button></a>
                   <!-- <a href="<?php BASE_URL; ?>menuprincipal?id=<?php echo $value['id'];?>"><button class="btn btn-primary">Menu</button></a>-->
              
                </td>
            </tr>
         
      
      
       
        </tbody>
    </table>
    </div>
</div>