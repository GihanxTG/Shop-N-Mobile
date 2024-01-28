<?php require_once "header.php"; ?>
<?php 
    $dssp_view = $data["View_Product"];
    $homepage=new App\Models\ProductModel;
    $html_dssp_view=$homepage->show_products($dssp_view);
    
    
    $dssp_new = $data["New_Product"];
    $homepage=new App\Models\ProductModel;
    $html_dssp_new=$homepage->show_products($dssp_new);

?>
<section class="banner banner-11 text-left background-bg" data-image-src="">
    <div class="container">
      <div class="row">
        <img src="Public/images/home11/bannerap.jpg" alt="">

        <div class="banner-bottom text-center">
          <div class="features">
            <div class="col-sm-4">
              <div class="item megento-blue">
                <div class="item-details">
                  <span class="icon icon-hotairballoon"></span><!-- /.icon -->
                  <h3 class="item-title">Free Shipping</h3>
                  <p class="description">
                    Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec 
                  </p><!-- /.description -->
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="item megento-light-blue">
                <div class="item-details">
                  <span class="icon icon-recycle"></span><!-- /.icon -->
                  <h3 class="item-title">Refund Option</h3>
                  <p class="description">
                    Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec 
                  </p><!-- /.description -->
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="item megento-ash">
                <div class="item-details">
                  <span class="icon icon-lifesaver"></span><!-- /.icon -->
                  <h3 class="item-title">Excellent Support</h3>
                  <p class="description">
                    Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec 
                  </p><!-- /.description -->
                </div>
              </div>
            </div>
          </div>

        </div><!-- /.banner-bottom -->
      </div>
    </div>
  </section><!-- /.banner -->




  <section class="featured featured-11 text-center">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="section-top">
            <h2 class="section-title">Product<span></span></h2>
          </div><!-- /.section-top -->

          <!-- <ul class="filter">
            <li><a class="active" href="#" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".cat-1">SmartPhone</a></li>
            <li><a href="#" data-filter=".cat-2">Laptop</a></li>
            <li><a href="#" data-filter=".cat-3">Ipad</a></li>
          </ul> -->

          <div class="featured-sorting">
            <?=$html_dssp_new?>
          </div>

          </div><!-- /.featured-sorting -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.featured -->



  <section class="banner banner-11 text-left background-bg" data-image-src="">
    <div class="container">
      <div class="row">
        <img src="Public/assets/images/banner2.jpg" alt="">
      </div>
    </div>
  </section><!-- /.banner -->
  





  <section class="trending-03">
    <div class="section-padding">
      <div class="container">
        <h2 class="section-title">Trending <span></span></h2><!-- /.section-title -->

        <div class="section-details">
          <div class="row">
            <div class="trending-slider-03 text-center">

            <?=$html_dssp_view?>


            </div><!-- /.trending-slider -->
          </div><!-- /.row -->
        </div><!-- /.section-details -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.trending -->




  <section class="other-banners other-banners-09">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="item">
            <a href="#">
              <img src="Public/assets/images/Baner_apple_sale1 - Copy.jpg" alt="Banner Image">
              <!--Public/assets/images/Baner_apple_sale2.jpg
                  Public/images/home08/others/4.jpg
            -->
              <div class="item-details">
                <h3 class="item-title text-center">
                  <span></span>
                </h3>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-12">
              <div class="item">
                <a href="#">
                  <img src="Public/assets/images/brand-banner-apple.jpg" alt="Banner Image">
                  <div class="item-details">
                    <h3 class="item-title">
                      <span></span>
                    </h3>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="item">
                <a href="#">
                  <img src="Public/assets/images/banner-xiaomi-1.png" alt="Banner Image">
                  <div class="item-details">
                    <h3 class="item-title text-center">
                      <span></span>
                    </h3>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="item">
                <a href="#">
                  <img src="Public/assets/images/banner-xiaomi-2.png" alt="Banner Image">
                  <div class="item-details">
                    <h3 class="item-title">
                      <span></span>
                    </h3>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.other-banners -->

  <section class="clients-logo clients-logo-11 text-center">
    <div class="section-padding">
      <div class="container">
        <div class="row" style="display: flex; justify-content: center; align-items: center;" >
          <div class="col-sm-3">
            <div class="item"><a href="#"><img src="Public/assets/images/OPPO-Logo-Plain.jpg" alt="Brand Logo"></a></div>
          </div>
          <div class="col-sm-3">
            <div class="item"><a href="#"><img src="Public/assets/images/logo-apple.svg" alt="Brand Logo"></a></div><!-- /.item -->
          </div>
          <div class="col-sm-3">
            <div class="item"><a href="#"><img src="Public/assets/images/Xiaomi-logo-500x281.png" alt="Brand Logo"></a></div><!-- /.item -->
          </div>
          <div class="col-sm-3">
            <div class="item"><a href="#"><img src="Public/assets/images/Samsung_logo_blue.png" alt="Brand Logo"></a></div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section>

<br><br><br><br><br>


  <?php require_once "footer.php"; ?>