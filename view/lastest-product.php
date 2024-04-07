<!-- Latest Product Section Begin -->
<section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản phẩm mới nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                    foreach($list_danhmuc as $dm){
                                        extract($dm);
                                        $img_pro = $img_path . $img;
                                        echo"
                                        <a href='#' class='latest-product__item'>
                                        <div class='latest-product__item__pic'>
                                        <img src='".$img_pro."' alt=''>
                                        </div>
                                        <div class='latest-product__item__text'>
                                        <h6>"."$name"."</h6>
                                        <span>300.000đ</span>
                                        </div>
                                </a>
                                        ";
                                    }
                                ?>
                                <!-- <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo khoác</h6>
                                        <span>300.000 VND</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo vest</h6>
                                        <span>500.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo thể thao</h6>
                                        <span>120.000</span>
                                    </div>
                                </a> -->
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                    foreach($list_danhmuc as $dm){
                                        extract($dm);
                                        $img_pro = $img_path . $img;
                                        echo"
                                        <a href='#' class='latest-product__item'>
                                        <div class='latest-product__item__pic'>
                                        <img src='".$img_pro."' alt=''>
                                        </div>
                                        <div class='latest-product__item__text'>
                                        <h6>"."$name"."</h6>
                                        <span>300.000đ</span>
                                        </div>
                                </a>
                                        ";
                                    }
                                ?>
                                <!-- <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo khoác</h6>
                                        <span>300.000 VND</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo vest</h6>
                                        <span>500.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo thể thao</h6>
                                        <span>120.000</span>
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản phẩm bán chạy</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                     foreach($list_danhmuc as $dm){
                                        extract($dm);
                                        $img_pro = $img_path . $img;
                                        echo "
                                        <a href='#' class='latest-product__item'>
                                        <div class='latest-product__item__pic'>
                                        <img src='".$img_pro."' alt=''>
                                        </div>
                                        <div class='latest-product__item__text'>
                                        <h6>".$name."</h6>
                                        <span>300.000đ</span>
                                        </div>
                                </a>
                                        ";
                                     }
                                ?>
                                <!-- <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo khoác</h6>
                                        <span>300.000 VND</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo vest</h6>
                                        <span>500.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo thể thao</h6>
                                        <span>120.000</span>
                                    </div>
                                </a> -->
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                     foreach($list_danhmuc as $dm){
                                        extract($dm);
                                        $img_pro = $img_path . $img;
                                        echo "
                                        <a href='#' class='latest-product__item'>
                                        <div class='latest-product__item__pic'>
                                        <img src='".$img_pro."' alt=''>
                                        </div>
                                        <div class='latest-product__item__text'>
                                        <h6>".$name."</h6>
                                        <span>300.000đ</span>
                                        </div>
                                </a>
                                        ";
                                     }
                                ?>
                                <!-- <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo khoác</h6>
                                        <span>300.000 VND</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo vest</h6>
                                        <span>500.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo thể thao</h6>
                                        <span>120.000</span>
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản phẩm giới hạn</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                    foreach ($list_danhmuc as $dm)
                                    extract($dm);
                                    $img_pro = $img_path . $img;
                                    echo "
                                    <a href='#' class='latest-product__item'>
                                        <div class='latest-product__item__pic'>
                                            <img src='".$img_pro."' alt=''>
                                        </div>
                                        <div class='latest-product__item__text'>
                                            <h6>".$name."</h6>
                                            <span>300.000đ</span>
                                        </div>
                                    </a>
                                    ";
                                ?>
                                <!-- <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo khoác</h6>
                                        <span>300.000 VND</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo vest</h6>
                                        <span>500.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo thể thao</h6>
                                        <span>120.000</span>
                                    </div>
                                </a> -->
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <?php
                                    foreach ($list_danhmuc as $dm)
                                    extract($dm);
                                    $img_pro = $img_path . $img;
                                    echo "
                                    <a href='#' class='latest-product__item'>
                                        <div class='latest-product__item__pic'>
                                            <img src='".$img_pro."' alt=''>
                                        </div>
                                        <div class='latest-product__item__text'>
                                            <h6>".$name."</h6>
                                            <span>300.000đ</span>
                                        </div>
                                    </a>
                                    ";
                                ?>
                                <!-- <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo khoác</h6>
                                        <span>300.000 VND</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo vest</h6>
                                        <span>500.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Áo thể thao</h6>
                                        <span>120.000</span>
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->