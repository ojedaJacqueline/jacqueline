
<div class="container">
   
     
        <br>
        <h1>Editar Producto</h1>
        <br>
        <div class="card">
            <div class="card-header">Editar Producto</div>
            <div class="card-body">
            <?php $validation = \Config\Services::validation();?>
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Producto_controller/edit_validation/'.$prod_data['id'])?>">
                    <div class="form-group">
                        <label>Categoria</label>

                        <select class="form-select" name="categoria_id">
                        <option value="1" >sacos</option>
                            <option value="2">carteras</option>
                            <option value="3">pantalones</option>
                       </select>

                        <!-- Error -->
                        <?php 
                   
                        ?>
                    </div>
                     <div class="form-group">
                        <label>imagen</label>
                        <img height="60px" width="60px"  src="<?= base_url('public/assets/uploads/'.$prod_data['imagen'])?>"alt="imagen de producto">
                        
                        <input type="file" id="imagen" name="imagen" class="form-control"accept="image/*" >

                        <div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>nombre Producto</label>
                        <input type="text" name="nombreProd" class="form-control" value="<?php echo $prod_data['nombreProd']; ?>">
                     <div>
                        <?php 
                        if($validation->getError('nombreProd'))
                        {
                            echo "
                            <div class='alert alert-danger mt-5'>
                            ".$validation->getError('nombreProd')."
                            </div>
                            ";
                        }
                        ?>
                         </div>

                    </div>
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input type="text" name="stock" class="form-control" value="<?php echo $prod_data['stock']; ?>">
                      <div>
                        <!-- Error -->
                        <?php 
                        if($validation->getError('stock'))
                        {
                            echo "
                            <div class='alert alert-danger mt-5'>
                            ".$validation->getError('stock')."
                            </div>
                            ";
                        }
                        ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Cantidad minima</label>
                        <input type="number" name="stock_min" class="form-control" value="<?php echo $prod_data['stock_min']; ?>">
                        <div>
                        <!-- Error -->
                        <?php 
                        if($validation->getError('stock_min'))
                        {
                            echo "
                            <div class='alert alert-danger mt-5'>
                            ".$validation->getError('stock_min')."
                            </div>
                            ";
                        }
                        ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" name="precio" class="form-control" value="<?php echo $prod_data['precio']; ?>">
                        <div>
                        <!-- Error -->
                        <?php 
                        if($validation->getError('precio'))
                        {
                            echo "
                            <div class='alert alert-danger mt-5'>
                            ".$validation->getError('precio')."
                            </div>
                            ";
                        }
                        ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Precio Venta</label>
                        <input type="number" name="precio_venta" class="form-control" value="<?php echo $prod_data['precio_venta']; ?>">
                         <div>
                        <!-- Error -->
                        <?php 
                        if($validation->getError('precio_venta'))
                        {
                            echo "
                            <div class='alert alert-danger mt-5'>
                            ".$validation->getError('precio_venta')."
                            </div>
                            ";
                        }
                        ?>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $prod_data["id"]; ?>" />
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
 <br>

