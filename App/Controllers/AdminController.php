<?php 
    namespace App\Controllers;
    use App\Models\AdminModel;
    use App\Models\DatabaseModel;
    use App\Models\UserModel;
    use App\Models\ProductModel;

    class AdminController extends AdminBaseController {
        private $AdminModel;
        private $DatabaseModel;
        private $UserModel;
        private $ProductModel;

        function __construct (){
            $this->AdminModel = new AdminModel;
            $this->DatabaseModel= new DatabaseModel;
            $this->UserModel= new UserModel($this->DatabaseModel);
            $this->ProductModel= new ProductModel($this->DatabaseModel);
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

        function categories() {
            $this->titlepage = 'Admin Category';
            // Lấy tất cả danh mục từ cơ sở dữ liệu
            $cata_all=$this->AdminModel->danhmuc_get_all();
            $this->data["All_Cata"]=$cata_all;
            $this->renderView("category_admin", $this->titlepage, $this->data);
        }

        function addcatalog(){
            if(isset($_POST["btnaddcategoris"])){
                $name=$_POST["name"];
                $description=$_POST["description"];

                try {
                    // insrert into
                    $this->ProductModel->insert_categories($name, $description);
                    // chuyển về trang dsdm
                    header("Location: " . BASEPATH . "admin/categories");
                } catch (\Throwable $th) {
                    //throw $th;
                    // echo $th->getMessage();
                    self::categories();
                    

                }
            }else{
                self::categories();
            }
        }

        function deletecategories(){
            if (isset($_POST["btndeletecategories"])) {
                $categories_id = $_POST["categories_id"];
        
                try {
                    // Xóa danh mục
                    $this->ProductModel->delete_categories($categories_id);
                    // Chuyển về trang danh sách danh mục
                    header("Location: " . BASEPATH . "admin/categories");
                } catch (\Throwable $th) {
                    // Xử lý lỗi (nếu cần)
                    echo "Error: " . $th->getMessage();
                    self::categories();
                }
            }else{
                self::categories();
            }
        }
        

        function product() {
            $this->titlepage = 'Admin Product';
            $product_all=$this->AdminModel->sanpham_get_all();
            $dsdm_admin=$this->AdminModel->danhmuc_get_all();
            $this->data["All_product"]=$product_all;
            $this->data["danhmuc_all"]=$dsdm_admin;
            $this->renderView("product_admin", $this->titlepage, $this->data);
        }

        function addproduct(){
            // lấy dữ liệu từ form
            if(isset($_POST['btnaddproduct'])){
                $name=$_POST["product_name"];
                $price=$_POST["price"];
                $description=$_POST["description"];
                $quantity=$_POST["stock_quantity"];
                $categories_id=$_POST["categories_id"];

                $image=$_FILES["image"]["name"];

                // upload file lên host
                $uploadOk=1;
                $target_file=FILE_UPLOAD.basename($_FILES["image"]["name"]);
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
                if($uploadOk==1){
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                }

                try {
                    // insrert into
                    $this->ProductModel->insert_product($name, $image, $price, $description, $quantity, $categories_id);
                    // chuyển về trang dssp
                    header("Location: " . BASEPATH . "admin/product");
                } catch (\Throwable $th) {
                    //throw $th;
                    self::product();
                }
            }else{
                self::product();
            }
            
        }

        function deleteproducts(){
            if (isset($_POST["btndeleteproducts"])) {
                $product_id = $_POST["product_id"];
        
                try {
                    // Xóa danh mục
                    $this->ProductModel->delete_product($product_id);
                    // Chuyển về trang danh sách danh mục
                    header("Location: " . BASEPATH . "admin/product");
                } catch (\Throwable $th) {
                    // Xử lý lỗi (nếu cần)
                    echo "Error: " . $th->getMessage();
                    self::product();
                }
            }else{
                self::product();
            }
        }

        function bill() {
            $this->titlepage = 'Admin Bill';
            $this->renderView("bill_admin", $this->titlepage, $this->data);
        }

    }