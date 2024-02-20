<?php
    session_start();
    if(!isset($_SESSION['giohang'])){
        $_SESSION['giohang']=[];
    }

    require_once "App/Config/Database.php";
    require_once "vendor/autoload.php";

    use App\Router\Route;

    Route::add('/', 'HomeController@index');
    Route::add('/index', 'HomeController@index');

    //Đăng nhập | Đăng ký
    Route::add('/login', 'UserController@index_login');
    Route::add('/signup', 'UserController@index_signup');
    Route::add('/logout', 'UserController@logout');

    //Sản phẩm
    Route::add('/product', 'ProductController@index');
    Route::add('/product/detail/(\d+)', 'ProductController@detail');
    Route::add('/product/idcatalog/(\d+)', 'ProductController@index');

    //Search
    Route::add('/product/search/(\w+)', 'ProductController@index');

    //Phân trang
    Route::add('/product/sotrang/(\d+)', 'ProductController@index');

    //Cart
    Route::add('/cart', 'CartController@index');
    Route::add('/viewcart', 'CartController@index');
    Route::add('/addcart', 'CartController@addcart');
    Route::add('/deletecart', 'CartController@deletecart');
    Route::add('/deleteproduct/(\d+)', 'CartController@deleteproduct');
    Route::add('/checkout', 'CartController@checkout');

    //Admin
    Route::add('/admin', 'AdminController@index');
    Route::add('/admin/dashboard', 'AdminController@index');

    //Admin login
    Route::add('/admin/loginform', 'AdminController@loginform');
    Route::add('/admin/login', 'AdminController@login');
    Route::add('/admin/logout', 'AdminController@logout');
    //Admin Category
    Route::add('/admin/category', 'AdminController@category');
    
    Route::add('/admin/product', 'AdminController@product');
    Route::add('/admin/bill', 'AdminController@bill');
    Route::add('/admin/add', 'AdminController@add');


    $uri = isset($_GET['url']) ? "/".rtrim($_GET['url'], '/') : '/index';
    Route::dispatch($uri);