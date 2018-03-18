
<title>Cadastrar Clientes</title>
<div class="container-fluid">
    <h2 class="text-center">Cadastro de Clientes</h2></br>

    <form class="form-group-sm" method="POST">
          <div class="form-group">
            <label for="cpf">CPF*:</label>
            <input name="cpf" type="text" class="form-control" id="cpf" placeholder="somente numeros">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="digite seu nome completo">
        </div>
        <div class="form-group">
            <label for="fone">Telefone:</label>
            <input name="telefone" type="text" class="form-control" id="fone" placeholder="digite seu telefone de contato">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="digite seu email">
        </div>

      

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Cadastrar">


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