<?php require_once "header.php"; ?>
<?php
    $dssp_all = $data["All_Product"];
    $propage=new App\Models\ProductModel;
    $html_dssp_all_product=$propage->show_all_products($dssp_all);

    $cata_all = $data["All_Cata"];
    $html_dssp_all_cata="";
    foreach ($cata_all as $item) {
        extract($item);
        $href=BASEPATH.'product/idcatalog/'.$categories_id;
        $html_dssp_all_cata.='<li class="menu-item menu-item-has-children">
                                <a href="'.$href.'">'.$name.'</a>
                              </li>';
    }
?>




  <section class="shop-contents">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pull-right">

            <div class="product-filter">
              <div class="row">
                <div class="col-md-4">
                  <span class="filter-text">Showing 1-9 of 36 Products</span>
                </div>

                <div class="col-md-8 text-right">
                  <div class="category-select">
                    <span class="filter-title">Sort by:</span><!-- /.filter-title -->
                    <select data-select-like-alignement="never" class="category drop-select">
                      <option value="">Name</option>
                      <option value="2">Size</option>
                      <option value="3">Color</option>
                      <option value="4">Brand</option>
                    </select>
                  </div><!-- /.category-select -->
                  <div class="show-item">
                    <span class="filter-title">Show:</span><!-- /.filter-title -->
                    <select id="item-number" data-select-like-alignement="never" class="item-number drop-select">
                      <option value="">12</option>
                      <option value="2">16</option>
                      <option value="3">20</option>
                      <option value="4">24</option>
                    </select>
                  </div><!-- /.show-item -->

                  <div class="filter-view">
                    <span class="filter-title">View:</span><!-- /.filter-title -->
                    <ul role="tablist">
                      <li class="grid-view active" id="grid-top"><a href="#grid" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                      <li id="list-top" class="list-view"><a href="#list" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                  </div><!-- /.filter-view -->
                </div><!-- /.col-md-8 -->
              </div>
            </div><!-- /.product-filter -->

            <div class="shop-products">
              <div class="row">
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in text-center" id="grid">
                    
                    <?php echo $html_dssp_all_product ?>

                  </div><!-- /.tab-pane -->

                  <div role="tabpanel" class="tab-pane fade text-left" id="list">
                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="images/home08/featured/1.jpg" alt="Item Thumbnail">
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="images/home08/featured/1.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-details -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="images/home08/featured/2.jpg" alt="Item Thumbnail">
                        <span class="ribbon sale">Sale</span>
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                          <div class="previous-price"><span class="currency">$</span><span class="price">85</span></div><!-- /.previous-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="images/home08/featured/2.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="images/home08/featured/3.jpg" alt="Item Thumbnail">
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="images/home08/featured/3.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="images/home08/featured/4.jpg" alt="Item Thumbnail">
                        <span class="ribbon new">new</span>
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="images/home08/featured/4.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="images/home08/featured/5.jpg" alt="Item Thumbnail">
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="images/home08/featured/5.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="images/home08/featured/6.jpg" alt="Item Thumbnail">
                        <span class="ribbon sale">Sale</span>
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                          <div class="previous-price"><span class="currency">$</span><span class="price">85</span></div><!-- /.previous-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="images/home08/featured/6.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="images/home08/featured/7.jpg" alt="Item Thumbnail">
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="images/home08/featured/7.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="images/home08/featured/8.jpg" alt="Item Thumbnail">
                        <span class="ribbon new">new</span>
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="images/home08/featured/8.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.row -->
            </div><!-- /.shop-products -->

            <div class="pagination pagination-02 text-center">
              <a href="#" class="prev"><i class="ti-angle-double-left"></i></a>
              <a href="<?=BASEPATH?>product/sotrang/1" class="active">1</a>
              <a href="<?=BASEPATH?>product/sotrang/2">2</a>
              <a href="<?=BASEPATH?>product/sotrang/3">3</a>
              <a href="<?=BASEPATH?>product/sotrang/4">4</a>
              <a href="<?=BASEPATH?>product/sotrang/5">5</a>
              <a href="#" class="next"><i class="ti-angle-double-right"></i></a>
            </div><!-- /.pagination -->
          </div>

          <div class="col-md-4">
            <aside class="sidebar right-sidebar pull-left">
              <h3 class="widget-title">Filter By <span></span></h3>
              <div class="widget widget_search_by_categories">
                <div class="heading">
                  <h3 class="heading-title">Categories</h3><!-- /.heading-title -->
                  <div class="widget-details">
                    <ul class="category-menu">
                    <?=$html_dssp_all_cata ?>
                      <!-- <li class="menu-item menu-item-has-children">
                        <a href="#">Cameras & Photography</a>
                      </li> -->

                    </ul>
                  </div><!-- /.widget-details -->
                </div><!-- /.heading -->
              </div><!-- /.widget -->             

            </aside><!-- /.sidebar -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.shop-contents -->




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