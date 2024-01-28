<?php
    Route::add('/', 'HomeController@index');
    Route::add('/index', 'HomeController@index');
    Route::add('/Register', 'UserController@index');
    Route::add('/Features', 'ProductController@index');
    Route::add('/product/detail/(\d+)', 'ProductController@detail');
    Route::add('/product/idcatalog/(\d+)', 'ProductController@index');
    Route::add('/product/sotrang/(\d+)', 'ProductController@index');
    Route::add('/Cart', 'CartController@index');