<?php
    function loadone_voucher($coupon){
        $sql = "SELECT * FROM voucher WHERE ma_voucher = '$coupon'";
        return pdo_query_one($sql);
    }

    // function applyDiscountToCart($coupon_code, $cart) {
    //     $coupon = loadone_voucher($coupon_code);
    
    //     if ($coupon && $coupon['so_tien_giam'] > 0) {
    //         foreach ($cart as $item) {
    //             // Áp dụng giảm giá cho mỗi sản phẩm trong giỏ hàng
    //             $item['price'] -= $coupon['so_tien_giam'];
    //         }
    //         unset($item); // Hủy tham chiếu để tránh tình trạng không mong muốn
    //     }
    
    //     return $cart;
    // }
?>  