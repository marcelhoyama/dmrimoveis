
<title>Cadastrar Imóvel - DMR Imóveis - Negócios Imobiliários em Cabreúva</title>
<div class="container-fluid">
    <h2 class="text-center">Dados</h2></br>

    <form class="form-group-sm" method="POST">
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

    <div class="form-group">
        <address class="text-info address">
            <h2>Onde nos encontrar?</h2>    
           <span class="glyphicon glyphicon-hand-right"></span> Endereço: Rua Fulano, nºsei la - Bairro Jacaré - Distrito Jacaré - Cabreúva/SP.</br>
           <span class="glyphicon glyphicon-earphone"></span> Telefone fixo:   <?php echo $value = $viewData['telefone']; ?></br>
            <span class="glyphicon glyphicon-phone-alt"></span>Celular: <?php echo $value = $viewData['celular']; ?></br>
           <span class="glyphicon glyphicon-envelope"></span> Email: <?php echo $value = $viewData['email']; ?></br>
        </address>
       
     

</div>