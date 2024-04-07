<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/bg-trangsp.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Thể loại</h4>
                            <ul>
                                <li><a href="#">Tất cả</a></li>
                                <li><a href="#">Sắc đẹp</a></li>
                                <li><a href="#">Phong cách</a></li>
                                <li><a href="#">Kích cỡ</a></li>
                                <li><a href="#">Độc đáo</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Tin tức gần đây</h4>
                            <div class="blog__sidebar__recent">
                                <?php
                                    foreach ($list_tintuc as $tintucnew){
                                        extract($tintucnew);
                                        $img_pro = $img_path . $img;
                                        echo "
                                        <a href='#' class='blog__sidebar__recent__item'>
                                    <div class='blog__sidebar__recent__item__pic'>
                                        <img src='".$img_pro."' alt=''>
                                    </div>
                                    <div class='blog__sidebar__recent__item__text'>
                                        <h6><a href='index.php?act=blog_details'>" . $tieude . "</a><br /></h6>
                                        <span>".$ngaydang."</span>
                                    </div>
                                </a>
                                        ";
                                    }
                                ?>
                                <!-- <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Váy áo đánh tennis, tập gym tôn vòng 1 gần 90cm của cô gái Tây Ban Nha hút 3 triệu fans<br /></h6>
                                        <span>2/11/2023</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>
                                            Hoa hậu Ý Nhi tiếp tục xin lỗi<br /></h6>
                                        <span>2/11/2023</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>“Tiểu thư RMIT xinh nhất Đà Nẵng" diện áo lộ vòng eo, đẹp nổi bật ở Đại lộ Danh vọng <br /></h6>
                                        <span>2/11/2023</span>
                                    </div>
                                </a> -->
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Tìm kiếm</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Thời trang hiện nay</a>
                                <a href="#">Phong cách</a>
                                <a href="#">Sắc đẹp</a>
                                <a href="#">Áo khoác</a>
                                <a href="#">Quần áo thể thao</a>
                                <a href="#">Áo mùa hè</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <?php
                        foreach ($list_tintuc as $tintuc){
                            extract($tintuc);
                            $img_pro = $img_path . $img;
                            $linktintuc = "index.php?act=blog_details&idtt=" .$id;
                            echo "
                            <div class='col-lg-6 col-md-6 col-sm-6'>
                            <div class='blog__item'>
                                <div class='blog__item__pic'>
                                    <img src='".$img_pro."' alt=''>
                                </div>
                                <div class='blog__item__text'>
                                    <ul>
                                        <li><i class='fa fa-calendar-o'></i>".$ngaydang."</li>
                                        <li><i class='fa fa-comment-o'></i> 5</li>
                                    </ul>
                                    <h5><a href='$linktintuc'>".$tieude."</a></h5>
                                    <p>".$noidung." </p>
                                    <a href='#' class='blog__btn'>ĐỌC THÊM <span class='arrow_right'></span></a>
                                </div>
                            </div>
                        </div>
                            ";
                        }
                        ?>
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-2.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>2/11/2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">
                                        2 nữ CEO công ty Việt đẹp bền bỉ ở tuổi U35, xứng danh "đệ nhất hot girl" một thời</a></h5>
                                    <p>Hãy mặc theo phong cách của bạn </p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-3.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 2/11/2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Á hậu Miss Grand thời diễn lót trong MV Hà Hồ: Gương mặt khó nhận ra, lên hình 10 giây</a></h5>
                                    <p>Hãy mặc theo phong cách của bạn </p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-1.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 2/11/2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Vẻ đẹp chuẩn "búp bê lực lưỡng", cuồn cuộn gân cơ của Miu Lê nhờ tập gym nhiều năm mà có</a></h5>
                                    <p>Hãy mặc theo phong cách của bạn </p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-4.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 2/11/2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Nha đam và hương thảo giúp tẩy da đầu chết, mọc tóc nhanh</a></h5>
                                    <p>Hãy mặc theo phong cách của bạn </p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-4.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 2/11/2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Tierra Diamond ra mắt bộ sưu tập nhẫn cưới vàng 18K lấy cảm hứng từ biểu tượng thuần Việt</a></h5>
                                    <p>Hãy mặc theo phong cách của bạn </p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-6.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Đồng phục Hải Anh: Bước tiến mới trong thế giới thời trang đa chiều</a></h5>
                                    <p>Hãy mặc theo phong cách của bạn </p>
                                    <a href="#" class="blog__btn">ĐỌC THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->