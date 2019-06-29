
<title>Cadastrar Fiador</title>
<div class="container-fluid">
    <a class="btn btn-default" href="<?php BASE_URL ?>menuprincipal"> Voltar p/Menu Principal</a>
    <h2 class="text-center">Cadastro de Fiador</h2></br>
    
    <form id="cadastrarfiador" class="form-group-sm" method="POST">
          <div class="form-group">
              <label for="cpf">CPF*: </label><label class="text-danger"> (campo obrigatório!)</label>
            <input name="cpf" type="text" class="form-control" id="cpf" placeholder="somente numeros">
        </div>
        <div class="form-group">
            <label for="rg">RG:</label>
            <input name="rg" type="text" class="form-control" id="rg" placeholder="digite seu RG">
        </div>
        <div class="form-group">
            <label for="nome">Nome*: </label><label class="text-danger "> (campo obrigatório!)</label>

            <input name="nome" type="text" class="form-control" id="nome" placeholder="digite seu nome completo">
        </div>
        <div class="row" > 
        <div class="form-group col-sm-6">
            
            <label for="fone">Telefone Celular*: </label><label class="text-danger"> (campo obrigatório!)</label>
            <input name="telefone" type="tel" class="form-control" id="fone" placeholder="telefone de contato 1">
        </div>
          <div class="form-group col-sm-6">
            <label for="fone">Telefone Fixo:</label>
            <input name="telefone2" type="tel" class="form-control" id="fonefixo" placeholder="telefone de contato 2">
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