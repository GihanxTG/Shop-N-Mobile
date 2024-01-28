<?php require_once "header.php"; ?>


  <section class="cart-section">
    <div class="section-padding">
      <div class="container">
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
              <tr>

                <td class="order-item">
                  <button class="del"><i class="ti-trash"></i></button>
                  <div class="item-thumbnail">
                    <img src="images/shop/cart/1.jpg" alt="images">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-details">
                    <h3 class="item-title">Product Name</h3>
                    <div class="product-meta">
                      <span class="meta-id"> Color: <span class="meta-about">Black</span></span>
                      <span class="meta-id"> Size: <span class="meta-about">XL</span></span>
                    </div><!-- /.product-meta -->
                  </div><!-- /.item-details -->
                </td>
                <td class="unit-price"><span class="currency">$</span><span class="price">99.00</span></td>

                <td class="order-count">
                  <div class="cart-counter">
                    <button class="item-minus"><i class="ti-minus"></i></button>
                    <span class="item-count">1</span>
                    <button class="item-plus"><i class="ti-plus"></i></button>
                  </div><!-- /.cart-counter -->
                </td>

                <td class="total-price"><span class="currency">$</span><span class="price">99.00</span></td>

                <td class="edit"><button><i class="ti-pencil"></i></button></td>
              </tr>

              <tr>
                <td class="order-item">
                  <button class="del"><i class="ti-trash"></i></button>
                  <div class="item-thumbnail">
                    <img src="images/shop/cart/2.jpg" alt="images">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-details">
                    <h3 class="item-title">Product Name</h3>
                    <div class="product-meta">
                      <span class="meta-id"> Color: <span class="meta-about">Black</span></span>
                      <span class="meta-id"> Size: <span class="meta-about">XL</span></span>
                    </div><!-- /.product-meta -->
                  </div><!-- /.item-details -->
                </td>
                <td class="unit-price"><span class="currency">$</span><span class="price">99.00</span></td>

                <td class="order-count">
                  <div class="cart-counter">
                    <button class="item-minus"><i class="ti-minus"></i></button>
                    <span class="item-count">1</span>
                    <button class="item-plus"><i class="ti-plus"></i></button>
                  </div><!-- /.cart-counter -->
                </td>

                <td class="total-price"><span class="currency">$</span><span class="price">99.00</span></td>
                <td class="edit"><button><i class="ti-pencil"></i></button></td>
              </tr>
              <tr>
                <td class="order-item">
                  <button class="del"><i class="ti-trash"></i></button>
                  <div class="item-thumbnail">
                    <img src="images/shop/cart/3.jpg" alt="images">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-details">
                    <h3 class="item-title">Product Name</h3>
                    <div class="product-meta">
                      <span class="meta-id"> Color: <span class="meta-about">Black</span></span>
                      <span class="meta-id"> Size: <span class="meta-about">XL</span></span>
                    </div><!-- /.product-meta -->
                  </div><!-- /.item-details -->
                </td>
                <td class="unit-price"><span class="currency">$</span><span class="price">99.00</span></td>

                <td class="order-count">
                  <div class="cart-counter">
                    <button class="item-minus"><i class="ti-minus"></i></button>
                    <span class="item-count">1</span>
                    <button class="item-plus"><i class="ti-plus"></i></button>
                  </div><!-- /.cart-counter -->
                </td>

                <td class="total-price"><span class="currency">$</span><span class="price">99.00</span></td>
                <td class="edit"><button><i class="ti-pencil"></i></button></td>
              </tr>
            </tbody>
          </table><!-- /.cart-table -->

          <div class="cart-buttons">
            <button class="clear-cart">Clear shopping cart</button>
            <button class="update-cart">Update shopping cart</button>
            <button class="continue pull-right">Continue shopping</button>
          </div><!-- /.cart-buttons -->
        </div><!-- /.per-order-items -->

        <div class="billing-table">   
          <div class="row">
            <div class="discount-details col-md-4 col-sm-6">
              <h3 class="title">Have a cupon?</h3>
              <form action="#">
                <input class="form-input" type="text" placeholder="Cupon Code">
                <button type="submit" class="btn submit-code">Apply Code</button>
              </form>
            </div><!-- /.discount-details -->

            <div class="shipping-details col-md-4 col-sm-6">
              <h3 class="title">Calculating Shipping</h3>
              <form action="#">
                  <select name="country" id="Country-name" class="form-input">
                    <option value="">Country*</option>
                    <option value="1">USA</option>
                    <option value="2">Franch</option>
                    <option value="3">Germany</option>
                    <option value="4">Russia</option>
                  </select>

                  <select name="country" id="state-province" class="form-input">
                    <option value="">State/Province*</option>
                    <option value="1">Florida</option>
                    <option value="2">NY</option>
                    <option value="3">LA</option>
                    <option value="4">PH</option>
                  </select>

                  <input id="zip-code" class="form-input" type="text" placeholder="Post/Zip Code" required="">

                  <button class="btn btn-xs" type="submit">Estimate</button>

              </form>
            </div><!-- /.shipping-details -->

            <div class="billing-order col-md-4 col-sm-6">
              <div class="order-cost">
                <ul>
                  <li>
                    <div class="bill-name">Sub-total</div>
                    <div class="amount"><span class="currency">$</span><span class="count">395.00</span></div>
                  </li>
                  <li>
                    <div class="bill-name">Shipping</div>
                    <div class="amount"><span class="currency">$</span><span class="count">25.00</span></div>
                  </li>
                  <li>
                    <div class="bill-name total">Order Total</div>
                    <div class="amount total"><span class="currency">$</span><span class="count">370.00</span></div>
                  </li>
                </ul>
                <button class="btn">Proceed to checkout</button>
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