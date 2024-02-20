<?php
    namespace App\Controllers;
    use App\Models\DatabaseModel;
    use App\Models\UserModel;


    class UserController extends BaseController{
        private $UserModel;


        function __construct(){
            $this->DatabaseModel= new DatabaseModel;
            $this->UserModel= new UserModel($this->DatabaseModel);
        }


        function index_login() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['email']) && isset($_POST['password'])) {
                
                    $kq = $this->UserModel->user_login($_POST['email'], $_POST['email'], $_POST['password']);
                    if ($kq)  {
                        $_SESSION['user_id'] = $kq;
                        header("Location: " . BASEPATH . "index");
                        exit();
                    } else {
                        $_SESSION['loidn'] = '<span style="color: red;">Email or password is incorrect.</span>';
                        header("Location: " . BASEPATH . "login");
                    }
                }
            }
           
            $this->titlepage = 'Login';
            $this->renderView("login", $this->titlepage, $this->data);
        }


        function index_signup()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Lấy dữ liệu từ form
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $kq = $this->UserModel->check_email($email);
                if ($kq) {
                    header("Location: " . BASEPATH . "signup");
                }else{
                    $role = 1;
                    $this->UserModel->user_signup($username, $email, $password, $role);
                    $this->titlepage = 'Login';
                    $this->renderView("login", $this->titlepage, $this->data);
                }
            }
            $this->titlepage = 'Sign Up';
            $this->renderView("signup", $this->titlepage, $this->data);
        }


        function logout()
        {
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);

            header("location:index.php");
            exit();
        }

    }