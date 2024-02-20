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


        function addcart(){
            $this->titlepage='Giỏ hàng rỗng';
            if(isset($_POST['addcart'])){
                $product_id=$_POST['product_id'];	
                $image=$_POST['image'];
                $price=$_POST['price'];
                $product_name=$_POST['product_name'];
                $Soluong=1;
                $check_sp=0;
                if(count($_SESSION["giohang"])>0){
                    foreach ($_SESSION["giohang"] as $key => $value) {
                        if($key==$product_id){
                            $check_sp=1;
                            $_SESSION["giohang"][$product_id]["Soluong"]+=1;
                            break;
                        } 
                    }
                }
                if($check_sp==0){
                    $sp=array("product_id"=>$product_id,"product_name"=>$product_name,"image"=>$image,"price"=>$price,"Soluong"=>$Soluong);
                    $_SESSION["giohang"][$product_id]=$sp;
                }
            }
            
            // $this->renderView("CartView", $this->titlepage, $this->data);
            header('location: '.BASEPATH.'viewcart');
        }


        function deletecart(){
            if(count($_SESSION["giohang"])>0){
                $_SESSION["giohang"]=[];
            }
            header('location: '.BASEPATH);
        }


        function deleteproduct(){
            $url = $_SERVER['REQUEST_URI'];
            $segments = explode('/', rtrim($url, '/'));
            $idproduct_key = array_search('deleteproduct', $segments);
            $idproduct=$segments[$idproduct_key + 1];
            unset($_SESSION["giohang"][$idproduct]);
            if(count($_SESSION["giohang"])>0){
                // $this->titlepage="Giỏ hàng";
                // $this->data="";
                // $this->renderView("CartView", $this->titlepage, $this->data);
                header('location: '.BASEPATH.'viewcart');
            }else{
                header('location: '.BASEPATH);
            }
        }

        function checkout() {
            $this->titlepage = 'Checkout';
            $this->renderView("checkout", $this->titlepage, $this->data);
        }
    }