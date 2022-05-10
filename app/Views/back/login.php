<div class="container mt-1 mb-0">
	<div class="card" style="width: 50%;" >
		<div class= "card-header text-center">
			<h2>Login</h2>
		</div>
	
 <?php $validation=\Config\Services::validation(); ?>
     <form method="post" action="<?php echo base_url('enviar-form') ?>">
 
<div class ="card-body" media="(max-width:768px)">
	<div class="mb-2">
 	 <label for="exampleFormControlInput1" class="form-label">Usuario</label>
 	 <input name="usuario" type="text"  class="form-control" placeholder="usuario" >
     <!-- Error -->
        <?php if($validation->getError('usuario')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('usuario'); ?>
            </div>
        <?php }?>
	</div>
	<div class="mb-3">
 	 <label for="exampleFormControlTextarea1" class="form-label">password</label>
 	  <input type="text" name="password"class="form-control" placeholder="password" >
 	  <!-- Error -->
        <?php if($validation->getError('password')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('password'); ?>
            </div>
        <?php }?>
    </div>
    
 

 	         <input type="submit" value="guardar" class="btn btn-success">
 	          <input type="reset" value="cancelar" class="btn btn-danger">
 	    
 </div>
</form>
</div>
</div>