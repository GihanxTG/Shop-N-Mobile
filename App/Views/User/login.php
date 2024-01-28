<?php require_once "header.php"; ?>


  <section class="login-section">
    <div class="section-padding">
      <div class="container">
        <div class="row" style="display: flex; justify-content: center; align-items: center;">
          <div class="col-md-5">
            <div class="sign-in bg-gray">
              <h2 class="title">Have an account? Log in</h2>
              <form class="sign-in-form" id="sign-in-form" action="#" method="post">
                <p class="form-input">
                  <input type="text" name="email" id="user_login" class="input" value="" placeholder="Email" required/>
                </p>
                <p class="form-input">
                  <input type="password" name="password" id="user_pass" class="input" value="" placeholder="Password" required/>
                </p>
                <p class="form-input">
                  <input type="submit" name="btnsubmit" id="wp-submit" class="btn" value="Sign In" />
                </p>
                <!-- <a href="<?=BASEPATH?>signup" class="form-input">
                  <input type="submit" name="btnsubmit" id="wp-submit" class="btn" value="Sign up" />
                </a> -->
                <p class="checkbox pull-left">
                  <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                  Remember Me
                  <a href="<?=BASEPATH?>signup" class="pull-right" title="Recover Your Lost Password">You don't have an account? Register</a>
                </p>
              </form>

              <div class="login-social">
                <button class="btn facebook">Sign in With Facebook</button>
                <button class="btn twitter">Sign in With Twitter</button> 
              </div><!-- /.login-social -->
            </div><!-- /.sign-in -->
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