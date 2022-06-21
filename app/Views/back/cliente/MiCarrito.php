

<br>
<br>

  
  <div  >
    <!--PRODUCTOS EN CARRITO-->
    <?php
    $session = session();
    $cart = \Config\Services::Cart();
    $cart = $cart->contents();
    if (empty($cart)) {
        echo "<br><br>";
        echo "<h1 class='text-center'> Carrito vacio </h1><br><br>";
       
        echo "<div class='d-block mx-auto'><img  class='d-block mx-auto' src='public/assets/img/a2.jpg' ><br><br></div> ";
    } else {
    ?>

</div>
<body>
  <main>
<div class="basket " class="basket-labels" style="background-color:white ;" >
    <table  style="width:100%">
        <?php if ($cart == TRUE) { ?>
            <thead >
                <tr >
                    <th>N item</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
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
                     
                        <td> <img class="img-fluid alto_min"  src="<?= base_url('public/assets/uploads/'. $item['imagen']) ?>" alt=""> </td>
                    
                        <td><?php echo $item['qty']; ?></td>

                        <td> <?php $gran_total = $gran_total + $item['subtotal']; ?>
                        <?php echo number_format($item['subtotal'], 2); ?></td>
                        <td>

                        </td>

                        <td><a href="<?php echo base_url('Carrito_controller/eliminar_prod_carrito?rowid=' . $item['rowid']); ?>" class="btn btn-secondary">Eliminar producto</td>
                    </tr>
                <?php };?>
                <td>Total compra: $<?php echo number_format($gran_total, 2); ?></td>
            </tbody>
        <?php } ?>
    </table>
<br>
<br>

    <div><a class="btn btn-danger" href="<?php echo base_url('Carrito_controller/eliminar_carrito');?>">Eliminar carrito</a></div>
 

</div>

<!-- finalizar compra -->
    <aside>
    <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Finalizar Compra</div>
        <div class="summary-subtotal">
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
     
        
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total"> <?php echo number_format($gran_total, 2); ?></div>
        </div>
        <div class="summary-checkout ">
          <a  class="checkout-cta utton mt-5" href="<?php echo base_url('Carrito_controller/guardarCompra');?>">Confirmar compra</a>
        
        </div>
      </div>
    </aside>
    

  </main>
</body>
<br>
<?php } ?>