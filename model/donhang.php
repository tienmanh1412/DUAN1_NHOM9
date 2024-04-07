<?php
    function loadall_donhang(){
        $sql = "SELECT *, trang_thai.name_tt
        FROM don_hang
        INNER JOIN trang_thai ON trang_thai.id = don_hang.id_trangthai
        ORDER BY id_dh DESC";
        $dh = pdo_query($sql);
        return $dh;
    }

    function insert_vnpay($vnp_Amount, $vnp_BankCode, $vnp_BankTranNo, $vnp_OrderInfo, $vnp_PayDate, $vnp_TmnCode, $vnp_CardType, $vnp_TransactionNo, $code_cart){
        $sql = "INSERT INTO vnpay(vnp_amount, vnp_bankcode, vnp_banktranno, vnp_orderinfo, vnp_paydate, vnp_tmncode, vnp_cardtype, vnp_transactionno, code_cart) 
        VALUES ('$vnp_Amount', '$vnp_BankCode', '$vnp_BankTranNo', '$vnp_OrderInfo', '$vnp_PayDate', '$vnp_TmnCode', '$vnp_CardType', '$vnp_TransactionNo', '$code_cart')";
        pdo_execute($sql);
    }

    function insert_momo($partner_code, $order_id, $amount, $order_info, $order_type, $trans_id, $pay_type){
        $sql = "INSERT INTO momo(partner_code, order_id, amount, order_info, order_type, trans_id, pay_type) 
        VALUES ('$partner_code', '$order_id', '$amount', '$order_info', '$order_type', '$trans_id', '$pay_type')";
        pdo_execute($sql);
    }

    function delete_donhang($id_dh){
        delete_ctdonhang($id_dh);
        $sql = "DELETE FROM don_hang WHERE id_dh=".$id_dh;
        pdo_execute($sql);
    }

    function delete_ctdonhang($id_dh){
        $sql = "DELETE FROM chi_tiet_don_hang WHERE ma_dh=".$id_dh;
        pdo_execute($sql);
    }

    function loadone_donhang($id_dh){
        $sql = "SELECT * FROM don_hang WHERE id_dh=".$id_dh;
        $dh = pdo_query_one($sql);
        return $dh;
    }

    function loadall_trangthai(){ 
        $sql = "SELECT * FROM trang_thai ORDER BY id DESC";
        $listctdh = pdo_query($sql);
        return $listctdh;
    }

    function update_donhang($id_donhang, $new_id_trangthai) {
        // Lấy trạng thái hiện tại
        $current_id_trangthai = get_current_id_trangthai($id_donhang);
    
        if ($current_id_trangthai < $new_id_trangthai) {
            // Cập nhật trạng thái
            $query = "UPDATE don_hang SET id_trangthai = $new_id_trangthai WHERE id_dh = $id_donhang";
            pdo_execute($query);
    
            $thongbao = "Cập nhật trạng thái thành công";
        } else {
            $thongbao = "Không thể chuyển từ trạng thái $current_id_trangthai sang trạng thái $new_id_trangthai";
        }

        return $thongbao;
    }

    function get_current_id_trangthai($id_donhang) {
        $query = "SELECT id_trangthai FROM don_hang WHERE id_dh = $id_donhang";
        $result = pdo_query_one($query);
    
        // Trả về id_trangthai hoặc một giá trị mặc định nếu không tìm thấy
        return isset($result['id_trangthai']) ? $result['id_trangthai'] : null;
    }
    
    function follow_order($id_user){
        $sql = "SELECT *, SUM(thanh_tien) as thanh_tien, san_pham.name, trang_thai.name_tt, don_hang.id_user 
        FROM chi_tiet_don_hang INNER JOIN san_pham ON san_pham.id = chi_tiet_don_hang.ma_sp 
        INNER JOIN don_hang ON don_hang.id_dh = chi_tiet_don_hang.ma_dh 
        INNER JOIN trang_thai ON trang_thai.id = don_hang.id_trangthai 
        WHERE don_hang.id_user = '$id_user' 
        GROUP BY don_hang.id_dh";
        $ctdh = pdo_query($sql);
        return $ctdh;
    }

    function ctdh($id_dh){
        $sql = "SELECT chi_tiet_don_hang.soluong, chi_tiet_don_hang.thanh_tien, san_pham.name,chi_tiet_don_hang.color,chi_tiet_don_hang.size
        FROM don_hang 
        INNER JOIN chi_tiet_don_hang ON don_hang.id_dh = chi_tiet_don_hang.ma_dh 
        INNER JOIN san_pham ON san_pham.id = chi_tiet_don_hang.ma_sp 
        WHERE id_dh = '$id_dh'";
        return pdo_query($sql);
    }

    function ctdh_order_detail($id_dh){
        $sql = "SELECT *, chi_tiet_don_hang.soluong, chi_tiet_don_hang.thanh_tien, 
        san_pham.name, trang_thai.name_tt
        FROM don_hang 
        INNER JOIN chi_tiet_don_hang ON don_hang.id_dh = chi_tiet_don_hang.ma_dh 
        INNER JOIN san_pham ON san_pham.id = chi_tiet_don_hang.ma_sp 
        INNER JOIN trang_thai ON trang_thai.id = don_hang.id_trangthai 
        WHERE id_dh = '$id_dh'";
        return pdo_query($sql);
    }

    function tt_order_detail($id_dh){
        $sql = "SELECT SUM(chi_tiet_don_hang.thanh_tien) AS thanhtien 
        FROM don_hang 
        INNER JOIN chi_tiet_don_hang ON don_hang.id_dh = chi_tiet_don_hang.ma_dh 
        INNER JOIN san_pham ON san_pham.id = chi_tiet_don_hang.ma_sp 
        INNER JOIN trang_thai ON trang_thai.id = don_hang.id_trangthai 
        WHERE id_dh = '$id_dh'";
        return pdo_query($sql);
    }

    function cart_status($id_status, $id_dh){
        $sql = "UPDATE don_hang SET cart_status = '$id_status' WHERE id_dh = '$id_dh'";
        pdo_execute($sql);
    }

    function tk_donhang($ma_dh){
        $sql = "SELECT * FROM `chi_tiet_don_hang`, `san_pham` 
        WHERE chi_tiet_don_hang.ma_sp = san_pham.id AND chi_tiet_don_hang.ma_dh = ".$ma_dh."
        ORDER BY chi_tiet_don_hang.id_ctdh DESC";
        return pdo_query($sql);
    }

    function tk_ngaydat($now){
        $sql = "SELECT * FROM thong_ke WHERE ngaydat = '$now'";
        return pdo_query($sql);
    }

    function insert_thongke($ngaydat, $donhang, $doanhthu, $soluongban){
        $sql = "INSERT INTO thong_ke(ngaydat, donhang, doanhthu, soluongban) VALUES ('$ngaydat', '$donhang', '$doanhthu', '$soluongban')";
        pdo_execute($sql);
    }

    function update_thongke($donhang, $doanhthu, $soluongban, $now){
        $sql = "UPDATE `thong_ke` SET `donhang` = '$donhang', `doanhthu` = '$doanhthu', `soluongban` = '$soluongban' WHERE ngaydat = '$now'";
        pdo_execute($sql);
    }
?>