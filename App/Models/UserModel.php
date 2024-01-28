<?php
    namespace App\Models;
    class UserModel{
        private $db;
        function __construct(){
            $this->db = new DatabaseModel;
        }

        function user_login($email, $password){
            $sql = "SELECT * FROM users WHERE email=? AND password=?";
            return $this->db->get_one($sql, $email, $password);
        }

        function user_signup($username, $email, $password, $role){
            $sql = "INSERT INTO users(username, password, email, role) VALUES (?, ?, ?, ?)";
            return $this->db->pdo_insert($sql, $username, $password, $email, $role);
        }

        // function user_signup($name, $email, $password)
        // {
        //     // Kiểm tra xem email đã tồn tại chưa
        //     $existingEmail = $this->get_one("SELECT id FROM users WHERE email=?", $email);
        //     if ($existingEmail) {
        //         throw new \Exception("Email already exists.");
        //     }

        //     // Kiểm tra xem username đã tồn tại chưa
        //     $existingUsername = $this->get_one("SELECT id FROM users WHERE username=?", $name);
        //     if ($existingUsername) {
        //         throw new \Exception("Username already exists.");
        //     }

        //     // Thực hiện đăng ký
        //     $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        //     $this->pdo_insert($sql, $name, $email, $hashed_password);
        // }

        // public function user_signup($name, $email, $password){
        //     $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        //     $this->pdo_insert($sql, $name, $email, $password);
        // }


    }