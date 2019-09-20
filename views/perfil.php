 
    

   <div class="container mt-5">
    
       <div class="h1 mt-5 text-center">Alterar Perfil</div>
       <form  id="perfil" method="POST" >
  
      <div class="form-group">
          
       <?php $corretor=$viewData['listcorretor'];?>
            <label for="inputNome" class="control-label" >Nome*</label></td>
            <input name="nome" type="text" id="nome" class="form-control" value="<?php echo $corretor['nome'];?>" /> 
      </div>
       <div class="form-group">
             <label class="col-sm2 control-label">Celular:</label>
             <input name="telefone" type="text" id="fone" class="form-control" value="<?php echo $corretor['telefone'];?> " />
       </div>
      <!-- <div class="form-group">
             <label>Celular*</label>
             <input name="celular" type="text" id="celular" class="form-control" value="<?php echo $corretor['celular'];?>" />
        </div> -->
      <div class="card card-body bg-secondary">
      <div class="form-group">
          <label class="text-warning">  Nova Senha* - Preencher caso queira mudar a senha</label>
              <input name="senha" type="password" id="senha" value="" class="form-control"   />
       </div>
      <div class="form-group">
              <label class="text-warning"> Repita a Senha*</label>
              <input name="resenha" type="password" id="resenha" value="" class="form-control"   />
       </div>
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
     <div class="alert alert-danger mt-3"><?php echo $erro; ?></div> 
       <?php endif; ?>
      <?php if (isset($ok) && !empty($ok)): ?>
     <div class="alert alert-success mt-3"><?php echo $ok; ?></div> 
       <?php endif; ?>
       
    </div>
   </form>
