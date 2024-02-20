<?php 
    namespace App\Controllers;
    use App\Models\AdminModel;
    use App\Models\DatabaseModel;
    use App\Models\UserModel;

    class AdminController extends AdminBaseController {
        private $AdminModel;
        private $DatabaseModel;
        private $UserModel;

        function __construct (){
            $this->AdminModel = new AdminModel;
            $this->DatabaseModel= new DatabaseModel;
            $this->UserModel= new UserModel($this->DatabaseModel);
        }

        function index() {
            if(isset($_SESSION['user_id'])&&($_SESSION['user_id']['role']==0)){
                $this->titlepage = 'Admin Home';
                $this->renderView("home_admin", $this->titlepage, $this->data);
            }else{
                $this->titlepage = 'Login Admin';
                $this->renderView("loginform", $this->titlepage, $this->data);
            }
        }

        function loginform() {
            $this->titlepage = 'Login Admin';
            $this->renderView("loginform", $this->titlepage, $this->data);
        }

        function login() {
            if(isset($_POST['btnLogin'])){
                $email = $_POST['email'];
                $password = $_POST['password'];

                $kq = $this->UserModel->user_login($email, $email, $password);
                if (is_array($kq))  {
                    $_SESSION['user_id'] = $kq;
                    header("Location: " . BASEPATH . "admin");
                    exit();
                } else {
                    $_SESSION['loidnadmin'] = '<span style="color: red;">Email or password is incorrect.</span>';
                    header("Location: " . BASEPATH . "admin/loginform");
                }
            }
            $this->titlepage = 'Admin Home';
            $this->renderView("home_admin", $this->titlepage, $this->data);
        }

        function logout() {
            if(isset($_SESSION['user_id'])){
                unset($_SESSION['user_id']);
                unset($_SESSION['loidnadmin']);
                header("Location: " . BASEPATH . "admin/loginform");
            }
        }

        function category() {
            $this->titlepage = 'Admin Category';
            
            // Lấy tất cả danh mục từ cơ sở dữ liệu
            $cata_all=$this->AdminModel->danhmuc_get_all();
            $this->data["All_Cata"]=$cata_all;

            $this->renderView("category_admin", $this->titlepage, $this->data);
        }

        function addcatalogform(){
            $this->titlepage = 'Thêm danh mục mới';
            $this->renderView("AddCatalogForm", $this->titlepage, $this->data);
        }

        function addcatalog(){
            $this->titlepage = 'Danh sách danh mục';
            $dsdm_admin=$this->AdminModel->category_get_all();
            $this->data["danhmuc_all"]=$dsdm_admin;
            $this->renderView("CategoryAdmin", $this->titlepage, $this->data);
        }

        function product() {
            $this->titlepage = 'Admin Product';
            $product_all=$this->AdminModel->sanpham_get_all();
            $this->data["All_product"]=$product_all;
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