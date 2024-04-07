<?php
 function loadall_km(){
  $sql = "SELECT *
  FROM voucher";
  $list_km = pdo_query($sql);   
  return $list_km;
}



function insert_km($idvoucher, $mavoucher, $soluong_voucher, $ngaybatdau,$ngayketthuc){
    $sql = "INSERT INTO lien_he(idvoucher, mavoucher, soluong_voucher, ngaybatdau,ngayketthuc) VALUES ('$idvoucher', '$mavoucher', '$soluong_voucher', '$ngaybatdau','$ngayketthuc');";
    pdo_execute($sql);
}

function load_km_by_id($id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "duan1_nhom9";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `voucher` WHERE id_voucher = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        // Sử dụng fetch() để lấy kết quả trong một mảng kết hợp
        $khuyenmai = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $khuyenmai;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}

function load_voucher($id){
    $sql = "SELECT * ma_voucher
    FROM voucher
    WHERE id_voucher = $id";
    $khuyenmai1 = pdo_query($sql);
    return $khuyenmai1;
}




// function km($id_dh){
//     $sql = "SELECT * FROM voucher WHERE id_voucher=".$id_dh;
//     $khuyenmai1 = pdo_query_one($sql);
//     return $khuyenmai1;
// }



function update_khuyenmai($id_voucher, $ma_voucher, $soluong_voucher, $loai_khuyenmai, $so_tien_giam, $ngaybatdau, $ngayketthuc) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "duan1_nhom9";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE voucher 
                SET ma_voucher = :ma_voucher, 
                    soluong_voucher = :soluong_voucher,
                    loai_khuyenmai = :loai_khuyenmai,
                    so_tien_giam = :so_tien_giam,
                    ngaybatdau = :ngaybatdau,
                    ngayketthuc = :ngayketthuc
                WHERE id_voucher = :id_voucher";
                
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':ma_voucher', $ma_voucher);
        $stmt->bindParam(':soluong_voucher', $soluong_voucher);
        $stmt->bindParam(':loai_khuyenmai', $loai_khuyenmai);
        $stmt->bindParam(':so_tien_giam', $so_tien_giam);
        $stmt->bindParam(':ngaybatdau', $ngaybatdau);
        $stmt->bindParam(':ngayketthuc', $ngayketthuc);
        $stmt->bindParam(':id_voucher', $id_voucher);
        
        $stmt->execute();
    } catch(PDOException $e) {
    }
}
function delete_khuyenmai($id_voucher){
    $sql = "DELETE FROM `voucher` WHERE id_voucher = $id_voucher";
    return pdo_execute($sql);
}

function add_khuyenmai($ma_voucher, $soluong_voucher, $loai_khuyenmai, $so_tien_giam, $ngaybatdau, $ngayketthuc) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "duan1_nhom9";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO voucher (ma_voucher, soluong_voucher, loai_khuyenmai, so_tien_giam, ngaybatdau, ngayketthuc)
                VALUES (:ma_voucher, :soluong_voucher, :loai_khuyenmai, :so_tien_giam, :ngaybatdau, :ngayketthuc)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':ma_voucher', $ma_voucher);
        $stmt->bindParam(':soluong_voucher', $soluong_voucher);
        $stmt->bindParam(':loai_khuyenmai', $loai_khuyenmai);
        $stmt->bindParam(':so_tien_giam', $so_tien_giam);
        $stmt->bindParam(':ngaybatdau', $ngaybatdau);
        $stmt->bindParam(':ngayketthuc', $ngayketthuc);
        $stmt->execute();

        return true; // Trả về true nếu thêm thành công
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false; // Trả về false nếu có lỗi
    }
}


// ?>