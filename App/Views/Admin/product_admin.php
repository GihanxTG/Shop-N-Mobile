<?php require_once "header.php"; ?>
<?php 

    $product_all = $data["All_product"];
    $productpage=new App\Models\AdminModel;
    $html_dssp_all_product=$productpage->show_products($product_all);
    
?>
    <div class="container">
        <div class="content">
            <div class="content_product-box">
                <div class="product-header">
                    <div class="product_header-stt">STT</div>
                    <div class="product_header-img">Image</div>
                    <div class="product_header-name">Name</div>
                    <div class="product_header-description">Description</div>
                    <div class="product_header-price">Price</div>
                    <div class="product_header-price">View</div>
                    <div class="product_header-discount">Quantity</div>
                    <div class="product_header-discount">Categories</div>
                    <div class="product_header-operation">Button</div>
                </div>

                <?=$html_dssp_all_product?>
                <!-- <div class="product-wrapper">
                    <div class="product_stt">1</div>
                    <div class="product_img">
                        <img src="<?=BASEPATH?>Public/template1/src/assets/images/profile/avatar-user.jpg" alt="">
                    </div>
                    <div class="product_name">Tên Sản PhẩmTên Sản PhẩmTên Sản PhẩmTên Sản PhẩmTên Sản PhẩmTên Sản Phẩm</div>
                    <div class="product_description">Nội dung mô tả Nội dung mô tả Nội dung mô tả Nội dung mô tả</div>
                    <div class="product_price">99.000đ</div>
                    <div class="product_discount">view</div>
                    <div class="product_discount">quantity</div>
                    <div class="product_discount">categories</div>
                    <div class="product_operation">
                        <a href="#" class="product_operation-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="#" class="product_operation-delete"><i class="fa-regular fa-trash-can"></i></a>
                    </div>
                </div> -->


            </div>
        </div>

    </div>
<?php require_once "footer.php"; ?>