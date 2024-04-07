<!-- Blog Details Hero Begin -->
<section class="blog-details-hero set-bg" data-setbg="img/bg-trangsp.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>Hãy mặc theo phong cách của bạn</h2>
                        <ul>
                            <li>Bởi Nguyễn Tiến Mạnh</li>
                            <li>30/3/2023</li>
                            <li>200k Bình luận</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Tìm kiếm...">
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
                            <h4>Tin tức thời trang gần đây</h4>
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
                <?php
                extract($onett);
                $img_pro = $img_path . $img;
                echo "
                <div class='col-lg-8 col-md-7 order-md-1 order-1'>
                    <div class='blog__details__text'>
                        <img src='".$img_pro."' alt=''>
                        <p>".$noidung."</p>
                    </div>
                    <div class='blog__details__content'>
                        <div class='row'>
                            <div class='col-lg-6'>
                                <div class='blog__details__author'>
                                    <div class='blog__details__author__pic'>
                                        <img src='img/blog/details/details-author.jpg' alt=''>
                                    </div>
                                    <div class='blog__details__author__text'>
                                        <h6>Nguyễn Tiến Mạnh</h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-6'>
                                <div class='blog__details__widget'>
                                    <ul>
                                        <li><span>Thể loại:</span> Phong cách</li>
                                        <li><span>Tags:</span>Thời trang hiện nay, Phong cách, Sắc đẹp, Áo khoác, Quần áo thể thao, Áo mùa hè </li>
                                    </ul>
                                    <div class='blog__details__social'>
                                        <a href'#'><i class='fa fa-facebook'></i></a>
                                        <a href='#'><i class='fa fa-twitter'></i></a>
                                        <a href='#'><i class='fa fa-google-plus'></i></a>
                                        <a href='#'><i class='fa fa-linkedin'></i></a>
                                        <a href='#'><i class='fa fa-envelope'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";

                ?> 
                <!-- <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="img/blog/details/details-pic.jpg" alt="">
                        <p>Những bộ trang phục của Taylor Swift đã chiếm giữ tâm trí chúng ta, đóng vai trò là nguồn cảm hứng thời trang mùa thu hoàn hảo.
                            Trang phục mùa thu của Taylor Swift luôn gây chú ý với công chúng, khiến fan của cô Swifties cũng như những người yêu thời trang 
                            đều tìm đến ca sĩ để lấy cảm hứng thời trang mùa thu. Giống như tất cả các album của cô ấy, Swift biết cách giữ cho nó trở nên thú 
                            vị bằng cách thay đổi nó: Đối với buổi tối hẹn hò với bạn trai Travis Kelce, trang phục của Swift thiên về khía cạnh quyến rũ hơn 
                            chẳng hạn như một chiếc áo crop top in hoa của Jean Paul Gaultier bên ngoài áo lót màu đen, một chiếc váy ngắn màu đen và đôi bốt combat.</p>
                        <h3>Những bộ trang phục gợi cảm của Swift tiếp tục xuất hiện trong một buổi hẹn hò khác, lần này là áo crop top màu đen, quần tây, giày cao gót
                             và áo khoác maxi vừa vặn màu xám.</h3>
                        <p>Trong khi tận hưởng buổi tối đi chơi với nhóm bạn thân bao gồm Blake Lively, Sophie Turner và Brittany Mahomes - ca sĩ  của ca khúc "Karma"
                             đã thực hiện một cách tiếp cận tán tỉnh, quyến rũ hơn khi cô ấy được chụp ảnh trong chiếc váy đen nhỏ cổ điển và giày cao gót màu đen.
                              Bảng tâm trạng về trang phục của Swift cũng có thể phân loại chiếc váy sau bữa tiệc VMAs 2023 của cô ấy vào cột "vui vẻ và tán tỉnh",
                               khi cô ấy mặc một chiếc váy ngắn denim tái chế của EB Denim với giày cao gót màu bạc và đôi môi đỏ đậm.</p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="img/blog/details/details-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>Nguyễn Đức Chung</h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Thể loại:</span> Phong cách</li>
                                        <li><span>Tags:</span>Thời trang hiện nay, Phong cách, Sắc đẹp, Áo khoác, Quần áo thể thao, Áo mùa hè </li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Bài đăng bạn có thể thích</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                    foreach ($list_tintuc as $tintucnew){
                    extract($tintucnew);
                    $img_pro = $img_path . $img;
                    echo "
                    <div class='col-lg-4 col-md-4 col-sm-6'>
                    <div class='blog__item'>
                        <div class='blog__item__pic'>
                            <img src='".$img_pro."' alt=''>
                        </div>
                        <div class='blog__item__text'>
                            <ul>
                                <li><i class='fa fa-calendar-o'></i>".$ngaydang."</li>
                                <li><i class='fa fa-comment-o'></i> 5</li>
                            </ul>
                            <h5><a href='#'>".$tieude."</a></h5>
                            <p>".$noidung."</p>
                        </div>
                    </div>
                </div>                   
                    ";
                    }
                ?>
                <!-- <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 2/11/2023</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Đón tháng 11 cùng trang sức gắn đá citrine sắc vàng, ngập tràn may mắn, ưu đãi lên đến 30%</a></h5>
                            <p>Hãy mặc theo phòng cách của bạn</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 2/11/2023</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Bất ngờ với thiết kế độc đáo trong BST áo gió Hải Anh?</a></h5>
                            <p>Hãy mặc theo phong cách của bạn </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 2/11/2023</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Đồng phục Hải Anh: Bước tiến mới trong thế giới thời trang đa chiều</a></h5>
                            <p>Hãy mặc theo phong cách của bạn </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->