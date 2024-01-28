<?php require_once "header.php"; ?>


  <section class="login-section">
    <div class="section-padding">
      <div class="container">
        <div class="row" style="display: flex; justify-content: center; align-items: center;">

          <div class="col-md-7">
            <div class="sign-up">
              <h2 class="title">Get Registered <span></span></h2>

              <form class="signup-form" action="<?=BASEPATH?>signup" method="post" >
                <p class="form-input" style="width: 100%;">
                  <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Name" required>
                </p>
                <p class="form-input" style="width: 100%;">                                  
                  <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email" required>
                </p>
                <p class="form-input">
                  <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" required>
                </p>
                <p class="form-input">
                  <input type="password" name="confirm_password" class="form-control" autocomplete="off" placeholder="Confirm Password" required>
                </p>
                <?php
                  if (isset($error_message)) {
                      echo '<p class="">' . $error_message . '</p>';
                  }
                ?>
                <p class="checkbox pull-left">
                  <a href="<?=BASEPATH?>login">Do you have an account? Log in</a>
                </p>
                <p class="submit-input pull-right">
                  <input type="submit" class="btn" name="signup-form-submit" value="Sign up">
                </p>
              </form>
              <div class="login-social">
                <button class="btn facebook">Register With Facebook</button>
                <button class="btn twitter">Register With Twitter</button> 
              </div>
            </div>

          </div>
        </div><!-- /.row -->
      </div><!--/.container-->
    </div><!-- /.section-padding -->
  </section><!--/.login-section-->




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