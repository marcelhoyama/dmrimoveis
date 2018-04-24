
<title>Editar Fiador - DMR Imóveis - Negócios Imobiliários em Cabreúva</title>
<div class="container-fluid">
    <?php     $value = $viewData['dadosFiador']; ?> 
    <h2 class="text-center h2 label-info">Editar Dados do Fiador: <?php echo $value['nome'];?></h2></br>

    <form class="form-group-sm" method="POST">
          <div class="form-group">
              
              
            <label for="cpf">CPF*:</label>
            <input name="cpf" type="text" class="form-control" value="<?php echo $value['cpf']; ?>" disabled="">
        </div>
         <div class="form-group">
              
              
            <label for="rg">RG*:</label>
            <input name="rg" type="text" class="form-control" value="<?php echo $value['rg']; ?>" disabled="">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input name="nome" type="text" class="form-control" id="nome" value="<?php echo $value['nome']; ?>">
        </div>
        <div class="row">
        <div class="form-group col-sm-6">
            <label for="fone">Telefone:</label>
            <input name="telefone" type="text" class="form-control" id="fone" value="<?php echo $value['telefone']; ?>">
        </div>
        <div class="form-group col-sm-6">
            <label for="fone">Telefone:</label>
            <input name="telefone2" type="text" class="form-control" id="fone" value="<?php echo $value['telefone2']; ?>">
        </div>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input name="email" type="email" class="form-control" id="email" value="<?php echo $value['email']; ?>">
        </div>

                   


        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Alterar">


       
            <a class="btn btn-warning" href="<?php BASE_URL; ?>pesquisarinquilino"> Voltar</a>

        </div>
        <div class="danger">
            <?php if (isset($erro) && !empty($erro)): ?>
                <div class="alert alert-danger"><?php echo $erro; ?></div> 
            <?php endif; ?>
        </div>
        <div class="danger">
            <?php if (isset($ok) && !empty($ok)): ?>
                <div class="alert alert-success"><?php echo $ok; ?></div> 
            <?php endif; ?>
        </div>
    </form>

</div>