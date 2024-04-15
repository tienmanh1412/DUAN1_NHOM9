<style>
    .stylish-input input {
        width: 200px;
        padding: 5px 10px;
        font-size: 16px;
        border: 1px solid #212529;
        border-radius: 5px;
        outline: none;
        transition: border-color 0.3s;
    }

    .stylish-input input:focus {
        border-color: #2185d0;
    }
</style> 
<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/bg-trangsp.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Chi tiết sản phẩm</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Chi tiết sản phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <?php extract($onesp); ?> 
    <section class="product-details spad">
    <div class="container">
        <div class="row">
            <?php
                $img_pro = $img_path . $img;
            ?>
            <div class='col-lg-6 col-md-6'>
                <div class='product__details__pic'>
                    <div class='product__details__pic__item'>
                        <img class='product__details__pic__item--large' src='<?=$img_pro; ?>' alt=''>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/product/details/product-details-1.jpg" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div>
                    </div>
                </div> -->
            <div class='col-lg-6 col-md-6'>
                <div class='product__details__text'>
                    <h3><?=$name; ?></h3>
                    <div class='product__details__rating'>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star-half-o'></i>
                        <span>(<?=$luotxem; ?>)</span>
                    </div>
                    <div class='product__details__price'><?=number_format($price, 0, ',', '.'); ?>đ</div>
                    <p><?=$mota; ?></p>
                    <?php
                        foreach($ctsp as $key){
                            extract($key);
                        }
                    ?>
                    <div class='product__details__quantity'>
                        <?php
                            if(!empty($error_cart)){
                                echo "<p style='color:red;'>".$error_cart."</p>";
                            }else{
                        ?>
                        <form method="post" action="index.php?act=cart">
                            <input type="hidden" id="productId" name="id" value="<?=$id;?>">
                            <input type="hidden" name="name" value="<?=$name;?>">
                            <input type="hidden" name="img" value="<?=$img;?>">
                            <input type="hidden" name="price" value="<?=$price;?>">
                            <?php
                                foreach($ctsp as $key){
                                    extract($key);
                                    echo "<div class='color'>
                                            <input type='radio' id='".$color."' name='color' value='".$color."'> <label for='".$color."'>".$color."</label>
                                        </div>";
                                }
                            ?>
                            <br>
                            <?php
                                foreach($ctsp as $key){
                                    extract($key);
                                    echo "<div class='size'>
                                            <input type='radio' id='".$size."' name='size' value='".$size."'> <label for='".$size."'>".$size."</label>
                                        </div>";
                                }
                            ?>
                            <br>
                            <?php
                                include "model/offset.php";
                                $sql = mysqli_query($conn, "SELECT * FROM chi_tiet_san_pham WHERE color = 'vàng'");
                                if($result = $sql->num_rows > 0){
                                    $row = $sql->fetch_assoc();
                                    $soLuong = $row['soluong'];
                                }
                            ?>
                            <div class='product__details__quantity'>
                                <div class='quantity'>
                                    <div class='stylish-input'>
                                        <input type="number" pattern="\d*" id="quantityInput" value="1" min="1" max="<?=$soLuong; ?>" name="qty" oninput="checkQuantity()">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                          
                            <input id="addToCartBtn" data-id="<?= $id; ?>" type='submit' class='primary-btn' name='cart' value="Thêm vào giỏ hàng" onclick="addToCart(event)"></input>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Miêu tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Thông tin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Đánh giá <span>(<?=$count; ?>)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Miêu tả</h6>
                                    <p><?=$mota; ?></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin</h6>
                                    <p>Bảng size: <br>
                                        - Size S: Cân nặng: 53-60kg; Ngang vai: 45cm; Rộng ngực: 51cm; Dài áo: 70cm <br>
                                        - Size M: Cân nặng 60-68kg; Ngang vai: 46cm; Rộng ngực: 53cm; Dài áo: 72cm <br>
                                        - Size L:  Cân nặng 68-78kg; Ngang vai:47cm; Rộng ngực: 55cm; Dài áo: 74cm <br>
                                        - Size XL: Cân nặng 78-85kg; Ngang vai: 48cm; Rộng ngực: 57cm; Dài áo: 76cm <br>
                                        
                                        Chất liệu: Jean 100% Cotton <br>
                                        Form áo: Regular <br>
                                        Đặc điểm: <br>
                                        Áo Khoác Jean Drafting All Black Basic là sự kết hợp hoàn hảo giữa phong
                                        cách đương đại và sự thoải mái. Với thiết kế màu đen đơn giản và tối màu, 
                                        sản phẩm này là lựa chọn hoàn hảo cho những ngày se lạnh hoặc để tạo điểm nhấn
                                        cho trang phục của bạn. Áo khoác jean với cổ cài nút giúp bạn thể hiện phong cách
                                        cổ điển và cá nhân hóa, túi hai bên đựng đồ cá nhân và giữ tay ấm. Thiết kế rã rập
                                        đem đến hơi hướng sáng tạo đột phá, không theo lối mòn.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <iframe src="view/comment/form-comment.php?idpro=<?php echo $id; ?>" frameborder="0" width="100%" min-height="300px"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    foreach($sanpham_cungloai as $sanpham_cungloai){
                        extract($sanpham_cungloai);
                        $img_pro = $img_path . $img;
                        $link = "index.php?act=ctsanpham&idsp=" . $id;
                        echo "
                        <div class='col-lg-3 col-md-4 col-sm-6'>
                            <div class='product__item'>
                                <div class='product__item__pic set-bg' data-setbg='" . $img_pro . "'>
                                    <ul class='product__item__pic__hover'>
                                        <li><a href='#'><i class='fa fa-heart'></i></a></li>
                                        <li><a href='#'><i class='fa fa-retweet'></i></a></li>
                                        <li><a href='#'><i class='fa fa-shopping-cart'></i></a></li>
                                    </ul>
                                </div>
                                <div class='product__item__text'>
                                    <h6><a href='".$link."'>".$name."</a></h6>
                                    <h5>".number_format($price, 0, ',', '.')."đ</h5>
                                </div>
                            </div>
                        </div>
                        ";
                    } 
                ?>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    function checkQuantity() {
        var input = document.getElementById('quantityInput');
        var currentQuantity = parseInt(input.value);

        if (currentQuantity > <?=$soLuong; ?>) {
            input.setCustomValidity('Số lượng đã vượt quá giới hạn!');
        } else {
            input.setCustomValidity('');
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const incrementButton = document.querySelector('.increment');
        const decrementButton = document.querySelector('.decrement');
        const input = document.querySelector('.number-input input');

        incrementButton.addEventListener('click', function() {
            input.stepUp();
        });

        decrementButton.addEventListener('click', function() {
            input.stepDown();
        });
    });

    function addToCart(event) {
         
        var isValid = true; // Thay bằng kiểm tra điều kiện của bạn

        // Kiểm tra xem đã chọn màu và size chưa
        var selectedColor = document.querySelector('input[name="color"]:checked');
        var selectedSize = document.querySelector('input[name="size"]:checked');

        if (!selectedColor || !selectedSize) {
            isValid = false;
            alert("Vui lòng chọn màu và size trước khi thêm vào giỏ hàng!");
            event.preventDefault();
        }
        
    }
</script>