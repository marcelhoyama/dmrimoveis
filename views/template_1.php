

<head>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css"/>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/sidebar.css"/>
     <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/lightbox.css"/>
    <link href="<?php echo BASE_URL; ?>assets/css/normalize.css" rel="stylesheet" type="text/css">

</head>


<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
       <button type="button" id="sidebarCollapse" class="btn btn-info">
   			 <span class="navbar">Fechar/Abrir Dasboard </span>
   		</button>
        <a href="<?php echo BASE_URL; ?>home" class=" navbar-brand">| Home | </a>
        <!-- Brand and toggle get grouped for better mobile display -->

        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>

        </button>




        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav ">

<!--                <li class="nav-item active"><a class="nav-link" href="<?php echo BASE_URL; ?>cadastrarimovel">Cadastrar Imovel</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>pesquisarimoveis">Meus Anúncios </a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>menuprincipal">Menu Principal</a></li>-->


   </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" id="navbarDropdown" aria-haspopup="true" aria-expanded="false" href="#"> <?php echo $viewData['usuario_nome']; ?> </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>perfil">Editar Perfil </a>
                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>login/sair">Sair </a>
                    </div>
                </li>

            </ul>

        </div><!-- /.navbar-collapse -->

    </nav>

<div class="wrapper">
   	<nav id="sidebar">
   		<div class="sidebar-header mt-5">
   			
                    <img class="d-block img-fluid" src="<?php BASE_URL; ?>assets/images/logo.jpeg" alt="DMR imóveis">
   
   		</div>
   		
   		
   		<ul class="list-unstyled components">
   			<p>Dashboard</p>
   			<li class="active">
   				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Publicar Imóvel</a>
   				<ul class="collapse list-unstyled" id="homeSubmenu">
<!--   					<li>
   						<a href="<?php BASE_URL;?>cadastrarimovel">Cadastrar Imovel</a>
   					</li>-->
<!--   					<li>
   						<a href="<?php BASE_URL;?>pesquisarimoveis">Pesquisar</a>
   					</li>-->
   					<li>
   						<a href="#"></a>
   					</li>
   				</ul> 
   			</li>
   			
<!--   			<li>
   				<a href="#"></a>
   			</li>-->
<!--   			<li>
   				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Page</a>
   				<ul class="collapse list-unstyled" id="pageSubmenu">
   					<li>
   						<a href="#">page1</a>
   					</li>
   					<li>
   						<a href="#">page2</a>
   					</li>
   					<li>
   						<a href="#">page3</a>
   					</li>
   				</ul> 
   			</li>
   			<li>
   				<a href="#">Services</a>
   			</li>
   			<li>
   				<a href="#">Contact Us</a>
   			</li>-->
   		</ul>
   		
   		<ul class="list-unstyled CTAs">
   			<li>
   				<a href="<?php echo BASE_URL; ?>menuprincipal" class="download">Menu Principal</a>
   			</li>
   			<li>
   				<a href="<?php BASE_URL;?>pesquisarimoveis" class="article">Pesquisar Imóvel</a>
   			</li>
                        <li>
   				<a href="<?php BASE_URL;?>cadastrarimovel" class="article">Cadastrar Imóvel</a>
   			</li>
   		</ul>
   	</nav>

    <!--  aqui onde vai o corpo das paginas do sistema -->
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>



</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/additional-methods.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/localization/messages_pt_BR.min.js"></script>
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
                    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
  <footer class="navbar-dark bg-dark ">
        <div class="rodape mb-0">
            DMRIMOVEISCABREUVA © <?php echo date('Y'); ?>. Desenvolvido por <a target="_blank" href="http://www.devmg.pe.hu" title="PS-maciel Publicidade e Marketing">Marcel Hoyama</a>
        </div>
    </footer>
