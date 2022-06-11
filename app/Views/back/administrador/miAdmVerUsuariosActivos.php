<br>
<h1>Usuarios ACTIVOS</h1>
<?php if ((session()->get('logged_in')) and session()->get('perfil_id') == '1') { ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <!------------ div que contiene al boton y a la lista de prod-------------->
      <div class="col-md-7">
        <!------------- BOTON DE USUARIOS INACTIVOS ------------------->
        <div class="d-grid">
          <a class="btn btn-info" style="color:white ;" href="<?php echo base_url('crear-usuario'); ?>">CREAR USUARIO</a>
        </div>
        <br>
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
              <?php foreach ($user_data as $key => $user) :?>
                <?php if($user['baja'] == 'NO'): ?>
                 <tr>
                     <td> <?= $user["id"] ?></td>
                     <td><?= $user["nombre"] ?></td>
                     <td><?= $user["apellido"] ?></td>
                     <td><?= $user["email"] ?></td>
                     <td><?= $user["usuario"] ?></td>
                     <td><?= $user["perfil_id"] ?></td>
                     <td><?= $user["baja"] ?></td>
                     <td><a href="<?php echo base_url('editar-usuario/'. $user["id"] )?>" class="btn btn-sm"><img src="public/assets/img/edit.svg" alt=""></a></td>
                     <td><a  href="<?php echo base_url('activado-usuario/'. $user["id"] )?>" class="btn btn-sm"><img src="public/assets/img/bx-user-minus.svg" alt=""></a></td>
                </tr> 
                <?php endif; ?>
                <?php endforeach; ?>
            </table>
          </div>
        </div>
        <!-------------//FIN// LISTA DE USUARIOS ACTIVOS ------------------->
      </div>
      <!------------//FIN//  div que contiene al boton y a la lista de prod-------------->
    </div>
  </div>
  <br>


<?php } else { ?>



<?php } ?>