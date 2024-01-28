<?php
    namespace App\Models;
    class ProductModel{
        private $db;
        function __construct(){
            $this->db = new DatabaseModel;
        }

        function sanpham_get_all($view,$limit){
            $sql="select * from sanpham where 1";
            if ($view>0){
                $sql.=" order by ViewSP desc limit ".$limit;
            }else{
                $sql.=" order by IDSP desc limit ".$limit;
            }
            return $this->db->get_all($sql);

        }


        function danhmuc_get_all(){
          $sql="select * from danhmuc order by IDDM asc";

          return $this->db->get_all($sql);
        }

        

        function sanpham_get_all_catalog($kyw,$idcatalog,$slsp,$sotrang){
            $sql="select * from sanpham where 1";
            if ($idcatalog>0){
                $sql.=" AND MaDM= ".$idcatalog;
            }

            if($kyw!=""){
                $sql.=" AND TenSP LIKE '%".$kyw."%'";
            }

            $limit1=($sotrang-1)*$slsp;

            $limit2=$slsp;

            $sql.=" order by IDSP desc limit ".$limit1.",".$limit2;
            return $this->db->get_all($sql);
        }


        

        function sanpham_get_one($id){
          $sql="select * from sanpham where IDSP=?";
          return $this->db->get_one($sql,$id);
        }


        function show_products($dssp){
            $html_dssp_home='';
            foreach ($dssp as $item) {
                extract($item);
                $hrefsp=BASEPATH.'product/detail/'.$IDSP;
                $html_dssp_home.= '<div class="item col-md-3 col-sm-4 cat-1 cat-2">
                                        <a class="fancybox" href="'.$hrefsp.'">
                                        <div class="item-thumbnail">
                                            <img src="'.BASEPATH.'Public/assets/images/'.$AnhSP.'" alt="'.$TenSP.'">
                                        <span class="ribbon sale">-35%</span>
                                        </div>
                                        </a>
                                        
                                        <div class="item-content">
                                        <div class="buttons">
                                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                                        </div><!-- /.buttons -->
                        
                                        <h3 class="item-title"><a href="'.$hrefsp.'">'.$TenSP.'</a></h3>
                                        <div class="item-price">
                                            <span class="currency">$</span>
                                            <span class="price">'.$GiaSP.'</span>
                                        </div>
                        
                                        <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->
                                        </div><!-- /.item-content -->
                                    </div>';
            }
            return $html_dssp_home;
        }


        function show_all_products($dssp){
            $html_dssp_all_product='';
            foreach ($dssp as $item) {
                extract($item);
                $hrefsp=BASEPATH.'product/detail/'.$IDSP;
                $html_dssp_all_product.= '<div class="col-sm-4">
                                        <div class="item">
                                        <a class="fancybox" href="images/home08/featured/9.jpg">
                                        <div class="item-thumbnail">
                                            <img src="'.BASEPATH.'Public/assets/images/'.$AnhSP.'" alt="'.$TenSP.'">
                                            
                                        </div><!-- /.item-thumbnail -->
                                        </a>
                                        
                                        <div class="item-content">
                                            <div class="buttons">
                                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                                            </div><!-- /.buttons -->
                                            <h3 class="item-title"><a href="'.$hrefsp.'">'.$TenSP.'</a></h3><!-- /.item-title -->
                                            <div class="item-price">
                                            <span class="currency">$</span>
                                            <span class="price">'.$GiaSP.'</span>
                                            </div><!-- /.item-price -->
                                            <div class="rating">
                                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                                            </div><!-- /.rating -->

                                        </div><!-- /.item-content -->
                                        </div><!-- /.item -->
                                    </div>';
            }
            return $html_dssp_all_product;
        }
    }
?>