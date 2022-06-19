<br>
<br>
<div class="container">
  <div class="row no-gutters" style="background-color:white ; border-radius:30px; box-shadow: 12px 12px 22px grey">
    <!-- FOTO -->
    <div class=" col-lg-5 ">
      <img src="public\assets\img\musica.jpg" class="img-fluid" alt="" style="border-radius:30px;">
    </div>
    <!-- FOTO -->
    <!-- TABLA REGISTRO -->
    <div class=" col-lg-7 px-5 pt-5" style="width: 50%;">
      <div class="text-center col-10">
        <h1>REGISTRARSE</h1>
      </div> 
      <?php $validation = \Config\Services::validation(); ?>
      <form method="post" action="<?php echo base_url('enviar-form') ?>">
        <div class="card-body" media="(max-width:768px)">
          <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label" style="color:darkgreen ;">Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="nombre"autofocus>
            <!-- Error -->
            <?php if ($validation->getError('nombre')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('nombre'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="color:darkgreen ;">Apellido</label>
            <input type="text" name="apellido" class="form-control" placeholder="apellido">
            <!-- Error -->
            <?php if ($validation->getError('apellido')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('apellido'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="color:darkgreen ;">Correo electrónico</label>
            <input name="email" type="femail" class="form-control" placeholder="escribir correo electrónico">
            <!-- Error -->
            <?php if ($validation->getError('email')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('email'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="color:darkgreen ;">Usuario</label>
            <input tyupe="text" name="usuario" class="form-control" placeholder="usuario">
            <!-- Error -->
            <?php if ($validation->getError('usuario')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('usuario'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="color:darkgreen ;">Contraseña</label>
            <input name="password" type="password" class="form-control" placeholder="contraseña">
            <!-- Error -->
            <?php if ($validation->getError('password')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('password'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="mt-5">
          <input type="submit" value="guardar" class="btn btn-success">
          <input type="reset" value="cancelar" class="btn btn-danger">
          </div>
        </div>
      </form>
      <div class="d-grid mt-5">
        <a class="btn btn-link" href="<?php echo base_url('login'); ?>">¿ ESTAS REGISTRADO?HACE CLIC AQUÍ</a>
      </div>
       <!-- TABLA REGISTRO -->
    </div>
  </div>
</div>
<br>
<br>