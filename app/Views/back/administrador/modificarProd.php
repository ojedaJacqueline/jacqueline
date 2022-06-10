
<div class="container">
   
        <?php $validation = \Config\Services::validation();
        ?>
        <br>
        <h1>Editar Producto</h1>
        <br>
        <div class="card">
            <div class="card-header">Editar Producto</div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url('Producto_controller/edit_validation'); ?>">
                    <div class="form-group">
                        <label>Categoria</label>
                        <input type="text" name="categoria_id" class="form-control" value="<?php echo $user_data['categoria_id']; ?>">

                        <!-- Error -->
                        <?php 
                        if($validation->getError('categoria_id'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('categoria_id')."
                            </div>
                            ";
                        }
                        ?>
                    </div>
                     <div class="form-group">
                        <label>imagen</label>
                        <input type="file" name="" class="form-control" value="<?php echo $user_data['imagen']; ?>">

                        <!-- Error -->
                        <?php 
                        if($validation->getError('imagen'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('imagen')."
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>nombre Producto</label>
                        <input type="text" name="nombreProd" class="form-control" value="<?php echo $user_data['nombreProd']; ?>">

                        <?php 
                        if($validation->getError('nombreProd'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('nombreProd')."
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input type="text" name="stock" class="form-control" value="<?php echo $user_data['stock']; ?>">

                        <!-- Error -->
                        <?php 
                        if($validation->getError('stock'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('stock')."
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Cantidad minima</label>
                        <input type="number" name="stock_min" class="form-control" value="<?php echo $user_data['stock_min']; ?>">

                        <!-- Error -->
                        <?php 
                        if($validation->getError('stock_min'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('stock_min')."
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" name="precio" class="form-control" value="<?php echo $user_data['precio']; ?>">

                        <!-- Error -->
                        <?php 
                        if($validation->getError('precio'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('precio')."
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Precio Venta</label>
                        <input type="number" name="precio_venta" class="form-control" value="<?php echo $user_data['precio_venta']; ?>">

                        <!-- Error -->
                        <?php 
                        if($validation->getError('precio_venta'))
                        {
                            echo "
                            <div class='alert alert-danger mt-2'>
                            ".$validation->getError('precio_venta')."
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $user_data["id"]; ?>" />
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
 <br>

