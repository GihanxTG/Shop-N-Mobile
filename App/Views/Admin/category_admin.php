<?php require_once "header.php"; ?>
<?php 

    $cata_all = $data["All_Cata"];
    $catapage=new App\Models\AdminModel;
    $html_dsdm_all_cata=$catapage->show_category($cata_all);
    
?>
    <div class="container">
        <div class="content">
            <div class="content_category-box">
                <div class="category-header">
                    <div class="category_header-stt">STT</div>
                    <div class="category_header-category">Tên Danh mục</div>
                    <div class="category_header-operation">Thao tác</div>
                </div>

                <!-- Hiển thị danh mục lấy từ database -->
                <?=$html_dsdm_all_cata ?>
                

            </div>
        </div>

    </div>
<?php require_once "footer.php"; ?>