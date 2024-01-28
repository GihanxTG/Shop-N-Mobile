<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>     <html class="no-js" lang=""> <!<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <title>
        <?php
            if($titlepage!="") echo $titlepage;
            else echo"NTG Shop"
        ?>
    </title>
    <meta name="description" content="Shopaholic - e-Commerce HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/png" href="<?=BASEPATH?>Public/assets/images/Logo-NMobile-removebg.png" />

    <link rel="stylesheet" type="text/css" href="<?=BASEPATH?>Public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=BASEPATH?>Public/assets/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?=BASEPATH?>Public/assets/css/et-line-icons.css">  

    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/slick.css">
    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/magnific-popup.css"> 
    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/style.css">
    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/themes.css">


    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/home/home-11.css">
    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/shop/shop-details.css">
    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/shop/shop.css">
    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/pages/register.css">
    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/shop/cart.css">
    <link rel="stylesheet" href="<?=BASEPATH?>Public/assets/css/shop/checkout.css">

    <!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="Public/assets/js/vendor/html5-3.6-respond-1.4.2.min.js"></script><![endif]-->


</head>


<body>


  <header id="masthead" class="masthead">

    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 top-left text-left">
            <p class="top-contact">
              <i class="ti-email"></i><span><a href="#">congnghia0802@gmail.com</a></span>
              <i class="ti-mobile"></i><span>+84 3 6777 5413</span>
            </p><!-- /.top-contact -->

          </div><!-- /.top-left -->

          <div class="col-sm-7 top-right text-right">
            <div id="currency" class="currency dropdown">
              <a href="#" class="current-title">USD $</a>
              <!-- <ul class="unsorted-list">
                <li>EURO &euro;</li>
                <li>POUND &pound;</li>
                <li>Franc &#x20a3;</li>
              </ul> -->
            </div>

            <div id="language" class="language dropdown">
              <a href="#" class="current-title">English</a>
              <!-- <ul class="unsorted-list">
                <li>Chiense</li>
                <li>French</li>
                <li>Spanish</li>
                <li>Mandarin</li>
              </ul> -->
            </div>

            <div class="checkout"><a href="<?=BASEPATH?>Checkout">Checkout <i class="ti-check-box"></i></a></div><!-- /.checkout -->


            <?php
            // Kiểm tra xem người dùng đã đăng nhập hay chưa
            if (isset($_SESSION['user_id'])) {
                // Người dùng đã đăng nhập
                echo '<div class="my-account dropdown">';
                echo '<a href="' . BASEPATH . 'profile">' . $_SESSION['user_email'] . '<i class="ti-user"></i></a>';
                echo '<ul class="unsorted-list">';
                echo '<li><a href="' . BASEPATH . 'profile">My Profile</a></li>';
                echo '<li><a href="' . BASEPATH . 'admin/dashboard">Admin</a></li>';
                echo '<li><a href="' . BASEPATH . 'cart">My Cart</a></li>';
                echo '<li><a href="' . BASEPATH . 'logout">Log Out</a></li>';
                echo '</ul>';
                echo '</div>';
            } else {
                // Người dùng chưa đăng nhập
                echo '<a href="' . BASEPATH . 'login">Log In | Sign Up<i class="ti-user"></i></a>';
            }
            ?>


            <!-- <div class="my-account dropdown">
              <a href="<?=BASEPATH?>Register">Log In | Sign Up<i class="ti-user"></i></a>
            </div> -->

            <!-- <div class="my-account dropdown">
              <a href="<?=BASEPATH?>Register">NghiaxTG<i class="ti-user"></i></a>
              <ul class="unsorted-list">
                <li><a href="<?=BASEPATH?>Profile">My Profile</a></li>
                <li><a href="<?=BASEPATH?>Cart">My Cart</a></li>
                <li><a href="<?=BASEPATH?>LogOut">Log Out</a></li>
              </ul>
            </div> -->
            
          </div><!-- /.top-right -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.header-top -->

    <div class="header-middle">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <h1><a class="navbar-brand hidden-xs" href="<?=BASEPATH?>index"><img src="<?=BASEPATH?>Public/assets/images/Logo_N-Mobile.jpg" alt="Site Logo"></a></h1>
          </div>
          <div class="col-sm-7">
            <div class="top-search-form">
              <form action="search.php" method="post" class="menu-form">
                <fieldset> 
                  <select name="category" id="category">
                    <option selected="selected">All Categories</option>
                    <!-- <option>SmartPhone</option>
                    <option>Laptop</option>
                    <option>Ipad</option>
                    <option>Apple Watch</option>
                    <option>Others</option> -->
                  </select>
                </fieldset>

                <input type="search" name="kyw" placeholder="Keywords ..." class="form-control">
                <button type="submit" name="btnsearch" class="btn"><i class="fa fa-search"></i></button>
              </form>  
            </div><!-- /.top-search-form -->
          </div>
          <div class="col-sm-2">
            <div class="shop-cart">             
              <a class="cart-control" href="<?=BASEPATH?>Cart" title="View your shopping cart">
                <i class="ti-bag"></i>
                <span class="count">0</span>
                <span>Cart - </span> 
                <span class="currency">$</span>
                <span class="amount">0</span>
              </a><!-- /.cart-control -->

              <div class="cart-items">
                <div class="widget_shopping_cart_content">
                  <div class="cart-top">
                </div><!-- /.widget_shopping_cart_content -->
              </div><!-- /.scart-items -->
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.header-middle -->

    <div class="header-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand visible-xs" href="./">
            <img src="Public/images/logo.png" alt="Site Logo">
          </a><!-- /.navbar-brand -->
        </div>

        <nav id="main-menu" class="menu collapse navbar-collapse pull-left">
          <ul class="nav navbar-nav">
            <li class="menu-item menu-item-has-children active">
              <a href="<?=BASEPATH?>index">Home</a>
            </li>

            <li class="menu-item menu-item-has-children">
              <a href="<?=BASEPATH?>product">Product</a>
                </li>  
            </ul>       


          </ul><!-- /.navbar-nav -->
        </nav><!-- /.navbar-collapse -->

        <div class="menu-social pull-right">
          <a href="#"><i class="ti-twitter-alt"></i></a>
          <a href="https://www.facebook.com/nghiaxtg"><i class="ti-facebook"></i></a>
          <a href="#"><i class="ti-pinterest-alt"></i></a>
          <a href="#"><i class="ti-vimeo-alt"></i></a>
        </div><!-- /.menu-social -->
      </div><!-- /.container -->
    </div><!-- /.header-bottom -->

  </header><!-- /#masthead -->