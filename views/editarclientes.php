
<title>Editar Clientes - DMR Imóveis - Negócios Imobiliários em Cabreúva</title>
<div class="container-fluid">
    <h2 class="text-center">Editar Dados de Clientes</h2></br>

    <form class="form-group-sm" method="POST">
          <div class="form-group">
            <label for="cpf">CPF*:</label>
            <label> 6666666666</label>
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input name="nome" type="text" class="form-control" id="nome" value="<?php echo 'Fulano' ?>">
        </div>
        <div class="form-group">
            <label for="fone">Telefone:</label>
            <input name="telefone" type="text" class="form-control" id="fone" value="<?php echo '0000000' ?>">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input name="email" type="email" class="form-control" id="email" value="<?php echo 'fulano@hotmail.com'; ?>">
        </div>

      

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Alterar">


       
             <input type="reset" class="btn btn-warning" value="Cancelar">


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