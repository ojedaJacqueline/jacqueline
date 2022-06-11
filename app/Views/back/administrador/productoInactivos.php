<br>
<h1>Lista de Productos INACTIVOS</h1>

<div class="container mt-5">
  <div class="row justify-content-center">
<!------------ div que contiene al boton y a la lista de prod-------------->    
    <div class="col-md-7">
<!------------ BOTON VISTA PRODUCTOS INACTIVOS-------------->  
      <div class="d-grid">
      <a class="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" href="<?php echo base_url('produc'); ?>">Ver Productos Activos</a>
      </div>
      <br>
<!------------//FIN// BOTON VISTA PRODUCTOS INACTIVOS-------------->
<!------------ LISTA DE PRODUCTOS-------------->
      <div class="card">
        <div class="card-header"style="color:darkgreen;">
          PRODUCTOS ACTIVOS
        </div>
        <div class="table-responsive">
          <table class="table d-flex ">
            <tr class="table-success">
              <th>Id</th>
              <th>Categoria</th>
              <th>Imagen</th>
              <th>Nombre</th>
              <th>Cantidad</th>
              <th>Cantidad min</th>
              <th>Precio</th>
              <th>Precio Venta</th>
              <th>Baja</th>
              <th>Activar</th>
            </tr>
            <?php foreach ($prod_data as $key => $user) :?>
                <?php if($user['eliminado'] == 'SI'): ?>
                 <tr>
                     <td> <?= $user["id"] ?></td>
                     <td><?= $user["categoria_id"] ?></td>
                     <td><?= $user["imagen"] ?></td>
                     <td><?= $user["nombreProd"] ?></td>
                     <td><?= $user["stock"] ?></td>
                     <td><?= $user["stock_min"] ?></td>
                     <td><?= $user["precio"] ?></td>
                     <td><?= $user["precio_venta"] ?></td>
                     <td><?= $user["eliminado"] ?></td>
                     <td><a  href="<?php echo base_url('eliminar-noeliminar-producto/'. $user["id"] )?>" class="btn btn-sm"><img src="public/assets/img/trash1.svg" alt=""></a></td>
                </tr> 
                <?php endif; ?>
                <?php endforeach; ?>
          </table>
        </div>
      </div>
<!------------//FIN// LISTA DE PRODUCTOS-------------->       
    </div>
<!------------//FIN//div que contiene al boton y a la lista de prod-------------->    

  </div>
</div>
<br>