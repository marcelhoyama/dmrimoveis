

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
        <a href="<?php echo BASE_URL; ?>home"><span  class=" navbar-brand">DMR Imóveis </span></a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li ><span class="sr-only">(current)</span></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL; ?>cadastrarclientes">Cliente</a></li>
                    <!--<li><a href="calculo_formulario.php">Calculo</a></li>-->
                   <!-- <li><a href="<?php echo BASE_URL; ?>cadastrarinteressado">Interessado</a></li>-->
                    <li><a href="<?php echo BASE_URL; ?>cadastrarfiador">Fiador</a></li>
                    <li><a href="<?php echo BASE_URL; ?>cadastrarinquilino" >Inquilino</a></li>
                    <li role="separator" class="divider"></li>
                    <!--<li><a href="consulta_formulario.php">Consulta</a></li>-->
                    <li role="separator" class="divider"></li>
                    <!--<?php if ($_SESSION['funcao'] == 'Coordenador') { ?>
                    <li><a href="usuario_formulario.php">Usuario</a></li>
                    <?php } else { ?> <li></li> <?php } ?>-->
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesquisar <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL; ?>pesquisarclientes">Cliente</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pesquisarinteressados">Interessado</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pesquisarfiador">Fiador</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pesquisarinquilino">Inquilino</a></li>
                    <!--<li><a href="consulta_formulario.php">Consulta</a></li>-->
                    <li role="separator" class="divider"></li>
                    <li><a href="#"></a></li>
                    <!--<?php if ($_SESSION['funcao'] == 'Coordenador') { ?>
                        <li><a href="usuario_form_lista.php">Usuário</a></li>
                    <?php } else { ?> <li><a href="#"></a></li>  <?php } ?>
                    -->
                </ul>
            </li>
            <li ><a href="<?php echo BASE_URL; ?>menuprincipal">Menu <span class="sr-only"></span></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $viewData['usuario_nome']; ?>
                    <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                  <!-- <li><a href="<?php echo BASE_URL; ?>perfil">Editar Perfil </a></li> -->
                    <li><a href="<?php echo BASE_URL; ?>login/sair">Sair </a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->

</nav>



    <!--  aqui onde vai o corpo das paginas do sistema -->
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>




    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/additional-methods.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/localization/messages_pt_BR.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/validarcampos.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
<div class="rodape">
    DMRIMOVEISCABREUVA © <?php echo date('Y'); ?> Todos Direitos Reservados. Desenvolvido por Marcel Hoyama
</div>
