
<br>
<br>

        <h1>AGREGAR USUARIO</h1>
<div class="row justify-content-center">
  
    <!-- TABLA REGISTRO -->
    <div style="width: 50%;">
    <div class="card">
    <div class="card-header">
            Crear Usuario:
          </div>
      <?php $validation = \Config\Services::validation(); ?>
      <form method="post" action="<?php echo base_url('enviar') ?>">
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
            <input name="email" type="femail" class="form-control" placeholder="ejemplo@gmail.com">
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
          <input type="submit" value="crear usuario" class="btn btn-success">
          <input type="reset" value="cancelar" class="btn btn-danger">
        </div>
    
      </form>
      </div>
       <!-- TABLA REGISTRO -->
       </div>
</div>
</div>
<br>
<br>