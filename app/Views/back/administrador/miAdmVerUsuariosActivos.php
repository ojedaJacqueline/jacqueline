<br>
<h1>Usuarios</h1>
<?php if ((session()->get('logged_in')) and session()->get('perfil_id') == '1') { ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <!------------ div que contiene al boton y a la lista de prod-------------->
      <div class="col-md-7">
        <!------------- BOTON DE USUARIOS INACTIVOS ------------------->
        <div class="d-grid">
          <a class="btn btn-danger" href="<?php echo base_url('userInactivo'); ?>">Ver Usuarios Inactivos</a>
        </div>
        <!-------------//FIN// BOTON DE USUARIOS INACTIVOS ------------------->
        <br>
        <!------------- LISTA DE USUARIOS ACTIVOS ------------------->
        <div class="card">
          <div class="card-header " style="color:darkgreen;">
            USUARIOS ACTIVOS
          </div>
          <div class="table-responsive">
            <table class="table d-flex ">
              <tr class="table-info">
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Usuario</th>
                <th>Perfil</th>
                <th>Baja</th>
                <th>Editar</th>
                <th>Inactivar</th>
              </tr>
              <?php
              if ($user_data) {
                foreach ($user_data as $user) {
                  echo '
                 <tr>
                     <td>' . $user["id"] . '</td>
                     <td>' . $user["nombre"] . '</td>
                     <td>' . $user["apellido"] . '</td>
                     <td>' . $user["email"] . '</td>
                     <td>' . $user["usuario"] . '</td>
                     <td>' . $user["perfil_id"] . '</td>
                     <td>' . $user["baja"] . '</td>
                     <td><a href="' . base_url('userMod') . $user["id"] . '" class="btn btn-sm"><img src="public/assets/img/edit.svg" alt=""></a></td>
                     <td><a href="" class="btn btn-sm"><img src="public/assets/img/bx-user-minus.svg" alt=""></a></td>
                </tr>';
                }
              }
              ?>
            </table>
          </div>
        </div>
        <!-------------//FIN// LISTA DE USUARIOS ACTIVOS ------------------->
      </div>
      <!------------//FIN//  div que contiene al boton y a la lista de prod-------------->
      <!-------------AGREGAR USUARIOS ------------------->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            Agregar Usuario:
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
              <label class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="textNombre" autofocus>
            </div>
            <div class="mb-3">
              <label class="form-label">Perfil</label>
              <input type="text" class="form-control" name="textNombre" autofocus>
            </div>
            <div class="d-grid">
              <input type="hidden" name="oculto" value="1">
              <input type="submit" class="btn btn-primary" value="Crear Usuario">
            </div>
          </form>
        </div>
      </div>
      <!-------------//FIN//AGREGAR USUARIOS ------------------->
    </div>
  </div>
  <br>


<?php } else { ?>



<?php } ?>