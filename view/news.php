<!-- Blog Section Begin -->
<section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Tin tức</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php
                    foreach ($list_tintuc as $tintucmoi){
                        extract($tintucmoi);
                        $img_pro = $img_path . $img;
                        $linktintuc = "index.php?act=blog_details&idtt=" .$id;
                        echo "
                        <div class='col-lg-4 col-md-4 col-sm-6'>
                            <div class='blog__item'>
                                <div class='blog__item__pic'>
                                    <img src='".$img_pro."' alt=''>
                                </div>
                                <div class='blog__item__text'>
                                    <ul>
                                        <li><i class='fa fa-calendar-o'></i>".$ngaydang."</li>
                                    </ul>
                                    <h5><a href='".$linktintuc."'>
                                    ".$tieude."
                                    </a></h5>
                                    <p>".$noidung." </p>
                                </div>
                            </div>
                        </div>
                        ";
                    }
               ?>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->