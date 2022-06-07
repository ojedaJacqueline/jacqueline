<div class="col-md-4">
  <div class="card">
    <div class="card-header">
      Agregar Usuario:
    </div>
    <form action="" class="p-4">
      <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" name="textNombre" autofocus>
        <!-- Error -->
        <?php
        if ($validation->getError('nombre')) {
          echo "
                            <div class='alert alert-danger mt-2'>
                            " . $validation->getError('nombre') . "
                            </div>
                            ";
        }
        ?>
      </div>
      <div class="mb-3">
        <label class="form-label">Apellido
        </label>
        <input type="text" class="form-control" name="textNombre" autofocus>
        <!-- Error -->
        <?php
        if ($validation->getError('apellido')) {
          echo "
                            <div class='alert alert-danger mt-2'>
                            " . $validation->getError('apellido') . "
                            </div>
                            ";
        }
        ?>
      </div>
      <div class="mb-3">
        <label class="form-label">Usuario</label>
        <input type="text" class="form-control" name="textNombre" autofocus>
        <!-- Error -->
        <?php
        if ($validation->getError('usuario')) {
          echo "
                            <div class='alert alert-danger mt-2'>
                            " . $validation->getError('usuario') . "
                            </div>
                            ";
        }
        ?>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="textNombre" autofocus>
        <?php
        if ($validation->getError('email')) {
          echo "
                            <div class='alert alert-danger mt-2'>
                            " . $validation->getError('email') . "
                            </div>
                            ";
        }
        ?>
      </div>
      <div class="mb-3">
        <label class="form-label">Perfil</label>
        <input type="text" class="form-control" name="textNombre" autofocus>
      </div>
      <div class="d-grid">
        <input type="hidden" name="id" value="<?php echo $user_data["id"]; ?>" />
        <input type="hidden" name="oculto" value="1">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>