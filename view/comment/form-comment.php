<?php
    session_start();
    ob_start();
?>  
<?php
    if(isset($_SESSION['user_id'])){
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];
    $iduser = $_SESSION['user_id'];
    $dsbl = loadall_binhluan($idpro);
?>

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
        .product__details__tab__desc{
            display: flex;
            margin-bottom: 18px;
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
            margin-top: -5px;
        }
        .product__details__tab__desc .content a{
            font-weight: 700;
        }
        .product__details__tab__desc .content a:hover{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php 
        foreach($dsbl as $list){
            extract($list);
    ?>
        <div class="product__details__tab__desc">
            <div class="avatar">
                <img src="../../img/register.jpg" alt="">
            </div>
            <div class="content">
                <h6><?php echo $user; ?></h6>
                <p><?php echo $noidung; ?></p>
                <a href="">Trả lời</a>
            </div>
        </div>
    <?php } ?>
    <div class="form-addcomment">
        <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="idpro" value="<?php echo $idpro; ?>">
            <input type="hidden" name="iduser" value="<?php echo $iduser; ?>">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" id="inputPassword2" name="noidung" placeholder="Nhập bình luận...">
            </div>
            <button type="submit" class="btn btn-outline-dark mb-2" name="guibinhluan">Gửi bình luận</button>
        </form>
    </div>

    <?php
        if(isset($_POST['guibinhluan'])){
            $iduser = $_POST['iduser'];
            $idpro = $_POST['idpro'];
            $noidung = $_POST['noidung'];
            $ngaybinhluan = date("Y-m-d");
            try {
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                header("location:".$_SERVER['HTTP_REFERER']);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</html>
<?php }else{ ?>
    <a href="../../index.php?act=login" target="_parent">Bạn phải đăng nhập để có thể bình luận sản phẩm này</a>
<?php } ?>