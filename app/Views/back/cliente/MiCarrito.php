
<div>
    <!--PRODUCTOS EN CARRITO-->
    <?php
    $session = session();
    $cart = \Config\Services::Cart();
    $cart = $cart->contents();
    if (empty($cart)) {
        echo "Carrito vacio";
    
    } else {
    ?>
</div>
<div class="container mt-4   table-responsive bg-light">
    <table id="usuarios" class="table table-hover table-striped" style="width:100%">
        <?php if ($cart == TRUE) { ?>
            <thead>
                <tr>
                    <th>N item</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Img</th>
                    <th>Opcion</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                $gran_total = 0;
                $i = 1;
                foreach ($cart as $item) {
                 ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td> <?php echo $item['name']; ?></td>
                        <td> <?php echo number_format($item['price'], 2); ?></td>
                        <td><?php echo $item['qty']; ?></td>
                        <td> <?php $gran_total = $gran_total + $item['subtotal']; ?>
                        <td> <?php echo number_format($item['subtotal'], 2); ?></td>
                        <td>
                        </td>
                        <td><a href="<?php echo base_url('Carrito_controller/eliminar_prod_carrito?rowid=' . $item['rowid']); ?>" class="btn btn-secondary">Eliminar del carrito</td>
                    </tr>
                <?php };?>
                <td>Total compra: $<?php echo number_format($gran_total, 2); ?></td>
            </tbody>
        <?php } ?>
    </table>
    <div><a href="<?php echo base_url('Carrito_controller/eliminar_carrito');?>">Eliminar carrito</a></div>
 
    <div><a href="<?php echo base_url('Carrito_controller/guardarCompra');?>">Confirmar compra</a></div>
</div>
<?php } ?>