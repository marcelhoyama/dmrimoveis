<title>Esqueci Senha</title>
<link href="<?php echo BASE_URL; ?>assets/css/login.css" rel="stylesheet">
   
      <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css"/>
        <link href="<?php echo BASE_URL; ?>assets/css/normalize.css" rel="stylesheet" type="text/css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Esqueceu a senha?</h2>
                  <p>Voce pode redefinir a senha aqui.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email" class="form-control"  type="email" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="redefinir_senha" class="btn btn-lg btn-primary btn-block" value="Redefinir" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
 <style>
     .form-gap {
    padding-top: 70px;
}
 </style>


     
     <?php if (!empty($erro)): ?>
     <div class="warning"><?php echo $erro; ?></div> 
       <?php endif; ?>
 

