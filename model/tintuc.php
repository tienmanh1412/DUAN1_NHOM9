<?php
function loadall_tintuc(){
    $sql = "SELECT * FROM tin_tuc";
    $list_tintuc = pdo_query($sql);
    return $list_tintuc;
}
function load_top3_tintuc(){
    $sql= "select * from tin_tuc where 1 order by id desc limit 0.3";
    $list_tintuc = pdo_query($sql);
    return $list_tintuc;
}
function loadone_tintuc($id){
    $sql = "select * from tin_tuc where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function top3_sp(){
    $sql = "SELECT chi_tiet_don_hang.ma_sp, SUM(soluong) AS 'soluong', san_pham.name 
    FROM chi_tiet_don_hang 
    INNER JOIN san_pham ON san_pham.id = chi_tiet_don_hang.ma_sp 
    WHERE 1 
    GROUP BY chi_tiet_don_hang.ma_sp 
    ORDER BY soluong DESC LIMIT 0,3";
    $sp = pdo_query($sql);
    return $sp;
}
?>