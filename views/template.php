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
            <div class="container-fluid">


                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="./" class="navbar-brand"> Imóveis em Cabreúva</a>
                    <a href="https://www.facebook.com/negociosemcabreuva/" class="navbar-nav"><img src="<?php BASE_URL; ?>assets/images/facebookcolor.png" width="32" height="32" style="margin-top: 8px"/></a>

                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="casa,apto,galpão">
                        </div>
                        <button type="submit" class="btn btn-default">Procurar</button>
                    </form>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="<?php BASE_URL; ?>home">HOME</a></li>
                        <li><a href="<?php BASE_URL; ?>sobre">SOBRE</a></li>
                            <li><a href="<?php BASE_URL; ?>nossosservicos">SERVIÇOS</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="menu" aria-haspopup="true" aria-expanded="false">IMÓVEIS<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="disabled"><a href="<?php BASE_URL; ?>">Todas Casas</a></li>
                                <li class="disabled"><a href="<?php BASE_URL; ?>">Todos Comercial</a></li>
                                <li class="disabled"><a href="<?php BASE_URL; ?>">Todos Apartamentos</a></li>
                                <li class="disabled"><a href="<?php BASE_URL; ?>">Todos Terrenos</a></li>
                                <li class="disabled"><a href="<?php BASE_URL; ?>">Todos Rurais</a></li>


<!--vendas-->
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="menu" aria-haspopup="true" aria-expanded="false">Venda<span class="caret"></span></a>

                                    <ul class="dropdown-submenu-right" role="menu" >    
                                        <li><a href="<?php BASE_URL; ?>vendasresidencial">Casas</a></li>
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


                    </ul>



                </div>
            </div>
        </nav>
        <!--      <?php
        $pagina = "pagina";
        if ($pagina == "pagina") {
            ?>
                                  <script>
                      
                                      $(document).ready(function () {
                                          $('#myModal').modal('show');
                                      });
                      
                                  </script>
                      
        <?php }
        ?>
        <!-- Modal --> 
        <!--    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">  <p class="text-center text-danger">Novidades! Por tempo limitado...</p></h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="thumbnail">
                                        <div class="caption">
                                            <p class="text-center">Salgados de Bar</p>
                                            <hr>
                                            <p class="text-xl-left">Risole de Palmito </p>
                                            <hr>
                                            <p class="text-left">Encomende já...</p>
    
    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="thumbnail">
                                        <div class="caption">
                                            <p class="text-center">Mini Salgados</p>
                                            <hr>
                                            <p class="text-xl-left">Mini Almofadinha de Calabresa </p>
                                            <hr>
                                            <p class="text-left">Encomende já...</p>
    
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row --> 
        <!--   </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <a href="javascript:;" onclick="pedido()"> <button type="button" class="btn btn-primary">Fazer Pedido</button></a>
           </div>
       </div>
   </div>
</div>


   <script>
function pedido(){

           $('#myModalpedido').modal('show');
       $('#myModal').modal('hide');

}
     
   </script>


        <!-- Modal -->
        <!--      <div class="modal fade" id="myModalpedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel"><p class="text-danger text-center">Nossos Contatos</p></h4>
                          </div>
                          <div class="modal-body">
                              Endereço: Avenida São Paulo, nº828 - Bairro Jacaré - Distrito Jacaré - Cabreúva/SP.
                              <p> Ao lado da Pastelaria Akio!</p></br>
      Telefone fixo:   <?php echo $value = $viewData['telefone']; ?></br>
      Celular: <?php echo $value = $viewData['celular']; ?></br>
      Email: <?php echo $value = $viewData['email']; ?></br>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </div>
                      </div>
                  </div>
              </div>
        -->

        <!--  aqui onde vai o corpo das paginas do sistema -->
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>




        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/validarcampos.js"></script>


    </body>

    <footer>
        <div class="rodape">
            IMOVEISEMCABREUVA © <?php echo date('Y'); ?> Todos Direitos Reservados. Desenvolvido por Marcel Hoyama
        </div>
    </footer>

</html>
