<?php
    namespace App\Controllers;
    use App\Models\UserModel;


    class UserController extends BaseController{
        private $UserModel;


        function __construct(){
            $this->UserModel = new UserModel;
        }


        // function index_signup() {
        //     $this->titlepage = 'Login';
        //     $this->renderView("signup", $this->titlepage, $this->data);
        // }

        function index_login(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user = $this->UserModel->user_login($email, $password);

                if ($user) {
                    // Lưu thông tin người dùng vào session
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_email'] = $user['email'];
                    // $_SESSION['user_name'] = $user['username'];

                    header("location:index.php");
                    exit();
                } else {
                    $this->data['error_message'] = 'Invalid email or password';
                    $this->titlepage = 'Login';
                    $this->renderView("login", $this->titlepage, $this->data);
                }
            } else {
                $this->titlepage = 'Login';
                $this->renderView("login", $this->titlepage, $this->data);
            }
        }


        function index_signup()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Lấy dữ liệu từ form
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];

                // Kiểm tra xác nhận mật khẩu
                if ($password !== $confirm_password) {
                    $this->data['error_message'] = 'Password and Confirm Password do not match.';
                    $this->titlepage = 'Sign Up';
                    $this->renderView("signup", $this->titlepage, $this->data);
                    return;
                }

                // Kiểm tra định dạng email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $this->data['error_message'] = 'Please enter a valid email address.';
                    $this->titlepage = 'Sign Up';
                    $this->renderView("signup", $this->titlepage, $this->data);
                    return;
                }

                // Kiểm tra mật khẩu có đủ mạnh không
                $password_strength = '/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
                if (!preg_match($password_strength, $password)) {
                    $this->data['error_message'] = 'Password must be at least 8 characters long and contain at least one uppercase letter, one digit, and one special character.';
                    $this->titlepage = 'Sign Up';
                    $this->renderView("Register", $this->titlepage, $this->data);
                    return;
                }

                $this->UserModel->user_signup($username, $email, $password, "");

                $this->titlepage = 'Login';
                $this->renderView("login", $this->titlepage, $this->data);
                exit();
            } else {
                // Hiển thị trang đăng ký
                $this->titlepage = 'Sign Up';
                $this->renderView("signup", $this->titlepage, $this->data);
            }
        }


        function logout()
        {
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);

            header("location:index.php");
            exit();
        }

    }