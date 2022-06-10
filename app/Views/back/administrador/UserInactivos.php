<br>
<h1>Usuarios</h1>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
           <div class="d-grid">
           <a class="btn btn-success" href="<?php echo base_url('userActivo'); ?>">Ver Usuarios Activos</a>
          </div>
      <br>
      <div class="card">
        <div class="card-header" style="color:brown ;">
          USUARIOS INACTIVOS
        </div>
        <div class="table-responsive">
          <?php echo ($user_data);die; ?>
        <?php if ($user_data) : ?>
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
                <th>Activar</th>
              </tr>
          
             
               <?php foreach ($user_data as $user) :  ?>
                
                 <tr>
                   
                    <td><?php ' . $user["id"]  . ' ?></td>   
                         <td>' . $user["nombre"] . '</td>
                         <td>' . $user["apellido"] . '</td>
                          <td>' . $user["email"] . '</td>
                          <td>' . $user["usuario"] . '</td>
                          <td>' . $user["perfil_id"] . '</td>
                          <td>' . $user["baja"] . '</td>
                    
                     <td><a href="' . base_url().'/Usuario_crud_controller/fetch_single_data/'. $user["id"] . '" class="btn btn-sm"><img src="public/assets/img/edit.svg" alt=""></a></td>
                     <td><a  href="' . base_url().'/Usuario_crud_controller/eliminacionLogica/'. $user["id"] . '"<img src="public/assets/img/user-mas.svg" alt=""></td>
              
                     </tr>';

                  <?php endforeach ; ?>
                  
            
          </table>
          <?php else : ?> 
                  <h1>NO HAY DATOS PARA MOSTRAR</h1>

         <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<br>