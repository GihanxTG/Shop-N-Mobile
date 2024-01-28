<?php require_once "header.php"; ?>
<?php 
    $dsdm_show = $data["categories"];
    $homepage=new App\Models\AdminModel;
    $html_dsdm_cattegory=$homepage->show_category($dssp_show);
    

?>
    <div class="container">
        <div class="content">
            <div class="header_content">
                <div class="header_content-info">
                    Danh mục sản phẩm
                </div>
                <button class="header_content-btn">
                    <i class="fa-solid fa-plus"></i> 
                    Thêm sản phẩm mới
                </button>
            </div>
            <div class="content_category-box">
                <div class="category-header">
                    <div class="category_header-stt">STT</div>
                    <div class="category_header-category">Tên Danh mục</div>
                    <div class="category_header-operation">Thao tác</div>
                </div>

                <!-- Hiển thị danh mục lấy từ database -->
                <div class="category_wrapper">
                    <div class="category_stt">1</div>
                    <div class="category_category">Thời Trang Nam</div>
                    <div class="category_operation">
                        <a href="#" class="category_operation-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="#" class="category_operation-delete"><i class="fa-regular fa-trash-can"></i></a>
                    </div>
                </div>
                <?=$html_dsdm_cattegory?>
                

            </div>
        </div>

    </div>
<?php require_once "footer.php"; ?>