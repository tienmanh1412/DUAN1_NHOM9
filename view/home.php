<!-- Hero Section Begin -->
<section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all active">
                            <i class="fa fa-bars"></i>
                            <span>Menu sản phẩm</span>
                        </div>
                        <ul>
                            <?php
                                foreach($loadall_danhmuc as $list){
                                    extract($list);
                            ?>
                                <li><a href="index.php?act=dmsanpham&iddm=<?=$id; ?>"><?=$name; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Kết quả đã tìm
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Bạn cần tìm thứ gì ?">
                                <button type="submit" class="site-btn">Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0325147718</h5>
                                <span>Hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="banner">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="img/banner/banner3.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/banner/banner4.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/banner/banner5.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php
                        foreach($list_danhmuc as $list){
                            extract($list);
                            $img_pro = $img_path . $img;
                            echo "
                            <div class='col-lg-3'>
                                <div class='categories__item set-bg' data-setbg='".$img_pro."'>
                                    <h5><a>".$name."</a></h5>
                                </div>
                            </div>
                            ";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm đặc biệt</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">Tất cả</li>
                        <?php
                            foreach($list_danhmuc as $list){
                                extract($list);
                                echo "<li data-filter=''>".$name."</li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php
                foreach($list_sp_discount as $list){
                    extract($list);
                    $link = "index.php?act=ctsanpham&idsp=" . $id;
                    $img_pro_main = $img_path . $img;
                    echo "
                    <div class='col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat'>
                        <div class='featured__item'>
                            <div class='featured__item__pic set-bg' data-setbg='".$img_pro_main."'>
                                <ul class='featured__item__pic__hover'>
                                    <li><a href='#'><i class='fa fa-heart'></i></a></li>
                                    <li><a href='#'><i class='fa fa-retweet'></i></a></li>
                                    <li><a href='#'><i class='fa fa-shopping-cart'></i></a></li>
                                </ul>
                            </div>
                            <div class='featured__item__text'>
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
<!-- Featured Section End -->