<footer class="site-footer">
    <div class="footer-top">
        <div class="section-padding">
            <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                <div class="widget widget_about_us">
                    <a class="footer-logo" href="#"><img src="<?=BASEPATH?>Public/assets/images/Logo_N-Mobile.jpg" alt="Logo" style="filter: grayscale(100%);"></a>
                    <div class="widget-details">
                    <p class="description">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                    </p><!-- /.description -->
                    <address>
                        999 Nguyen Thai Son Street, Phuong 5, Go Vap, Ho Chi Minh
                    </address>
                    <span>+84 3 6777 5413</span>
                    <span><a href="#">congnghia0802@gmail.com</a></span>
                    </div><!-- /.widget-details -->
                </div><!-- /.widget -->
                </div>

                <div class="col-md-2 col-sm-6">
                <div class="widget widget_useful_links">
                    <h4 class="widget-title">Useful links</h4>
                    <div class="widget-details">
                    <span><i class="ti-control-record"></i><a href="#">About us</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Customer service</a></span>
                    <span><i class="ti-control-record"></i><a href="#">New Collection</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Best Sellers</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Manufacturers</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Privacy policy</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Terms & condition</a></span>
                    </div><!-- /.widget-details -->
                </div><!-- /.widget -->
                </div>

                <div class="col-md-2 col-sm-6">
                <div class="widget widget_shop_links">
                    <h4 class="widget-title">Shops</h4>
                    <div class="widget-details">
                    <span><i class="ti-control-record"></i><a href="#">Trending Now</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Women</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Men</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Kids</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Accessories</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Top brands</a></span>
                    <span><i class="ti-control-record"></i><a href="#">Shoes</a></span>                  
                    </div><!-- /.widget-details -->
                </div><!-- /.widget -->
                </div>

                <div class="col-md-4 col-sm-6">
                <div class="widget widget_instagram_feed">
                    <h4 class="widget-title">Instagram Photos</h4>
                    <div class="widget-details">
                    <a href="#"><img src="<?=BASEPATH?>Public/assets/images/instagram1.jpg" alt="Instagram Image"></a>
                    <a href="#"><img src="<?=BASEPATH?>Public/assets/images/instagram2.jpg" alt="Instagram Image"></a>
                    <a href="#"><img src="<?=BASEPATH?>Public/assets/images/instagram3.jpg" alt="Instagram Image"></a>
                    <a href="#"><img src="<?=BASEPATH?>Public/assets/images/instagram4.jpg" alt="Instagram Image"></a>
                    <a href="#"><img src="<?=BASEPATH?>Public/assets/images/instagram5.jpg" alt="Instagram Image"></a>
                    <a href="#"><img src="<?=BASEPATH?>Public/assets/images/instagram6.jpg" alt="Instagram Image"></a>
                    <a href="#"><img src="<?=BASEPATH?>Public/assets/images/instagram7.jpg" alt="Instagram Image"></a>
                    <a href="#"><img src="<?=BASEPATH?>Public/assets/images/instagram8.jpg" alt="Instagram Image"></a>
                    </div><!-- /.widget-details -->
                </div><!-- /.widget -->
                </div>

            </div>
            </div>
        </div>
        </div><!-- /.footer-top -->

        <div class="footer-bottom">
        <div class="container">
            <div class="row">
            <div class="col-sm-7 text-left">
                <div class="copyright">
                © <a href="https://demos.jeweltheme.com/shopaholic">Shopaholic</a> 2016 | Develpoed With Love by <a href="https://jeweltheme.com">Jewel Theme</a>
                </div><!-- /.copyright -->
            </div>

            <div class="col-sm-5 text-right">
                <div class="payment-list">
                <a href="#"><img src="<?=BASEPATH?>Public/images/payment/1.png" alt="Payment Logo"></a>
                <a href="#"><img src="<?=BASEPATH?>Public/images/payment/2.png" alt="Payment Logo"></a>
                <a href="#"><img src="<?=BASEPATH?>Public/images/payment/3.png" alt="Payment Logo"></a>
                <a href="#"><img src="<?=BASEPATH?>Public/images/payment/4.png" alt="Payment Logo"></a>
                <a href="#"><img src="<?=BASEPATH?>Public/images/payment/5.png" alt="Payment Logo"></a>
                </div>
            </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
        </div><!-- /.footer-bottom -->
    </footer>



    <div id="scroll-to-top" class="scroll-to-top">
        <i class="fa fa-angle-double-up"></i>    
    </div>


    <script src="<?=BASEPATH?>Public/assets/js/plugins.js"></script>
    <script src="<?=BASEPATH?>Public/assets/js/main.js"></script>
    <script src="<?=BASEPATH?>Public/assets/js/bootstrap-rating.min.js"></script>
    <script src="<?=BASEPATH?>Public/assets/js/jquery.lwtCountdown-1.0.js"></script>
    <script src="<?=BASEPATH?>Public/assets/js/jquery-ui.min.js"></script>
    <script src="<?=BASEPATH?>Public/assets/js/bootstrap-rating.min.js"></script>
    <script src="<?=BASEPATH?>Public/assets/js/giohang.js"></script>

    <script type="text/javascript">

    jQuery(document).ready(function($) {
        "use strict";
        jQuery('.rating-tooltip-manual').rating({
            extendSymbol: function () {
            var title;
            $(this).tooltip({
                container: 'body',
                placement: 'bottom',
                trigger: 'manual',
                title: function () {
                return title;
                }
            });
            $(this).on('rating.rateenter', function (e, rate) {
                title = rate;
                $(this).tooltip('show');
            })
            .on('rating.rateleave', function () {
                $(this).tooltip('hide');
            });
            }
        });

        /*-------- Filter By Price -----------*/

        jQuery( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 75, 300 ],
            slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        jQuery( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );

        });


    </script>
</body>
</html>