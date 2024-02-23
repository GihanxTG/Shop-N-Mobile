<?php require_once "header.php"; ?>
<?php
  $html_cart="";
  $tongtien=0;
  if(count($_SESSION["giohang"])>0){
    foreach ($_SESSION["giohang"] as $item) {
      $tt=$item["Soluong"]*$item["price"];
      $tongtien+=$tt;
      $html_cart.='<tr>

                    <td class="order-item">
                      
                      <div class="item-thumbnail">
                        <img src="Public/assets/images/'.$item["image"].'" alt="images">
                      </div><!-- /.item-thumbnail -->

                      <div class="item-details">
                        <h3 class="item-title">'.$item["product_name"].'</h3>
                      </div><!-- /.item-details -->
                    </td>
                    <td class="unit-price"><span class="currency">$</span><span class="price">'.$item["price"].'</span></td>

                    <td class="order-count">
                      <div class="cart-counter">
                        <button type="button" onclick="giamsoluong(this)" class="item-minus"><i class="ti-minus"></i></button>
                        <input type="text" onkeyup="kiemtrasoluong(this)" class="item-count" value="'.$item["Soluong"].'" placeholder="">
                        <button onclick="tangsoluong(this)" class="item-plus"><i class="ti-plus"></i></button>
                        <input type="hidden" value="'.$item["product_id"].'">
                        </div><!-- /.cart-counter -->
                    </td>

                    <td class="total-price"><span class="currency">$</span><span class="price">'.$tt.'</span></td>

                    <td class="edit"><a href="'.BASEPATH.'deleteproduct/'.$item["product_id"].'" class="del"><i class="ti-trash"></i></a></td>
                  </tr>';
    }
    
  }
?>

  <section class="cart-section">
    <div class="section-padding">
      <div class="container" id="cart">
        <div class="per-order-items">

          <table class="cart-table">
            <tbody>
              <tr class="order-head">
                <th>PRODUCTS</th>
                <th>UNIT PRICE</th>
                <th>QUANTITY</th>
                <th>SUBTOTAL</th>
                <th></th>
              </tr>
              <?=$html_cart?>
            </tbody>
          </table><!-- /.cart-table -->

          <div class="cart-buttons">
            <!-- <a href="<?=BASEPATH?>deletecart" class="clear-cart">Clear shopping cart</a> -->
            <a href="<?=BASEPATH?>deletecart" class="clear-cart">Clear shopping cart</a>
            <!-- <button class="update-cart">Update shopping cart</button> -->
            <a href="<?=BASEPATH?>product" class="continue pull-right">Continue shopping</a>
          </div><!-- /.cart-buttons -->
        </div><!-- /.per-order-items -->

        <div class="billing-table">   
          <div class="row" style="display: flex; justify-content: end; align-items: center;">

            <div class="billing-order col-md-4 col-sm-6">
              <div class="order-cost">
                <ul>
                  <!-- <li>
                    <div class="bill-name">Sub-total</div>
                    <div class="amount"><span class="currency">$</span><span class="count">395.00</span></div>
                  </li>
                  <li>
                    <div class="bill-name">Shipping</div>
                    <div class="amount"><span class="currency">$</span><span class="count">25.00</span></div>
                  </li> -->
                  <li>
                    <div class="bill-name total">Order Total</div>
                    <div class="amount total"><span class="currency">$</span><span class="count"><?=$tongtien?></span></div>
                  </li>
                </ul>
                <button class="btn" onclick="window.location='<?=BASEPATH?>checkout'">Proceed to checkout</button>
              </div><!-- /.order-cost -->
            </div><!-- /.billing-order -->
          </div><!-- /.row -->
        </div><!-- /.billing-table -->
      </div><!-- /.contaier -->
    </div><!-- /.section-padding -->
  </section><!-- /.cart-section -->



  <section class="subscribe-03 background-bg" data-image-src="images/home07/subscribe.jpg">
    <div class="container">
      <div class="subscribe-details">
        <div class="row">
          <div class="col-sm-5">
            <div class="section-top">
              <h3 class="section-title">Stay up to date <span></span></h3><!-- /.section-title -->
            </div>
          </div>
          <div class="col-sm-7">
            <form class="subscribe-form" action="#">
              <input class="form-control" type="email" placeholder="myemail@email.com">
              <input class="btn btn-subscribe" type="submit" value="Subscribe">
            </form>
          </div>
        </div><!-- /.row -->
      </div><!-- /.subscribe-details -->
    </div><!-- /.section-padding -->
  </section>

  <?php require_once "footer.php"; ?>