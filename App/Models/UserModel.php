<?php
    namespace App\Models;
    class UserModel{
        private $db;
        function __construct(){
            $this->db = new DatabaseModel;
        }

        function user_login($email, $username, $password){
            $sql = "SELECT * FROM users WHERE (email=? OR username=?) AND password=?";
            return $this->db->get_one($sql, $email, $username, $password);
        }

        function user_signup($username, $email, $password, $role){
            $sql = "INSERT INTO users(username, password, email, role) VALUES (?, ?, ?, ?)";
            return $this->db->pdo_insert($sql, $username, $password, $email, $role);
        }

        function check_email($email){
            $sql="select * from users where email=?";
            return $this->db->get_one($sql, $email);
        }


    }