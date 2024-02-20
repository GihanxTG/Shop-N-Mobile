<?php require_once "header.php" ?>;
<?php require_once "header2.php" ?>;



  <section class="checkout-section">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2 class="title">
              Checkout method
            </h2>

            <div class="methods">
              <div class="customer-methods">
                <h4 class="checkout-title">New customer?</h4>
                <form action="#" class="method-form">
                  <div class="new-customer">
                    <input type="checkbox" name="new-customer" value="" id="new-customer" checked>
                    <label for="new-customer">Checkout as guest</label>
                    <p class="description">
                      Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                    </p><!-- /.description -->
                  </div><!-- /.new-customer -->
                  
                  <div class="registered-customer">
                    <input type="checkbox" name="registered-customer" value="" id="registered-customer">
                    <label for="registered-customer">Registered customer</label>
                  </div><!-- /.registered-customer -->

                  <input type="submit" class="btn" value="Continue">
                </form>
              </div><!-- /.customer-methods -->

              <div class="returning-customer">
                <h4 class="checkout-title">Returning customer</h4>
                <p class="description">
                  Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                </p><!-- /.description -->

                <form method="post" class="login">
                  <input type="text" class="input-text" name="username" id="username" value="" placeholder="Username / Email">
                  <input class="input-text" type="password" name="password" id="password" placeholder="Password"> 
                  <div class="clearfix"></div>       
                  <p class="rememberme pull-left">
                    <label for="rememberme" class="inline">
                      <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me       
                    </label>
                  </p>
                  <p class="lost_password pull-right">
                    <a href="#">Lost your password?</a>
                  </p>
                  <div class="clearfix"></div>  
                  <input type="submit" class="btn" name="login" value="Login">
                </form>
              </div><!-- /.returning-customer -->
            </div><!-- /.methods -->

            <div class="billing-fields">

              <h3 class="title">Billing Details</h3>

              <form action="#" method="get" accept-charset="utf-8" class="billing-form">
                <div class="row">
                  <div class="col-sm-12">
                    <input id="country_selector" type="text" placeholder="Country*">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="First Name*" value="">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Last Name*" value="">
                  </div>
                  <div class="col-sm-12">
                    <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="Company Name" value=""> 
                  </div>
                  <div class="col-sm-12">
                    <input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Address line 1*" value="">
                  </div>
                  <div class="col-sm-12">
                    <input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Address line 2*" value="">
                  </div>
                  <div class="col-sm-12">
                    <input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="Town / City*" value="">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="input-text " name="billing_state" id="billing_state" placeholder="State / Country" value="">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Postcode / Zip*" value="">
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="Email" value="">
                  </div>
                  <div class="col-md-6">
                    <input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="Phone*" value="">
                  </div>
                </div>
              </form>
            </div><!-- /.billing-fields -->

            <div class="create-new">
              <form action="#" class="new-form">
                <input type="checkbox" name="new-account" value="" id="new-account" checked>
                <label for="new-customer">Create an account</label>
                <p class="description">
                  Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                </p><!-- /.description -->

                <input class="input-text" type="password" name="password" id="password02" placeholder="Password*"> 
              </form>
            </div><!-- /.create-new -->

            <div class="alt-address">
              <form action="#" class="new-form">
                <input type="checkbox" name="new-address" value="" id="new-address">
                <label for="new-customer">Ship to a different address?</label>
                <p class="description">
                  Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                </p><!-- /.description -->

                <textarea class="input-text" name="order_note" id="order_note" placeholder="Order notes"> </textarea>
              </form>
            </div><!-- /.alt-address -->
          </div>

          <div class="col-md-5">
            <h3 class="title">Have a coupon?</h3>

            <form class="checkout_coupon" method="post">
              <p class="form-row form-row-first">
                <input type="text" name="coupon_code" class="input-text" placeholder="Enter your code" id="coupon_code" value="">
              </p>
              <p class="form-row form-row-last">
                <input type="submit" class="button btn btn-red" name="apply_coupon" value="Apply">
              </p>
            </form>

            <div id="order_review" class="woocommerce-checkout-review-order">
              <h3 class="title">Your Order</h3>

              <table class="cart-table">
                <thead>
                  <tr>
                    <th class="product-name">Product</th>
                    <th class="product-total pull-right">Total</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="cart_item">
                    <td class="product-name order-item">
                      <h3 class="item-title">Product name<span class="count"> x 1</span></h3>              
                    </td>
                    <td class="product-total pull-right">
                      <span class="amount">$49</span>           
                    </td>
                  </tr>

                  <tr class="cart_item">
                    <td class="product-name order-item">
                      <h3 class="item-title">Product name<span class="count"> x 1</span></h3>              
                    </td>
                    <td class="product-total pull-right">
                      <span class="amount">$49</span>           
                    </td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr class="cart-subtotal">
                    <th>Subtotal</th>
                    <td class="pull-right"><span class="amount">$49</span></td>
                  </tr>

                  <tr class="shipping-total">
                    <th>Shipping</th>
                    <td class="pull-right"><span class="amount">$0.00</span></td>
                  </tr>

                  <tr class="order-total">
                    <th>Order Total</th>
                    <td class="pull-right"><strong><span class="amount">$98</span></strong> </td>
                  </tr>
                </tfoot>

              </table>

              <div class="payment-method">
                <form action="#" class="payment-form">
                  <div class="bank-method">
                    <input type="checkbox" name="bank_transfer" value="" id="bank_transfer" checked>
                    <label for="new-customer">Direct bank transfer</label>
                    <p class="description">
                      Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                    </p><!-- /.description -->
                  </div><!-- /.bank-method -->

                  <div class="cheque-method">
                    <input type="checkbox" name="cheque_transfer" value="" id="cheque_transfer">
                    <label for="new-customer">Cheque payment</label>
                  </div><!-- /.cheque-method -->

                  <div class="paypal-method">
                    <input type="checkbox" name="paypal_transfer" value="" id="paypal_transfer">
                    <label for="new-customer">Paypal</label>
                  </div><!-- /.paypal-method -->

                  <div class="agreement">
                    <input type="checkbox" name="accept" value="" id="accept">
                    <label for="accept">I have read and accept the <a href="#">Terms and conditions</a></label>
                  </div><!-- /.agreement -->

                  <input type="submit" class="btn" name="submit" value="Place your order">

                </form><!-- /.payment-form -->
              </div><!-- /.payment-method -->
            </div><!-- /.order_review -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.checkout-section -->



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


  <?php require_once "footer.php" ?>;