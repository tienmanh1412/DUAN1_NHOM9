<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/bg-trangsp.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Sản phẩm</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                        <span>Sản phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Danh sách</h4>
                        <?php
                            foreach($loadall_danhmuc as $list){
                                extract($list);
                        ?>
                            <ul>
                                <li><a href="index.php?act=dmsanpham&iddm=<?=$id; ?>"><?=$name; ?></a></li>
                            </ul>
                        <?php } ?>
                    </div>
                    <div class="sidebar__item">
                        <h4>Giá Thành</h4>
                        <div class="price-range-wrap">
                            <form action="index.php" method="get" id="filterForm">
                                <label for="minPrice">Giá tối thiểu:</label>
                                <input type="number" pattern="\d*" min="1" id="minPrice" name="minPrice" value="<?= $minPrice; ?>">

                                <label for="maxPrice">Giá tối đa:</label>
                                <input type="number" id="maxPrice" name="maxPrice" pattern="\d*" min="1" value="<?= $maxPrice; ?>">
                                <br>
                                <input type="submit" value="Lọc">
                            </form>
                        </div>
                    </div>
                    <!-- <div class="sidebar__item">
                        <h4>Màu sắc</h4>
                        <form id="colorFilterForm">
                            <select id="color" name="color">
                                <option value="">Tất cả</option>
                                <option value="Đỏ">Đỏ</option>
                                <option value="Xanh">Xanh</option>
                                <option value="Vàng">Vàng</option>
                                <option value="Đen">Đen</option>
                            </select>
                            <input class="color" type="submit" value="Lọc">
                        </form>
                    </div> -->
                    <!-- <div class="sidebar__item">
                        <h4>Kích thước</h4>
                        <form id="sizeFilterForm" method="get" action="index.php">
                            <select id="size" name="size">
                                <option value="">Tất cả</option>
                                <?php
                                    foreach ($sp_with_dm as $sp){
                                        extract($sp);
                                        echo '<option value="'.$id.'">'.$size.'</option>';
                                    }
                                ?>
                            </select>
                            <input class="size" type="submit" value="Lọc">
                        </form>
                    </div> -->
                    <div class="sidebar__item">
                         <div class="latest-product__text">
                            <h4>Sản phẩm mới</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <?php
                                        foreach ($list_danhmuc as $dm) {
                                            extract($dm);
                                            $img_new = $img_path . $img;
                                            echo"
                                            <a href='#' class=latest-product__item'>
                                                <div class='latest-product__item__pic'>
                                                    <img src='".$img_new."' alt=''>
                                                </div>
                                                <div class='latest-product__item__text'>
                                                    <h6>".$name."</h6>
                                                    <span></span>
                                                </div>
                                            </a>
                                            ";
                                        }
                                    ?>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <?php
                                        foreach ($list_danhmuc as $dm) {
                                            extract($dm);
                                            $img_new = $img_path . $img;
                                            echo"
                                            <a href='#' class=latest-product__item'>
                                                <div class='latest-product__item__pic'>
                                                    <img src='".$img_new."' alt=''>
                                                </div>
                                                <div class='latest-product__item__text'>
                                                    <h6>".$name."</h6>
                                                    <span></span>
                                                </div>
                                            </a>
                                            ";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sắp xếp theo</span>
                                <select>
                                    <option value="0">Mặc định</option>
                                    <option value="0">Xu hướng</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span><?=$total_items; ?></span>sản phẩm được tìm thấy</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        foreach($sp_with_dm as $sp){
                            extract($sp);
                            $img_pro = $img_path . $img;
                            $link_sp = "index.php?act=ctsanpham&idsp=" . $id;
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?=$img_pro ?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="<?=$link_sp ?>"><?=$name; ?></a></h6>
                                    <h5><?=number_format($price, 0, ',', '.'); ?>đ</h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="product__pagination">
                    <?php
                        for($num = 1; $num <= $totalPages; $num++){
                            $pageUrl = "?act=dmsanpham&per_page={$item_per_page}&page={$num}";

                            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                                $pageUrl = "?act=dmsanpham&per_page={$item_per_page}&page={$num}&iddm={$iddm}";
                            } else {
                                $pageUrl = "?act=dmsanpham&per_page={$item_per_page}&page={$num}";
                            }

                            if (isset($minPrice) && isset($maxPrice)) {
                                $pageUrl .= "&minPrice={$minPrice}&maxPrice={$maxPrice}";
                            }

                    ?>
                            <?php
                                if($num != $current_page){
                            ?>
                            <?php if($num > $current_page - 3 && $num < $current_page + 3){ 
                            ?>
                                <a href="<?=$pageUrl; ?>"><?=$num; ?></a>
                            <?php } ?>
                            <?php }else{
                            ?>
                                <a style="background-color: #343a40; color: #fff;" href="<?=$pageUrl; ?>"><?=$num; ?></a>
                            <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('filterForm');
    const sizeForm = document.getElementById('sizeFilterForm');
    // giá
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // Lấy giá trị từ ô select
        var minPrice = document.getElementById('minPrice').value;
        var maxPrice = document.getElementById('maxPrice').value;

        // Chuyển hướng trang với tham số màu sắc mới
        const newUrl = `index.php?act=dmsanpham&minPrice=${minPrice}&maxPrice=${maxPrice}`;
        window.location.href = newUrl;
    });

    // size
    sizeForm.addEventListener('submit', function (event) {
        event.preventDefault();

        // Lấy giá trị từ ô select
        const selectedSize = document.getElementById('size').value;

        // Chuyển hướng trang với tham số kích thước mới
        const newUrl = `index.php?act=dmsanpham&size=${size}`;
        window.location.href = newUrl;
    });
});
</script>
<!-- Product Section End -->