
<title>Contato - DMR Imóveis - Negócios Imobiliários em Cabreúva</title>
<div class="container-fluid">
    <h2 class="text-center">Faça o seu cadastro e recebe as nossas noticias</h2></br>

    <form id="cadastrarcontato" class="form-group-sm" method="POST">
        <div class="form-group">
            <label for="assunto">Assunto:</label>
            <input name="assunto" type="text" class="form-control" id="assunto" >
        </div>
         <div class="form-group">
            <label for="tipoimovel">Tipo de Imovel:</label>
            <input name="tipoimovel" type="text" class="form-control" id="tipoimovel">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="digite seu nome completo">
        </div>
        <div class="row">
        <div class="col-lg-5">
        <div class="form-group">
            <label for="fonefixo">Telefone:</label>
            <input name="telefone" type="text" class="form-control" id="fonefixo" placeholder="digite seu telefone de contato">
        </div>
        </div>
            
        <div class="col-lg-5">
           <div class="form-group">
            <label for="fone">Celular:</label>
            <input name="celular" type="text" class="form-control" id="fone" placeholder="digite seu celular de contato">
        </div>
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

    <div class="form-group">
        <address class="text-info address">
            <h2>Onde nos encontrar?</h2>    
            Endereço: <?php echo $value=$viewData['endereco']; ?></br>
            Telefone fixo:   <?php echo $value = $viewData['telefone']; ?></br>
            Celular: <?php echo $value = $viewData['celular']; ?></br>
            Email: <?php echo $value = $viewData['email']; ?></br>
            Horário de Funcionamento: 
            De Segunda á Sexta das 08:30 às 18:30 
        </address>
        <hr/>
        <img src="<?php BASE_URL ?>assets/images/logo.jpeg" width="400" height="400" class="img-rounded img-responsive">


        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5184.473857684476!2d-47.06143004449243!3d-23.243937779958838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf6a25cc5e3df5fd!2sDMR+Im%C3%B3veis+Cabre%C3%BAva!5e0!3m2!1spt-BR!2sbr!4v1527996900206" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="mapamobile">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5184.473857684476!2d-47.06143004449243!3d-23.243937779958838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf6a25cc5e3df5fd!2sDMR+Im%C3%B3veis+Cabre%C3%BAva!5e0!3m2!1spt-BR!2sbr!4v1527996900206" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="mapamobile2">
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5184.473857684476!2d-47.06143004449243!3d-23.243937779958838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf6a25cc5e3df5fd!2sDMR+Im%C3%B3veis+Cabre%C3%BAva!5e0!3m2!1spt-BR!2sbr!4v1527996900206" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="mapamobile3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5184.473857684476!2d-47.06143004449243!3d-23.243937779958838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf6a25cc5e3df5fd!2sDMR+Im%C3%B3veis+Cabre%C3%BAva!5e0!3m2!1spt-BR!2sbr!4v1527996900206" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

</div>