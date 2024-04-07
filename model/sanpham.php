<?php
    function insert_sanpham($name,$price,$img,$mota,$iddm){
        $sql = "INSERT INTO san_pham(name, price, img, mota, iddm) VALUES ('$name', '$price', '$img', '$mota', '$iddm')";
        pdo_execute($sql);
    }

    function insert_chitietsp($color, $size, $soluong, $id_sp){
        $sql = "INSERT INTO chi_tiet_san_pham(color, size, soluong, id_sp) VALUES ('$color', '$size', '$soluong', '$id_sp')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "DELETE FROM san_pham WHERE id=".$_GET['id'];
        pdo_execute($sql);
    }

    function delete_ctsanpham($id){
        $sql = "DELETE FROM chi_tiet_san_pham WHERE id_ctsp=".$_GET['id_ctsp'];
        pdo_execute($sql);
    }

    function loadall_sanpham($kw="",$iddm = 0){
        $sql = "SELECT * FROM san_pham WHERE 1"; 
        if($kw !=""){
            $sql.=" AND name LIKE '%".$kw."%'";
        }
        if($iddm > 0){
            $sql.=" AND iddm = '".$iddm."'";
        }
        $sql.=" ORDER BY id DESC";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function loadall_sp_discount(){
        $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY id DESC LIMIT 0,8";
        $list_sanpham = pdo_query($sql);
        return $list_sanpham;
    }

    function load_color_sp(){
        $sql = "SELECT *, chi_tiet_san_pham.color
        FROM san_pham
        INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sp = san_pham.id
        ORDER BY chi_tiet_san_pham.id_sp";
        $sp = pdo_query($sql);
        return $sp;
    }

    function load_size_sp(){
        $sql = "SELECT *, chi_tiet_san_pham.size
        FROM san_pham
        INNER JOIN chi_tiet_san_pham ON chi_tiet_san_pham.id_sp = san_pham.id
        ORDER BY chi_tiet_san_pham.id_sp";
        $sp = pdo_query($sql);
        return $sp;
    }

    function loadall_sanpham_top3(){
        $sql= "SELECT * FROM san_pham WHERE 1 ORDER BY id DESC LIMIT 0,3";
        $list_sanpham = pdo_query($sql);
        return $list_sanpham;
    }

    function loadone_sanpham($id){
        $sql = "SELECT * FROM san_pham WHERE id= $id ";
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_sanpham($id, $name, $price, $img, $mota, $iddm){
        if($img != ""){
            $sql = "UPDATE `san_pham` SET `name` = '$name', `price` = '$price', `img` = '$img', `mota` = '$mota', `iddm` = '$iddm' WHERE `san_pham`.`id` = $id";
        }else{
            $sql = "UPDATE `san_pham` SET `name` = '$name', `price` = '$price', `mota` = '$mota', `iddm` = '$iddm' WHERE `san_pham`.`id` = $id";
        }
        pdo_execute($sql);
    }

    function update_ctsanpham($id_ctsp, $id_sp, $color, $size, $soluong){
        $sql = "UPDATE `chi_tiet_san_pham` SET `id_ctsp` = '$id_ctsp', `id_sp` = '$id_sp', `color` = '$color', `size` = '$size', `soluong` = '$soluong' WHERE `chi_tiet_san_pham`.`id_ctsp` = $id_ctsp";
        pdo_execute($sql);
    }

    function loadall_spct(){
        $sql = "SELECT *, san_pham.name 
        FROM chi_tiet_san_pham 
        INNER JOIN san_pham ON san_pham.id = chi_tiet_san_pham.id_sp
        WHERE 1";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function loadall_sp(){
        $sql = "SELECT * FROM san_pham ORDER BY id DESC";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function loadone_chitietsp($idsp){
        $sql = "SELECT * FROM chi_tiet_san_pham WHERE id_ctsp= ".$idsp;
        $dm = pdo_query($sql);
        return $dm;
    }

    function loadall_ctsp($idsp){
        $sql = "SELECT * FROM chi_tiet_san_pham WHERE id_sp= ".$idsp;
        $dm = pdo_query($sql);
        return $dm;
    }

    function loadall_sanpham_cungloai($id,$iddm){
        $sql = "select * from san_pham where iddm=".$iddm." AND id <>".$id;
        $list_sanpham = pdo_query($sql);
        return $list_sanpham;
    }

    function getall_sp($iddm, $current_page, $item_per_page, $minPrice, $maxPrice){
        $offset = ($current_page - 1) * $item_per_page;
        $sql = "SELECT * FROM san_pham WHERE 1";
        // danh mục
        if($iddm > 0){
            $sql.= " AND iddm=" . $iddm;
        }

        // giá
        if($minPrice !== null && $maxPrice !== null){
            $sql.= " AND price BETWEEN " . $minPrice . " AND " . $maxPrice;
        }

        $sql .= " ORDER BY id DESC LIMIT ".$item_per_page." OFFSET ".$offset."";
        // Thực hiện truy vấn và nhận kết quả
        $sp = pdo_query($sql);

        // Trả về bộ kết quả
        return $sp;
    }

    function kt_sl($id){
        $sql = "SELECT COUNT(*) as product_count FROM san_pham WHERE iddm = $id";
        return pdo_query_one($sql);
    }

    function get_total_sp_count($iddm, $minPrice, $maxPrice) {
        $sql = "SELECT COUNT(*) AS total FROM san_pham WHERE 1";
        if ($iddm > 0) {
            $sql .= " AND iddm=" . $iddm;
        }
        if ($minPrice !== null && $maxPrice !== null) {
            $sql .= " AND price BETWEEN " . $minPrice . " AND " . $maxPrice;
        }
        $result = pdo_query($sql);
        return $result[0]['total'];
    }

    // Giỏ hàng
    function increaseProductQuantity(&$cart, $id, $color, $size, $quantity) {
        foreach ($cart as &$item) {
            if ($item[0] == $id && $item[5] == $color && $item[6] == $size) {
                $item[4] += $quantity;
                return true; // Đã tăng số lượng thành công
            }
        }
        return false; // Chưa tìm thấy sản phẩm trong giỏ hàng
    }

    // Đơn hàng
    function order($id_user, $name, $email, $address, $tel, $payment){
        $sql = "INSERT INTO don_hang(id_user, id_trangthai, ten_nguoi_nhan, email, sdt_nguoi_nhan, dia_chi_nguoi_nhan, pt_thanh_toan) 
        VALUES ('$id_user', '1', '$name', '$email', '$tel', '$address', '$payment')";
        $id_order = pdo_execute($sql);
        return $id_order;
    }
        
    function order_detail($id_order, $id_sp, $color, $size, $soluong, $thanhtien, $code_cart){
        $sql = $sql = "INSERT INTO chi_tiet_don_hang(ma_dh, ma_sp, color, size, soluong, thanh_tien, code_cart) 
        VALUES ('$id_order', '$id_sp', '$color', '$size', '$soluong', '$thanhtien', '$code_cart')";
        pdo_execute($sql);
    }
?>