<?php require_once "header.php"; ?>
<?php 

    $cata_all = $data["All_Cata"];
    $catapage=new App\Models\AdminModel;
    $html_dsdm_all_cata=$catapage->show_category($cata_all);
    
?>
    <div class="container">
        <div class="content">
            <div class="header_content">
                <div class="header_content-info">
                    Category
                </div>
                <button class="header_content-btn" id="showFormBtn">
                    <i class="fa-solid fa-plus"></i> 
                    Add new category
                </button>
            </div>
            <div class="content_category-box">
                <div class="category-header">
                    <div class="category_header-stt">STT</div>
                    <div class="category_header-category">Categories</div>
                    <div class="category_header-operation">Button</div>
                </div>

                <!-- Hiển thị danh mục lấy từ database -->
                <?=$html_dsdm_all_cata ?>
                

            </div>

            <div class="overlay" id="overlay"></div>

            <!-- <div class="form-container" id="formContainer">
                <span class="close" id="closeForm">&times;</span>
                <form>
                    <label for="productName">Tên Sản Phẩm:</label>
                    <input type="text" id="productName" name="productName" required>

                    <label for="productPrice">Giá Sản Phẩm:</label>
                    <input type="number" id="productPrice" name="productPrice" required>

                    <button type="submit">Thêm</button>
                </form>
            </div> -->
            <div class="card form-container" id="formContainer">
            <div class="card-body">
            <span class="close" id="closeForm">&times;</span>
              <h5 class="card-title fw-semibold mb-4">Add category</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Category name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">description</label>
                      <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>

    </div>
<?php require_once "footer.php"; ?>