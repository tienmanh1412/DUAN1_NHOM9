<?php
 function loadall_lienhe($idpro){
  $sql = "SELECT *, tai_khoan.user
  FROM lien_he
  INNER JOIN tai_khoan ON tai_khoan.id = lien_he.iduser
  WHERE id_pro = '.$idpro.'";
  $list_lh = pdo_query($sql);
  return $list_lh;
}



function insert_lienhe($iduser, $ndlienhe, $tenlh, $emaillh){
    $sql = "INSERT INTO lien_he(iduser, noidung, tenkh, emailkh) VALUES ('$iduser', '$ndlienhe', '$tenlh', '$emaillh');";
    pdo_execute($sql);
}

function loadall_xemlienhe(){
  $sql = "SELECT lien_he.id, noidung, emailkh,tenkh, tai_khoan.user, trang_thai_lh.tenTrangThai
  FROM lien_he 
  INNER JOIN tai_khoan ON tai_khoan.id = lien_he.iduser 
  INNER JOIN trang_thai_lh ON trang_thai_lh.id = lien_he.trangthai 
  WHERE 1";
  $listlienhe = pdo_query($sql);
  return $listlienhe;
}


function loadone_lienhe($id){
  $sql = "SELECT * FROM lien_he WHERE id=".$id;
  $lienhe = pdo_query_one($sql);
  return $lienhe;
}


function loadall_trangthai_lh(){
  $sql = "SELECT * FROM trang_thai_lh ORDER BY id DESC";
  $listlh = pdo_query($sql);
  return $listlh;
}


function update_lienhe($id, $trangthai){
      $sql = "UPDATE `lien_he` SET `trangthai` = '$trangthai' WHERE `lien_he`.`id` = $id";
  pdo_execute($sql);
}
?>