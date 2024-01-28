<?php
    namespace App\Controllers;
    use App\Models\ProductModel;
    class HomeController extends BaseController{

        private $ProductModel;

        function __construct(){
            $this->ProductModel = new ProductModel;
        }

        function index() {
            $this->titlepage = 'Home';
            $dssp_new=$this->ProductModel->sanpham_get_all(0,8);
            $dssp_view=$this->ProductModel->sanpham_get_all(1,6);
            $this->data["New_Product"]=$dssp_new;
            $this->data["View_Product"]=$dssp_view;
            $this->renderView("Home", $this->titlepage, $this->data);
        }

    }
    
?>