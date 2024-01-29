<?php
    namespace App\Models;
    class AdminModel{
        private $db;
        function __construct(){
            $this->db = new DatabaseModel;
        }

        function danhmuc_get_all(){
            $sql="select * from categories order by categories_id asc";
            return $this->db->get_all($sql);
        }

        function show_category($cata_all){
            $html_dsdm_category='';
            foreach ($cata_all as $item) {
                extract($item);
                $html_dsdm_category.= '<div class="category_wrapper">
                                            <div class="category_stt">'. $categories_id .'</div>
                                            <div class="category_category">'. $name .'</div>
                                            <div class="category_operation">
                                                <a href="#" class="category_operation-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                                <a href="#" class="category_operation-delete"><i class="fa-regular fa-trash-can"></i></a>
                                            </div>
                                        </div>';
            }
            return $html_dsdm_category;
        }

    }