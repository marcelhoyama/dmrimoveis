
<title>Contato - DMR Imóveis - Negócios Imobiliários em Cabreúva</title>
<div class="container-fluid">
    <h2 class="text-center">Ficou com Duvidas? Faça seu Cadastro, logo entraremos em contato...</h2></br>
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
    <form id="cadastrarcontato" class="form-group-sm" method="POST">
        <div class="form-group">
            <label for="assunto">Assunto:*</label>
            <select class="form-control" id="assunto"name="assunto">
            <option></option>
            <?php foreach ($viewData['listassunto'] as $assunto): { ?>
            <option value="<?php echo $assunto['nome']; ?>"><?php echo $assunto['nome'];?></option>    
            <?php } endforeach; ?>
            </select>
            
        </div>
         <div class="form-group">
            <label for="tipoimovel">Tipo de Imovel:*</label>
          
            <select class="form-control" id="tipoimovel" name="tipoimovel">
            <option></option>
            <?php foreach ($viewData['listatipoimovel'] as $tipoimovel): { ?>
            <option value="<?php echo $tipoimovel['nome']; ?>"><?php echo $tipoimovel['nome'];?></option>    
            <?php } endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="nome">Nome:*</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="digite seu nome completo">
        </div>
        <div class="row">
        <div class="col-lg-5">
        <div class="form-group">
            <label for="celular">Celular:*</label>
            <input name="celular" type="text" class="form-control" id="fone" placeholder="digite seu celular de contato">
        </div>
        </div>
            
        <div class="col-lg-5">
           <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input name="telefone" type="text" class="form-control" id="fonefixo" placeholder="digite seu telefone de contato">
        </div>
        </div>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="digite seu email">
        </div>

<div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" type="text" class="form-control" id="mensagem" placeholder="digite sua mensagem" rows="10"></textarea>
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
            Celular: <?php echo $value = $viewData['celular']; ?><span><img src="<?php BASE_URL;?>assets/images/whatsapp.png " width="30" height="30"/></span></br>
            Email: <?php echo $value = $viewData['email']; ?></br>
            Horário de Funcionamento: 
            <?php echo $value = $viewData['horario']; ?></br>
        </address>
        <hr/>
        <img src="<?php BASE_URL ?>assets/images/escritorio_frontal.jpeg" width="400" height="400" class="img-rounded img-responsive">
        <br>

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