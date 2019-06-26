 
    

   <div class="container-fluid">
        <a class="btn btn-default" href="<?php BASE_URL ?>menuprincipal"> Voltar p/Menu Principal</a>

       <center><h1>Alterar Perfil</h1></center>
       <form  id="perfil" method="POST" >
  
      <div class="form-group">
          
       <?php $corretor=$viewData['listcorretor'];?>
            <label for="inputNome" class="control-label" >Nome*</label></td>
            <input name="nome" type="text" id="nome" class="form-control" value="<?php echo $corretor['nome'];?>" /> 
      </div>
       <div class="form-group">
             <label class="col-sm2 control-label">Telefone:</label>
             <input name="telefone" type="text" id="fone" class="form-control" value="<?php echo $corretor['telefone'];?> " />
       </div>
      <!-- <div class="form-group">
             <label>Celular*</label>
             <input name="celular" type="text" id="celular" class="form-control" value="<?php echo $corretor['celular'];?>" />
        </div> -->
       <div class="form-group">
           <label>  Nova Senha*</label><label class="label label-warning">Preencher caso queira mudar a senha</label>
              <input name="senha" type="password" id="senha" value="" class="form-control"   />
       </div>
      <div class="form-group">
              <label> Repita a Senha*</label>
              <input name="resenha" type="password" id="resenha" value="" class="form-control"   />
       </div>
      
       <div class="form-group">
               <label for="inputSexo" class="control-label">CRECI</label></td>
       <input name="creci" type="text" id="creci" value="<?php echo $corretor['creci'];?> " class="form-control"  /> 
       </div>
       <div class="form-group">
            <label>E-mail*:</label>
            <input name="email" type="email" id="email" value="<?php echo $corretor['email'];?> " class="form-control" required="required"  />  
        </div>
          

      
    <button type="submit" class="btn btn-success"  >Editar</button>
     
 

   <?php if (isset($erro) && !empty($erro)): ?>
     <div class="alert alert-danger"><?php echo $erro; ?></div> 
       <?php endif; ?>
       
    </div>
   </form>
