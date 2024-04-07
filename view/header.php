<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Rating star -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        .header__menu ul li a:hover{
            text-decoration: none;
        }
        .hero__categories ul li a:hover{
            text-decoration: none;
        }
        .categories__item h5 a:hover{
            text-decoration: none;
        }
        .featured__item__text h6 a:hover{
            text-decoration: none;
        }
        .latest-product__slider .latest-prdouct__slider__item a:hover{
            text-decoration: none;
        }
        .blog__item .blog__item__text h5 a:hover{
            text-decoration: none;
        }
        .header__logo a img{
            width: 120px;
            height: 80px;
        }
        .footer__about__logo a img{
            width: 120px;
            height: 80px;
        }
        .header__top__right__auth a:hover{
            text-decoration: none;
        }
        .header__top__right__auth a:active{
            text-decoration: none;
        }
        .humberger__menu__nav ul li a:active{
            text-decoration: none;
        }
        .humberger__menu__nav ul li a .header__menu__dropdown ul li a:active{
            text-decoration: none;
        }
        .banner__pic{
            height: 300px;
            width: 540px;
        }
        .banner__pic img{
            height: 100%;
            width: 100%;
        }
        .product__discount__item__text a:hover{
            text-decoration: none;
        }
        .sidebar__item a:hover{
            text-decoration: none;
        }
        .blog__sidebar__recent__item__pic{
            width: 100px;
        }
        .footer__widget ul li a:hover{
            text-decoration: none;
        }
        .footer__copyright__text p a:hover{
            text-decoration: none;
        }
        .latest-product__item__text{
            height: 120px;
        }
        .product__item__text h6 a:hover{
            text-decoration: none;
        }
        .product__details__tab__desc .avatar{
            height: 60px;
            width: 60px;
        }
        .product__details__tab__desc .avatar img{
            border-radius: 50%;
            width: 100%;
            height: 100%;
        }
        .product__details__tab__desc .content{
            margin-left: 20px;
        }
        .product__details__tab__desc .content p{
            margin-top: -15px;
        }
        .product__details__tab__desc .content a{
            font-weight: 700;
        }
        .product__details__tab__desc .content a:hover{
            text-decoration: none;
        }
        .product__details__text a{
            transition: 0.3s ease-in-out;
        }
        .product__details__text a:hover{
            text-decoration: none;
        }
        .product__details__text .color,
        .product__details__text .size{
            margin-bottom: 20px;
            display: inline-block;
            margin-right: 20px;
        }
        .product__details__text .color a{
            margin-right: 20px;
            color: #6f6f6f;
            font-weight: 700;
        }
        .product__details__text .size{
            margin-bottom: 20px;
        }
        .product__details__text .size input{
            border: 1px solid #f5f5f5;
            background-color: #f5f5f5;
            color: #6f6f6f;
            border-radius: 5px;
        }
        .price-range-wrap form input[type="number"]{
            margin-bottom: 20px;
        }
        .price-range-wrap form input[type="submit"]{
            color: #fff;
            background-color: #343a40;
            border: 1px solid #343a40;
            padding: 2px 15px;
            border-radius: 5px;
        }
        .sidebar__item form .color{
            color: #fff;
            background-color: #343a40;
            border: 1px solid #343a40;
            padding: 2px 15px;
            border-radius: 5px;
            margin-left: 20px;
            margin-top: 6px;
        }
        .sidebar__item form .size{
            color: #fff;
            background-color: #343a40;
            border: 1px solid #343a40;
            padding: 2px 15px;
            border-radius: 5px;
            margin-left: 20px;
            margin-top: 6px;
        }
        .blog__item .blog__item__pic{
            width: 350px;
            height: 220px;
        }
        .blog__item .blog__item__pic img{
            width: 100%;
            height: 100%;
        }
        .shoping__cart__item img{
            width: 150px;
        }
        .shoping__cart__btns a:hover{
            text-decoration: none;
        }
        .shoping__checkout a:hover{
            text-decoration: none;
            transition: 0.3s ease-in-out;
        }
        .shoping__cart__item__close a:hover{
            text-decoration: none;
        }
        .shoping__cart__item__close button{
            border: 1px solid #fff;
            background-color: #fff;
            font-size: small;
        }
        .shoping__cart__item h5{
            font-size: 18px;
        }
        .product__details__quantity form .color input[type="radio"]{
            display: none;
        }
        .product__details__quantity form .color label{
            border: 1px solid #eaeaea;
            padding: 5px 10px;
        }
        .product__details__quantity form .color input[type="radio"]:checked + label {
            border: 1px solid #343a40;
            background-color: #f9f9f9;
        }
        .product__details__quantity form .size input[type="radio"]{
            display: none;
        }
        .product__details__quantity form .size label{
            border: 1px solid #eaeaea;
            padding: 5px 10px;
        }
        .product__details__quantity form .size input[type="radio"]:checked + label {
            border: 1px solid #343a40;
            background-color: #f9f9f9;
        }
        .rating-box {
            padding: 25px 50px;
            background-color: #f1f1f1;
            border-radius: 25px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        .rating_box .stars {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 25px;
        }
        .stars i {
            font-size: 35px;
            color: #b5b8b1;
            transition: all 0.2s;
            cursor: pointer;
        }
        .stars i.active {
            color: #ffb851;
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php"><img src="img/logo_new.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>
                    <?php
                        $cart = [];
                        if(isset($_SESSION['mycart'])){
                            $cart = $_SESSION['mycart'];
                        }
                        $count = 0;
                        foreach($cart as $num){
                            $count += $num['qty'];
                        }
                    ?>
                </span></a></li>
            </ul>
            <div class="header__cart__price">Tổng: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>Tiếng Việt</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Tiếng Việt</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i>Đăng nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="">Trang chủ</a></li>
                <li><a href="index.php?act=dmsanpham">Sản phẩm</a></li>
                <li><a href="#">Trang</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="index.php?act=ctsanpham">Chi tiết cửa hàng</a></li>
                        <li><a href="index.php?act=cart">Giỏ hàng</a></li>
                        <li><a href="./checkout.html">Thanh toán</a></li>
                        <li><a href="./blog-details.html">Chi tiết blog</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>manhntph42141@gmail.com</li>
                <li>Miễn phí vận chuyển</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>hieulmph34519@gmail.com</li>
                                <li>Miễn phí vận chuyển</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>Tiếng Việt</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <?php
                                if(isset($_SESSION['user']) && $_SESSION['user'] != ''){
                            ?>
                                <div class="header__top__right__auth">
                                    <a href="index.php?act=info_user"><i class="fa fa-user"></i> <?php echo $_SESSION['user']; ?></a>
                                    <a href="index.php?act=logout">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
                                        Đăng xuất
                                    </a>
                                </div>
                            <?php }else{ ?>
                                <div class="header__top__right__auth">
                                    <a href="index.php?act=login"><i class="fa fa-user"></i> Đăng nhập</a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="index.php"><img src="img/logo_new.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Trang chủ</a></li>
                            <li><a href="index.php?act=dmsanpham">Sản phẩm</a></li>
                            <li><a href="">Trang</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="index.php?act=cart">Giỏ hàng</a></li>
                                    <li><a href="index.php?act=checkout">Thanh toán</a></li>
                                    <li><a href="index.php?act=follow">Theo dõi đơn hàng</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?act=tintuc">Blog</a></li>
                            <li><a href="index.php?act=contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="index.php?act=cart"><i class="fa fa-shopping-bag"></i> <span>
                            <?php
                                $cart = [];
                                if(isset($_SESSION['mycart'])){
                                    $cart = $_SESSION['mycart'];
                                }
                                $count = 0;
                                $sum_sp = 0;
                                foreach($cart as $num){
                                    $count += $num[4];
                                    $sum_sp += (int)$num[3] * (int)$num[4];
                                }
                                echo $count;
                            ?>
                            </span></a></li>
                        </ul>
                        <div class="header__cart__price">Tổng: <span><?=number_format($sum_sp, 0, ',', '.'); ?>đ</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->