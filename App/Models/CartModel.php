<?php
    namespace App\Models;
    class CartModel{
        private $db;
        function __construct(){
            $this->db = new DatabaseModel;
        }

    }