<?php require_once "header.php"; ?>
<?php

  $dssp_SPTT = $data["SPTT_Product"];
  $prodetailpage=new App\Models\ProductModel;
  $html_dssp_tt_product=$prodetailpage->show_products($dssp_SPTT);

  extract($data["DetailSP"]);
?>



  <section class="shop-contents">
    <div class="section-padding">
      <div class="container">
        <div class="product-details">

          <div class="post-navigation text-center">
            <a class="post-prev" href="shop-details-01.html"><i class="ti-arrow-left"></i></a>
            <a class="post-next" href="shop-details-01.html"><i class="ti-arrow-right"></i></a>
          </div><!-- /.post-navigation -->

          <div class="row">
            <div class="col-md-6">
              <div class="item-gallery vertical">                    
                <div class="tabs">
                  <div role="tabpanel" class="tabpanel">

                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane in active" id="item1">
                        <img src="<?=BASEPATH?>Public/assets/images/<?=$AnhSP?>" alt="<?=$TenSP?>"> 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item2">
                        <img src="<?=BASEPATH?>Public/assets/images/mbp_14_16.png" alt="<?=$TenSP?>"> 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item3">
                        <img src="<?=BASEPATH?>Public/assets/images/mbp_14_16.png" alt="<?=$TenSP?>"> 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item4">
                        <img src="<?=BASEPATH?>Public/assets/images/mbp_14_16.png" alt="<?=$TenSP?>"> 
                      </div>
                    </div><!-- /.tab-content -->

                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#item1" aria-controls="item1" role="tab" data-toggle="tab" aria-expanded="true"><img src="<?=BASEPATH?>Public/assets/images/mbp_14_16.png" alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item2" aria-controls="item2" role="tab" data-toggle="tab" aria-expanded="false"><img src="<?=BASEPATH?>Public/assets/images/mbp_14_16.png" alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item3" aria-controls="item3" role="tab" data-toggle="tab" aria-expanded="true"><img src="<?=BASEPATH?>Public/assets/images/mbp_14_16.png" alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item4" aria-controls="item4" role="tab" data-toggle="tab" aria-expanded="true"><img src="<?=BASEPATH?>Public/assets/images/mbp_14_16.png" alt="Product Image"></a></li>
                    </ul><!-- /.nav-tabs -->

                  </div>
                </div><!-- /.item-gallery -->
              </div>
            </div>

            <div class="col-md-6">
              <div class="about-product">
                <h3 class="item-title"><?=$TenSP?></h3>
                <div class="top-meta">
                  <a href="#"><?=$ViewSP?> View</a>
                  <a href="#">Write a review</a>
                </div><!-- /.top-meta -->

                <div class="availability">
                  <button>In Stock<i class="ti-check-box"></i></button>
                </div><!-- /.availability -->

                <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                <div class="item-price">
                  <div class="current-price"><span class="currency">$</span><span class="price"><?=$GiaSP?></span></div><!-- /.current-price -->
                  <!-- <div class="previous-price"><span class="currency">$</span><span class="price">1499</span></div>  /.previous-price -->
                </div><!-- /.item-price -->

                <div class="cart-counter">
                  <button id="item-plus" class="item-plus"><i class="ti-plus"></i></button>
                  <span id="count" class="count">0</span>
                  <button id="item-minus" class="item-minus"><i class="ti-minus"></i></button>
                </div><!-- /.cart-counter -->

                <select data-select-like-alignement="never" class="color drop-select">
                  <option value="">Color</option>
                  <option value="2">White</option>
                  <option value="3">Gray</option>
                  <option value="4">Red</option>
                  <option value="5">Blue</option>
                </select>

                <select data-select-like-alignement="never" class="size drop-select">
                  <option value="">Size</option>
                  <option value="2">S</option>
                  <option value="3">M</option>
                  <option value="4">L</option>
                  <option value="5">XL</option>
                  <option value="5">XXL</option>
                </select>

                <p class="description"><?=$MotaSP?></p><!-- /.short-description -->

                <div class="buttons">
                  <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                  <button class="wish-list"><i class="fa fa-heart"></i></button>
                </div>

                <div class="product-meta">
                  <span class="meta-id">Product ID : <span class="meta-about">0013459870</span></span>
                  <span class="meta-id">Category : <span class="meta-about"><a href="#">Mockup</a><a href="#">Design</a></span></span>
                  <span class="meta-id">Tags : <span class="meta-about"><a href="#">Mockup</a>,<a href="#">Design</a>,<a href="#">Photoshop</a></span></span>
                </div><!-- /.product-meta -->

                <div class="product-social">
                  <a href="#"><i class="ti-twitter-alt"></i></a>
                  <a href="#"><i class="ti-facebook"></i></a>
                  <a href="#"><i class="ti-pinterest-alt"></i></a>
                  <a href="#"><i class="ti-google"></i></a>
                </div><!-- /.product-social -->
              </div><!-- /.about-product -->
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="product-tabs">
            <div class="tabs">
              <div role="tabpanel">

                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class=""><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" aria-expanded="true">Descripton</a></li>
                  <li role="presentation" class="active"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" aria-expanded="false">Review (<span class="count">14</span>)</a></li>
                  <li role="presentation" class=""><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab" aria-expanded="true">Tags (<span class="count">22</span>)</a></li>
                </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade" id="tab1">
                    <p class="description">
                      <strong>Painting between Giotto and Masaccio existed in vain on the contrary, considerable progress was made in the direction of landscape, perspective and facial expression is true that, excepting the works masterpiece produced.</strong>
                      <br><br>
                      Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. 
                    </p><!-- /.description -->
                    <br><br>

                    <ul>
                      <li>Energistically evisculate high-quality products with.</li>
                      <li>Energistically customize performance based architectures.</li>
                      <li>Seamlessly actualize top-line e-commerce whereas.</li>
                    </ul>

                    <ul>
                      <li>Energistically evisculate high-quality products with.</li>
                      <li>Energistically customize performance based architectures.</li>
                      <li>Seamlessly actualize top-line e-commerce whereas.</li>
                    </ul> 
                    <br><br>
                    <p>
                      Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. 
                    </p><!-- /.description -->
                  </div><!-- /.tab-pane -->

                  <div role="tabpanel" class="tab-pane fade in active" id="tab2">
                    <div class="review parent media">
                      <div class="author-avatar media-left">
                        <img src="<?=BASEPATH?>Public/assets/images/avatar-user.jpg" alt="Author Avatar">
                      </div><!-- /.author-avatar -->

                      <div class="review-top media-body">
                        <h4 class="author-name">
                          <a href="#">Anna Ward</a>
                        </h4><!-- /.author-name -->

                        <div class="meta-info">
                          <span>
                            <time datetime="2016-06-06 21:33">5 June, 2016 at 21:33 </time>
                          </span>
                          <span>
                            <a href="#" class="reply">Reply</a>
                          </span>
                        </div><!-- /.meta-info -->

                        <div class="rating">
                          <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                        </div><!-- /.rating -->
                      </div><!-- /.review-top -->
                      <p class="description">
                        In short, I scarcely could realise it more, and in real life I should scarcely realise it so well, the attention of each of us being too apt to concentrate itself upon some dynamic quality
                        Then what strength to his young men, and what gravity and power to his old! How quickly a race like this would possess itself of the earth, and brook no rivals but the forces of nature! Whatever they do simply because it is they is impressive and important, and every movement, every gesture, is world changing
                      </p> 

                      <div class="review children media">
                        <div class="author-avatar media-left">
                          <img src="<?=BASEPATH?>Public/assets/images/avatar-user.jpg" alt="Author Avatar">
                        </div><!-- /.author-avatar -->

                        <div class="review-top media-body">
                          <h4 class="author-name">
                            <a href="#">Melissa Ramirez</a>
                          </h4><!-- /.author-name -->

                          <div class="meta-info">
                            <span>
                              <time datetime="2016-06-06 21:33">5 June, 2016 at 21:33 </time>
                            </span>
                            <span>
                              <a href="#" class="reply">Reply</a>
                            </span>
                          </div><!-- /.meta-info -->

                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->
                        </div><!-- /.review-top -->
                        <p class="description">
                          Then what strength to his young men, and what gravity and power to his old! How quickly a race like this would possess itself of the earth, and brook no rivals but the forces of nature! Whatever they do simply because it is they is impressive and important, and every movement, every gesture, is world changing
                        </p> 
                      </div><!-- /.review -->
                    </div><!-- /.review -->

                    <div class="review parent media">
                      <div class="author-avatar media-left">
                        <img src="<?=BASEPATH?>Public/assets/images/avatar-user.jpg" alt="Author Avatar">
                      </div><!-- /.author-avatar -->

                      <div class="review-top media-body">
                        <h4 class="author-name">
                          <a href="#">Sara Beck</a>
                        </h4><!-- /.author-name -->

                        <div class="meta-info">
                          <span>
                            <time datetime="2016-06-06 21:33">5 June, 2016 at 21:33 </time>
                          </span>
                          <span>
                            <a href="#" class="reply">Reply</a>
                          </span>
                        </div><!-- /.meta-info -->

                        <div class="rating">
                          <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                        </div><!-- /.rating -->
                      </div><!-- /.review-top -->
                      <p class="description">
                        In short, I scarcely could realise it more, and in real life I should scarcely realise it so well, the attention of each of us being too apt to concentrate itself upon some dynamic quality
                        Then what strength to his young men, and what gravity and power to his old! How quickly a race like this would possess itself of the earth, and brook no rivals but the forces of nature! Whatever they do simply because it is they is impressive and important, and every movement, every gesture, is world changing
                      </p> 
                    </div><!-- /.review -->

                  </div><!-- /.tab-pane -->

                  <div role="tabpanel" class="tab-pane fade" id="tab3">

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.tab-panel -->
            </div><!-- /.tabs -->
          </div><!-- /.product-tabs --> 
        </div><!-- /.product-details -->

        <div class="add-review">
          <h3 class="title">Add a review</h3><!-- /.title -->

          <div class="review-form">
            <form action="#" method="post" class="wpcf7-form">
              <div class="review-input-fields">
                <p>
                  <span class="wpcf7-form-control-wrap">
                    <label for="name">Your Name*</label>
                    <input type="text" id="name" name="name" value="" class="wpcf7-form-control" required/>
                  </span>
                </p>
                <p>
                  <span class="wpcf7-form-control-wrap">
                    <label for="email">Your Email*</label>
                    <input type="email" id="email" name="email" value="" class="wpcf7-form-control" required/>
                  </span>
                </p>
                <p>
                  <span class="wpcf7-form-control-wrap">
                    <label for="url">Your URL</label>
                    <input type="url" id="url" name="url" value="" class="wpcf7-form-control"/>
                  </span>
                </p>
              </div><!-- /.review-input-fields -->

              <p>
                <span class="wpcf7-form-control-wrap">
                  <label for="message">Your Review*</label>
                  <span class="rating">
                    <label>Your Rating</label>
                    <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                  </span><!-- /.rating -->
                  <textarea id="message" name="message" class="wpcf7-form-control" required ></textarea>
                </span>
              </p>

              <p class="choose-table-form"> 
                <input type="submit" value="Submit Now" class="wpcf7-form-control wpcf7-submit" /> 
              </p>
            </form>
          </div><!-- /.review-form -->
        </div><!-- /.add-review -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.shop-contents -->





  <section class="related-products text-center">
    <div class="section-padding">
      <div class="container">
        <div class="section-top text-center">
          <h2 class="section-title">Related Products <span></span></h2>
        </div><!-- /.section-top -->

        <div id="related-slider" class="related-slider">

          <?=$html_dssp_tt_product?>

        </div><!-- /#related-slider -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.related-products -->




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