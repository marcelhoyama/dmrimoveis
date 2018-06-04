<!DOCTYPE html> <!-- para usufruir do html5 -->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name= "viewport" content= "width=device-width, user-scalable=no" />
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
        <link rel="canonical" href="http://dmrimoveisemcabreuva.com.br/" />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css"/>
        <link href="<?php echo BASE_URL; ?>assets/css/normalize.css" rel="stylesheet" type="text/css">


    </head>

    <body>

        <nav class="navbar navbar-inverse ">
            


                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="./" class="navbar-brand"> Imóveis em Cabreúva aqui </a>
                    <a href="https://www.facebook.com/negociosemcabreuva/" class="navbar-nav"><img src="<?php BASE_URL; ?>assets/images/facebookcolor.png" width="32" height="32" style="margin-top: 8px"/></a>

                 <!--   <form class="navbar-form navbar-right" role="search" id="buscanavbar">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="casa,apto,galpão">
                        </div>
                        <button type="submit" class="btn btn-default">Procurar</button>
                    </form>-->
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="<?php BASE_URL; ?>home">HOME</a></li>
                        <li><a href="<?php BASE_URL; ?>sobre">SOBRE</a></li>
                            <li><a href="<?php BASE_URL; ?>nossosservicos">SERVIÇOS</a></li>
                             

                       <li class="dropdown" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="menu" aria-haspopup="true" aria-expanded="false" >IMÓVEIS<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                         <!--       <li class="disabled"><a href="<?php BASE_URL; ?>">Todas Casas</a></li>
                                <li class="disabled"><a href="<?php BASE_URL; ?>">Todos Comercial</a></li>
                                <li class="disabled"><a href="<?php BASE_URL; ?>">Todos Apartamentos</a></li>
                                <li class="disabled"><a href="<?php BASE_URL; ?>">Todos Terrenos</a></li>
                                <li class="disabled"><a href="<?php BASE_URL; ?>">Todos Rurais</a></li>


<!--vendas-->
                                 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="menu" aria-haspopup="true" aria-expanded="false">Venda<span class="caret"></span></a>

                                    <ul class="dropdown-submenu-right" role="menu" >    
                                        <li><a href="<?php BASE_URL; ?>vendasresidencial?tipoimovel=residencia">Casas</a></li>
                                        <li class="disabled"><a href="<?php BASE_URL; ?>">Apartamentos</a></li>
                                        <li><a href="<?php BASE_URL; ?>vendascomercial">Comerciais</a></li>
                                        <li class="disabled"><a href="<?php BASE_URL; ?>">Rurais</a></li>
                                        <li class="disabled"><a href="<?php BASE_URL; ?>">Terrenos</a></li>
                                        <li><a href="<?php BASE_URL; ?>vendasgalpao">Galpões</a></li>
                                    </ul>

                                </li>


                                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="menu" aria-haspopup="true" aria-expanded="false">Locação<span class="caret"></span></a>

                                 <ul class="dropdown-submenu-right" role="menu" >    
                                        <li><a href="#">Casas</a></li>
                                        <li><a href="#">Apartamentos</a></li>
                                        <li><a href="#">Comerciais</a></li>
                                        <li><a href="#">Rurais</a></li>
                                        <li><a href="#">Terrenos</a></li>
                                        <li class="disabled"><a href="<?php BASE_URL; ?>">Galpões</a></li>
                                    </ul>
                                      </li>






                            </ul>
                        </li>

                        <li><a href="<?php BASE_URL; ?>contato">CONTATO</a></li>
<li><a href="<?php BASE_URL; ?>menuprincipal">LOGIN</a></li>

                    </ul>



                </div>
            
        </nav>
       

        <!--  aqui onde vai o corpo das paginas do sistema -->
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>




        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/validarcampos.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
   <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/verificarendereco.js"></script>


    </body>
    <br>
    <footer>
        <div class="rodape">
            DMRIMOVEISCABREUVA © <?php echo date('Y'); ?> Todos Direitos Reservados. Desenvolvido por Marcel Hoyama
        </div>
    </footer>

</html>
