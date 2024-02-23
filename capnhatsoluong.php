<?php
    session_start();
    require_once "App\Config\Database.php";
    $soluong_new=$_POST["soluong_new"];
    $idproduct=$_POST["idproduct"];
    if(count($_SESSION["giohang"])>0){
        $_SESSION["giohang"][$idproduct]["Soluong"]=$soluong_new;
    }
    $html_cart='<div class="per-order-items">

                <table class="cart-table">
                  <tbody>
                    <tr class="order-head">
                      <th>PRODUCTS</th>
                      <th>UNIT PRICE</th>
                      <th>QUANTITY</th>
                      <th>SUBTOTAL</th>
                      <th></th>
                    </tr>';

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
                            
    $html_cart.='</tbody>
    </table><!-- /.cart-table -->

    <div class="cart-buttons">
      <!-- <a href="'.BASEPATH.'deletecart" class="clear-cart">Clear shopping cart</a> -->
      <a href="'.BASEPATH.'deletecart" class="clear-cart">Clear shopping cart</a>
      <!-- <button class="update-cart">Update shopping cart</button> -->
      <a href="'.BASEPATH.'product" class="continue pull-right">Continue shopping</a>
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
              <div class="amount total"><span class="currency">$</span><span class="count">'.$tongtien.'</span></div>
            </li>
          </ul>
          <a class="btn" href="'.BASEPATH.'checkout">Proceed to checkout</a>
        </div><!-- /.order-cost -->
      </div><!-- /.billing-order -->
    </div><!-- /.row -->
  </div><!-- /.billing-table -->';
    echo $html_cart;
?>