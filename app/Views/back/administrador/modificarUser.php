<div class="container">
        
        <?php 

        $validation = \Config\Services::validation();


        ?>
        <h2 class="text-center mt-4 mb-4">Edit Data - Codeigniter 4 Crud Application</h2>
        
        <div class="card">
            <div class="card-header">Edit Data</div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url('Usuario_crud_controller/edit_validation'); ?>">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $user_data['nombre']; ?>">

                        <!-- Error -->
                        <?php 
                        if($validation->getError('nombre'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('nombre')."
                            </div>
                            ";
                        }
                        ?>
                    </div>
                     <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $user_data['apellido']; ?>">

                        <!-- Error -->
                        <?php 
                        if($validation->getError('apellido'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('apellido')."
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $user_data['email']; ?>">

                        <?php 
                        if($validation->getError('email'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('email')."
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $user_data['usuario']; ?>">

                        <!-- Error -->
                        <?php 
                        if($validation->getError('usuario'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('usuario')."
                            </div>
                            ";
                        }
                        ?>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Male" <?php if($user_data['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                            <option value="Female" <?php if($user_data['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                        </select>

                        <?php 
                        if($validation->getError('gender'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('gender')."
                            </div>
                            ";
                        }
                        ?>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $user_data["id"]; ?>" />
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
 


<!--  
<div class="col-md-4">
  <div class="card">
    <div class="card-header">
      Editar Usuario:
    </div>
    <form action="" class="p-4">
      <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" name="textNombre" autofocus>
      </div>
      <div class="mb-3">
        <label class="form-label">Apellido
        </label>
        <input type="text" class="form-control" name="textNombre" autofocus>
      </div>
      <div class="mb-3">
        <label class="form-label">Usuario</label>
        <input type="text" class="form-control" name="textNombre" autofocus>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="textNombre" autofocus>
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
      -->