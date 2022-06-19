
<br>
<br>
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
<body>
  <main>
    <div class="basket">
    <?php if ($cart == TRUE) { ?>
      <div class="basket-labels">
    
        <ul class="ull">
          <li class="item item-heading l">Item</li>
          <li class="price l">Precio</li>
          <li class="quantity l">Cantidad</li>
          <li class="subtotal l">Subtotal</li>
        </ul>

      </div>

      <div class="basket-product">
      <?php
               
               $gran_total = 0;
               $i = 1;
               foreach ($cart as $item) {
                ?>
        <div class="item">
          <div class="product-image">
            <img class="mg"  src="public/assets/img/sa1.jpg" alt="Placholder Image 2" class="product-frame">
          </div>

          <div class="product-details">
            <h1 class= "d1"><strong><span class="item-quantity"></strong> <?php echo $item['name']; ?></h1>
           
          </div>
        </div>
        <div class="price"> <?php echo number_format($item['price'], 2); ?></div>
        <div class="quantity">
        <?php echo $item['qty']; ?>
        </div>
        <div class="subtotal"><?php $gran_total = $gran_total + $item['subtotal']; ?></div>
        <td> <?php echo number_format($item['subtotal'], 2); ?></td>
       
        <div class="remove">
          <button class="utton"><a href="<?php echo base_url('Carrito_controller/eliminar_prod_carrito?rowid=' . $item['rowid']); ?>" class="btn btn-secondary">remove</button>
        </div>
      </div>

   
    </div>

    <aside>

      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total"><?php echo number_format($gran_total, 2); ?></div>
          <?php } ?>
        </div>
        <div class="summary-checkout ">
          <button  class="checkout-cta utton"> Comprar</button>
        </div>
      </div>
      <?php } ?>
    </aside>

  </main>
</body>
<?php } ?>