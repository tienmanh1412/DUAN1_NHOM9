<?php
    function load_binhluan($idsp){
        $sql = "SELECT noidung, ngaybinhluan, tai_khoan.user 
        FROM `binh_luan` 
        INNER JOIN tai_khoan ON tai_khoan.id = binh_luan.id_user 
        INNER JOIN san_pham ON san_pham.id = binh_luan.id_pro 
        WHERE san_pham.id = '$idsp'";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_binhluan($idpro){
        $sql = "SELECT *, tai_khoan.user
        FROM binh_luan
        INNER JOIN tai_khoan ON tai_khoan.id = binh_luan.id_user
        WHERE id_pro = '.$idpro.'";
        $list_bl = pdo_query($sql);
        return $list_bl;
    }

    function loadall_xembinhluan(){
        $sql = "SELECT binh_luan.id, noidung, ngaybinhluan, tai_khoan.user, san_pham.name
        FROM binh_luan 
        INNER JOIN tai_khoan ON tai_khoan.id = binh_luan.id_user 
        INNER JOIN san_pham ON san_pham.id = binh_luan.id_pro 
        WHERE 1";
        $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    }

    function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
        $sql = "INSERT INTO binh_luan(noidung, id_user, id_pro, ngaybinhluan) VALUES ('$noidung', '$iduser', '$idpro', '$ngaybinhluan');";
        pdo_execute($sql);
    }
    
    function delete_binhluan($id){
        $sql = " DELETE FROM binh_luan WHERE id=".$_GET['id'];
        pdo_execute($sql);
    }

    function get_count_bl($id_pro){
        $sql = "SELECT COUNT(*) AS total FROM binh_luan WHERE id_pro=" . $id_pro;
        $result = pdo_query($sql);
        return $result[0]['total'];
    }

?>