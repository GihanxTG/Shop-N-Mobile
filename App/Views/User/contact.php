<?php require_once "header.php"; ?>

  <section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
      <div class="container">
        <h3 class="page-title">Contact Us</h3><!-- /.page-title -->

        <div class="row">
          <div class="col-sm-7">
            <p class="description">
              Duis sed odio sit amet nibh vulputate cursus a sit amet. 
            </p><!-- /.description -->
          </div>

          <div class="col-sm-5">
            <ol class="breadcrumb text-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Contact</li>
            </ol><!-- /.breadcrumb -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->





  <section class="contact-section text-center">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="item">
              <div class="item-icon"><span class="icon-phone"></span></div><!-- /.item-icon -->
              <div class="item-details">
                <h4 class="item-title">Phone</h4><!-- /.item-title -->
                <span class="details">
                  +84 3 6777 5413 (24 Hours)
                </span><!-- /.details -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item">
              <div class="item-icon"><span class="icon-map-pin"></span></div><!-- /.item-icon -->
              <div class="item-details">
                <h4 class="item-title">Address</h4><!-- /.item-title -->
                <span class="details">
                999 Nguyen Thai Son Street, Phuong 5,<br> Go Vap, Ho Chi Minh
                </span><!-- /.details -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item">
              <div class="item-icon"><span class="icon-envelope"></span></div><!-- /.item-icon -->
              <div class="item-details">
                <h4 class="item-title">Email</h4><!-- /.item-title -->
                <span class="details">
                  <a href="#">congnghia0802@gmail.com</a> /
                  <a href="#">gihan@gmail.com</a>
                </span><!-- /.details -->
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="section-padding">
          <div class="section-top">
            <h2 class="section-title">Feel Free to say Hello<span></span></h2><!-- /.section-title -->
          </div><!-- /.section-top -->

          <p class="section-description">
            Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent 
          </p><!-- /.section-description -->

          <form action="#" method="post" class="wpcf7-form contact-form">
            <div class="contact-input-fields">
              <p>
                <span class="wpcf7-form-control-wrap">
                  <label for="name">Your Name*</label>
                  <input type="text" id="name" name="name" value="" class="wpcf7-form-control" required="">
                </span>
              </p>
              <p>
                <span class="wpcf7-form-control-wrap">
                  <label for="email">Your Email*</label>
                  <input type="email" id="email" name="email" value="" class="wpcf7-form-control" required="">
                </span>
              </p>
              <p>
                <span class="wpcf7-form-control-wrap">
                  <label for="url">Your URL</label>
                  <input type="url" id="url" name="url" value="" class="wpcf7-form-control">
                </span>
              </p>
            </div><!-- /.contact-input-fields -->

            <p>
              <span class="wpcf7-form-control-wrap">
                <label for="message">Your Message*</label>
                <textarea id="message" name="message" class="wpcf7-form-control" required=""></textarea>
              </span>
            </p>

            <p class="choose-table-form"> 
              <input type="submit" value="Submit Now" class="wpcf7-form-control wpcf7-submit"> 
            </p>
          </form><!-- /.contact-form -->
        </div><!-- /.section-padding -->

        <div id="google-map">
          <div class="map-container">
            <div id="googleMaps" class="google-map-container"></div>
          </div><!-- /.map-container -->
        </div><!-- /#google-map-->

      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.contact-section -->




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