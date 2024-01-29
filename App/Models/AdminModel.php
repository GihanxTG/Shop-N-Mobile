<?php
    namespace App\Models;
    class AdminModel{
        private $db;
        function __construct(){
            $this->db = new DatabaseModel;
        }

        function sanpham_get_all(){
            $sql="select products.*, categories.name from products join categories on products.categories_id = categories.categories_id";
            return $this->db->get_all($sql);
        }

        function show_products($products_all){
            $html_dssp_products='';
            foreach ($products_all as $item) {
                extract($item);
                $html_dssp_products.= '<div class="product-wrapper">
                                            <div class="product_stt">'.$product_id.'</div>
                                            <div class="product_img">
                                                <img src="'.BASEPATH.'Public/assets/images/'.$image.'" alt="'.$name.'">
                                            </div>
                                            <div class="product_name">'.$product_name.'</div>
                                            <div class="product_description">'.$description.'</div>
                                            <div class="product_price">$'.$price.'</div>
                                            <div class="product_discount">'.$view.'</div>
                                            <div class="product_discount">'.$stock_quantity.'</div>
                                            <div class="product_discount">'.$name.'</div>
                                            <div class="product_operation">
                                                <a href="#" class="product_operation-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                                <a href="#" class="product_operation-delete"><i class="fa-regular fa-trash-can"></i></a>
                                            </div>
                                        </div>';
            }
            return $html_dssp_products;
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