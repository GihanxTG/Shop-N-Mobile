<?php
    namespace App\Models;
    class AdminModel{
        private $db;
        function __construct(){
            $this->db = new DatabaseModel;
        }

    }