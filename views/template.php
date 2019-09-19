<!DOCTYPE html> <!-- para usufruir do html5 -->
<html lang="pt-br">
 
      <?php $this->loadViewInTemplate_meta($viewName, $viewData); ?>

        <!-- Bootstrap -->
        <!-- Última versão CSS compilada e minificada -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css"/>
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/lightbox.css"/>
        <link href="<?php echo BASE_URL; ?>assets/css/normalize.css" rel="stylesheet" type="text/css">


    </head>

    <body>
       
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">

                        <a class="navbar-brand" href="./" id="navbar-titulo" class="navbar-brand"> Imóveis em Cabreúva aqui </a>
                    <a href="https://www.facebook.com/dmrimoveiscabreuva/" id="navbar-icone-facebook"><img src="<?php BASE_URL; ?>assets/images/facebookcolor.png" width="32" height="32" style="margin-top: 8px"/></a>


                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Alterna Navegação">
                        <span class="navbar-toggler-icon" id="#bs-example-navbar-collapse-1"></span>
                      
                    </button>

            


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active"><a class="nav-link" href="<?php BASE_URL; ?>home">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php BASE_URL; ?>sobre">SOBRE</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php BASE_URL; ?>nossosservicos">SERVIÇOS</a></li>


                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" >LOCAÇÃO</a>
                            <div class="dropdown-menu" aria-labelledby-="navbarDropdown">
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanuncioaluga?tipoimovel=Residencial">Residencial</a>
                               <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanuncioaluga?tipoimovel=Comercial">Comercial</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanuncioaluga?tipoimovel=Galpão">Galpão</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanuncioaluga?tipoimovel=Apartamento">Apartamentos</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanuncioaluga?tipoimovel=Terreno">Terrenos</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanuncioaluga?tipoimovel=Sitio">Sitio</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanuncioaluga?tipoimovel=Chacara">Chacara</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanuncioaluga?tipoimovel=Fazenda">Fazenda</a>
                           
                            </div>
                        </li>
                        <li class="nav-item dropdown" >
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" >VENDA</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanunciovenda?tipoimovel=Residencial">Residencial</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanunciovenda?tipoimovel=Comercial">Comercial</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanunciovenda?tipoimovel=Galpão">Galpão</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanunciovenda?tipoimovel=Apartamento">Apartamentos</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanunciovenda?tipoimovel=Terreno">Terrenos</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanunciovenda?tipoimovel=Sitio">Sitio</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanunciovenda?tipoimovel=Chacara">Chacara</a>
                                <a class="dropdown-item" href="<?php BASE_URL; ?>paginaanunciovenda?tipoimovel=Fazenda">Fazenda</a>
                            </div>
                            
                        </li>
                        <li class="nav-item"><a   class="nav-link" href="<?php BASE_URL; ?>contato">CONTATO</a></li>
                        <li class="nav-item"><a  class="nav-link" href="<?php BASE_URL; ?>login">LOGIN</a></li>
                        <li class="nav-item"><a  class="nav-link" href="https://webmail1.hostinger.com.br/">WEBMAIL</a></li>

                   


                </ul>
                </div>

            </nav>
        
        
        <!--  aqui onde vai o corpo das paginas do sistema -->
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

      
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
   
    
   <!-- <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/lightbox-plus-jquery.min.js"></script>-->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/additional-methods.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/localization/messages_pt_BR.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/validarcampos.js"></script>
 <script>
                   $(function () {
  $('[data-toggle="popover"]').popover()
})
   $('.popover-dismiss').popover({
  trigger: 'focus'
})
                    </script>
    <br>
    <footer class="navbar-dark bg-dark">
        <div class="rodape mb-0">
            DMRIMOVEISCABREUVA © <?php echo date('Y'); ?>. Desenvolvido por <a target="_blank" href="http://www.devmg.pe.hu" title="PS-maciel Publicidade e Marketing">Marcel Hoyama</a>
        </div>
    </footer>

</html>
