<?php require_once "header.php"; ?>
<?php 

    $product_all = $data["All_product"];
    $productpage=new App\Models\AdminModel;
    $html_dssp_all_product=$productpage->show_products($product_all);
    
?>
    <div class="container">
        <div class="content">
            <div class="content_product-box">
                <div class="header_content">
                    <div class="header_content-info">
                        Product
                    </div>
                    <button class="header_content-btn" id="showFormBtn">
                        <i class="fa-solid fa-plus"></i> 
                        Add new product
                    </button>
                </div>
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

            <div class="overlay" id="overlay"></div>

            <div class="card form-container" id="formContainer">
            <div class="card-body">
                <span class="close" id="closeForm">&times;</span>
              <h5 class="card-title fw-semibold mb-4">Thêm sản phẩm</h5>
              <div class="card mb-0">
                <div class="card-body">
                  <form method="post" action="">
                    <fieldset>
                      <div class="mb-3">
                        <label for="" class="form-label">Tên sản phẩm</label>
                        <input type="text" id="tensp" class="form-control" placeholder="Ex: BLACK NOTHING 2 FEAR SHORT">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Hình ảnh</label>
                        <input type="file" id="hinhanhsp" class="form-control" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Giá</label>
                        <input type="text" id="giasp" class="form-control" placeholder="Ex: 100.000 vnd">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Mô tả</label>
                        <input type="text" id="motasp" class="form-control" placeholder="Mô tả ....">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Danh mục</label>
                        <select id="iddm" class="form-select">
                            <option>...</option>
                            <option>Áo</option>
                            <option>Quần</option>
                            <option>Áo khoác</option>
                        </select>
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Thêm</button>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
<?php require_once "footer.php"; ?>