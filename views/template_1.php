

<head>

    <!-- Bootstrap -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css"/>
    <link href="<?php echo BASE_URL; ?>assets/css/normalize.css" rel="stylesheet" type="text/css">

</head>

<title>Sistema de Imoveis</title>


<!--<div class="leftmenu">
    <div class="menuarea">
        <ul>
            <li><a href="<?php BASE_URL; ?>menuprincipal">Home</a></li>
            <li><a href="calculo">Calculo</a></li>    
               
        </ul> 
    </div>
        
</div>-->
<body>
    <nav class="navbar navbar-inverse">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo BASE_URL; ?>home"><span  class=" navbar-brand">Home | </span></a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><span class="sr-only">(current)</span></li>

                <!--  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          
                      <li> </li>
                      </ul>
                  </li>   -->
                <li><a href="<?php echo BASE_URL; ?>cadastrarimovel">Cadastrar Imovel</a></li>
                <li ><a href="<?php echo BASE_URL; ?>pesquisarimoveis">Meus Anúncios <span class="sr-only"></span></a></li>
               <!-- <li><a href="<?php echo BASE_URL; ?>pesquisarinteressados">Interessado</a></li> -->

                <li ><a href="<?php echo BASE_URL; ?>menuprincipal">Menu Principal <span class="sr-only"></span></a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $viewData['usuario_nome']; ?>
                        <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL; ?>perfil">Editar Perfil </a></li> 

                    </ul>


                </li>
                <li> <a href="<?php echo BASE_URL; ?>login/sair">Sair </a></li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </nav>



    <!--  aqui onde vai o corpo das paginas do sistema -->
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>


 

   
</body>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
         
           <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/additional-methods.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/localization/messages_pt_BR.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/validarcampos.js"></script>
<div class="rodape">
    DMRIMOVEISCABREUVA © <?php echo date('Y'); ?> Todos Direitos Reservados. Desenvolvido por <a style="" href="http://www.devmg.pe.hu">Marcel Hoyama</a>

</div>
