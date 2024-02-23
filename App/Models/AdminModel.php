<?php
    namespace App\Models;
    class AdminModel{
        private $db;
        function __construct(){
            $this->db = new DatabaseModel;
        }

        function sanpham_get_all(){
            $sql="select products.*, categories.name from products join categories on products.categories_id = categories.categories_id order by product_id desc";
            return $this->db->get_all($sql);
        }

        function show_products($products_all){
            $html_dssp_products='';
            $stt = 1;
            foreach ($products_all as $item) {
                extract($item);
                $html_dssp_products.= '<div class="product-wrapper">
                                            <div class="product_stt">'.$stt.'</div>
                                            <div class="product_img">
                                                <img src="'.BASEPATH.FILE_UPLOAD.$image.'" alt="'.$name.'">
                                            </div>
                                            <div class="product_name">'.$product_name.'</div>
                                            <div class="product_description">'.$description.'</div>
                                            <div class="product_price">$'.$price.'</div>
                                            <div class="product_discount">'.$view.'</div>
                                            <div class="product_discount">'.$stock_quantity.'</div>
                                            <div class="product_discount">'.$name.'</div>
                                            <div class="product_operation">
                                                <a href="#" class="product_operation-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                                <form action="' . BASEPATH . 'admin/deleteproducts" method="post">
                                                    <input type="hidden" name="product_id" value="'.$product_id.'">
                                                    <button type="submit" name="btndeleteproducts" class="category_operation-delete"><i class="fa-regular fa-trash-can"></i></button>
                                                </form>
                                            </div>
                                        </div>';
                                        $stt++;
            }
            return $html_dssp_products;
        }

        function danhmuc_get_all(){
            $sql="select * from categories order by categories_id asc";
            return $this->db->get_all($sql);
        }

        function show_category($cata_all){
            $html_dsdm_category='';
            $stt = 1;
            foreach ($cata_all as $item) {
                extract($item);
                $html_dsdm_category .= '<div class="category_wrapper">
                                            <div class="category_stt">'. $stt .'</div>
                                            <div class="category_category">'. $name .'</div>
                                            <div class="category_category">'. $description .'</div>
                                            <div class="category_operation">
                                                <a href="#" class="category_operation-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                                <form action="' . BASEPATH . 'admin/deletecategories" method="post">
                                                    <input type="hidden" name="categories_id" value="'.$categories_id.'">
                                                    <button type="submit" name="btndeletecategories" class="category_operation-delete"><i class="fa-regular fa-trash-can"></i></button>
                                                </form>
                                            </div>
                                        </div>';
                                        $stt++;
            }
            return $html_dsdm_category;
        }
        

    }