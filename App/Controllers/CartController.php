<?php
    namespace App\Controllers;
    use App\Models\CartModel;


    class CartController extends BaseController{
        private $CartModel;


        function __construct(){
            $this->CartModel = new CartModel;
        }


        function index() {
            $this->titlepage = 'My Cart';
            $this->renderView("Cart", $this->titlepage, $this->data);
        }
    }