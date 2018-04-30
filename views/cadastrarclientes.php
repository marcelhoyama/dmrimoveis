
<title>Cadastrar Clientes</title>
<div class="container-fluid">
    <a class="btn btn-default" href="<?php BASE_URL ?>menuprincipal"> Voltar p/Menu Principal</a>
    <h2 class="text-center">Cadastro de Clientes</h2></br>

    <form class="form-group-sm" method="POST">
          <div class="form-group">
              <label for="cpf">CPF*: </label> <label class="text-danger"> campo obrigatorio!</label>
            <input name="cpf" type="text" class="form-control" id="cpf" placeholder="somente numeros" required="">
        </div>
        <div class="form-group">
            <label for="nome">Nome*:</label> <label class="text-danger"> campo obrigatorio!</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="digite seu nome completo" required="">
        </div>
        <div class="row" > 
        <div class="form-group col-sm-6">
            
            <label for="fone">Telefone1* (Formato XX-XXXX-XXXX):</label> <label class="text-danger"> campo obrigatorio!</label>
            <input name="telefone" pattern="^\d{2}-\d{5}-\d{4}$"  type="tel" class="form-control" id="fone" placeholder="telefone de contato 1" required="">
        </div>
          <div class="form-group col-sm-6">
            <label for="fone">Telefone2:</label>
            <input name="telefone2" pattern="^\d{2}-\d{5}-\d{4}$" type="tel" class="form-control" id="fone" placeholder="telefone de contato 2">
        </div>
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