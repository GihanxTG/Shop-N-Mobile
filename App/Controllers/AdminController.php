<?php 
    namespace App\Controllers;
    use App\Models\AdminModel;

    class AdminController extends AdminBaseController {
        private $AdminModel;

        function __construct (){
            $this->AdminModel = new AdminModel;
        }

        function index() {
            $this->titlepage = 'Admin Home';
            $this->renderView("home_admin", $this->titlepage, $this->data);
        }

        function category() {
            $this->titlepage = 'Admin Category';
            $this->renderView("category_admin", $this->titlepage, $this->data);
        }

        function product() {
            $this->titlepage = 'Admin Product';
            $this->renderView("product_admin", $this->titlepage, $this->data);
        }

        function bill() {
            $this->titlepage = 'Admin Bill';
            $this->renderView("bill_admin", $this->titlepage, $this->data);
        }

        function add() {
            $this->titlepage = 'Admin Add';
            $this->renderView("add_admin", $this->titlepage, $this->data);
        }
    }