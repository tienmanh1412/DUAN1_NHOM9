<!-- Breadcrumb Section Begin -->
<?php
    if(isset($error) && $error != ""){
        echo $error;
    }else{
?>
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thanh toán</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <span>Thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span>Có phiếu giảm giá? <a href="#">Bấm vào đây</a> để nhập mã của bạn
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Thông tin khách hàng</h4>
                <?php
                    foreach($info_user as $info){
                        extract($info);
                    }
                ?>
                <form action="index.php?act=checkout" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ của bạn<span>*</span></p>
                                        <input type="text" name="firstname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Tên của bạn<span>*</span></p>
                                        <input type="text" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" placeholder="Địa chỉ" name="address" class="checkout__input__add" value="<?=$info['address']; ?>">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text" name="tel" value="<?=$info['tel']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" value="<?=$info['email']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="type_checkout">
                                        <p>Hình thức thanh toán<span>*</span></p>
                                        <input type="radio" id="tienmat" name="payment" value="tienmat"> <label for="tienmat">Thanh toán khi nhận hàng</label><br>
                                        <input type="radio" id="vnpay" name="payment" value="vnpay"> <label for="vnpay">Thanh toán bằng <img src="img/VNPAY-Logo-yGapP.png" alt="" height="30px" width="70px"></label><br>
                                        <input type="radio" id="momo" name="payment" value="momo"> <label for="momo">Thanh toán bằng <img src="img/931b119cf710fb54746d5be0e258ac89-logo-momo.png" alt="" height="40px" width="40px"></label>
                                    </div>
                                </div>
                            </div>
                            <?php
                                if(isset($errorPayment) && $errorPayment != ''){
                                    echo "<p style='color:red;'>".$errorPayment."</p>";
                                }
                            ?>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                            <?php
                                $i = 0;
                                $total_amount = 0;
                                
                                foreach ($_SESSION['mycart'] as $cart) {
                                    $img_pro = $img_path . $cart[2];
                                    $xoasp = "<td class='shoping__cart__item__close'>
                                        <a href='index.php?act=delcart&idcart=" . $i . "' class='icon_close'></a>
                                    </td>";
                                    $suasp = "<td class='shoping__cart__item__close'>
                                        <button class='icon_loading'></button>
                                    </td>";
                                    $price = $cart[3];
                                    $quantity = isset($_POST['quantity'][$i]) ? intval($_POST['quantity'][$i]) : $cart[4];
                                    if (!is_numeric($price) || !is_numeric($quantity)) {                
                                        $i += 1;  
                                        continue;
                                    }
                                    $ttien = $price * $quantity;
                                    $total_amount += $ttien;
                                }
                            ?>
                                <h4>Đơn hàng</h4>
                                <div class="checkout__order__products">Các sản phẩm <span>Tổng cộng</span></div>
                                <ul>
                                    <?php
                                        foreach ($_SESSION['mycart'] as $cart) {
                                    ?>
                                        <li style="font-weight: 700;"><?= $cart[1]; ?> <span style="color: #1c1c1c;"><?=number_format($cart[3], 0, ',', '.'); ?>đ</span></li>
                                        <p style="font-size: 14px;">Số lượng: <?=$quantity[$i]; ?></p>
                                        <p style="font-size: 14px;"><?=$cart[5]; ?>, <?=$cart[6]; ?></p>
                                    <?php } ?>
                                </ul>
                                <div class="checkout__order__subtotal">Tổng phụ <span><?=number_format($total_amount, 0, ',', '.'); ?>đ</span></div>
                                <?php
                                    if(isset($cart[9])){
                                ?>
                                    <div class="checkout__order__total">Mã giảm <span><?=number_format($cart[8], 0, ',', '.'); ?>đ</span></div>
                                    <div class="checkout__order__total">Tổng thanh toán <span><?=number_format(($total_amount - $cart[8]), 0, ',', '.'); ?>đ</span></div>
                                <?php }else{ ?>
                                    <div class="checkout__order__total">Tổng thanh toán <span><?=number_format(($total_amount - 0), 0, ',', '.'); ?>đ</span></div>
                                <?php } ?>
                                <button name="redirect" type="submit" class="site-btn">ĐẶT HÀNG</button>
                                <?php
                                    if(isset($error) && $error != ""){ 
                                        echo $error;
                                ?>
                                <?php }else{ ?>
                                        <input type="hidden" name="id_user" value="<?= $_SESSION['user_id']; ?>">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
<?php } ?>