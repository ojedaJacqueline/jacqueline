<br>
<h1>Usuarios</h1>
<?php if  ( ( session()->get('logged_in')) and session()->get('perfil_id')=='1' ) { ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-7">
      <div class="d-grid"  >
              <input type="hidden"  
              name="oculto" value="1">
              <input type="submit"
               class="btn btn-danger" value="Ver Usuarios Inactivos">
            </div>
       <br>
        <div class="card">
          <div class="card-header " style="color:darkgreen;">
            USUARIOS ACTIVOS
          </div>
          <div class="table-responsive">
                    <table class="table d-flex ">
                  
                         
                    
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Usuario</th>
                            <th>id Perfil</th>
                            <th>Baja</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
  

<?php foreach($datos as $row): ?>
  <tr class="d-flex">
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->nombre;?></td>
    <td><?php echo $row->apellido;  ?></</td>
    <td><?php echo $row->email;  ?></td>
    <td><?php echo $row->usuario;  ?></td>
    <td><?php echo $row->perfil_id;  ?></td>
    <td><?php echo $row->baja;  ?></td>
    <td> <a href="<?php echo base_url('userMod');?>"><img src="public/assets/img/edit.svg" alt=""></a></td>
    <td><a><img src="public/assets/img/user-x.svg" alt=""></a></td>
  </tr>
  <?php endforeach  ?>

                    </table>
                </div>

          






        </div>
      </div>

      <div class="col-md-4">
         <div class="card">
           <div class="card-header">
             Agregar Usuario:
           </div>
           <form action="" class="p-4" >
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
              <input type="hidden"  
              name="oculto" value="1">
              <input type="submit"
               class="btn btn-primary" value="Crear Usuario">
            </div>
           </form>              
         </div>
      </div>
    </div>
</div>



<?php } else { ?>



  <?php } ?> 


