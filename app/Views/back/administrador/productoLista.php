<br>
<h1>Lista de Productos ACTIVOS</h1>

<div class="container mt-5">
  <div class="row justify-content-center">
<!------------ div que contiene al boton y a la lista de prod-------------->    
    <div class="col-md-7">
<!------------ BOTON VISTA PRODUCTOS INACTIVOS-------------->  
      <div class="d-grid">
      <a class="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" href="<?php echo base_url('prodInactivos'); ?>">Ver Productos Inactivos</a>
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
              <th>Editar</th>
              <th>Inactivar</th>
            </tr>
            <?php foreach ($prod_data as $key => $user) :?>
                <?php if($user['eliminado'] == 'NO'): ?>
                  <?php foreach ($descripcion as $key => $desc) : 
                      $bb =$user["categoria_id"];           
                      $aa = $desc["id"];
                       if ($aa == $bb) :
                        $algo = $desc["descripcion"];
                       endif; 
                      endforeach; ?>
                 <tr>
                  
                     <td><?= $user["id"] ?></td>
                      <td><?= $algo ?></td>
                     <td><img class="img-fluid alto_min"  src="<?= base_url('public/assets/uploads/'. $user["imagen"]) ?>" alt=""> </td>
                     <td><?= $user["nombreProd"] ?></td>
                     <td><?= $user["stock"] ?></td>
                     <td><?= $user["stock_min"] ?></td>
                     <td><?= $user["precio"] ?></td>
                     <td><?= $user["precio_venta"] ?></td>
                     <td><?= $user["eliminado"] ?></td>
                     <td><a href="<?php echo base_url('editar-producto/'. $user["id"] )?>" class="btn btn-sm"><img src="public/assets/img/edit.svg" alt=""></a></td>
                     <td><a  href="<?php echo base_url('eliminar-noeliminar-producto/'. $user["id"] )?>" class="btn btn-sm"><img src="public/assets/img/trash.svg" alt=""></a></td>
                </tr> 
                <?php endif; ?>
                <?php endforeach; ?>
          </table>
        </div>
      </div>
<!------------//FIN// LISTA DE PRODUCTOS-------------->       
    </div>
<!------------//FIN//div que contiene al boton y a la lista de prod-------------->    
<!------------ AGREGAR PRODUCTOS-------------->   
    <div class="col-md-4">

      <div class="card">
        <div class="card-header">
          Nuevo Producto:
        </div>
        <?php $validation = \Config\Services::validation(); ?>
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Producto_controller/guardarProd') ?>" class="p-4">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Categoria</label>
            <select name="categoria_id" class="form-control">
                            <option value="1" >sacos</option>
                            <option value="2">carteras</option>
                            <option value="3">pantalones</option>
                        </select>

             <!-- Error -->
             <?php if($validation->getError('categoria_id')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('categoria_id'); ?>
                            </div>
                        <?php }?>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Cantidad del producto</label>
            <input type="number" class="form-control" name="stock" autofocus>
            <!-- Error -->
            <?php if($validation->getError('stock')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('stock'); ?>
                            </div>
                        <?php }?>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Cantidad del producto min</label>
            <input type="number" class="form-control" name="stock_min" autofocus>
            <!-- Error -->
            <?php if($validation->getError('stock_min')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('stock_min'); ?>
                            </div>
                        <?php }?>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" name="nombreProd" autofocus>
            <!-- Error -->
            <?php if($validation->getError('nombreProd')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('nombreProd'); ?>
                            </div>
                        <?php }?>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Precio del producto</label>
            <input type="number" class="form-control" name="precio" step="0.1" autofocus>
            <!-- Error -->
            <?php if($validation->getError('precio')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('precio'); ?>
                            </div>
                        <?php }?>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Precio del producto venta</label>
            <input type="number" class="form-control" name="precio_venta" step="0.1" autofocus>
            <!-- Error -->
            <?php if($validation->getError('precio_venta')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('precio_venta'); ?>
                            </div>
                        <?php }?>
          </div>


          <div class="mb-3">
            <label  class="form-label">Imagen del producto</label>
            <input type="file" id="imagen" name='imagen' accept="image/*" multiple>
          </div>

          <div class="d-grid">
          <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                        <a class="btn btn-primary" href="<?php echo base_url('produc')?>">Cancelar</a>
                    </div>
        </form>
      </div>
    </div>
<!------------//FIN// AGREGAR PRODUCTOS-------------->  
  </div>
  </div>
</div>
<br>