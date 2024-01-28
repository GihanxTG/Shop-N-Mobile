<?php
session_start();

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

    //Giỏ hàng
    Route::add('/cart', 'CartController@index');

    //Admin
    Route::add('/admin/dashboard', 'AdminController@index');
    //Admin Category
    Route::add('/admin/category', 'AdminController@category');
    
    Route::add('/admin/product', 'AdminController@product');
    Route::add('/admin/bill', 'AdminController@bill');
    Route::add('/admin/add', 'AdminController@add');


    $uri = isset($_GET['url']) ? "/".rtrim($_GET['url'], '/') : '/index';
    Route::dispatch($uri);