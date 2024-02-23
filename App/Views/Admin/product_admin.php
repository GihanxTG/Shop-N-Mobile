<?php require_once "header.php"; ?>
<?php 

    $product_all = $data["All_product"];
    $productpage=new App\Models\AdminModel;
    $html_dssp_all_product=$productpage->show_products($product_all);

    $data = $data["danhmuc_all"];
    $html_danhmuc='';
    foreach($data as $item){
      extract($item);
      $html_danhmuc.='<option value="'.$categories_id.'">'.$name.'</option>';
    }
    
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
                  <form method="post" action="<?=BASEPATH?>admin/addproduct" enctype="multipart/form-data">
                    <fieldset>
                      <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Ex: iphone 15 pro max">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" id="image" name="image" class="form-control" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="Ex: $999">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Quantity</label>
                        <input type="text" id="stock_quantity" name="stock_quantity" class="form-control" placeholder="Ex: 999">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" id="description" name="description" class="form-control" placeholder="Description ....">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <select id="categories_id" name="categories_id" class="form-select">
                            <!-- <option>...</option>
                            <option>Áo</option>
                            <option>Quần</option>
                            <option>Áo khoác</option> -->
                            <?=$html_danhmuc?>
                        </select>
                      </div>
                      
                      <button type="submit" name="btnaddproduct" class="btn btn-primary">Thêm</button>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
<?php require_once "footer.php"; ?>